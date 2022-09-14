<?php 

 get_header();

 //  start of header
 echo '<section class="position-relative hero-content" style="">';

echo '<div class="position-absolute bg-attachment w-100 h-100 lazyloaded" style="background-size: cover; background-attachment: fixed; background-position: center center; top: 0px; left: 0px; z-index: -3; background-image: url(' . get_the_post_thumbnail_url() . ');"></div>';
 
 echo '<div class="position-absolute w-100 h-100" style="top:0;left:0;background: rgb(255,255,255);
background: radial-gradient(circle, rgba(255,255,255,0) 0%, rgba(75,113,255,1) 70%);mix-blend-mode:multiply;z-index:-2;"></div>';

echo '<div class="container" style="margin-bottom:-10px;">';
echo '<div class="row">';
// echo '<div class="col-lg-6 col-md-9 pt-5">';
// echo '<h1 class="text-white mb-0 page-title text-shadow">' . get_the_title() . '</h1>';
// echo '</div>';

if(have_rows('header_content')): while(have_rows('header_content')): the_row();
echo '<div class="col-12 ml-auto p-0">';
echo '<div style="height:300px;"></div>';
echo '<div class="text-center" style="">';
echo '<div class="text-white text-shadow" style="font-size:150%;">';
echo get_sub_field('content');
echo '</div>';


if(have_rows('links')): while(have_rows('links')): the_row();
$link = get_sub_field('link');
if( $link ): 
$link_url = $link['url'];
$link_title = $link['title'];
$link_target = $link['target'] ? $link['target'] : '_self';
echo '<a class="btn-main" href="' . esc_url( $link_url ) . '" target="' . esc_attr( $link_target ) . '"><span>' . esc_html( $link_title ) . '</span></a>';
endif;


endwhile; endif;

echo '</div>';
echo '</div>';
endwhile; endif;
echo '</div>';
echo '</div>';

echo '<div class="position-relative w-100" style="height:75px;z-index:-1;">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 615.81 94.83" style="margin-bottom:-60px;">
        <defs>
          <style>
            .cls-1 {
              fill: #fff;
            }
          </style>
        </defs>
        <g id="Layer_2" data-name="Layer 2">
          <g id="Layer_1-2" data-name="Layer 1">
            <path class="cls-1" d="M0,94.83V23.72s343.06-53.37,615.81,0V94.83Z"></path>
          </g>
        </g>
      </svg>
    </div>';
 
 
 echo '</section>';
 //  end of header
 
 // start of intro
 echo get_template_part('partials/section-intro-content');
 // end of intro
 
 // start of content
 if(have_rows('content_group')): 
     while(have_rows('content_group')): the_row();
 
     if(have_rows('content_sections')): 
     while(have_rows('content_sections')): the_row();
     $option = get_sub_field('option');
     $classes = get_sub_field('classes');
     $style = get_sub_field('style');
     $bgImg = get_sub_field('background_image');
     $overlayBg = get_sub_field('overlay_background');
     $imgDataAos = get_sub_field('image_data_aos');
     $img = get_sub_field('image');
     $contentDataAos = get_sub_field('content_data_aos');
     $content = get_sub_field('content');
     $bigImage = get_sub_field('big_image');
 
     if($option == 'Content + Image'){
     echo '<section class="position-relative bg-attachment mt-5 mb-5 ' . $classes . '" style="background:url(' . wp_get_attachment_image_url($bgImg['id'],'full') . ');background-size:cover;background-attachment:fixed;padding:250px 0;' . $style . '">';

     if($overlayBg):
     echo '<div class="bg-overlay position-absolute w-100 h-100" style="top:0;left:0;' . $overlayBg . '"></div>';
     endif;
 
     echo '<div class="container">';
     echo '<div class="row row-content align-items-center justify-content-between">';
     echo '<div class="col-md-4 overflow-h">';
     echo '<div class="" data-aos="' . $contentDataAos . '">';
         echo $content;
     echo '</div>';
     echo '</div>';
 
     if($img):
     echo '<div class="col-md-6 overflow-h">';
     echo '<div class="" data-aos="' . $imgDataAos . '">';
         echo wp_get_attachment_image($img['id'],'full','',['class'=>'w-100 h-100','style'=>'object-fit:cover;']);
     echo '</div>';
     echo '</div>';
     endif;
 
     echo '</div>';
     echo '</div>';
 
     echo '</section>';
    } else {
        echo '<section class="position-relative bg-attachment mt-5 mb-5 ' . $classes . '" style="background:url(' . wp_get_attachment_image_url($bigImage['id'],'full') . ');background-size:cover;background-attachment:fixed;padding:250px 0;' . $style . '"></section>';

        echo '<div class="container pb-5 pt-5">';
        echo '<div class="row pb-5">';
        echo '<div class="col-12 text-center">';

        echo '<h2>' . $bigImage['title'] . '</h2>';

        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
     endwhile; 
     endif;
 
 endwhile; 
 endif;
 // end of content
 
 // start of services
if(have_rows('services_content')): while(have_rows('services_content')): the_row();
$bgImg = get_sub_field('background_image');
$content = get_sub_field('content');
$relationship = get_sub_field('relationship');

echo '<section class="position-relative bg-attachment" style="margin-bottom:-70px;">';

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
echo '<h4 class="mb-0 h5 pb-4" style="border-bottom:10px solid var(--accent-primary);"><a href="' . get_the_permalink() . '">' . get_the_title() . '</a></h4>';
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

echo '<div class="position-relative w-100 z-1" style="">';
echo '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 772.52 82.48" style="margin-bottom:-90px;"><defs><style>.cls-1{fill:#fff;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="cls-1" d="M772.52,28.72C391.91,84.06,0,28.72,0,28.72V60.34c432.51,49.8,772.52,0,772.52,0Z"/><rect class="cls-1" width="772.52" height="53.27"/></g></g></svg>';
echo '</div>';

// start of content bottom
if(have_rows('content_group_bottom')): 
    echo '<div class="content-group-bottom">';
    
    while(have_rows('content_group_bottom')): the_row();

    if(have_rows('content_sections')): 
    while(have_rows('content_sections')): the_row();
    $classes = get_sub_field('classes');
    $style = get_sub_field('style');
    $bgImg = get_sub_field('background_image');
    $imgDataAos = get_sub_field('image_data_aos');
    $img = get_sub_field('image');
    $contentDataAos = get_sub_field('content_data_aos');
    $content = get_sub_field('content');
    $overlayBg = get_sub_field('overlay_background');

    echo '<section class="position-relative bg-attachment mt-5 mb-5 ' . $classes . '" style="background:url(' . wp_get_attachment_image_url($bgImg['id'],'full') . ');background-size:cover;background-attachment:fixed;padding:250px 0;' . $style . '">';

    if($overlayBg):
      echo '<div class="bg-overlay position-absolute w-100 h-100" style="top:0;left:0;' . $overlayBg . '"></div>';
      endif;

    echo '<div class="container">';
    echo '<div class="row row-content align-items-center justify-content-between">';
    echo '<div class="col-md-4 overflow-h">';
    echo '<div class="" data-aos="' . $contentDataAos . '">';
        echo $content;
    echo '</div>';
    echo '</div>';

    if($img):
    echo '<div class="col-md-6 overflow-h">';
    echo '<div class="" data-aos="' . $imgDataAos . '">';
        echo wp_get_attachment_image($img['id'],'full','',['class'=>'w-100 h-100','style'=>'object-fit:cover;']);
    echo '</div>';
    echo '</div>';
    endif;

    echo '</div>';
    echo '</div>';

    echo '</section>';
    endwhile; 
    endif;

endwhile; 
echo '</div>';
endif;
// end of content bottom

// start of partners
if(have_rows('partners_group')): while(have_rows('partners_group')): the_row();
echo '<section class="pt-5 pb-5 position-relative bg-attachment" style="">';
echo '<div class="container" style="">';
echo '<div class="row justify-content-center" style="">';
echo '<div class="col-12 text-center" style="">';
echo get_sub_field('content');
echo '</div>';

$gallery = get_sub_field('gallery');
if( $gallery ): 
foreach( $gallery as $image ):
echo '<div class="col-md-4 col-12 col col-partners overflow-h">';
echo '<div class="position-relative">';
// echo '<a href="' . wp_get_attachment_image_url($image['id'], 'full') . '" data-lightbox="image-set">';
echo wp_get_attachment_image($image['id'], 'full','',['class'=>'w-100 h-auto','style'=>'object-fit:contain;'] );
// echo '</a>';
echo '</div>';
echo '</div>';
endforeach; 
endif;

echo '</div>';
echo '</div>';
echo '</section>';
endwhile; endif;
// end of partners

 
  get_footer();

?>