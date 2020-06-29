<form class="search-bar" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">

  <input type="search" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'Search', 'twentyeleven' ); ?>" />

  <button type="submit" class="submit" name="submit" id="searchsubmit">
    <img src="https://raw.githubusercontent.com/thoughtbot/refills/master/source/images/search-icon-black.png" alt="Search Icon">
  </button>

</form>
