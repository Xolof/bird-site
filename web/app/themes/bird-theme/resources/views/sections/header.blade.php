<header class="banner text-center">

  <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
  ?>

  <a class="brand" href="{{ home_url('/') }}">
    <span>{!! $siteName !!}</span>
    <?php if ( has_custom_logo() ) {
      echo '<img class="custom-logo" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
    } ?>
  </a>

  @if (has_nav_menu('primary_navigation'))
    <div id="hamburger">
      <div class="bar-1"></div>
      <div class="bar-2"></div>
      <div class="bar-3"></div>
    </div>
    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      <div class="navCloseButton">
        <div class="bar-1"></div>
        <div class="bar-2"></div>
      </div>
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav flex', 'echo' => false]) !!}
    </nav>
  @endif
</header>
