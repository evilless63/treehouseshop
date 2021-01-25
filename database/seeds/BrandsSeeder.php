<?php

    use Illuminate\Database\Seeder;

    class BrandsSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            $data = [
                [
                    'id' => '1',
                    'title' => 'Дом на дереве',
                    'alias' => 'dom-na-dereve',
                    'img' => 'abt-1.jpg',
                    'description' => 'In sit amet sapien eros Integer dolore magna aliqua'
                ]
            ];

            DB::table('brands')->insert($data);
        }
    }
