<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
  <script>eruda.init();</script>
</head>

<body>
  <div class="over"></div>
  <header class="header">
    <div class="container">
      <div class="header__inner">
        <a href="#" class="header__logo">
          <img class="logo" src="images/Logo.png" alt="">
        </a>
        <nav class="header__menu">
          <?php wp_nav_menu(array(
            'theme_location' => 'top',
            'container'      => null,
            'menu_class'     => 'header__list'
          )); ?>
        </nav>
        <div class="header__login">
          <a href="#login-popup" class="header__login-signin" data-effect="mfp-zoom-in">Войти</a>
          <a href="#signup-popup" class="header__login-signup" data-effect="mfp-zoom-in">Зарегистрироваться</a>
        </div>
        <div class="header__btn">
          <div class="header__btn-line first"></div>
          <div class="header__btn-line main"></div>
          <div class="header__btn-line last"></div>
        </div>
      </div>
      <div class="header__mobile">
        <?php wp_nav_menu(array(
          'theme_location' => 'top',
          'container'      => null,
          'menu_class'     => 'header__list'
        )); ?>
        <div class="header__login-mobile">
          <a href="#login-popup" class="header__login-signin" data-effect="mfp-zoom-in">Войти</a>
          <a href="#signup-popup" class="header__login-signup" data-effect="mfp-zoom-in">Зарегистрироваться</a>
        </div>
      </div>
    </div>
  </header>