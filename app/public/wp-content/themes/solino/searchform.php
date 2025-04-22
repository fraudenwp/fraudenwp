
<form id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" class="outline-form w-form">
    <input type="text" class="outline-form-input w-input" maxlength="256" name="s" placeholder="Aranacak kelime..." value="<?php echo get_search_query(); ?>">
    <input type="submit" value="Ara" class="search-button w-button">
</form>
