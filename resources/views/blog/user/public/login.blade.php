@extends('blog.user.layouts.main')

@section('content')
<div class="login">
        <div class="login__holder">
          <p class="popup__head">Вход</p>
          <form id="login-form" class="form login__form" action="/user/login" method="post">
            <div class="form__item field-loginform-username">
              <label class="form__label form__label_full" for="loginform-username">Е-mail или телефон</label><input
                type="text" id="loginform-username" class="form__input" name="LoginForm[username]">
              <p class="form__error-message"></p>
            </div>
            <div class="form__item field-loginform-password required">
              <label class="form__label form__label_full" for="loginform-password">Пароль</label><input type="password"
                id="loginform-password" class="form__input" name="LoginForm[password]" aria-required="true">
              <p class="form__error-message"></p>
            </div>
            <div class="login__recover">
              <a href="/user/reset-password" class="login__recover-link js-popup">Восстановить пароль</a>
            </div>

            <button type="submit" class="button button_powdery login__button">Войти</button>
          </form>
          <div class="login__reg">
            <a href="/user/registration" class="login__reg-link js-popup">Зарегистрироваться</a>
          </div>

        </div>
      </div>
@endsection

@section('scripts')
<script src="assets/js/jquery.js"></script>
  <script src="assets/js/yii.js"></script>
  <script src="assets/js/chunks/vendor.js"></script>
  <script src="assets/js/chunks/layout-base.js"></script>
  <script src="assets/js/fast-catalog-item/scripts.js"></script>
  <script src="assets/js/jquery-ui.js"></script>
  <script src="assets/js/autocomplete.js"></script>
  <script src="assets/js/home/scripts.js"></script>
@endsection

@section('head')
<title>Авторизация</title>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport"
    content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0, minimal-ui">
  
  <meta name="description"
    content="Большой выбор женской одежды, платья, рубашки, костюмы, верхняя одежда, аксессуары. Доставка.">
  
  <link rel="stylesheet" href="assets/js/home/styles.css">
  <link rel="stylesheet" href="assets/css/fast-catalog-item/styles.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/jquery-ui.css">
  <link rel="stylesheet" href="assets/css/autocomplete.css">
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
<html lang="ru-RU" class="t-form">
@endsection
