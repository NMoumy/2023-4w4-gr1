<?php
/* Formulaire de recherche personnalisée */
?>
<form class="recherche" role="search" method="get"  action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <label class="barre__recherche">
    <input class="recherche__input" type="search" class="search-field" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s" />
  </label>
  <button class="btn__recherche" type="submit" class="search-submit">
    <span class="recherche__icone">&#x1F50D;</span>
  </button>
</form>