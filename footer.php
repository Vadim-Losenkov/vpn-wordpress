

  <footer class="footer">
    <div class="container">
      <div class="footer__inner">
        <div class="footer__info">
          <div class="footer__info-img">
            <img src="images/logo.png" alt="">
          </div>
          <div class="footer__info-text">
            <strong><?php echo bloginfo('name'); ?></strong> является частной виртуальной сетью, которая имеет уникальные функции и имеет
            высокую безопасность
          </div>
          <div class="footer__info-social">
            <a href="https://facebook.com" class="footer__social-item">
              <img src="images/facebook.svg" alt="">
            </a>
            <a href="https://twitter.com" class="footer__social-item">
              <img src="images/twitter.svg" alt="">
            </a>
            <a href="https://instagram.com" class="footer__social-item">
              <img src="images/isnst.svg" alt="">
            </a>
          </div>
          <div class="footer__info-copy">
            ©2020Lasles<strong>VPN</strong>
          </div>
        </div>
        <div class="footer__box">
          <div class="footer__col">
            <div class="footer__col-title">
              <?php echo wp_get_nav_menu_name('footer-menu-1'); ?>
            </div>
            <ul class="footer__col-list">
              <?php wp_nav_menu(array(
                'theme_location' => 'footer-menu-1',
                'container'      => null,
                'menu_class'     => 'footer__col-list'
              )); ?>
            </ul>
          </div>
          <div class="footer__col">
            <div class="footer__col-title">
              <?php echo wp_get_nav_menu_name('footer-menu-2'); ?>
            </div>
            <ul class="footer__col-list">
              <?php wp_nav_menu(array(
                'theme_location' => 'footer-menu-2',
                'container'      => null,
                'menu_class'     => 'footer__col-list'
              )); ?>
            </ul>
          </div>
          <div class="footer__col">
            <div class="footer__col-title">
              <?php echo wp_get_nav_menu_name('footer-menu-3'); ?>
            </div>
            <ul class="footer__col-list">
              <?php wp_nav_menu(array(
                'theme_location' => 'footer-menu-3',
                'container'      => null,
                'menu_class'     => 'footer__col-list'
              )); ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <div class="popups">
    <div id="top-popup" class="white-popup mfp-with-anim mfp-hide">
      <h2 class="top-popup__title"><?php echo bloginfo('name'); ?></h2>
      <p class="top-popup__text">
        Оформить подписку на 1 месяц за $10?
      </p>
      <input class="top-popup__input" type="text" placeholder="введите ваш IP: " />
      <button class="top-popup__button close-btn-i">
        оформить
      </button>
    </div>
    <div id="login-popup" class="white-popup mfp-with-anim mfp-hide">
      <h2 class="top-popup__title"><?php echo bloginfo('name'); ?></h2>
      <p class="top-popup__text">
        Вход в аккаунт:
      </p>
      <input class="top-popup__input" type="text" placeholder="введите ваш nickname: " />
      <input class="top-popup__input" type="password" placeholder="введите ваш Пароль: " />
      <button class="top-popup__button close-btn-i">
        Войти
      </button>
    </div>
    <div id="signup-popup" class="white-popup mfp-with-anim mfp-hide">
      <h2 class="top-popup__title"><?php echo bloginfo('name'); ?></h2>
      <p class="top-popup__text">
        Регистрация:
      </p>
      <input class="top-popup__input signup" type="text" placeholder="придумайте nickname: " />
      <input class="top-popup__input" type="password" placeholder="придумайте пароль: " />
      <input class="top-popup__input" type="password" placeholder="повторите пароль: " />
      <button class="top-popup__button close-btn-i">
        Зарегистрироваться
      </button>
    </div>
    <div id="buy-popup" class="white-popup mfp-with-anim mfp-hide">
      <h2 class="top-popup__title"><?php echo bloginfo('name'); ?></h2>
      <p class="top-popup__text">
        Покупка тарифа
      </p>
      <input class="top-popup__input signup" type="text" placeholder="комментарий к покупке (опционально): " />
      <input class="top-popup__input" type="text" value="$10" placeholder="сумма: " />
      <button class="top-popup__button close-btn-i">
        Оплатить
      </button>
    </div>
    <div id="sub-popup" class="white-popup mfp-with-anim mfp-hide">
      <h2 class="top-popup__title"><?php echo bloginfo('name'); ?></h2>
      <p class="top-popup__text">
        Подписка на рассылку
      </p>
      <input class="top-popup__input" type="text" placeholder="Введите email: " />
      <button class="top-popup__button close-btn-i">
        подписаться
      </button>
    </div>
  </div>
  <?php wp_footer(); ?>
</body>

</html>