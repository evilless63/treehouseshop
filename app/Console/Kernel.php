<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\InstagramPost;
use Exception;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
         try{
            $dataArr = $this->getInstagramImages();
            if(count($dataArr) > 0) {
               \DB::table('instagram_posts')->delete();
               foreach($dataArr as $data) {
                   $newInstaOrder = new InstagramPost();
                   $newInstaOrder->post_link = $data['link'];
                   $newInstaOrder->image_link = $data['img'];
                   $newInstaOrder->save();
               }
            }
         } catch(Exception $e) {

         }  
        })->dailyAt('11:11');
    }

    public function getInstagramImages() {
        $client_id='427186995269071';
        $token = 'IGQVJWWTRzV1h1ZAWthSVFqUE0xV0R6dVVVVjFOdkJROHhYaWgtbjdneHRQMHhQT09pV2QxNkFZAaUNYaU5uUl9tajRvNE1KNWNYVmljaUMwUE1kN1ZAiMWx6UHdkZAFhaVVktS2FmQXFB';
        $user_id = '17841402085318706';
        $limit = 9;
        $output = array();
        $img = array();
        
        $instagram_cnct = curl_init(); // инициализация cURL подключения
        curl_setopt( $instagram_cnct, CURLOPT_URL, "https://graph.instagram.com/" . $user_id . "?fields=id,username,media&access_token=" . $token ); // подключаемся
        curl_setopt( $instagram_cnct, CURLOPT_RETURNTRANSFER, 1 ); // просим вернуть результат
        
        // ограничиваем по времени
        curl_setopt( $instagram_cnct, CURLOPT_TIMEOUT, 9 ); 
        curl_setopt( $instagram_cnct, CURLOPT_CONNECTTIMEOUT, 9 );
        
        $media = json_decode( curl_exec( $instagram_cnct ) ); // получаем и декодируем данные из JSON
        //dd($media);
        $data = $media->media->data;
        
        foreach(array_slice($data, 0, $limit) as $key => $value) {
            $data_ids[] = $data[$key]->id; // создаем массив с id медиафайлов
        };
        
        $multi = curl_multi_init(); // инициализируем мультипоточный запрос cURL

        foreach ($data_ids as $data_id) {
            // Записываем данные по каждому отдельномуэлементу в массив
            $item = curl_init(); 
            curl_setopt($item, CURLOPT_URL, "https://graph.instagram.com/" . $data_id . "?fields=media_url,caption,permalink&access_token=" . $token ); // получаем данные файла
            curl_setopt($item, CURLOPT_HEADER, false);
            curl_setopt($item, CURLOPT_RETURNTRANSFER, true);
            curl_setopt( $instagram_cnct, CURLOPT_TIMEOUT, 9 ); 
            curl_setopt( $instagram_cnct, CURLOPT_CONNECTTIMEOUT, 9 );
         
            curl_multi_add_handle($multi, $item);

            $img[$data_id] =  $item; 
        }
        
        // читаем заклинания
        $active = null;
        do {
            $mrc = json_decode( curl_multi_exec($multi, $active));
        } while ($mrc == CURLM_CALL_MULTI_PERFORM);
        
        while ($active && $mrc == CURLM_OK) {
            if (curl_multi_select($multi) == -1) {
                continue;
            }
        
            do {
                $mrc = json_decode( curl_multi_exec($multi, $active));
            } while ($mrc == CURLM_CALL_MULTI_PERFORM);
        }
        
        // Выводим данные элементов 
        foreach ($img as $i=>$data) {
            $data = json_decode(curl_multi_getcontent($data));

            $dataArray = array(
            'link' => $data->permalink,
            'img' => $data->media_url,
            'description' => $data->caption
            );
        
            // записываем данные в шаблон MODX.
            // Если используете другой движок, замените на соответствующий код, например php
            // $output .= '<a href="'.$data->permalink.'"><img src="'.$data->media_url.'"></a>';

            curl_multi_remove_handle($multi, $img[$i]); // удаляем исполненные дескрипторы
        }
        
        curl_multi_close($multi); // закрываем мультисоединение
        curl_close( $instagram_cnct ); // закрываем соединение


        return $dataArray;
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
