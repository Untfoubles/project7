<?php
/**
* Plugin Name: Mijn eigen plugin
* Plugin URI: gluwebURL
* Description: Vertel hier iets over de werking van je plugin.
Version: 1.0.0
Author: Je Naam
Author URI: gluwebURL
License: GPL-2.0+
*/

// Voeg html toe onderin de pagina.
add_action('get_footer','mybox');
function mybox(){
  echo '<div class="infobox">Hier komt wat informatie</div>';
}
// Voeg styling toe in de <head>.
add_action('get_header','mystyles');
function mystyles(){
  echo '<style>
  .infobox{
     background-color:black;
   width:100%;
   height:54px;
   color:white;
   display:flex;
   justify-content:center;
   align-items:center;
 }
 </style>';
}

add_action('admin_menu', 'mijnplugin_menu');
function mijnplugin_menu(){
 add_menu_page('Wijzig tekst','Eigen plugin','manage_options','eigenplugin_settings_page','mijnplugin_page');
}
function mijnplugin_page(){
 echo '<h2>'.__('Footer Instellingen','menu-test').'</h2>';
 include_once('eigenplugin_settings_page.php');
}


