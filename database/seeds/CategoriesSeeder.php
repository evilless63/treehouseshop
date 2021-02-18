<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['id' => '1', 'title' => 'Платья','alias' => 'platya', 'parent_id' => '0', 'keywords' => 'Платья', 'description' => 'Платья'],
            ['id' => '2', 'title' => 'Головные уборы','alias' => 'golovnye-ubory', 'parent_id' => '0', 'keywords' => 'головные уборы', 'description' => 'головные уборы'],
            ['id' => '3', 'title' => 'Комплекты','alias' => 'komplekty', 'parent_id' => '0', 'keywords' => 'Комплекты', 'description' => 'Комплекты'],

            ['id' => '4', 'title' => 'чепчики','alias' => 'chepchiki', 'parent_id' => '2', 'keywords' => 'чепчики', 'description' => 'чепчики'],
            ['id' => '5', 'title' => 'панамки','alias' => 'panamki', 'parent_id' => '2', 'keywords' => 'панамки', 'description' => 'панамки'],
            ['id' => '6', 'title' => 'косынки','alias' => 'kosynki', 'parent_id' => '2', 'keywords' => 'косынки', 'description' => 'косынки'],
           
            ['id' => '7', 'title' => 'Для девочек','alias' => 'girls', 'parent_id' => '3', 'keywords' => 'Для девочек', 'description' => 'Для девочек'],
            ['id' => '8', 'title' => 'Для мальчиков','alias' => 'boys', 'parent_id' => '3', 'keywords' => 'Для мальчиков', 'description' => 'Для мальчиков'],

        ];

        DB::table('categories')->insert($data);
    }
}
