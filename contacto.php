<?php
/*
Template Name: Contacto
*/
?>

<?php get_header(); ?>

<section>
<?php
echo do_shortcode('[smartslider3 slider="2"]');
?>
</section>

    <!-- +++++++++++++++++++++++ container iframe +++++++++++++++++++++++++++++++ -->

<div class="iframe-container">

<div class="iframe-contenido">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1>contenido por el otro lado</h1>
      </div>
    </div>
  </div>
</div>

<div class="iframe-container">
    <!-- +++++++++++++++++++++++ iframe +++++++++++++++++++++++++++++++ -->

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3345.505209863092!2d-71.5394986!3d-33.016818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9689ddda2a411b19%3A0xdccfdce373c6232f!2s7%20Nte.%201420%2C%202531077%20Vi%C3%B1a%20del%20Mar%2C%20Valpara%C3%ADso!5e0!3m2!1ses!2scl!4v1699730740401!5m2!1ses!2scl" class="iframe-content" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    <!-- Columna derecha -->

    <div class="contenido01">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- Contenido de la columna derecha -->
            <h1>contenido al otro lado</h1>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!-- +++++++++++++++++++++++ termino de iframe +++++++++++++++++++++++++++++++ -->


<?php get_footer(); ?>