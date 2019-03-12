<?php
/*
Plugin Name: Extensió de WP per twitter
Plugin URI: Escriu l'adreça URL completa del teu plugin dins de Github
Description: Un extensió que permet accedir a twitter des de WordPress
Version: 0.1
Author: El teu nom i cognom
Author URI: L'adreça URL del teu compte de Github
License: GNU GPLv3
*/
function funcio_piulades($atr) { //$atr és un array associatiu
return '<a href=”http://twitter.com/'.$atr['usuari'].'”>Piulades de
J.Binefa</a>';
}
 add_shortcode( 'piulades', 'funcio_piulades' ); 

?>
