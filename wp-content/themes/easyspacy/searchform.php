<div class="custom_search_form">
    <h2 class="custom_search_form__title sro">Formulaire de recherche</h2>
    <form role="search" method="get" id="searchform"
          class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
        <div>
            <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
            <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
            <input type="image" src="<?php echo get_template_directory_uri() . '/resources/img/loupe.svg'?>" id="searchsubmit"
                   title="<?php echo esc_attr_x( 'Rechercher', 'submit button' ); ?>" height="30" width="30"/>
        </div>
    </form>
</div>