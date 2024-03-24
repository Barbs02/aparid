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
            <h2 class="color-azul text-center font-solway" data-aos="fade-up" data-aos-duration="1500">Comunícate con nosotros, nos encantaría escucharte.</h2>
            <div class="row">
                
                    <div class="col-md-6 pt-5 pb-3">
                        <form method='POST' >
                        <label for="nombre"><p class="font-kulim" >Nombre:</p></label>
                        <input  type="text" id="nombre" name="nombre" style="width: 100%;" class="border1 bg-color-beige p-3" required>
                    </div>
                    <div class="col-md-6 pt-5 pb-3">
                        <label for="apellido"><p class="font-kulim" >Apellido:</p></label>
                        <input type="text" id="apellido" name="apellido" style="width: 100%;" class="border1 bg-color-beige p-3" required>
                    </div>

                    <div class="col-md-6 py-3">
                        <label for="celular"><p class="font-kulim" >Celular:</p></label>
                        <input type="number" id="celular" name="celular" style="width: 100%;" pattern="[0-9]{10}" class="border1 bg-color-beige p-3" required>

                    </div>
                    
                    <div class="col-md-6 py-3">
                        <label for="email"><p class="font-kulim" >Email:</p></label>
                        <input type="email" id="email" name="email" style="width: 100%;" class="border1 bg-color-beige p-3" required>
                    </div>
                    

                    <div class="col-md-12">
                        <label for="mensaje"><p class="font-kulim" >Mensaje:</p></label>
                        <textarea id="mensaje" name="mensaje" rows="4" style="width: 100%;" class="border1 bg-color-beige p-3" required></textarea>
                    </div>
                    

                    <br><br>

                    <div class="col-md-4 pt-4 me-5">
                        <button type="submit" class="border1 bg-boton p-2 w-100 hover-boton">Enviar</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>

  <!-- +++++++++++++++++++++++ Mapa y datos de contacto +++++++++++++++++++++++++++++++ -->

  <div class="container-fluid px-100 py-100">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="row">
                <div class="col-md-12 font-kulim">
                    <?php if (have_posts()) : ?>
                        <?php query_posts("category_name=contacto"); ?>
                    <?php while (have_posts()) : the_post(); ?> 
                        <h2 class="font-solway color-azul"><?php the_title(); ?></h2>
                        <br>
                        <p><?php the_field('ubicacion_textual'); ?></p>
                        <div class="row">
                            <div class="col-md-8 ">
                                <?php the_field('mapa_de_ubicacion'); ?>
                            </div>

  <!-- +++++++++++++++++++++++ Final del Mapa de ubicacion +++++++++++++++++++++++++++++++ -->

  <!-- +++++++++++++++++++++++ Inicio de redes sociales +++++++++++++++++++++++++++++++ -->

                            <div class="col-md-1"></div>
                <div class="col-md-3 py-100">
                    <ul class="datos-contacto">
                          <!-- +++++++++++++++++++++++ contacto telefono +++++++++++++++++++++++++++++++ -->
                        <li class="pb-4">
                            <div class="row">                  
                                <div class="col-md-3 p-0">
                                <a class="m-0 p-0" href="https://wa.me/+56978402893" target="_blank">
                                    <?php 
                                    $image = get_field('contacto_telefono_icono');
                                    if( !empty( $image ) ): ?>
                                        <img class="img-fluid w-r-30" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                    </a>
                                </div>  
                                <div class="col-md-9 font-kulim">
                                <a class="m-0 p-0" href="https://wa.me/+56978402893" target="_blank">
                                    <p><?php the_field('contacto_telefono'); ?></p>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <!-- +++++++++++++++++++++++ contacto correo +++++++++++++++++++++++++++++++ -->
                        <li class="pb-4">
                        <div class="row">                  
                                <div class="col-md-3 p-0">
                                <a class="m-0 p-0" href="mailto:aparid@gmail.com" target="_blank">
                                    <?php 
                                    $image = get_field('contacto_correo_icono');
                                    if( !empty( $image ) ): ?>
                                        <img class="img-fluid w-r-30" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                    </a>
                                </div>  
                                <div class="col-md-9 font-kulim">
                                <a class="m-0 p-0" href="mailto:aparid@gmail.com" target="_blank">
                                    <p><?php the_field('contacto_correo'); ?></p>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <!-- +++++++++++++++++++++++ contacto instagram +++++++++++++++++++++++++++++++ -->
                        <li class="pb-4">
                        <div class="row">                  
                                <div class="col-md-3 p-0">
                                <a class="m-0 p-0" href="https://www.instagram.com/aparidvina/" target="_blank">
                                    <?php 
                                    $image = get_field('contacto_instagram_icono');
                                    if( !empty( $image ) ): ?>
                                        <img class="img-fluid w-r-30" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                    </a>
                                </div>  
                                <div class="col-md-9 font-kulim">
                                <a class="m-0 p-0" href="https://www.instagram.com/aparidvina/" target="_blank">
                                    <p><?php the_field('contacto_instagram'); ?></p>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <!-- +++++++++++++++++++++++ contacto facebook +++++++++++++++++++++++++++++++ -->
                        <li class="pb-4">
                        <div class="row">                  
                                <div class="col-md-3 p-0">
                                <a class="m-0 p-0" href="https://www.facebook.com/aparid" target="_blank">
                                    <?php 
                                    $image = get_field('contacto_facebook_icono');
                                    if( !empty( $image ) ): ?>
                                        <img class="img-fluid w-r-30" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                    </a>
                                </div>  
                                <div class="col-md-9 font-kulim">
                                <a class="m-0 p-0" href="https://www.facebook.com/aparid" target="_blank">
                                    <p><?php the_field('contacto_facebook'); ?></p>
                                    </a>
                                </div>
                            </div>
                        </li>
                        
                    </ul>
                </div>
                        </div>
                        
                                
                    <?php endwhile; ?>	
                    <?php else : ?>  
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                    
                </div>
            </div>
            
        </div>
    </div>
</div>

<!-- -----------Footer------------- -->

<div class="container-fluid px-100 footer">
    <?php if (have_posts()) : ?>
        <?php query_posts("category_name=contacto"); ?>
    <?php while (have_posts()) : the_post(); ?> 
        <div class="row pt-4">
            
            

                

        </div>

        <div class="row py-3">
            <div class="col-md-2">
                <?php 
                $image = get_field('logo_aparid');
                if( !empty( $image ) ): ?>
                    <img class="img-fluid w-r-60" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-3">
                        <img src="assets/correo-electronico 4.png" alt="">
                    </div>
                    <div class="col-9 font-kulim">
                        <h3 class="color-azul font-size-3">Atención/Horario</h3>
                        <br>
                        <p class="font-size-1"><?php the_field('contacto_horario'); ?></p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-7"></div>
            <div class="col-md-2"></div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-1">
                        <img src="assets/correo-electronico 4.png" alt="">
                    </div>
                    <div class="col-5">
                        <h3 class="color-azul font-size-3">Términos y condiciones</h3>
                        <br>
                        <a href="#">
                            <p class="font-size-1 pb-2 font-kulim">Microsoft iconos creados por Freepik - Flaticon</p>
                        </a>
                        
                        <a href="#">
                            <p class="font-size-1 font-kulim">Foto de RDNE Stock project - Pexels</p>
                        </a>
                    </div>
                    <div class="col-5">
                        <h3 class="color-invicible font-size-3"> . </h3>
                        <br>
                        <a href="#">
                            <p class="font-size-1 pb-2 font-kulim">Foto de Anna Shvets - Pexels</p>
                        </a>
                        <a href="#">
                            <p class="font-size-1 font-kulim">Foto de Pavol Štugel en Unsplash</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>	
    <?php else : ?>  
    <?php endif; ?>
    <?php wp_reset_query(); ?>
</div>
<div class="container-fluid bg-color-azul py-3">
        <?php if (have_posts()) : ?>
                    <?php query_posts("category_name=contacto"); ?>
                <?php while (have_posts()) : the_post(); ?> 
                
                    <div class="row">
                    <div class="col-md-2 mx-auto text-center">
                    <p class="text-white mb-0 font-kulim">© 2013 - APARID</p>
                    </div>
                    </div>
                <?php endwhile; ?>	
                <?php else : ?>  
                <?php endif; ?>
                <?php wp_reset_query(); ?>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> <!-- AOS JS -->
<script>
    AOS.init();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recoger los datos del formulario
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $celular = $_POST ['celular']
        $email = $_POST['email'];
        $mensaje = $_POST['mensaje'];
    
        $correo = 'suberobarbara14@gmail.com';
        $asunto = 'Asunto del correo';
        $mensaje = $nombre + $apellido + $celular + $email + $mensaje ;
    
        // Envío del correo
        if (mail($correo, $asunto, $mensaje)) {
            echo 'El correo se ha enviado correctamente.';
        } else {
            echo 'Hubo un error al enviar el correo. Detalles del error: ' . error_get_last()['message'];
    
        }
    }
</script>


</body>
</html>