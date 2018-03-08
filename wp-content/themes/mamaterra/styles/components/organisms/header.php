<!-- components/organisms/header.php -->

<?php 

$logo = "";
$image = get_field('logo', 'option');
$alt = get_bloginfo('name');

if ($image) {

	$logo = '<img class="logo" src="' . $image['url'] . '" alt="' . $alt . '" />';

 } ?>

	<header id="masthead" class="site-header row seamless">

		<nav id="site-navigation" class="main-navigation col-xs-12 col-md">
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
		</nav><!-- #site-navigation -->
		
		<div class="site-branding col-xs-12 col-md">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<span><?php bloginfo( 'name' ); ?></span>
						<?php echo $logo; ?>
					</a>
				</h1>
			<?php else : ?>
				<p class="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<span><?php bloginfo( 'name' ); ?></span>
						<?php echo $logo; ?>
					</a>
				</p>
			<?php endif; ?>
		</div><!-- .site-branding -->
		
		<?php if ( has_nav_menu( 'social' ) ) { ?>
		<div id="social-links" class="social-navigation col-xs-12 col-md">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'social',
					'menu_id'        => 'social-links',
				) );
			?>
		</div>
		<?php }?><!-- #social-links -->
		
	</header><!-- #masthead -->
