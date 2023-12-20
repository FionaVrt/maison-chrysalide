<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bap
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'bap' ); ?></a>

    <nav>
      <div class="burger-button">&#9776;</div>
      <img src="<?= get_template_directory_uri(); ?>/asset/Image/Logo.jpg" alt="Logo du site">
      <ul>
          <li><a href="<?= get_permalink(10) ?>">Accueil</a></li>
          <li><a href="">Actualité</a></li>
          <li><a href="">Dons</a></li>
          <li><a href="">Comme moi</a></li>
          <li><a href="<?= get_permalink(15) ?>">Réservation</a></li>
      </ul>
      <a href="" class="button">Donner</a>
  </nav>
    <main>