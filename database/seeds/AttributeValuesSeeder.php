<?php

    use Illuminate\Database\Seeder;

    class AttributeValuesSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            $data = [
                ['id' => '1', 'value' => '56 - 62', 'attr_group_id' => '1'],
                ['id' => '2', 'value' => '62 - 68', 'attr_group_id' => '1'],
                ['id' => '3', 'value' => '68 - 74', 'attr_group_id' => '1'],
                ['id' => '4', 'value' => '74 - 80', 'attr_group_id' => '1'],
                ['id' => '5', 'value' => 'Красный', 'attr_group_id' => '2'],
                ['id' => '6', 'value' => 'Зеленый', 'attr_group_id' => '2'],
                ['id' => '7', 'value' => 'Белый', 'attr_group_id' => '2'],
            ];
            DB::table('attribute_values')->insert($data);
        }
    }
