
<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stanleywp
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php wp_head(); ?>
<style>
	.fa {
  padding: 20px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}


.fa-instagram {
  background: #125688;
  color: white;
}
}
</style>
</head>


<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">
		<div class="pos-f-t">
	    <nav class="navbar navbar-dark bg-dark "> <!-- bg-light -->
	    	<div class="bg-dark p-4">
			 <?php if (has_custom_logo()){
					the_custom_logo();
				} else{ ?>
					<div class="navbar-brand mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
			   <?php } ?> 

   			 </div>				
   
			   
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
		   		<div class="collapse navbar-collapse" id="navbarNav">
	            <?php
	            $args = array(
	              'theme_location' => 'primary',
	              'depth'      => 2,
	              'container'  => false,
	              'menu_class'     => 'navbar-nav ml-auto',
	              'walker'     => new Bootstrap_Walker_Nav_Menu()
	              );
	            if (has_nav_menu('primary')) {
	              wp_nav_menu($args);
	            }
	            ?>
	          </div>

	        
		</nav>
		</div>
	</header><!-- #masthead -->

	<?php (is_front_page()) ? $blog_p = 'home-page' : $blog_p = ''; ?>

	<div id="content" class="site-content <?php echo $blog_p; ?>">
