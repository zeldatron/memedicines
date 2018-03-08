<!-- Place any head info you would like shared between the styleguide and the root of your project. Eg. Links to js scripts etc.. -->

<?php
    $parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
    require_once( $parse_uri[0] . 'wp-load.php' );
?>
<?php wp_head(); ?>


