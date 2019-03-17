<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>"> 
  <input type="search" class="search-field" placeholder="Search &hellip;" value="<?php the_search_query(); ?>" name="s" title="Search for:" id="s"/>
  <button class="search-btn" value="Search" id="searchsubmit">
    <i class="fa fa-search"></i>
  </button>   
</form>