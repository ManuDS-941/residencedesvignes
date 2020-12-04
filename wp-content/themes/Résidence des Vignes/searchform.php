<form action="<?php echo home_url( '/' ); ?>" method="get">
    <label for="search">Rechercher :</label>
    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
    <button type="submit">Rechercher</button>
    <!-- Permet d'integrer une image au bouton mais il faudra supprimer le button
    <input type="image" alt="Search" src="<?php // bloginfo( 'template_url' ); ?>/images/search.png" />-->
</form>
