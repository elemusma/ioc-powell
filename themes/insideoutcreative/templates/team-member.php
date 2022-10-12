<?php

/**
 * Template Name: Team Members
 */

 get_header();

 // start of services
if(have_rows('team_members')): while(have_rows('team_members')): the_row();
$bgImg = get_sub_field('background_image');
$content = get_sub_field('content');
// $relationship = get_sub_field('relationship');

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


if(have_rows('individual_team_members')):
    echo '<div class="row justify-content-center">';
    $counter = 0;
while(have_rows('individual_team_members')): the_row();
$counter++;
$image = get_sub_field('image');
$name = get_sub_field('name');
$title = get_sub_field('title');
$year = get_sub_field('year');
$email = get_sub_field('email');

echo '<div class="col-md-6 text-white mb-5">';

echo wp_get_attachment_image($image['id'],'full','',['class'=>'w-100 h-auto','style'=>'']);
echo '<p class="h2 bold">' . $name . '</p>';
echo '<p class="h4 bold">' . $title . '</p>';
echo '<a href="mailto:' . $email . '" class="h5">' . $email . '</a>';
echo '<p class="mb-0">' . $year . '</p>';
// echo '<p class="h2 bold">' . get_the_title() . '</p>';


echo '</div>';
endwhile;
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