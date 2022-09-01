<?php 
/**
 * Template Name: Services
 */

 get_header();

 // start of services
if(have_rows('services_content')): while(have_rows('services_content')): the_row();
$bgImg = get_sub_field('background_image');
$content = get_sub_field('content');
$relationship = get_sub_field('relationship');

echo '<section class="position-relative bg-attachment" style="margin-top:-70px;margin-bottom:-70px;">';

echo wp_get_attachment_image($bgImg['id'],'full','',['class'=>'position-absolute w-100 h-100','style'=>'top:0;left:0;']);

echo '<div class="position-absolute w-100 h-100 bg-accent-secondary" style="mix-blend-mode:multiply;top:0;"></div>';

echo '<div class="position-relative w-100" style="padding-bottom:150px;">';
echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 772.52 65.69"><defs><style>.cls-1{fill:#fff;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M0,65.69c380.61-55.34,772.52,0,772.52,0V34.07C340-15.73,0,34.07,0,34.07Z"/><rect class="cls-1" width="772.52" height="36.82"/></g></g></svg>';
echo '</div>';

echo '<div class="position-relative" style="padding:150px 0;">';
echo '<div class="position-absolute w-100 h-100" style="mix-blend-mode:screen;top:0;left:0;pointer-events:none;background:#0f2849;"></div>';
echo '<div class="container">';
echo '<div class="row justify-content-center">';
echo '<div class="col-lg-10 text-center text-white pb-5">';

echo $content;

echo '</div>';
echo '</div>';


if( $relationship ):
    echo '<div class="row justify-content-center">';
    $counter = 0;
foreach( $relationship as $post ): 
// Setup this post for WP functions (variable must be named $post).
setup_postdata($post);
$counter++;
echo '<div class="col-md-4 text-white mb-5">';
echo '<div class="position-relative pr-4 pl-4 h-100 d-flex align-items-end col-services" style="">';

echo '<div class="position-absolute w-100 bg-accent-secondary" style="height:100px;top:-100px;left:0;mix-blend-mode:overlay;opacity:.65;clip-path: ellipse(50% 15% at 50% 101%);"></div>';

echo '<div class="position-absolute w-100 h-100 bg-accent-secondary" style="top:0;left:0;mix-blend-mode:overlay;opacity:.65;"></div>';

echo '<div class="position-absolute w-100 bg-accent-secondary" style="height:100px;bottom:-100px;left:0;mix-blend-mode:overlay;opacity:.65;clip-path: ellipse(50% 15% at 50% 0%);"></div>';

echo '<a href="' . get_the_permalink() . '" class="position-absolute w-100 h-100 d-flex align-items-center justify-content-center z-2 text-center col-services-link" style="top:0;left:0;border:4px solid var(--accent-quaternary);opacity:0;pointer-events:none;text-decoration:none;background:rgba(246,142,86,.5);">';
echo '<h3 class="mb-0 bold h4" style="">' . get_the_title() . '</h3>';
echo '</a>';

echo '<div class="w-100" style="">';
echo '<span class="h1 pb-5 d-inline-block">' . str_pad($counter, 2, '0', STR_PAD_LEFT) . '</span>';

// echo '<h3 class="mb-0 pb-4 h4" style="border-bottom:10px solid var(--accent-quinary);"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h3>';

echo '<div class="container">';

echo '<div class="d-flex align-items-baseline">';
echo '<div class="col-2 pb-lg-0 pl-0 pb-3 text-white">';

echo '<div class="" style="border:1px solid var(--accent-primary);border-radius:50%;width: 35px;height: 35px;display: flex;align-items: center;justify-content: center;">';
echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="width:15px;" fill="white"><path d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"/></svg>';
echo '</div>';

echo '</div>';

echo '<div class="d-inline-block position-relative text-white pl-0">';
echo '<h4 class="mb-0 h6 pb-4" style="border-bottom:10px solid var(--accent-primary);"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h4>';
echo '</div>';
echo '</div>';
echo '</div>';


echo '</div>';
echo '</div>';
echo '</div>';
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
endwhile; endif;
// end of services

 get_footer();

?>