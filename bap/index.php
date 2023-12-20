<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bap
 */

get_header();
?>
  <section class="cards">
        <div class="card">
            <div class="card-content">
                <h2 class="card-title">FAIRE UN DON</h2>
                <p class="card-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p class="card-nombre">15 €</p> 
                <a href="">DONNER</a>
            </div>
        </div>
    
        <div class="logo-quote">
            <div class="logo">
                <img src="<?= get_template_directory_uri(); ?>/asset/Image/MaisonChrisalide.jpg" alt="blabla">
            </div>
            <div class="quote">
                <img src="<?= get_template_directory_uri(); ?>/asset/Image/Quote_left_blue.png">
                <p class="quote-text">"Citation : lorem ipsum dolor sit amet,consecteur adipiscing."</p>
                <p class="quote-author">- Auteur de la citation</p>
                <img src="<?= get_template_directory_uri(); ?>/asset/Image/Quote_right_blue.png">
            </div>
        </div>
    </section>

    <section class="histoire">
        <h2 class="histoire-title">Notre histoire</h2>
        <div class="histoire-content">
            <img src="<?= get_template_directory_uri(); ?>/asset/Image/Quote_right_blue.png" alt="Quote Bas/Droite" class="histoire-content-quote-left">
            <p>
                <!-- SI VOUS POUVEZ CHANGEZ VOTRE TEXTE -->
                Chaque être humain mérite de vivre sa propre vie, d’avoir un travail, des amis et même de pouvoir les recevoir dans sa propre maison.
                <br><br>
                Mais quand on est porteur d’un handicap comme l’autisme, ce n’est pas facile !
                <br><br>
                La plupart ne peuvent pas vivre seul ou chez leurs parents vieillissants et refusent les institutions qui sont trop lourdes et contraignantes.
                <br><br>
                L’association Maison Chrysalide souhaite créer une maison de vie inclusive et connectée où l’écologie et la domotique permettent à de jeunes adultes autistes de vivre en toute autonomie dans un environnement sécurisé et en compagnie d’adultes valides.
                <br><br>
                Et pour cela, nous avons aussi besoin de vous !
            </p>
            <!-- ICI VOUS NE TOUCHEZ PAS -->
            
            <img src="<?= get_template_directory_uri(); ?>/asset/Image/papillon.png" alt="Illustration papillon" class="histoire-content-img">
            <img src="<?= get_template_directory_uri(); ?>/asset/Image/Quote_left_blue.png" class="histoire-content-quote-right">
        </div>
        
    </section>

    <section class="concept">
        <h2>Notre concept</h2>
        <div class="concept-img">
            <img src="<?= get_template_directory_uri(); ?>/asset/Image/Maison.png" class="concept-img-maison">
            <img src="<?= get_template_directory_uri(); ?>/asset/Image/=.png" alt="Image d'un =" class="concept-img-egale">
            <img src="<?= get_template_directory_uri(); ?>/asset/Image/7personnes.png" class="concept-img-7">
            <img src="<?= get_template_directory_uri(); ?>/asset/Image/+.png" alt="Image d'un +" class="concept-img-plus">
            <img class="h-adjust" src="<?= get_template_directory_uri(); ?>/asset/Image/3personnes.png" alt="Image de 2 personnes" class="concept-img-2">
        </div>

        <div class="concept-texte">
           <p>Toutes nos expérience ont obtenu haut la main le label FUN. La découverte du monde spatiale est la thématique principale de chaque expérience.<br> Des découvertes pour tout âges et capacités physiques. </p>
        </div>
        <a href="" class="concept-btn">NOUS AIDER</a>
    </section>



    <section class="timeline">

        <h2 class="timeline-title">SUR QUELQUES ANNÉES</h2>
        
        <div class="timeline-content">
            <div class="timeline-content-item">
                <div class="number">1</div>
                <div class="cursor"></div>
                <div class="content">
                    <h3>STAGE</h3>
                    <p>Description of the stage with all detailes of the steps taken</p>
                </div>
            </div>
            <div class="timeline-content-item">
                <div class="number">2</div>
                <div class="cursor"></div>
                <div class="content">
                    <h3>STAGE</h3>
                    <p>Description of the stage with all detailes of the steps taken</p>
                </div>
            </div>
            <div class="timeline-content-item">
                <div class="number">3</div>
                <div class="cursor"></div>
                <div class="content">
                    <h3>STAGE</h3>
                    <p>Description of the stage with all detailes of the steps taken</p>
                </div>
            </div>
            <div class="timeline-content-item">
                <div class="number">4</div>
                <div class="cursor"></div>
                <div class="content">
                    <h3>STAGE</h3>
                    <p>Description of the stage with all detailes of the steps taken</p>
                </div>
            </div>
        </div>

    </section>
    
    <section class="actualité">

        <h2 class="actualité-title">ACTUALITE</h2>
        <p class="actualité-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

        <div class="actualité-card-container">
            <img src="<?= get_template_directory_uri(); ?>/asset/Image/Papillon_actualité_droite.png" alt="Illustration d'un papillon" class="card-img-papillon-droit">
            <div class="card">
                <img src="<?= get_template_directory_uri(); ?>/asset/Image/pexels-yerkebulan-kunat-19326321.jpg" alt="Image 1" class="card-img">
                <h3 class="card-title">Lorem</h3>
                <p class="card-text">Lorem, ipsum dolor sit amet consectetur <br>adipisicing elit. Sed, eos vitae.</p>
                <button class="card-btn">Découvrir</button>
            </div>

            <div class="card">
                <img src="<?= get_template_directory_uri(); ?>/asset/Image/pexels-damien-snyers-19406925.jpg" class="card-img">
                <h3 class="card-title">Lorem</h3>
                <p class="card-text">Lorem, ipsum dolor sit amet consectetur <br>adipisicing elit. Sed, eos vitae.</p>
                <button class="card-btn">Découvrir</button>
            </div>

            <div class="card">
                <img src="<?= get_template_directory_uri(); ?>/asset/Image/pexels-din-aziz-19400090.jpg" alt="Image 3" class="card-img">
                <h3 class="card-title">Lorem</h3>
                <p class="card-text">Lorem, ipsum dolor sit amet consectetur <br>adipisicing elit. Sed, eos vitae.</p>
                <button class="card-btn">Découvrir</button>
            </div>
            <img src="<?= get_template_directory_uri(); ?>/asset/Image/Papillon_actualité_gauche.png" alt="Illustration d'un papillon" class="card-img-papillon-gauche">
        </div>
        <a href="#" class="actualité-btn">Voir plus d'actualités</a>
    </section>

    <section class="equipe">

        <h2>Notre Equipe</h2>
        <p>Découvrez notre équipe passionnée, un groupe dévoué unissant ses talents pour créer des solutions exceptionnelles et atteindre l'excellence ensemble</p>
        <div class="actualité-card-container">
            <img src="<?= get_template_directory_uri(); ?>/asset/Image/Papillon_actualité_droite.png" alt="Illustration d'un papillon" class="card-img-papillon-droit">
            <div class="card">
                <img src="<?= get_template_directory_uri(); ?>/asset/Image/aiony-haust-3TLl_97HNJo-unsplash.jpg" alt="Image 1" class="card-img">
                <h3 class="card-title">Marie - Claire Domingos</h3>
                <p class="card-text"> vice présidente et coordinatrice.</p>
               
            </div>

            <div class="card">
                <img src="<?= get_template_directory_uri(); ?>/asset/Image/aiony-haust-3TLl_97HNJo-unsplash.jpg" class="card-img">
                <h3 class="card-title">Jossette Domingos</h3>
                <p class="card-text">présidente de l’association</p>
            </div>

            <div class="card">
                <img src="<?= get_template_directory_uri(); ?>/asset/Image/aiony-haust-3TLl_97HNJo-unsplash.jpg" alt="Image 3" class="card-img">
                <h3 class="card-title">Anne Sophie Alvares</h3>
                <p class="card-text">Resp psychologue spécialisée autisme</p>
            </div>

    </section>

    <section class="galerie">
        <div class="galerie-content">
            <div>
                <h2 class="galerie-content-title-h2">Galerie photo</h2>
                <h3 class="galerie-content-title-h3">Des actualités </h3>
                <p class="galerie-content-text">Toutes nos expérience ont obtenu haut la main le label FUN. La découverte du monde spatiale est la thématique principale de chaque expérience.Des découvertes pour tout âges et capacités physiques. </p>
            </div>
            <div>
                <img src="<?= get_template_directory_uri(); ?>/asset/Image/image 29.jpg" alt="" class="galerie-content-image">
            </div>

            <a href="#" class="galerie-content-btn">Voir les images</a>
        </div>
    </section>
    <section>
        <!-- Calendly inline widget begin -->
<div class="calendly-inline-widget" data-url="https://calendly.com/laly123/30min" style="min-width:320px;height:700px;"></div>
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
<!-- Calendly inline widget end -->
    </section>
<?php

get_footer();