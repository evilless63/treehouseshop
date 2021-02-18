<?php

    use Illuminate\Database\Seeder;

    class AttributeGroupsSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            $data = [
                // [
                //     'id' => '1',
                //     'title' => 'Размер',
                // ],
                [
                    'id' => '2',
                    'title' => 'цвет',
                ],
            ];
            DB::table('attribute_groups')->insert($data);
        }
    }
