<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
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
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
        
            <li class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></li>
            <button class="burgerButton" aria-controls="primary-menu" aria-expanded="false"> 
                <div class = "lines">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>
            </button>
            
            <div class="opened-menu " style="display:none;">
        
                <div class="images-menu">
                    <img class ="Cat orange" src="https://www.koukaki.romaingilles-code.com/wp-content/themes/foce-child/assets/images/cat-orange.png " alt="Chat orange" >
                    <img class ="Cat black" src="https://www.koukaki.romaingilles-code.com/wp-content/themes/foce-child/assets/images/cat-black.png " alt="Chat noir" >
                    <img class ="Cat blue" src="https://www.koukaki.romaingilles-code.com/wp-content/themes/foce-child/assets/images/cat-blue.png " alt="Chat bleu" >
                    <img class ="Flower lightPurple" src="https://www.koukaki.romaingilles-code.com/wp-content/themes/foce/assets/images/random_flower.png " alt="Fleur mauve" >
                    <img class ="Flower purple" src="https://www.koukaki.romaingilles-code.com/wp-content/themes/foce/assets/images/orchid.png " alt="Fleur violette" >
                    <img class ="hibiscus" src="https://www.koukaki.romaingilles-code.com/wp-content/themes/foce/assets/images/hibiscus_footer.png " alt="Hibiscus" >
                    <img class ="Flower white" src="https://www.koukaki.romaingilles-code.com/wp-content/themes/foce/assets/images/Sunflower.png " alt="Tournesol" >
                    <img class ="groupFlowers " src="https://www.koukaki.romaingilles-code.com/wp-content/themes/foce/assets/images/flower.png " alt="Fleur orange">
                </div>
                <div>
                <ul class="listBurger">
                <img class="menu-logo" src = <?php echo get_stylesheet_directory_uri() . '/assets/images/logo.png' ?>>
                    <li><a href="#story">Histoire</a></li>
                    <li><a href="#characters">Personnages</a></li>
                    <li><a href="#place">Lieu</a></li>
                    <li><a href="#studio">Studio Koukaki</a></li>
                    <li><a class ="fontLogo">STUDIO KOUKAKI</a></li>
                </ul>
                </div>      
          </div>

        </nav>   
</div>
    

		<!-- #site-navigation -->
	</header><!-- #masthead -->
