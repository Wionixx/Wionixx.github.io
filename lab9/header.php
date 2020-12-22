<div class="login_box">

  <?php global $user_ID, $user_identity, $user_level; ?>

  <?php if (is_user_logged_in()) { ?>

    <?php echo get_avatar( $user_ID, 50 ); ?>

    <div class="user_aside">
      <span class="user_name">Привет, <strong><em><?php echo $user_identity; ?></em></strong></span>
      <a class="login_button" href="<?php bloginfo('url'); ?>/wp-admin/">Консоль</a>
      <a class="login_button" href="<?php bloginfo('url'); ?>/wp-admin/profile.php">Профиль</a>
      <a class="logout_button" href="<?php echo wp_logout_url( $_SERVER['REQUEST_URI'] ); ?>">Выйти</a>
    </div>

  <?php } else { ?>

    <form id="login" action="login" method="post">

      <p class="status_login"></p>

      <div class="line">
        <i class="icon-user"></i>
        <input id="username" class="input_text" type="text" placeholder="Ваш логин" name="username" />
      </div>

      <div class="line">
        <i class="icon-key"></i>
        <input id="password" class="input_text" type="password" placeholder="Ваш пароль" name="password" />
      </div>

      <div class="line" style="display: none;">
        <input name="rememberme" type="checkbox" id="my-rememberme" checked="checked" value="forever" />
      </div>

      <div class="line cf">
        <input class="submit_button" type="submit" value="Войти" name="submit">
        <div class="login_link">
          <a class="reg_link" href="<?php bloginfo('url'); ?>/wp-login.php?action=register">Регистрация</a> /
          <a class="lost_pass_link" href="<?php bloginfo('url'); ?>/wp-login.php?action=lostpassword">Забыли пароль?</a>
        </div>
      </div>

      <?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>

    </form>
<?php } ?>

</div>
