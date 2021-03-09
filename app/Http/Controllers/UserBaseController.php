<?php

    namespace App\Http\Controllers;

    use App\Models\User;
    use Auth;
    use Illuminate\Http\Request;
    use App\Http\Controllers\BaseController as MainBaseController;
    use MetaTag;


    /**
     * Class UserBaseController
     * @package App\Http\Controllers\Blog\Admin
     */
    abstract class UserBaseController extends MainBaseController
    {

        public function __construct()
        {

            MetaTag::setTags([
                'title' => 'Магазин',
                'description' => 'Описание',
                'keywords' => 'keywords',
            ]);

        }


        /**
         * @param bool $get
         * @param string $id
         * @return int|null|string
         * @throws \Exception
         */
        public function getRequestID($get = true, $id = 'id'){
            if ($get){
                $data = $_GET;
            } else {
                $data = $_POST;
            }
            $id = !empty($data[$id]) ? (int)$data[$id] : null;
            //Если $id не получили то выбросим сразу ошибку
            if (!$id){
                throw new \Exception('Проверить Откуда id, если getRequestID(false) == $_POST', 404);
            }
            return $id;
        }



    }
