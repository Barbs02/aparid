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
 <!-- Formulario -->

 <div class="container-fluid px-100">
    <div class="row pt-100">
        <div class="col-md-8 mx-auto">
            <h2 class="color-azul text-center font-solway">Comunícate con nosotros, nos encantaría escucharte.</h2>
            <div class="row">
                
                    <div class="col-md-6">
                        <form>
                        <br><label for="nombre"><p>Nombre:</p></label>
                        <input  type="text" id="nombre" name="nombre" style="width: 100%;" class="border1 bg-color-beige p-3" required>
                    </div>
                    <br>
                    <div class="col-md-6">
                        <br><label for="apellido"><p>Apellido:</p></label>
                        <input type="text" id="apellido" name="apellido" style="width: 100%;" class="border1 bg-color-beige p-3" required>
                    </div>

                    <br>
                    <div class="col-md-6">
                        <br><label for="celular"><p>Celular:</p></label>
                        <input type="tel" id="celular" name="celular" style="width: 100%;" pattern="[0-9]{10}" class="border1 bg-color-beige p-3" required>

                    </div>
                    
                    <br>
                    <div class="col-md-6">
                        <br><label for="email"><p>Email:</p></label>
                        <input type="email" id="email" name="email" style="width: 100%;" class="border1 bg-color-beige p-3" required>
                    </div>
                    

                    <br>
                    <div class="col-md-12">
                        <br><label for="mensaje"><p>Mensaje:</p></label>
                        <textarea id="mensaje" name="mensaje" rows="4" style="width: 100%;" class="border1 bg-color-beige p-3" required></textarea>
                    </div>
                    

                    <br><br>

                    <div class="col-md-4 py-5 me-5">
                        <button type="submit" class="border1 p-2 w-100">Enviar</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>
    <!-- +++++++++++++++++++++++ container iframe +++++++++++++++++++++++++++++++ -->

<!-- <div class="iframe-container">

<div class="iframe-contenido">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1>contenido por el otro lado</h1>
      </div>
    </div>
  </div>
</div>

<div class="iframe-container"> -->
    <!-- +++++++++++++++++++++++ iframe +++++++++++++++++++++++++++++++ -->

    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3345.505209863092!2d-71.5394986!3d-33.016818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9689ddda2a411b19%3A0xdccfdce373c6232f!2s7%20Nte.%201420%2C%202531077%20Vi%C3%B1a%20del%20Mar%2C%20Valpara%C3%ADso!5e0!3m2!1ses!2scl!4v1699730740401!5m2!1ses!2scl" class="iframe-content" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->

    <!-- Columna derecha -->

    <!-- <div class="contenido01">
      <div class="container">
        <div class="row">
          <div class="col-md-12"> -->
            <!-- Contenido de la columna derecha -->
            <!-- <h1>contenido al otro lado</h1>
          </div>
        </div>
      </div>
    </div>
  </div> -->

   
  
  
  
  <!-- +++++++++++++++++++++++ Mapa y datos de contacto +++++++++++++++++++++++++++++++ -->

  <div class="container-fluid px-100 pb-100">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="font-solway color-azul">Ubicación</h2>
                    <br>
                    <p>7 Norte. 1420, código postal 2531077 Viña del Mar, Valparaíso</p>
                </div>
                <div class="col-md-8">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3345.505209863092!2d-71.5394986!3d-33.016818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9689ddda2a411b19%3A0xdccfdce373c6232f!2s7%20Nte.%201420%2C%202531077%20Vi%C3%B1a%20del%20Mar%2C%20Valpara%C3%ADso!5e0!3m2!1ses!2scl!4v1699730740401!5m2!1ses!2scl" class="iframe-mapa" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-3">
                    <ul class="datos-contacto">
                        <li>
                            <a href="https://wa.me/+56978402893" target="_blank">
                                <img src="" alt="" class="pe-2">
                                <p>+569 7840 2893</p>
                            </a>
                            
                        </li>
                        <li>
                            <a href="mailto:aparid@gmail.com" target="_blank">
                                <img src="" alt="" class="pe-2">
                                <p>aparid@gmail.com</p>
                            </a>
                            
                        </li>
                        <li>
                            <a href="https://www.instagram.com/aparidvina/" target="_blank">
                                <img src="" alt="" class="pe-2">
                                <p>@aparidvina</p>
                            </a>
                            
                        </li>
                        <li>
                            <a href="https://www.facebook.com/aparid" target="_blank">
                                <img src="" alt="" class="pe-2">
                                <p>aparid</p>
                            </a>
                           
                        </li>
                        
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
</div>


<?php get_footer(); ?>