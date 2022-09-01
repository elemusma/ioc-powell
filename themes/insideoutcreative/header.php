<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 

if(get_field('header', 'options')) { the_field('header', 'options'); }

if(get_field('custom_css')) { 
?> 
<style>
<?php the_field('custom_css'); ?>
</style>
<?php }
wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if(get_field('body','options')) { the_field('body','options'); } ?>
<div class="blank-space"></div>
<header class="position-relative pt-3 pb-3 z-3 box-shadow bg-white w-100" style="top:0;left:0;">

<div class="nav">
<div class="container">
<div class="row align-items-center justify-content-md-between justify-content-center">

<div class="col-md-4 col-6 d-flex align-items-center justify-content-start">
<?php wp_nav_menu(array(
'menu' => 'Contact',
'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-center mb-0'
)); ?>
<a id="navToggle" class="nav-toggle ml-md-4 d-flex">
<div style="margin:0px 4px;">
<div class="line-1"></div>
<div class="line-2"></div>
<div class="line-3"></div>
</div>
<div style="margin:0px 4px;">
<div class="line-1"></div>
<div class="line-2"></div>
<div class="line-3"></div>
</div>
<div style="margin:0px 4px;">
<div class="line-1"></div>
<div class="line-2"></div>
<div class="line-3"></div>
</div>
</a>
</div>

<div class="col-md-4 col-6 text-center">
<a href="<?php echo home_url(); ?>">
<?php 
$logo = get_field('logo','options'); 
if($logo){
echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto','style'=>'max-width:250px;']); 
}
?>
</a>
</div>

<div class="col-md-4 col-12 text-right">
<?php 
echo '<p class="bold mb-0">' . get_bloginfo('description') . '</p>'; 
?>
</div>

<div id="navMenuOverlay" class="position-fixed z-2"></div>
<div class="col-lg-4 col-md-5 col-11 nav-items bg-white" id="navItems">

<div class="pt-5 pb-5">
<div class="close-menu">
<div>
<span id="navMenuClose" class="close h1">X</span>
</div>
</div>
<a href="<?php echo home_url(); ?>">
<?php 
$logo = get_field('logo','options'); 
if($logo){
echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto','style'=>'max-width:250px;']);
}

echo '</a>';

echo '</div>';

wp_nav_menu(array(
'menu' => 'primary',
'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-center mb-0'
));

echo '<div class="small text-center pt-4">';
the_field('website_message','options');
echo '</div>';




echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';

echo '</header>';

?>