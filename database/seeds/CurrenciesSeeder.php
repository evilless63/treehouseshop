<?php

    use Illuminate\Database\Seeder;

    class CurrenciesSeeder extends Seeder
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
                    'title' => 'рубль',
                    'code' => 'RUB',
                    'symbol_left' => '',
                    'symbol_right' => 'руб.',
                    'value' => '1',
                    'base' => '1'
                ],
                [
                    'id' => '2',
                    'title' => 'доллар',
                    'code' => 'USD',
                    'symbol_left' => '$',
                    'symbol_right' => '',
                    'value' => '0.013',
                    'base' => '0'
                ],
                [
                    'id' => '3',
                    'title' => 'евро',
                    'code' => 'EUR',
                    'symbol_left' => '€',
                    'symbol_right' => '',
                    'value' => '0.011',
                    'base' => '0'
                ],

            ];

            DB::table('currencies')->insert($data);
        }
    }
