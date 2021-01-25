@extends('blog.user.layouts.main')

@section('content')
<div class="catalog">
        <div class="catalog__holder">
          <div class="page__row">


            <div class="page__sidebar page__sidebar_left media-query-show_wide">
              <h1 class="page__title">Wishlist</h1>
              <div class="categories">
                <div class="categories__item"><a href="/user/cabinet" class="categories__link">Профиль</a></div>
                <div class="categories__item"><a href="/user/orders" class="categories__link">Мои заказы</a></div>
                <div class="categories__item"><a href="/user/subscribe" class="categories__link">Мои подписки</a></div>
                <div class="categories__item"><a href="/user/wishlist" class="categories__link">Wishlist</a></div>
                <div class="categories__item"><a href="/user/logout" class="categories__link">Выход</a></div>
              </div>
            </div>

            <div class="page__middle">



              <script type="text/javascript">
                (function () {
                  window.page_products = window.page_products || [];
                  window.page_products.push({
                    'id': '104972',
                    'name': 'Водолазка тонкая (Чёрный)',
                    'price': Number('8980.00' || 0).toFixed(2),
                    'brand': '12Storeez',
                    'category': 'Женская коллекция/Трикотаж',
                    'variant': 'Чёрный',
                    'dimension11': '104320',
                    'dimension13': '100% Супертонкая мериносовая шерсть',
                    'position': 1
                  });
                  window.page_products.push({
                    'id': '104169',
                    'name': 'Водолазка тонкой вязки (Светло-бежевый)',
                    'price': Number('5790.00' || 0).toFixed(2),
                    'brand': '12Storeez',
                    'category': 'Женская коллекция/Трикотаж',
                    'variant': 'Светло-бежевый',
                    'dimension11': '102095',
                    'dimension13': '100% Мериносовая шерсть',
                    'position': 2
                  });
                  window.page_products.push({
                    'id': '104135',
                    'name': 'Джемпер из кашемира и шерсти (Розовый)',
                    'price': Number('19980.00' || 0).toFixed(2),
                    'brand': '12Storeez',
                    'category': 'Женская коллекция/Трикотаж',
                    'variant': 'Розовый',
                    'dimension11': '103273',
                    'dimension13': 'Superior mongolian cashmere 50%; Шерсть 50%',
                    'position': 3
                  });
                  window.page_products.push({
                    'id': '104130',
                    'name': 'Джемпер из кашемира и шерсти (Сливочный)',
                    'price': Number('19790.00' || 0).toFixed(2),
                    'brand': '12Storeez',
                    'category': 'Женская коллекция/Трикотаж',
                    'variant': 'Сливочный',
                    'dimension11': '103274',
                    'dimension13': 'Superior mongolian cashmere 50%; Шерсть 50%',
                    'position': 4
                  });
                })();
              </script>


              <!--Костыль SITEDEV-2034 (перенести на фронт после выкатки пересборки)-->
              <style>
                .card-sizes__from-shop,
                .card-sizes__label-wrap:hover .card-sizes__from-shop .card-sizes__title,
                .card-sizes__item:hover .is_stocks .card-sizes__from-shop {
                  background-color: transparent;
                  border-color: #dbd7d2;
                  color: #dbd7d2 !important;
                }
              </style>
              <!--Костыль SITEDEV-2034 end-->

              <div class="catalog-list catalog-list_wrap catalog__list">
                <div class="catalog-list__holder">
                  <div class="catalog-list__row">

                    <script type="text/javascript">
                      (function () {
                        window.products_data = window.products_data || {};
                        window.products_data['104972'] = {
                          'id': '104972',
                          'is_preorder': Boolean(0)
                        };
                      })();
                    </script>

                    <div style="display: none">
                      <div data-role="add_item" class="popup popup_small" data-model-id="1524195_104972">
                        <div class="popup__holder">
                          <p class="popup__head">Спасибо!</p>

                          <center>
                            <p>Товар успешно добавлен в корзину.</p>
                          </center>
                          <a href="/cart" class="button button_powdery">Оформить заказ</a>
                          <div class="login__recover">
                            <a href="#" class="login__recover-link featherlight-close">Продолжить покупки</a>
                          </div>
                        </div>
                      </div>

                      <div data-role="select_size" class="popup popup_small" data-model-id="1524195_104972"
                        id="sizes-1524195_104972">
                        <div class="popup__holder card-sizes-popup">
                          <p class="popup__head">Выберите размер</p>
                          <div class="card-sizes card__sizes">
                            <div class="card-sizes__list">
                              <div class="card-sizes__item">
                                <input data-model-id="1524195_104972" type="radio" name="sizes-popup" id="sp122183"
                                  data-sid="s122183" value="122183" class="card-sizes__input"
                                  data-url="/cart/add-item/122183/1" disabled="disabled">
                                <label for="sp122183" href="/catalog/item-stocks/122183"
                                  class="card-sizes__label-wrap js-popup-subscribe">

                                  <span class="card-sizes__label card-sizes__from-shop">
                                    <span class="card-sizes__title">
                                      XS </span>
                                  </span>
                                  <div class="card-sizes__comment">подписка</div>
                                </label>

                              </div>
                              <div class="card-sizes__item">
                                <input data-model-id="1524195_104972" type="radio" name="sizes-popup" id="sp122182"
                                  data-sid="s122182" value="122182" class="card-sizes__input"
                                  data-url="/cart/add-item/122182/1" disabled="disabled">
                                <label for="sp122182" href="/catalog/item-stocks/122182"
                                  class="card-sizes__label-wrap js-popup-subscribe">

                                  <span class="card-sizes__label card-sizes__from-shop">
                                    <span class="card-sizes__title">
                                      S </span>
                                  </span>
                                  <div class="card-sizes__comment">подписка</div>
                                </label>

                              </div>
                              <div class="card-sizes__item">
                                <input data-model-id="1524195_104972" type="radio" name="sizes-popup" id="sp122181"
                                  data-sid="s122181" value="122181" class="card-sizes__input"
                                  data-url="/cart/add-item/122181/1" disabled="disabled">
                                <label for="sp122181" href="/catalog/item-stocks/122181"
                                  class="card-sizes__label-wrap js-popup-subscribe">

                                  <span class="card-sizes__label card-sizes__from-shop">
                                    <span class="card-sizes__title">
                                      M </span>
                                  </span>
                                  <div class="card-sizes__comment">подписка</div>
                                </label>

                              </div>
                              <div class="card-sizes__item">
                                <input data-model-id="1524195_104972" type="radio" name="sizes-popup" id="sp122180"
                                  data-sid="s122180" value="122180" class="card-sizes__input"
                                  data-url="/cart/add-item/122180/1">
                                <label for="sp122180" href="/catalog/item-subscribe/122180"
                                  class="card-sizes__label-wrap js-label_in_popup">

                                  <span class="card-sizes__label ">
                                    <span class="card-sizes__title">
                                      L </span>
                                  </span>
                                  <div class="card-sizes__comment">последний</div>
                                </label>

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div data-role="select_wishlist_size" class="popup popup_small" data-model-id="1524195_104972">
                        <div class="popup__holder">
                          <h4 class="featherlight-title">Выберите размер</h4>
                          <div class="card-sizes card__sizes">
                            <div class="card-sizes__list">
                              <div class="card-sizes__item">
                                <input type="radio" data-model="104972" data-model-id="1524195_104972"
                                  name="wishlist-sizes-popup" id="wsp122183" value="122183" class="card-sizes__input"
                                  checked="checked">

                                <label href="/catalog/item-subscribe/122183" for="wsp122183"
                                  class="card-sizes__label-wrap js-label_in_popup">
                                  <span class="card-sizes__label card-sizes__from-shop">
                                    <span class="card-sizes__title">
                                      XS </span>
                                  </span>

                                  <div class="card-sizes__comment">подписка</div>
                                </label>
                              </div>
                              <div class="card-sizes__item">
                                <input type="radio" data-model="104972" data-model-id="1524195_104972"
                                  name="wishlist-sizes-popup" id="wsp122182" value="122182" class="card-sizes__input"
                                  checked="checked">

                                <label href="/catalog/item-subscribe/122182" for="wsp122182"
                                  class="card-sizes__label-wrap js-label_in_popup">
                                  <span class="card-sizes__label card-sizes__from-shop">
                                    <span class="card-sizes__title">
                                      S </span>
                                  </span>

                                  <div class="card-sizes__comment">подписка</div>
                                </label>
                              </div>
                              <div class="card-sizes__item">
                                <input type="radio" data-model="104972" data-model-id="1524195_104972"
                                  name="wishlist-sizes-popup" id="wsp122181" value="122181" class="card-sizes__input"
                                  checked="checked">

                                <label href="/catalog/item-subscribe/122181" for="wsp122181"
                                  class="card-sizes__label-wrap js-label_in_popup">
                                  <span class="card-sizes__label card-sizes__from-shop">
                                    <span class="card-sizes__title">
                                      M </span>
                                  </span>

                                  <div class="card-sizes__comment">подписка</div>
                                </label>
                              </div>
                              <div class="card-sizes__item">
                                <input type="radio" data-model="104972" data-model-id="1524195_104972"
                                  name="wishlist-sizes-popup" id="wsp122180" value="122180" class="card-sizes__input"
                                  checked="checked">

                                <label href="/catalog/item-subscribe/122180" for="wsp122180"
                                  class="card-sizes__label-wrap js-label_in_popup">
                                  <span class="card-sizes__label ">
                                    <span class="card-sizes__title">
                                      L </span>
                                  </span>

                                  <div class="card-sizes__comment">последний</div>
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div data-role="sizesinfo" data-model-id="1524195_104972">
                        <div class="content">
                          <div class="table-wrapper" style="margin-bottom: 0; margin-left: 0; margin-right: 0">

                            <table>
                              <tbody>
                                <tr>
                                  <th>Размер</th>
                                  <th>Обхват груди, см</th>
                                  <th>Обхват талии, см</th>
                                  <th>Обхват бедер, см</th>
                                </tr>
                                <tr>
                                  <td>XS</td>
                                  <td>84</td>
                                  <td>64</td>
                                  <td>90</td>
                                </tr>
                                <tr>
                                  <td>S</td>
                                  <td>88</td>
                                  <td>68</td>
                                  <td>94</td>
                                </tr>
                                <tr>
                                  <td>M</td>
                                  <td>92</td>
                                  <td>74</td>
                                  <td>100</td>
                                </tr>
                                <tr>
                                  <td>L</td>
                                  <td>96</td>
                                  <td>78</td>
                                  <td>104</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="catalog-list__item updated" data-key="104972" data-size="122182">
                      <a href="/catalog/trikotaz/tonkaa-vodolazka-cernyj" class="catalog-list__link lookbook-link">
                      </a>
                      <div class="catalog-list__preview"><a href="/catalog/trikotaz/tonkaa-vodolazka-cernyj"
                          class="catalog-list__link lookbook-link">
                          <img
                            src="/images/610x756_90_out/uploads/images/CATALOG/jersey/104320/5f2c74e47c46f-12storeez-iyul-2020-07800.jpg"
                            alt="" class="catalog-list__image">
                        </a>
                        <div class="card-speed-buy"><a href="/catalog/trikotaz/tonkaa-vodolazka-cernyj"
                            class="catalog-list__link lookbook-link">
                          </a>
                          <div class="card-speed-buy__info"><a href="/catalog/trikotaz/tonkaa-vodolazka-cernyj"
                              class="catalog-list__link lookbook-link">
                            </a>
                            <div class="card-sizes"><a href="/catalog/trikotaz/tonkaa-vodolazka-cernyj"
                                class="catalog-list__link lookbook-link">
                                <div class="card-sizes__list">
                                  <div class="card-sizes__item">
                                    <input data-model-id="1524195_104972" type="radio" name="sizes[104972]" id="s122183"
                                      value="122183" class="card-sizes__input" data-url="/cart/add-item/122183/1"
                                      disabled="disabled">
                                    <label for="s122183" href="/catalog/item-stocks/122183"
                                      class="card-sizes__label-wrap js-popup-subscribe">
                                      <span class="card-sizes__label card-sizes__from-shop">
                                        <span class="card-sizes__title">
                                          XS </span>
                                      </span>

                                      <div class="card-sizes__comment">подписка</div>
                                    </label>
                                  </div>
                                  <div class="card-sizes__item">
                                    <input data-model-id="1524195_104972" type="radio" name="sizes[104972]" id="s122182"
                                      value="122182" class="card-sizes__input" data-url="/cart/add-item/122182/1"
                                      disabled="disabled" checked="checked">
                                    <label for="s122182" href="/catalog/item-stocks/122182"
                                      class="card-sizes__label-wrap js-popup-subscribe">
                                      <span class="card-sizes__label card-sizes__from-shop">
                                        <span class="card-sizes__title">
                                          S </span>
                                      </span>

                                      <div class="card-sizes__comment">подписка</div>
                                    </label>
                                  </div>
                                  <div class="card-sizes__item">
                                    <input data-model-id="1524195_104972" type="radio" name="sizes[104972]" id="s122181"
                                      value="122181" class="card-sizes__input" data-url="/cart/add-item/122181/1"
                                      disabled="disabled">
                                    <label for="s122181" href="/catalog/item-stocks/122181"
                                      class="card-sizes__label-wrap js-popup-subscribe">
                                      <span class="card-sizes__label card-sizes__from-shop">
                                        <span class="card-sizes__title">
                                          M </span>
                                      </span>

                                      <div class="card-sizes__comment">подписка</div>
                                    </label>
                                  </div>
                                  <div class="card-sizes__item">
                                    <input data-model-id="1524195_104972" type="radio" name="sizes[104972]" id="s122180"
                                      value="122180" class="card-sizes__input" data-url="/cart/add-item/122180/1">
                                    <label for="s122180" href="/catalog/item-subscribe/122180"
                                      class="card-sizes__label-wrap ">
                                      <span class="card-sizes__label ">
                                        <span class="card-sizes__title">
                                          L </span>
                                      </span>

                                      <div class="card-sizes__comment">последний</div>
                                    </label>
                                  </div>
                                </div>
                              </a><a href="#" class="card-sizes__guide">справочник по размерам</a>
                            </div>
                            <div class="card__button-wrapper">
                              <button href="#sizes-1524195_104972" data-model-id="1524195_104972" type="button"
                                class="button button_powdery card__button buy_button js-card-button"
                                style="visibility: visible; opacity: 1;">Подписаться</button>
                            </div>
                            <div class="card-wish card__wish">
                              <input data-model="104972" data-model-id="1524195_104972" id="wish-1524195_104972"
                                type="checkbox" class="card-wish__input wishlist-checkbox" checked="checked">
                              <label for="wish-1524195_104972" class="card-wish__label">
                                <i class="card-wish__icon"></i><span class="card-wish__text">Убрать из Wishlist'а</span>
                              </label>
                            </div>
                          </div>
                        </div>
                        <span class="catalog-list__fav catalog-list__fav__in"></span>
                      </div>

                      <div class="catalog-list__box">

                        <div class="catalog-list__info catalog-list__info_head">



                          <div class="catalog-list__tag catalog-list__limited">Limited</div>


                        </div>

                        <!-- Заголовок товара -->
                        <div class="catalog-list__title">
                          <div class="catalog-list__title-inn">
                            <span>Тонкая водолазка</span>
                          </div>
                        </div>
                        <!-- Заголовок товара END -->

                        <!-- Цена и скидка товара -->
                        <div class="catalog-list__price">
                          8&nbsp;980&nbsp;₽ </div>
                        <!-- Цена и скидка товара END -->
                      </div>

                    </div>

                    <script type="text/javascript">
                      (function () {
                        window.products_data = window.products_data || {};
                        window.products_data['104169'] = {
                          'id': '104169',
                          'is_preorder': Boolean(0)
                        };
                      })();
                    </script>

                    <div style="display: none">
                      <div data-role="add_item" class="popup popup_small" data-model-id="1524195_104169">
                        <div class="popup__holder">
                          <p class="popup__head">Спасибо!</p>

                          <center>
                            <p>Товар успешно добавлен в корзину.</p>
                          </center>
                          <a href="/cart" class="button button_powdery">Оформить заказ</a>
                          <div class="login__recover">
                            <a href="#" class="login__recover-link featherlight-close">Продолжить покупки</a>
                          </div>
                        </div>
                      </div>

                      <div data-role="select_size" class="popup popup_small" data-model-id="1524195_104169"
                        id="sizes-1524195_104169">
                        <div class="popup__holder card-sizes-popup">
                          <p class="popup__head">Выберите размер</p>
                          <div class="card-sizes card__sizes">
                            <div class="card-sizes__list">
                              <div class="card-sizes__item">
                                <input data-model-id="1524195_104169" type="radio" name="sizes-popup" id="sp115801"
                                  data-sid="s115801" value="115801" class="card-sizes__input"
                                  data-url="/cart/add-item/115801/1" disabled="disabled">
                                <label for="sp115801" href="/catalog/item-stocks/115801"
                                  class="card-sizes__label-wrap js-popup-subscribe">

                                  <span class="card-sizes__label card-sizes__from-shop">
                                    <span class="card-sizes__title">
                                      XS </span>
                                  </span>
                                  <div class="card-sizes__comment">подписка</div>
                                </label>

                              </div>
                              <div class="card-sizes__item">
                                <input data-model-id="1524195_104169" type="radio" name="sizes-popup" id="sp115800"
                                  data-sid="s115800" value="115800" class="card-sizes__input"
                                  data-url="/cart/add-item/115800/1">
                                <label for="sp115800" href="/catalog/item-subscribe/115800"
                                  class="card-sizes__label-wrap js-label_in_popup">

                                  <span class="card-sizes__label ">
                                    <span class="card-sizes__title">
                                      S </span>
                                  </span>
                                  <div class="card-sizes__comment">последний</div>
                                </label>

                              </div>
                              <div class="card-sizes__item">
                                <input data-model-id="1524195_104169" type="radio" name="sizes-popup" id="sp115799"
                                  data-sid="s115799" value="115799" class="card-sizes__input"
                                  data-url="/cart/add-item/115799/1" disabled="disabled">
                                <label for="sp115799" href="/catalog/item-stocks/115799"
                                  class="card-sizes__label-wrap js-popup-subscribe">

                                  <span class="card-sizes__label card-sizes__from-shop">
                                    <span class="card-sizes__title">
                                      M </span>
                                  </span>
                                  <div class="card-sizes__comment">подписка</div>
                                </label>

                              </div>
                              <div class="card-sizes__item">
                                <input data-model-id="1524195_104169" type="radio" name="sizes-popup" id="sp115798"
                                  data-sid="s115798" value="115798" class="card-sizes__input"
                                  data-url="/cart/add-item/115798/1">
                                <label for="sp115798" href="/catalog/item-subscribe/115798"
                                  class="card-sizes__label-wrap js-label_in_popup">

                                  <span class="card-sizes__label ">
                                    <span class="card-sizes__title">
                                      L </span>
                                  </span>
                                  <div class="card-sizes__comment">мало</div>
                                </label>

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div data-role="select_wishlist_size" class="popup popup_small" data-model-id="1524195_104169">
                        <div class="popup__holder">
                          <h4 class="featherlight-title">Выберите размер</h4>
                          <div class="card-sizes card__sizes">
                            <div class="card-sizes__list">
                              <div class="card-sizes__item">
                                <input type="radio" data-model="104169" data-model-id="1524195_104169"
                                  name="wishlist-sizes-popup" id="wsp115801" value="115801" class="card-sizes__input"
                                  checked="checked">

                                <label href="/catalog/item-subscribe/115801" for="wsp115801"
                                  class="card-sizes__label-wrap js-label_in_popup">
                                  <span class="card-sizes__label card-sizes__from-shop">
                                    <span class="card-sizes__title">
                                      XS </span>
                                  </span>

                                  <div class="card-sizes__comment">подписка</div>
                                </label>
                              </div>
                              <div class="card-sizes__item">
                                <input type="radio" data-model="104169" data-model-id="1524195_104169"
                                  name="wishlist-sizes-popup" id="wsp115800" value="115800" class="card-sizes__input"
                                  checked="checked">

                                <label href="/catalog/item-subscribe/115800" for="wsp115800"
                                  class="card-sizes__label-wrap js-label_in_popup">
                                  <span class="card-sizes__label ">
                                    <span class="card-sizes__title">
                                      S </span>
                                  </span>

                                  <div class="card-sizes__comment">последний</div>
                                </label>
                              </div>
                              <div class="card-sizes__item">
                                <input type="radio" data-model="104169" data-model-id="1524195_104169"
                                  name="wishlist-sizes-popup" id="wsp115799" value="115799" class="card-sizes__input"
                                  checked="checked">

                                <label href="/catalog/item-subscribe/115799" for="wsp115799"
                                  class="card-sizes__label-wrap js-label_in_popup">
                                  <span class="card-sizes__label card-sizes__from-shop">
                                    <span class="card-sizes__title">
                                      M </span>
                                  </span>

                                  <div class="card-sizes__comment">подписка</div>
                                </label>
                              </div>
                              <div class="card-sizes__item">
                                <input type="radio" data-model="104169" data-model-id="1524195_104169"
                                  name="wishlist-sizes-popup" id="wsp115798" value="115798" class="card-sizes__input"
                                  checked="checked">

                                <label href="/catalog/item-subscribe/115798" for="wsp115798"
                                  class="card-sizes__label-wrap js-label_in_popup">
                                  <span class="card-sizes__label ">
                                    <span class="card-sizes__title">
                                      L </span>
                                  </span>

                                  <div class="card-sizes__comment">мало</div>
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div data-role="sizesinfo" data-model-id="1524195_104169">
                        <div class="content">
                          <div class="table-wrapper" style="margin-bottom: 0; margin-left: 0; margin-right: 0">

                            <table>
                              <tbody>
                                <tr>
                                  <th>Размер</th>
                                  <th>Обхват груди, см</th>
                                  <th>Обхват талии, см</th>
                                  <th>Обхват бедер, см</th>
                                </tr>
                                <tr>
                                  <td>XS</td>
                                  <td>84</td>
                                  <td>64</td>
                                  <td>90</td>
                                </tr>
                                <tr>
                                  <td>S</td>
                                  <td>88</td>
                                  <td>68</td>
                                  <td>94</td>
                                </tr>
                                <tr>
                                  <td>M</td>
                                  <td>92</td>
                                  <td>74</td>
                                  <td>100</td>
                                </tr>
                                <tr>
                                  <td>L</td>
                                  <td>96</td>
                                  <td>78</td>
                                  <td>104</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="catalog-list__item updated" data-key="104169" data-size="115798">
                      <a href="/catalog/trikotaz/vodolazka-tonkoj-vazki-svetlo-bezevyj-2"
                        class="catalog-list__link lookbook-link">
                      </a>
                      <div class="catalog-list__preview"><a
                          href="/catalog/trikotaz/vodolazka-tonkoj-vazki-svetlo-bezevyj-2"
                          class="catalog-list__link lookbook-link">
                          <img
                            src="/images/610x756_90_out/uploads/images/product/20200116/vodolazka-tonkoj-vazki-svetlo-bezevyj-2/5ee721f525960-kropy-97.jpg"
                            alt="" class="catalog-list__image">
                        </a>
                        <div class="card-speed-buy"><a href="/catalog/trikotaz/vodolazka-tonkoj-vazki-svetlo-bezevyj-2"
                            class="catalog-list__link lookbook-link">
                          </a>
                          <div class="card-speed-buy__info"><a
                              href="/catalog/trikotaz/vodolazka-tonkoj-vazki-svetlo-bezevyj-2"
                              class="catalog-list__link lookbook-link">
                            </a>
                            <div class="card-sizes"><a href="/catalog/trikotaz/vodolazka-tonkoj-vazki-svetlo-bezevyj-2"
                                class="catalog-list__link lookbook-link">
                                <div class="card-sizes__list">
                                  <div class="card-sizes__item">
                                    <input data-model-id="1524195_104169" type="radio" name="sizes[104169]" id="s115801"
                                      value="115801" class="card-sizes__input" data-url="/cart/add-item/115801/1"
                                      disabled="disabled">
                                    <label for="s115801" href="/catalog/item-stocks/115801"
                                      class="card-sizes__label-wrap js-popup-subscribe">
                                      <span class="card-sizes__label card-sizes__from-shop">
                                        <span class="card-sizes__title">
                                          XS </span>
                                      </span>

                                      <div class="card-sizes__comment">подписка</div>
                                    </label>
                                  </div>
                                  <div class="card-sizes__item">
                                    <input data-model-id="1524195_104169" type="radio" name="sizes[104169]" id="s115800"
                                      value="115800" class="card-sizes__input" data-url="/cart/add-item/115800/1">
                                    <label for="s115800" href="/catalog/item-subscribe/115800"
                                      class="card-sizes__label-wrap ">
                                      <span class="card-sizes__label ">
                                        <span class="card-sizes__title">
                                          S </span>
                                      </span>

                                      <div class="card-sizes__comment">последний</div>
                                    </label>
                                  </div>
                                  <div class="card-sizes__item">
                                    <input data-model-id="1524195_104169" type="radio" name="sizes[104169]" id="s115799"
                                      value="115799" class="card-sizes__input" data-url="/cart/add-item/115799/1"
                                      disabled="disabled">
                                    <label for="s115799" href="/catalog/item-stocks/115799"
                                      class="card-sizes__label-wrap js-popup-subscribe">
                                      <span class="card-sizes__label card-sizes__from-shop">
                                        <span class="card-sizes__title">
                                          M </span>
                                      </span>

                                      <div class="card-sizes__comment">подписка</div>
                                    </label>
                                  </div>
                                  <div class="card-sizes__item">
                                    <input data-model-id="1524195_104169" type="radio" name="sizes[104169]" id="s115798"
                                      value="115798" class="card-sizes__input" data-url="/cart/add-item/115798/1"
                                      checked="checked">
                                    <label for="s115798" href="/catalog/item-subscribe/115798"
                                      class="card-sizes__label-wrap ">
                                      <span class="card-sizes__label ">
                                        <span class="card-sizes__title">
                                          L </span>
                                      </span>

                                      <div class="card-sizes__comment">мало</div>
                                    </label>
                                  </div>
                                </div>
                              </a><a href="#" class="card-sizes__guide">справочник по размерам</a>
                            </div>
                            <div class="card__button-wrapper">
                              <button href="#sizes-1524195_104169" data-model-id="1524195_104169" type="button"
                                class="button button_powdery card__button buy_button js-card-button"
                                style="visibility: visible; opacity: 1;"><span class="card__button-text">Добавить в
                                  корзину</span></button>
                            </div>
                            <div class="card-wish card__wish">
                              <input data-model="104169" data-model-id="1524195_104169" id="wish-1524195_104169"
                                type="checkbox" class="card-wish__input wishlist-checkbox" checked="checked">
                              <label for="wish-1524195_104169" class="card-wish__label">
                                <i class="card-wish__icon"></i><span class="card-wish__text">Убрать из Wishlist'а</span>
                              </label>
                            </div>
                          </div>
                        </div>
                        <span class="catalog-list__fav catalog-list__fav__in"></span>
                      </div>

                      <div class="catalog-list__box">

                        <div class="catalog-list__info catalog-list__info_head">





                        </div>

                        <!-- Заголовок товара -->
                        <div class="catalog-list__title">
                          <div class="catalog-list__title-inn">
                            <span>Водолазка тонкой вязки</span>
                          </div>
                        </div>
                        <!-- Заголовок товара END -->

                        <!-- Цена и скидка товара -->
                        <div class="catalog-list__price">
                          5&nbsp;790&nbsp;₽ </div>
                        <!-- Цена и скидка товара END -->
                      </div>

                    </div>

                    <script type="text/javascript">
                      (function () {
                        window.products_data = window.products_data || {};
                        window.products_data['104135'] = {
                          'id': '104135',
                          'is_preorder': Boolean(0)
                        };
                      })();
                    </script>

                    <div style="display: none">
                      <div data-role="add_item" class="popup popup_small" data-model-id="1524195_104135">
                        <div class="popup__holder">
                          <p class="popup__head">Спасибо!</p>

                          <center>
                            <p>Товар успешно добавлен в корзину.</p>
                          </center>
                          <a href="/cart" class="button button_powdery">Оформить заказ</a>
                          <div class="login__recover">
                            <a href="#" class="login__recover-link featherlight-close">Продолжить покупки</a>
                          </div>
                        </div>
                      </div>

                      <div data-role="select_size" class="popup popup_small" data-model-id="1524195_104135"
                        id="sizes-1524195_104135">
                        <div class="popup__holder card-sizes-popup">
                          <p class="popup__head">Выберите размер</p>
                          <div class="card-sizes card__sizes">
                            <div class="card-sizes__list">
                              <div class="card-sizes__item">
                                <input data-model-id="1524195_104135" type="radio" name="sizes-popup" id="sp115632"
                                  data-sid="s115632" value="115632" class="card-sizes__input"
                                  data-url="/cart/add-item/115632/1" disabled="disabled">
                                <label for="sp115632" href="/catalog/item-subscribe/115632"
                                  class="card-sizes__label-wrap js-popup-subscribe">

                                  <span class="card-sizes__label ">
                                    <span class="card-sizes__title">
                                      S </span>
                                  </span>
                                  <div class="card-sizes__comment">подписка</div>
                                </label>

                              </div>
                              <div class="card-sizes__item">
                                <input data-model-id="1524195_104135" type="radio" name="sizes-popup" id="sp115630"
                                  data-sid="s115630" value="115630" class="card-sizes__input"
                                  data-url="/cart/add-item/115630/1" disabled="disabled">
                                <label for="sp115630" href="/catalog/item-stocks/115630"
                                  class="card-sizes__label-wrap js-popup-subscribe">

                                  <span class="card-sizes__label card-sizes__from-shop">
                                    <span class="card-sizes__title">
                                      M </span>
                                  </span>
                                  <div class="card-sizes__comment">подписка</div>
                                </label>

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div data-role="select_wishlist_size" class="popup popup_small" data-model-id="1524195_104135">
                        <div class="popup__holder">
                          <h4 class="featherlight-title">Выберите размер</h4>
                          <div class="card-sizes card__sizes">
                            <div class="card-sizes__list">
                              <div class="card-sizes__item">
                                <input type="radio" data-model="104135" data-model-id="1524195_104135"
                                  name="wishlist-sizes-popup" id="wsp115632" value="115632" class="card-sizes__input"
                                  checked="checked">

                                <label href="/catalog/item-subscribe/115632" for="wsp115632"
                                  class="card-sizes__label-wrap js-label_in_popup">
                                  <span class="card-sizes__label ">
                                    <span class="card-sizes__title">
                                      S </span>
                                  </span>

                                  <div class="card-sizes__comment">подписка</div>
                                </label>
                              </div>
                              <div class="card-sizes__item">
                                <input type="radio" data-model="104135" data-model-id="1524195_104135"
                                  name="wishlist-sizes-popup" id="wsp115630" value="115630" class="card-sizes__input"
                                  checked="checked">

                                <label href="/catalog/item-subscribe/115630" for="wsp115630"
                                  class="card-sizes__label-wrap js-label_in_popup">
                                  <span class="card-sizes__label card-sizes__from-shop">
                                    <span class="card-sizes__title">
                                      M </span>
                                  </span>

                                  <div class="card-sizes__comment">подписка</div>
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div data-role="sizesinfo" data-model-id="1524195_104135">
                        <div class="content">
                          <div class="table-wrapper" style="margin-bottom: 0; margin-left: 0; margin-right: 0">

                            <table>
                              <tbody>
                                <tr>
                                  <th>Размер</th>
                                  <th>Обхват груди, см</th>
                                  <th>Обхват талии, см</th>
                                  <th>Обхват бедер, см</th>
                                </tr>
                                <tr>
                                  <td>XS</td>
                                  <td>84</td>
                                  <td>64</td>
                                  <td>90</td>
                                </tr>
                                <tr>
                                  <td>S</td>
                                  <td>88</td>
                                  <td>68</td>
                                  <td>94</td>
                                </tr>
                                <tr>
                                  <td>M</td>
                                  <td>92</td>
                                  <td>74</td>
                                  <td>100</td>
                                </tr>
                                <tr>
                                  <td>L</td>
                                  <td>96</td>
                                  <td>78</td>
                                  <td>104</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="catalog-list__item updated" data-key="104135" data-size="115632">
                      <a href="/catalog/trikotaz/dzemper-iz-kasemira-i-sersti-rozovyj"
                        class="catalog-list__link lookbook-link">
                      </a>
                      <div class="catalog-list__preview"><a
                          href="/catalog/trikotaz/dzemper-iz-kasemira-i-sersti-rozovyj"
                          class="catalog-list__link lookbook-link">
                          <img
                            src="/images/610x756_90_out/uploads/images/product/20200116/dzemper-iz-kasemira-i-sersti-rozovyj/5ee721f5258b7-kropnutye-20.jpg"
                            alt="" class="catalog-list__image">
                        </a>
                        <div class="card-speed-buy"><a href="/catalog/trikotaz/dzemper-iz-kasemira-i-sersti-rozovyj"
                            class="catalog-list__link lookbook-link">
                          </a>
                          <div class="card-speed-buy__info"><a
                              href="/catalog/trikotaz/dzemper-iz-kasemira-i-sersti-rozovyj"
                              class="catalog-list__link lookbook-link">
                            </a>
                            <div class="card-sizes"><a href="/catalog/trikotaz/dzemper-iz-kasemira-i-sersti-rozovyj"
                                class="catalog-list__link lookbook-link">
                                <div class="card-sizes__list">
                                  <div class="card-sizes__item">
                                    <input data-model-id="1524195_104135" type="radio" name="sizes[104135]" id="s115632"
                                      value="115632" class="card-sizes__input" data-url="/cart/add-item/115632/1"
                                      disabled="disabled" checked="checked">
                                    <label for="s115632" href="/catalog/item-subscribe/115632"
                                      class="card-sizes__label-wrap js-popup-subscribe">
                                      <span class="card-sizes__label ">
                                        <span class="card-sizes__title">
                                          S </span>
                                      </span>

                                      <div class="card-sizes__comment">подписка</div>
                                    </label>
                                  </div>
                                  <div class="card-sizes__item">
                                    <input data-model-id="1524195_104135" type="radio" name="sizes[104135]" id="s115630"
                                      value="115630" class="card-sizes__input" data-url="/cart/add-item/115630/1"
                                      disabled="disabled">
                                    <label for="s115630" href="/catalog/item-stocks/115630"
                                      class="card-sizes__label-wrap js-popup-subscribe">
                                      <span class="card-sizes__label card-sizes__from-shop">
                                        <span class="card-sizes__title">
                                          M </span>
                                      </span>

                                      <div class="card-sizes__comment">подписка</div>
                                    </label>
                                  </div>
                                </div>
                              </a><a href="#" class="card-sizes__guide">справочник по размерам</a>
                            </div>
                            <div class="card__button-wrapper">
                              <button href="#sizes-1524195_104135" data-model-id="1524195_104135" type="button"
                                class="button button_powdery card__button subscribe_button js-card-button"
                                style="visibility: visible; opacity: 1;">Подписаться</button>
                            </div>
                            <div class="card-wish card__wish">
                              <input data-model="104135" data-model-id="1524195_104135" id="wish-1524195_104135"
                                type="checkbox" class="card-wish__input wishlist-checkbox" checked="checked">
                              <label for="wish-1524195_104135" class="card-wish__label">
                                <i class="card-wish__icon"></i><span class="card-wish__text">Убрать из Wishlist'а</span>
                              </label>
                            </div>
                          </div>
                        </div>
                        <span class="catalog-list__fav catalog-list__fav__in"></span>
                      </div>

                      <div class="catalog-list__box">

                        <div class="catalog-list__info catalog-list__info_head">


                          <div class="catalog-list__tag catalog-list__available catalog-list__available--not">Только в
                            магазинах</div>
                        </div>

                        <!-- Заголовок товара -->
                        <div class="catalog-list__title">
                          <div class="catalog-list__title-inn">
                            <span>Джемпер из кашемира и шерсти</span>
                          </div>
                        </div>
                        <!-- Заголовок товара END -->

                        <!-- Цена и скидка товара -->
                        <div class="catalog-list__price">
                          19&nbsp;980&nbsp;₽ </div>
                        <!-- Цена и скидка товара END -->
                      </div>

                    </div>

                    <script type="text/javascript">
                      (function () {
                        window.products_data = window.products_data || {};
                        window.products_data['104130'] = {
                          'id': '104130',
                          'is_preorder': Boolean(0)
                        };
                      })();
                    </script>

                    <div style="display: none">
                      <div data-role="add_item" class="popup popup_small" data-model-id="1524195_104130">
                        <div class="popup__holder">
                          <p class="popup__head">Спасибо!</p>

                          <center>
                            <p>Товар успешно добавлен в корзину.</p>
                          </center>
                          <a href="/cart" class="button button_powdery">Оформить заказ</a>
                          <div class="login__recover">
                            <a href="#" class="login__recover-link featherlight-close">Продолжить покупки</a>
                          </div>
                        </div>
                      </div>

                      <div data-role="select_size" class="popup popup_small" data-model-id="1524195_104130"
                        id="sizes-1524195_104130">
                        <div class="popup__holder card-sizes-popup">
                          <p class="popup__head">Выберите размер</p>
                          <div class="card-sizes card__sizes">
                            <div class="card-sizes__list">
                              <div class="card-sizes__item">
                                <input data-model-id="1524195_104130" type="radio" name="sizes-popup" id="sp115612"
                                  data-sid="s115612" value="115612" class="card-sizes__input"
                                  data-url="/cart/add-item/115612/1" disabled="disabled">
                                <label for="sp115612" href="/catalog/item-subscribe/115612"
                                  class="card-sizes__label-wrap js-popup-subscribe">

                                  <span class="card-sizes__label ">
                                    <span class="card-sizes__title">
                                      S </span>
                                  </span>
                                  <div class="card-sizes__comment">подписка</div>
                                </label>

                              </div>
                              <div class="card-sizes__item">
                                <input data-model-id="1524195_104130" type="radio" name="sizes-popup" id="sp115611"
                                  data-sid="s115611" value="115611" class="card-sizes__input"
                                  data-url="/cart/add-item/115611/1" disabled="disabled">
                                <label for="sp115611" href="/catalog/item-subscribe/115611"
                                  class="card-sizes__label-wrap js-popup-subscribe">

                                  <span class="card-sizes__label ">
                                    <span class="card-sizes__title">
                                      M </span>
                                  </span>
                                  <div class="card-sizes__comment">подписка</div>
                                </label>

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div data-role="select_wishlist_size" class="popup popup_small" data-model-id="1524195_104130">
                        <div class="popup__holder">
                          <h4 class="featherlight-title">Выберите размер</h4>
                          <div class="card-sizes card__sizes">
                            <div class="card-sizes__list">
                              <div class="card-sizes__item">
                                <input type="radio" data-model="104130" data-model-id="1524195_104130"
                                  name="wishlist-sizes-popup" id="wsp115612" value="115612" class="card-sizes__input"
                                  checked="checked">

                                <label href="/catalog/item-subscribe/115612" for="wsp115612"
                                  class="card-sizes__label-wrap js-label_in_popup">
                                  <span class="card-sizes__label ">
                                    <span class="card-sizes__title">
                                      S </span>
                                  </span>

                                  <div class="card-sizes__comment">подписка</div>
                                </label>
                              </div>
                              <div class="card-sizes__item">
                                <input type="radio" data-model="104130" data-model-id="1524195_104130"
                                  name="wishlist-sizes-popup" id="wsp115611" value="115611" class="card-sizes__input"
                                  checked="checked">

                                <label href="/catalog/item-subscribe/115611" for="wsp115611"
                                  class="card-sizes__label-wrap js-label_in_popup">
                                  <span class="card-sizes__label ">
                                    <span class="card-sizes__title">
                                      M </span>
                                  </span>

                                  <div class="card-sizes__comment">подписка</div>
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div data-role="sizesinfo" data-model-id="1524195_104130">
                        <div class="content">
                          <div class="table-wrapper" style="margin-bottom: 0; margin-left: 0; margin-right: 0">

                            <table>
                              <tbody>
                                <tr>
                                  <th>Размер</th>
                                  <th>Обхват груди, см</th>
                                  <th>Обхват талии, см</th>
                                  <th>Обхват бедер, см</th>
                                </tr>
                                <tr>
                                  <td>XS</td>
                                  <td>84</td>
                                  <td>64</td>
                                  <td>90</td>
                                </tr>
                                <tr>
                                  <td>S</td>
                                  <td>88</td>
                                  <td>68</td>
                                  <td>94</td>
                                </tr>
                                <tr>
                                  <td>M</td>
                                  <td>92</td>
                                  <td>74</td>
                                  <td>100</td>
                                </tr>
                                <tr>
                                  <td>L</td>
                                  <td>96</td>
                                  <td>78</td>
                                  <td>104</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="catalog-list__item updated" data-key="104130" data-size="115611">
                      <a href="/catalog/trikotaz/dzemper-iz-kasemira-i-sersti-slivocnyj"
                        class="catalog-list__link lookbook-link">
                      </a>
                      <div class="catalog-list__preview"><a
                          href="/catalog/trikotaz/dzemper-iz-kasemira-i-sersti-slivocnyj"
                          class="catalog-list__link lookbook-link">
                          <img
                            src="/images/610x756_90_out/uploads/images/product/20200121/dzemper-iz-kasemira-i-sersti-slivocnyj/5ee721f52581c-kropnut-10.jpg"
                            alt="" class="catalog-list__image">
                        </a>
                        <div class="card-speed-buy"><a href="/catalog/trikotaz/dzemper-iz-kasemira-i-sersti-slivocnyj"
                            class="catalog-list__link lookbook-link">
                          </a>
                          <div class="card-speed-buy__info"><a
                              href="/catalog/trikotaz/dzemper-iz-kasemira-i-sersti-slivocnyj"
                              class="catalog-list__link lookbook-link">
                            </a>
                            <div class="card-sizes"><a href="/catalog/trikotaz/dzemper-iz-kasemira-i-sersti-slivocnyj"
                                class="catalog-list__link lookbook-link">
                                <div class="card-sizes__list">
                                  <div class="card-sizes__item">
                                    <input data-model-id="1524195_104130" type="radio" name="sizes[104130]" id="s115612"
                                      value="115612" class="card-sizes__input" data-url="/cart/add-item/115612/1"
                                      disabled="disabled">
                                    <label for="s115612" href="/catalog/item-subscribe/115612"
                                      class="card-sizes__label-wrap js-popup-subscribe">
                                      <span class="card-sizes__label ">
                                        <span class="card-sizes__title">
                                          S </span>
                                      </span>

                                      <div class="card-sizes__comment">подписка</div>
                                    </label>
                                  </div>
                                  <div class="card-sizes__item">
                                    <input data-model-id="1524195_104130" type="radio" name="sizes[104130]" id="s115611"
                                      value="115611" class="card-sizes__input" data-url="/cart/add-item/115611/1"
                                      disabled="disabled" checked="checked">
                                    <label for="s115611" href="/catalog/item-subscribe/115611"
                                      class="card-sizes__label-wrap js-popup-subscribe">
                                      <span class="card-sizes__label ">
                                        <span class="card-sizes__title">
                                          M </span>
                                      </span>

                                      <div class="card-sizes__comment">подписка</div>
                                    </label>
                                  </div>
                                </div>
                              </a><a href="#" class="card-sizes__guide">справочник по размерам</a>
                            </div>
                            <div class="card__button-wrapper">
                              <button href="#sizes-1524195_104130" data-model-id="1524195_104130" type="button"
                                class="button button_powdery card__button subscribe_button js-card-button"
                                style="visibility: visible; opacity: 1;">Подписаться</button>
                            </div>
                            <div class="card-wish card__wish">
                              <input data-model="104130" data-model-id="1524195_104130" id="wish-1524195_104130"
                                type="checkbox" class="card-wish__input wishlist-checkbox" checked="checked">
                              <label for="wish-1524195_104130" class="card-wish__label">
                                <i class="card-wish__icon"></i><span class="card-wish__text">Убрать из Wishlist'а</span>
                              </label>
                            </div>
                          </div>
                        </div>
                        <span class="catalog-list__fav catalog-list__fav__in"></span>
                      </div>

                      <div class="catalog-list__box">

                        <div class="catalog-list__info catalog-list__info_head">


                          <div class="catalog-list__tag catalog-list__available catalog-list__available--not">Нет в
                            наличии</div>
                        </div>

                        <!-- Заголовок товара -->
                        <div class="catalog-list__title">
                          <div class="catalog-list__title-inn">
                            <span>Джемпер из кашемира и шерсти</span>
                          </div>
                        </div>
                        <!-- Заголовок товара END -->

                        <!-- Цена и скидка товара -->
                        <div class="catalog-list__price">
                          19&nbsp;790&nbsp;₽ </div>
                        <!-- Цена и скидка товара END -->
                      </div>

                    </div>
                  </div>
                </div>
              </div>

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
  <script src="assets/js/whishlist/scripts.js"></script>
  <script src="assets/js/jquery-ui.js"></script>
  <script src="assets/js/autocomplete.js"></script>
  <script src="assets/js/home/scripts.js"></script>
@endsection

@section('head')
<title>Интернет-магазин женской одежды - 12storeez</title>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport"
    content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0, minimal-ui">
  <meta name="description"
    content="Большой выбор женской одежды, платья, рубашки, костюмы, верхняя одежда, аксессуары. Доставка.">
  <link rel="stylesheet" href="assets/js/wishlist/styles.css">
  <link rel="stylesheet" href="assets/css/fast-catalog-item/styles.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/jquery-ui.css">
  <link rel="stylesheet" href="assets/css/autocomplete.css">
  <style>
    /* SITEDEV-2039 */

    .catalog-list__info_head {
      min-height: auto;
    }

    .catalog-list__info_head,
    .catalog-list__not-available {
      margin-bottom: 15px;
    }

    .catalog-list__sale {
      position: initial;
    }

    /* SITEDEV-2039 END */
  </style>
  <style>
    .mobile .card-speed-buy {
      bottom: 0;
      padding: 10px 40px;
    }

    .mobile .card-speed-buy .catalog-list__link,
    .mobile .card-speed-buy .card-sizes,
    .mobile .card-speed-buy .card__button-wrapper {
      display: none;
    }

    .mobile .card-speed-buy .card__wish {
      display: block;
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