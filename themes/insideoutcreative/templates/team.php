<?php

/**
 * Template Name: Team
 */

 get_header();

 if(get_the_content()){

    echo '<section class="pt-5 pb-5">';
    echo '<div class="container">';
    echo '<div class="row">';
    echo '<div class="col-md-12">';
    if ( have_posts() ) : while ( have_posts() ) : the_post();
    the_content();
    endwhile; else:
    echo '<p>Sorry, no posts matched your criteria.</p>';
    endif;
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</section>';
    
    }

    $relationship = get_field('relationship');

    echo '<section class="position-relative bg-attachment" style="margin-bottom:-70px;">';

echo wp_get_attachment_image(261,'full','',['class'=>'position-absolute w-100 h-100','style'=>'top:0;left:0;']);

echo '<div class="position-absolute w-100 h-100 bg-accent-secondary" style="mix-blend-mode:multiply;top:0;"></div>';

echo '<div class="position-relative w-100" style="padding-bottom:150px;">';
echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 772.52 65.69"><defs><style>.cls-1{fill:#fff;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M0,65.69c380.61-55.34,772.52,0,772.52,0V34.07C340-15.73,0,34.07,0,34.07Z"/><rect class="cls-1" width="772.52" height="36.82"/></g></g></svg>';
echo '</div>';

echo '<div class="position-relative" style="padding:150px 0;">';
echo '<div class="position-absolute w-100 h-100" style="mix-blend-mode:screen;top:0;left:0;pointer-events:none;background:#0f2849;"></div>';
echo '<div class="container">';


    if( $relationship ):
        echo '<div class="row">';
        
        foreach( $relationship as $post ): 

            echo '<a href="' . get_the_permalink() . '" class="col-md-4 text-center mb-4">';
            echo '<div class="position-relative h-100 d-flex align-items-center justify-content-center">';
            the_post_thumbnail('full',array('class'=>'position-absolute w-100 h-100','style'=>'top:0;left:0;object-fit:cover;'));
            echo '<div class="bg-accent-secondary position-absolute w-100 h-100" style="top:0;left:0;opacity:.5;"></div>';
            echo '<div class="pt-5 pb-5 position-relative text-white">';
            echo '<h2>' . get_the_title() . '</h2>';
            echo '</div>';
            echo '</div>';
            echo '</a>';

        endforeach;
        // Reset the global post object so that the rest of the page works correctly.
        wp_reset_postdata(); 
echo '</div>';
    endif;

    echo '</div>';
echo '</div>';

echo '<div class="position-relative w-100" style="padding-top:150px;">';
echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 772.52 65.69" style="margin-bottom:-7px;"><defs><style>.cls-1{fill:#fff;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M772.52,0C391.91,55.34,0,0,0,0V31.62c432.51,49.8,772.52,0,772.52,0Z"/><rect class="cls-1" y="28.88" width="772.52" height="36.82"/></g></g></svg>';
echo '</div>';

echo '</section>';

 get_footer();

?>