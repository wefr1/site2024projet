<?php

get_header();

?>

     
    <main id="primary" class="site-main">

        <section class="banner" >
            <video class="video banner-image-backup" autoplay loop muted plays-inline>
                <source src="<?php echo get_stylesheet_directory_uri(). '/images_koukaki/Koukaki-vidéo.mp4' ?> " type="video/mp4">
            </video>
            <div class="parallax">
                <img class ="banner-image" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo.png' ?> " alt="logo Fleurs d'oranger & chats errants">
            </div>
        </section>
        <section id="story" class="story fade-in-section">
            <h2 class="title-h2"><span class ="sectionTitles fade-in-section" >L'histoire</span>
            </h2>
            <article id="" class="story__article">
                <p class="fade-in-section"><?php echo get_theme_mod('story'); ?></p>
            </article>
            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>
            <div>
            <article id="characters" class="fade-in-section">
                    <h3>
                        <span class="sectionTitles">Les</span>
                        <span class="sectionTitles">personnages</span>
                    </h3>
            </div>
           
            <?php
                get_template_part ( 'template-parts/slider' , 'slider' );
            ?>
            <article id="place" class="fade-in-section">
                <div>
                    <div class= "clouds">
                        <img class ="bigCloud" src = " <?php echo get_stylesheet_directory_uri(), '/images_koukaki\big_cloud.png' ?>" alt= 'cloud'>
                        <img class ="littleCloud" src= " <?php echo get_stylesheet_directory_uri(), '/images_koukaki/little_cloud.png'?> ">
                    </div>
                    <h3> 
                        <span class="sectionTitles">Le </span>
                        <span class ="sectionTitles">Lieu</span>
                    </h3>


                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>

            </article>
        </section>


        <section id="studio" class="fade-in-section">
        <h2>
            <span class="sectionTitles">Studio</span>
            <span class="sectionTitles">Koukaki</span>
        </h2>

            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
            </section>
            <?php  get_template_part('template-parts/oscarSection');?>
    </main><!-- #main -->

    
<?php
get_footer();