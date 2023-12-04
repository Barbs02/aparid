<?php
$post = $wp_query->post;
if ( in_category('casos-de-exito') ) {
include(TEMPLATEPATH . '/single_casos.php'); } 
elseif ( in_category('productos') ) {
include(TEMPLATEPATH . '/single_productos.php'); }
else {
include(TEMPLATEPATH . '/single_default.php');
}
?>