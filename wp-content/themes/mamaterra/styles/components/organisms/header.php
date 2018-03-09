<!-- components/organisms/header.php -->

<?php 

$logo = "";
$image = get_field('logo', 'option');
$alt = get_bloginfo('name');

if ($image) {

	$logo = '<img class="logo test" src="' . $image['url'] . '" alt="' . $alt . '" />';

 } ?>

	<header id="masthead" class="site-header seamless">

		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						
						<?php if ( has_custom_logo() ) {the_custom_logo();} ?>
					</a>
				</h1>
			<?php else : ?>
				<p class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						
						<?php if ( has_custom_logo() ) {the_custom_logo();} ?>
					</a>
				</p>
			<?php endif; ?>
		</div><!-- .site-branding -->
			<nav id="site-navigation" class="main-navigation">
			<input type="checkbox" id="show-menu" role="button">
			<label for="show-menu" class="show-menu">
			    <i class="far fa-bars"></i>
			    <i class="far fa-times"></i>
			</label>			
			<?php
				wp_nav_menu( array(
					'theme_location' => 'main',
					'menu_id'        => 'primary-menu',
				) );
			?>
			<?php if ( has_nav_menu( 'social' ) ) { ?>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'social',
					'menu_id'        => 'social-links',
				) );
			?>
		<?php }?><!-- #social-links -->

		</nav><!-- #site-navigation -->
	
		
	</header><!-- #masthead -->
