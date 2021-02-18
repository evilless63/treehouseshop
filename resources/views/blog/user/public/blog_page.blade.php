@extends('blog.user.layouts.main')

@section('content')
<div class="blog-post">
  <div class="blog-post__holder">
    <div class="page__row">
      <!-- <div class="page__sidebar page__sidebar_left">
              <a href="#" class="page-back">
                <div class="page-back__holder"><i class="page-back__icon"></i><span class="page-back__text">Блог</span> </div>
              </a>
            </div> -->
      <div class="page__middle">
        <div class="blog-post__top">
          <div class="blog-post__header">
            <h1 class="blog-post__title">Доставка</h1>
            <div class="blog-post__date">&nbsp;</div>
          </div>
        </div>
        <div class="content blog-post__content">

        </div>
      </div>
    </div>
  </div>
  @endsection

  @section('scripts')
  <script src="assets/js/jquery.js"></script>
  <script src="assets/js/jquery.infinitescroll.js"></script>
  <script src="assets/js/yii.js"></script>
  <script src="assets/js/yii.validation.js"></script>
  <script src="assets/js/yii.activeform.js"></script>
  <script src="assets/js/jquery.pjax.js"></script>
  <script src="assets/js/chunks/vendor.js"></script>
  <script src="assets/js/chunks/layout-base.js"></script>
  <script src="assets/js/intellinput.js"></script>
  <script src="assets/js/whishlist/scripts.js"></script>
  <script src="assets/js/jquery-ui.js"></script>
  <script src="assets/js/autocomplete.js"></script>
  <script src="assets/js/base/scripts.js"></script>
  <script src="assets/js/utils.js"></script>
  @endsection

  @section('head')
  <title>Интернет-магазин детской одежды - Дом на дереве</title>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0, minimal-ui">

  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">

  <meta name="description" content="Большой выбор женской одежды, платья, рубашки, костюмы, верхняя одежда, аксессуары. Доставка.">

  <link rel="stylesheet" href="assets/js/base/styles.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/jquery-ui.css">
  <link rel="stylesheet" href="assets/css/intellinput.css">
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

  @section('html-class')
  <html lang="ru-RU" class="">
  @endsection