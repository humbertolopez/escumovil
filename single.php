<?php
  $post = $wp_query->post;
  if (in_category('portatiles')) {
    include(TEMPLATEPATH.'/single-productos.php');
  } else if (in_category('remolques')) {
  	include(TEMPLATEPATH.'/single-productos.php');
  } else if (in_category('testimoniales')) {
  	include(TEMPLATEPATH.'/single-testimoniales.php');
  } else if (in_category('oficinas')) {
    include(TEMPLATEPATH.'/single-productos.php');
  } else if (in_category('industrial')) {
    include(TEMPLATEPATH.'/single-productos.php'); 
  } else {
    include(TEMPLATEPATH.'/single-blog.php');
  }
?>