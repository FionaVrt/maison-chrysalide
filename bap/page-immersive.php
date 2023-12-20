<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bap
 */

get_header();
?>
  <h1>Une salle immersive exlusive en France</h1>

<section class="cards">
		<div class="cards-quote">
		  <img src="asset/quote-left.png" alt="" class="cards-quote-img-left">

			<p class="cards-quote-text"> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt <br><br>
			ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea <br><br>
			commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <br><br>
			Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut <br><br>
			enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor " </p>

			<img src="asset/quote-right.png" alt="" class="cards-quote-img-right">
		</div>

		<div class="cards-reservation">
			<div class="cards-reservation-content">
				<h2 class="cards-reservation-content-title">Réservation</h2>
				<p class="cards-reservation-content-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				<a href="" class="cards-reservation-content-btn">Réserver</a>
			</div>
		</div>
</section>

<section class="immersive">
	<h3 class="immersive-title">Découvrir la salle </h3>
	<p class="immersive-text">Tournez, vibrez, plongez ! Bienvenue dans le carrousel de l'immersion, où chaque tour révèle une nouvelle dimension de l'émerveillement. Montez à bord de l'aventure et laissez-vous emporter dans un tourbillon de sensations inédites. Réservez votre place pour un tour inoubliable dans notre salle immersive, où le divertissement prend une toute nouvelle tournure</p>
	<div id="carouselExampleFade" class="carousel slide carousel-fade">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="square-container">
                  <img src="<?= get_template_directory_uri(); ?>/asset/Image/pexels-damien-snyers-19406925.jpg" alt="...">
                </div>
              </div>
              <div class="carousel-item">
                <div class="square-container">
                  <img src="<?= get_template_directory_uri(); ?>/asset/Image/image 7.png" class="d-block square-image" alt="...">
                </div>
              </div>
              <div class="carousel-item">
                <div class="square-container">
                  <img src="<?= get_template_directory_uri(); ?>/asset/Image/pexels-damien-snyers-19406925.jpg" class="d-block square-image" alt="...">
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          
	
	
</section>
	
<?php

get_footer();
