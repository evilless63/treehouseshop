<?php

    use Illuminate\Database\Seeder;

    class ProductsSeeder extends Seeder
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
                    'category_id' => '1',
                    'brand_id' => '1',
                    'title' => 'Платье "Мальвина" в цвете Лазурный берег с кружевом',
                    'alias' => 'platye-malvina',
                    'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.</p>',
                    'price' => 300,
                    'old_price' => 250,
                    'status' => '1',
                    'keywords' => 'Платье "Мальвина" в цвете Лазурный берег с кружевом',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.',
                    'img' => 'picture.jpg',
                    'hit' => '1',
                ],
                [
                    'id' => '2',
                    'category_id' => '1',
                    'brand_id' => '1',
                    'title' => 'Платье "Венеция"(с воланом понизу)',
                    'alias' => 'platye-venecia',
                    'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.</p>',
                    'price' => 200,
                    'old_price' => 200,
                    'status' => '1',
                    'keywords' => 'Платье "Венеция"(с воланом понизу)',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.',
                    'img' => 'picture.jpg',
                    'hit' => '1',
                ],
                [
                    'id' => '3',
                    'category_id' => '1',
                    'brand_id' => '1',
                    'title' => 'Платье "Леди"',
                    'alias' => 'platye-ledi',
                    'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.</p>',
                    'price' => 400,
                    'old_price' => 100,
                    'status' => '1',
                    'keywords' => 'Платье "Леди"',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.',
                    'img' => 'picture.jpg',
                    'hit' => '1',
                ],
                [
                    'id' => '4',
                    'category_id' => '1',
                    'brand_id' => '1',
                    'title' => 'Платье "Пандочки"',
                    'alias' => 'platye-pandochki',
                    'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.</p>',
                    'price' => 350,
                    'old_price' => 200,
                    'status' => '1',
                    'keywords' => 'Платье "Пандочки"',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.',
                    'img' => 'picture.jpg',
                    'hit' => '1',
                ],


                [
                    'id' => '5',
                    'category_id' => '1',
                    'brand_id' => '1',
                    'title' => 'Платье "Незабудка"',
                    'alias' => 'platye-nezabudka',
                    'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.</p>',
                    'price' => 320,
                    'old_price' => 220,
                    'status' => '1',
                    'keywords' => 'Платье "Незабудка"',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.',
                    'img' => 'picture.jpg',
                    'hit' => '1',
                ],
                [
                    'id' => '6',
                    'category_id' => '1',
                    'brand_id' => '1',
                    'title' => 'Платье "Рождественская звезда"(красное,белое кружево)',
                    'alias' => 'platye-rozhdestvenskaya-zvezda',
                    'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.</p>',
                    'price' => 370,
                    'old_price' => 250,
                    'status' => '1',
                    'keywords' => 'Платье "Рождественская звезда"(красное,белое кружево)',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.',
                    'img' => 'picture.jpg',
                    'hit' => '1',
                ],


                [
                    'id' => '7',
                    'category_id' => '4',
                    'brand_id' => '1',
                    'title' => 'Чепчик с рюшей "Сафари" (бежевый)',
                    'alias' => 'chepchik-safari',
                    'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.</p>',
                    'price' => 320,
                    'old_price' => 220,
                    'status' => '1',
                    'keywords' => 'Чепчик с рюшей "Сафари" (бежевый)',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.',
                    'img' => 'picture.jpg',
                    'hit' => '1',
                ],
                [
                    'id' => '8',
                    'category_id' => '4',
                    'brand_id' => '1',
                    'title' => 'Чепчик с защитой "Вязание"',
                    'alias' => 'chepchik-vyazanie',
                    'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.</p>',
                    'price' => 370,
                    'old_price' => 250,
                    'status' => '1',
                    'keywords' => 'Чепчик с защитой "Вязание"',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.',
                    'img' => 'picture.jpg',
                    'hit' => '1',
                ],
                [
                    'id' => '9',
                    'category_id' => '5',
                    'brand_id' => '1',
                    'title' => 'Панама "Синяя"(полулен)',
                    'alias' => 'panama-sinyaa',
                    'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.</p>',
                    'price' => 320,
                    'old_price' => 220,
                    'status' => '1',
                    'keywords' => 'Панама "Синяя"(полулен)',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.',
                    'img' => 'picture.jpg',
                    'hit' => '1',
                ],
                [
                    'id' => '10',
                    'category_id' => '5',
                    'brand_id' => '1',
                    'title' => 'Панама "Круиз"',
                    'alias' => 'panama-kruiz',
                    'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.</p>',
                    'price' => 370,
                    'old_price' => 250,
                    'status' => '1',
                    'keywords' => 'Панама "Круиз"',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.',
                    'img' => 'picture.jpg',
                    'hit' => '1',
                ],


                [
                    'id' => '11',
                    'category_id' => '5',
                    'brand_id' => '1',
                    'title' => 'Панама "Круиз новая"',
                    'alias' => 'panama-kruiz-novaya',
                    'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.</p>',
                    'price' => 370,
                    'old_price' => 250,
                    'status' => '1',
                    'keywords' => 'Панама "Круиз новая"',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.',
                    'img' => 'picture.jpg',
                    'hit' => '0',
                ],
                [
                    'id' => '12',
                    'category_id' => '6',
                    'brand_id' => '1',
                    'title' => 'Косынка "Пудра"',
                    'alias' => 'kosynka-pudra',
                    'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.</p>',
                    'price' => 370,
                    'old_price' => 250,
                    'status' => '1',
                    'keywords' => 'Косынка "Пудра"',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.',
                    'img' => 'picture.jpg',
                    'hit' => '0',
                ],

                [
                    'id' => '13',
                    'category_id' => '6',
                    'brand_id' => '1',
                    'title' => 'Косынка "Акварель"',
                    'alias' => 'kosynka-akvarel',
                    'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.</p>',
                    'price' => 370,
                    'old_price' => 250,
                    'status' => '1',
                    'keywords' => 'Косынка "Акварель"',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.',
                    'img' => 'picture.jpg',
                    'hit' => '0',
                ],

                [
                    'id' => '14',
                    'category_id' => '7',
                    'brand_id' => '1',
                    'title' => 'Комплект "Белоснежка" (трусики и платье) ',
                    'alias' => 'komplekt-belosnezhka',
                    'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.</p>',
                    'price' => 370,
                    'old_price' => 250,
                    'status' => '1',
                    'keywords' => 'Комплект "Белоснежка" (трусики и платье) ',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.',
                    'img' => 'picture.jpg',
                    'hit' => '0',
                ],

                [
                    'id' => '15',
                    'category_id' => '7',
                    'brand_id' => '1',
                    'title' => 'Комплект "Татьяна"',
                    'alias' => 'komplekt-tatyana',
                    'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.</p>',
                    'price' => 370,
                    'old_price' => 250,
                    'status' => '1',
                    'keywords' => 'Комплект "Татьяна"',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.',
                    'img' => 'picture.jpg',
                    'hit' => '0',
                ],

                [
                    'id' => '16',
                    'category_id' => '8',
                    'brand_id' => '1',
                    'title' => 'Комплект "Скаут"',
                    'alias' => 'komplekt-skaut',
                    'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.</p>',
                    'price' => 370,
                    'old_price' => 250,
                    'status' => '1',
                    'keywords' => 'Комплект "Скаут"',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.',
                    'img' => 'picture.jpg',
                    'hit' => '0',
                ],

                [
                    'id' => '17',
                    'category_id' => '8',
                    'brand_id' => '1',
                    'title' => 'Комплект "Победа"',
                    'alias' => 'komplekt-pobeda',
                    'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.</p>',
                    'price' => 370,
                    'old_price' => 250,
                    'status' => '1',
                    'keywords' => 'Комплект "Победа"',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla.',
                    'img' => 'picture.jpg',
                    'hit' => '0',
                ],

            ];

            DB::table('products')->insert($data);
        }
    }
