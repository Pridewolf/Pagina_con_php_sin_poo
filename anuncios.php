<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>
<main class="contenedor seccion">
  <h2>Casas y depas en venta</h2>
  <?php
  $limite = 10;
  include 'includes/templates/anuncios.php'
  ?>

  <?php incluirTemplate('footer'); ?>