<div class="site-log" style="float:left; display:inline-block; height:100px;width:100px; margin-right: 20px">
        <?php better_theme_customizer( 'the_image_mod', 'site_logo' ); ?>
</div>

    <?php
                echo $site_logo_id = better_theme_customizer( 'get_mod', 'site_logo' );
                echo $site_logo_src = better_theme_customizer( 'get_image_mod_url', 'site_logo' );
                echo $site_logo = better_theme_customizer( 'get_image_mod', 'site_logo' )[0];

                echo better_theme_customizer( 'get_copyright' );

                better_theme_customizer( 'the_mod', 'site_logo' );

                better_theme_customizer( 'the_social_media_icons' );

                better_theme_customizer( 'the_image_mod', 'site_logo' );

                echo better_theme_customizer( 'get_mod', 'hp_sample_posts' );

                echo better_theme_customizer( 'get_mod', 'hp_sample_post_types' );

                echo better_theme_customizer( 'get_mod', 'hp_sample_taxonomies' );

                echo better_theme_customizer( 'get_mod', 'hp_sample_terms' );

                echo better_theme_customizer( 'get_mod', 'hp_sample_gform' );
                echo '<br>';
                echo '<br>';
                ?>