@extends('blog.user.layouts.main')

@section('content')
<div class="catalog">
        <div class="catalog__holder">
          <div class="page__row">
            <div class="page__sidebar page__sidebar_left js-fixed-block media-query-show_wide">
              <div class="page__title">Мужчинам</div>
              <div class="categories catalog__categories">
                <div class="categories__item ">
                  <a href="/catalog/new/mencollection" class="categories__link ">Новинки</a>
                </div>
                <div class="categories__item ">
                  <a href="/catalog/skidki/mencollection" class="categories__link categories__link--red">Sale до
                    -50%</a>
                </div>
              </div>
            </div>
            <div class="page__middle page__middle--catalog">
              <div class="catalog-list ">
                <div class="catalog-list__holder">


                  <div class="filter js-fixed-filter-block">
                    <div class="filter__top">
                      <div class="filter__head">
                        Выберите размер <span class="count" style="display: none;"></span>
                        <i class="arrow"></i>
                      </div>
                      <div class="filter__clear" data-ga-action="Clean filter click">Сбросить</div>
                    </div>
                    <div class="filter__list">
                      <div class="filter__item">

                        <div class="filter__controls">

                          <div class="filter__field">
                            <div class="checkbox filter__checkbox" data-available='[6,1]'>
                              <input autocomplete="off" type="checkbox" data-id="6,1" data-filter="size=6"
                                data-label="XL" data-hash="5a0e6f2208f8d272ce151a71fc7e6b20" name="size-6" id="size-6"
                                class="checkbox__input" />
                              <label for="size-6" class="checkbox__label"><span
                                  class="checkbox__label-text">XL</span></label>
                            </div>
                          </div>
                          <div class="filter__field">
                            <div class="checkbox filter__checkbox" data-available='[53,1]'>
                              <input autocomplete="off" type="checkbox" data-id="53,1" data-filter="size=53"
                                data-label="XXL" data-hash="78b46c5efbaa96d32089d73836bc7007" name="size-53"
                                id="size-53" class="checkbox__input" />
                              <label for="size-53" class="checkbox__label"><span
                                  class="checkbox__label-text">XXL</span></label>
                            </div>
                          </div>
                          <div class="filter__field">
                            <span class="filter-apply" data-ga-action="Apply filter click">
                              Применить
                            </span>
                          </div>
                          <div class="filter__field filter__field__instock">
                            <div class="checkbox filter__checkbox">
                              <input autocomplete="off" type="checkbox" data-id="instock" data-filter="instock=yes"
                                data-label="В наличии" data-hash="ffc89a82f900f437b5b5323b9091618d" name="size-instock"
                                id="size-instock" class="checkbox__input" />
                              <label for="size-instock" class="checkbox__label"><span class="checkbox__label-text">В
                                  наличии</span></label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>




                  <div class="catalog-list catalog-list_wrap catalog__list">
                    <div id="catalog-models" data-pjax-container="" data-pjax-push-state data-pjax-timeout="10000">
                      <div id="catalog-list" class="catalog-list__holder list-view">
                        <div class="catalog-list__row">
                          <div class="catalog-list__item" data-sizes='[]' data-key="104410">
                            <input type="hidden" data-name="name" id="model_info_name_104410"
                              value="Толстовка мужская (Серый меланж)">
                            <input type="hidden" data-name="price" id="model_info_price_104410" value="5980.00">
                            <input type="hidden" data-name="category" id="model_info_category_104410"
                              value="Мужская коллекция/Футболки и толстовки">
                            <input type="hidden" data-name="list" id="model_info_list_104410"
                              value="Мужская коллекция/Футболки и толстовки">
                            <input type="hidden" data-name="color" id="model_info_color_104410" value="Серый меланж">
                            <input type="hidden" data-name="article" id="model_info_article_104410" value="102669">
                            <input type="hidden" data-name="material" id="model_info_material_104410"
                              value="75% Полиэстер, 25% Хлопок">

                            <a href="/catalog/futbolki-i-tolstovki/tolstovka-muzskaa-seryj-melanz"
                              class="catalog-list__link" data-pjax="0">
                              <div class="catalog-list__preview">
                                <span class="catalog-list__fav catalog-list__fav__in js-rem-fav"
                                  style="display:none"></span>
                                <span class="catalog-list__fav js-add-fav"></span>
                                <img
                                  src="/images/500x627_90_out/uploads/images/product/20200303/tolstovka-muzskaa-seryj-melanz/5ee721f52c308-12storeez-mart-2020-35931.jpg"
                                  alt="Толстовка мужская" class="catalog-list__image" />
                              </div>
                            </a>
                            <div class="catalog-list__box">
                              <a id="104410" href="/catalog/futbolki-i-tolstovki/tolstovka-muzskaa-seryj-melanz"
                                class="catalog-list__link" data-pjax="0">

                                <div class="catalog-list__box">

                                  <div class="catalog-list__info catalog-list__info_head">





                                  </div>

                                </div>

                                <!-- Заголовок товара -->
                                <div class="catalog-list__title">
                                  <div class="catalog-list__title-inn">
                                    <span>Толстовка мужская</span>
                                  </div>
                                </div>
                                <!-- Заголовок товара END -->

                                <!-- Цена и скидка товара -->
                                <div class="catalog-list__price">
                                  <span class="">5 980 ₽</span>
                                </div>
                                <!-- Цена и скидка товара END -->
                              </a>

                              <!-- Цвета -->
                              <ul class="catalog-list__colors catalog-list-colors">
                                <li class="catalog-list-colors__color-wrap">
                                  <a href="/catalog/futbolki-i-tolstovki/tolstovka-muzskaa-bezevyj-melanz"
                                    class="catalog-list-colors__color " title="Бежевый меланж"
                                    style="background: #bbb5a3">
                                  </a>
                                </li>
                                <li class="catalog-list-colors__color-wrap">
                                  <a href="/catalog/futbolki-i-tolstovki/tolstovka-muzskaa-seryj-melanz"
                                    class="catalog-list-colors__color " title="Серый меланж"
                                    style="background: #918888">
                                  </a>
                                </li>
                              </ul>
                              <!-- Цвета END -->

                              <!-- Размеры в наличии  -->
                              <ul class="catalog-list-sizes" data-one-size="">
                                <li class="catalog-list-sizes__item">XL</li>
                                <li class="catalog-list-sizes__item">XXL</li>
                              </ul>
                              <!-- Размеры в наличии END  -->
                            </div>
                          </div>
                          <div class="pagination-wrap"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- SITEDEV-2634 -->
                <div class="card__item card__item_lastview card__item--slider">

                  <div class="card__item_head card__item_head--catalog">
                    <h2 class="card__title">Вы недавно смотрели</h2>
                    <div class="card__item_controls card-item-controls last-view-controls">
                      <div class="card-item-controls__prev"></div>
                      <div class="card-item-controls__next"></div>
                    </div>
                  </div>
                  <div class="catalog-list card__might-like js-catalog-list-slider last-view-block"
                    data-controls="last-view-controls" data-location="catalog">
                    <div class="catalog-list__holder">
                      <div class="catalog-list__row">
                        <div class="catalog-list__item last-view-item" data-id="105561">
                          <a href="/catalog/trikotaz/bruki-iz-trikotaza-s-manzetami-104825"
                            class="catalog-list__link last-view-link" data-type="last_view" data-id="105561"
                            data-category="product_card" data-action="recommendations" data-label="click_last_view">
                            <div class="catalog-list__preview catalog-list__preview--round">
                              <span class="catalog-list__fav catalog-list__fav__in js-rem-fav"
                                style="display:none"></span>
                              <span class="catalog-list__fav js-add-fav"></span>
                              <img
                                src="/images/99x125_90_out/uploads/images/CATALOG/jersey/104825/5fed8cda580b5-12storeez-dekabr-16-12-200561.jpg"
                                alt="Брюки из трикотажа с манжетами"
                                data-observer-src="/images/398x500_90_out/uploads/images/CATALOG/jersey/104825/5fed8cda580b5-12storeez-dekabr-16-12-200561.jpg"
                                class="catalog-list__image" />
                            </div>

                            <div class="catalog-list__box">

                              <div class="catalog-list__info catalog-list__info_head">




                                <div class="catalog-list__tag catalog-list__new">New</div>

                              </div>

                              <!-- Заголовок товара -->
                              <div class="catalog-list__title">
                                <div class="catalog-list__title-inn">
                                  <span>Брюки из трикотажа с манжетами</span>
                                </div>
                              </div>
                              <!-- Заголовок товара END -->

                              <!-- Цена и скидка товара -->
                              <div class="catalog-list__price">
                                5 980 ₽ </div>
                              <!-- Цена и скидка товара END -->
                            </div>
                          </a>

                          <!-- Цвета -->
                          <ul class="catalog-list__colors catalog-list-colors">
                            <li class="catalog-list-colors__color " title="Молочный" style="background: #fff3e7">
                            </li>
                          </ul>
                          <!-- Цвета END -->

                        </div>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="card__item card__item_wishlist">

                  <div class="card__item_head">
                    <h2 class="card__title">Ваш вишлист</h2>
                    <div class="card__item_controls card-item-controls wishlist-controls">
                      <div class="card-item-controls__prev"></div>
                      <div class="card-item-controls__next"></div>
                    </div>
                  </div>
                  <div class="catalog-list card__might-like js-catalog-list-slider wishlist-block"
                    data-controls="wishlist-controls" data-location="catalog">
                    <div class="catalog-list__holder">
                      <div class="catalog-list__row">
                        <div class="catalog-list__item wishlist-item" data-id="105294">
                          <a href="/catalog/verhnaa-odezda/suba-iz-eko-meha-korotkaa-zeltyj"
                            class="catalog-list__link wishlist-link" data-id="105294" data-type="wishlist-item">
                            <div class="catalog-list__preview catalog-list__preview--round">
                              <span class="catalog-list__fav catalog-list__fav__in js-rem-fav"></span>
                              <span class="catalog-list__fav js-add-fav" style="display:none"></span>
                              <img
                                src="/images/99x125_90_out/uploads/images/CATALOG/outerwear/104448/5f6b690b783c3-img-0629.jpg"
                                alt="Шуба из эко-меха короткая (Желтый)"
                                data-observer-src="/images/398x500_90_out/uploads/images/CATALOG/outerwear/104448/5f6b690b783c3-img-0629.jpg"
                                class="catalog-list__image" />
                            </div>

                            <div class="catalog-list__box">

                              <div class="catalog-list__info catalog-list__info_head">





                              </div>

                              <!-- Заголовок товара -->
                              <div class="catalog-list__title">
                                <div class="catalog-list__title-inn">
                                  <span>Шуба из эко-меха короткая (Желтый)</span>
                                </div>
                              </div>
                              <!-- Заголовок товара END -->

                              <!-- Цена и скидка товара -->
                              <div class="catalog-list__price">
                                9 980 ₽ <s class="catalog-list__price-old">19 980 ₽</s>
                              </div>
                              <!-- Цена и скидка товара END -->

                            </div>
                          </a>

                          <!-- Цвета -->
                          <ul class="catalog-list__colors catalog-list-colors">
                            <li class="catalog-list-colors__color " title="Желтый" style="background: #ffd552">
                            </li>
                          </ul>
                          <!-- Цвета END -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- SITEDEV-2634 end -->

              </div>
            </div>
          </div>
        </div>
      </div>
  </div>

  <div style="display: none">
    <div id="load_items" class="popup popup_small">
      <div class="popup__holder">
        <p class="popup__head"></p>
        <div class="page-preloader preloader_active preloader_active_catalog">
          <div class="page-preloader__loading"></div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
<script src="assets/js/jquery.js"></script>
  <script src="assets/js/jquery.infinitescroll.js"></script>
  <script src="assets/js/yii.js"></script>
  <script src="assets/js/jquery.pjax.js"></script>
  <script src="assets/js/chunks/vendor.js"></script>
  <script src="assets/js/chunks/layout-base.js"></script>
  <script src="assets/js/fast-catalog-item/scripts.js"></script>
  <script src="assets/js/jquery-ui.js"></script>
  <script src="assets/js/autocomplete.js"></script>
  <script src="assets/js/home/scripts.js"></script>
@endsection

@section('head')
<title>Футболки и толстовки в интернет-магазине — 12Storeez</title>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport"
    content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0, minimal-ui">
  <meta name="description"
    content="Большой выбор футболок и толстовок от 12 STOREEZ. Универсальные модели на каждый день">
  <link rel="stylesheet" href="assets/css/fast-catalog-item/styles.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/jquery-ui.css">
  <link rel="stylesheet" href="assets/css/autocomplete.css">


  <style>
    .search-result .search__input {
      width: 49%;
    }
  </style>
  <style>
    span.admin-only {
      color: red;
    }
  </style>
  <style>
    .no-surname-show {
      display: none;
    }

    .no-surname .no-surname-show {
      display: block;
    }

    .no-surname .no-surname-hide {
      display: none;
    }
  </style>
@endsection