<?php
/*
Template Name: Donaciones
*/
?>

<?php get_header(); ?>

<!-------------------------------------- Slider Donaciones -------------------------------------->
<header>
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?> 
        <?php
        echo do_shortcode('[smartslider3 slider="12"]');
        ?>
    <?php endwhile; ?>	
    <?php else : ?>  
    <?php endif; ?>
    <?php wp_reset_query(); ?>
</header>

<!------------------------------------- ¿Quieres Ayudarnos? ------------------------------------->
<section class="help">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto my-5">
                    <?php if (have_posts()): ?>
                        <?php query_posts("category_name=donaciones"); ?>
                        <?php while (have_posts()):
                            the_post(); ?>
                <div class="row">
                    
                                <div class="text-center font-size-7 font-solway  pb-4">
                                    <!-- Titulo de ¿Quieres Ayudarnos -->
                                    <h2 class="color-azul font-bold" >
                                        <?php the_title(); ?>
                                    </h2>
                                </div>
                            <div class="col-md-5 font-size-1 font-kulimpark">
                                <!-- Texto de ¿Quieres Ayudarnos? -->
                                <p>
                                    <?php the_content(); ?> 
                                </p>
                            </div>
                            
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-5">
                                <!-- IMG de ¿Quieres Ayudarnos? -->
                                <?php
                                $image = get_field('imagen_donaciones');
                                if (!empty($image)): ?>
                                    <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>"
                                        alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                            </div>
                            <br>
                            <!------- Boton ------->
                            <div class="col-md-3 pt-3 ">
                                
                            </div>
                            <?php endwhile; ?>
                    <?php else: ?>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                    
                </div>
                <div class="row pt-4 ">

                <?php if (have_posts()): ?>
                        <?php query_posts("category_name=iconos-donaciones"); ?>
                        <?php while (have_posts()):
                            the_post(); ?>
                    <div class="col-md-3 mx-auto">
                        <ul class="d-flex flex-column justify-content-between align-items-center list-unstyled" style="height: 400px;">
                            <li>
                            <h2 class="font-solway color-azul text-center">Transferencia</h2>
                                <h2 class="font-solway color-naranjo text-center">Bancaria</h2>
                            </li>
                            <li class="">
                                <?php
                                $image = get_field('donaciones-icono1');
                                if (!empty($image)): ?>
                                    <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>"
                                        alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                            </li>
                            <li class="w-100">
                                <button class="border1 p-2 hover-boton bg-boton w-100" type="button" data-bs-toggle="modal" data-bs-target="#modal1">Donar</button>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-3 mx-auto">
                        <ul class="d-flex flex-column justify-content-between align-items-center list-unstyled" style="height: 400px;">
                            <li>
                                <h2 class="font-solway color-azul text-center">Transferencia</h2>
                                <h2 class="font-solway color-naranjo text-center">WebPay</h2>
                            </li>
                            <li class="">
                                <?php
                                $image = get_field('donaciones-icono2');
                                if (!empty($image)): ?>
                                    <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>"
                                        alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                            </li>
                            <li class="w-100">
                                <button class="border1 p-2 hover-boton bg-boton w-100" href="servicios-#programas">Donar</button>
                            </li>
                        </ul>
                    </div>

                    <div class="col-md-3 mx-auto">
                        <ul class="d-flex flex-column justify-content-between align-items-center list-unstyled " style="height: 400px;">
                            <li>
                            <h2 class="font-solway color-azul text-center">Transferencia</h2>
                                <h2 class="font-solway color-naranjo text-center">PayPal</h2>
                            </li>
                            <li class="">
                                <?php
                                $image = get_field('donaciones-icono3');
                                if (!empty($image)): ?>
                                    <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>"
                                        alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                            </li>
                            <li class="w-100">
                                <button class="border1 p-2 hover-boton bg-boton w-100" href="servicios-#programas">Donar</button>
                            </li>
                        </ul>
                    </div>
                    <?php endwhile; ?>
                    <?php else: ?>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                </div>
                
            </div>
        </div>
    </div>
</section>
<!----------------------------------Modal--------------------------------------------->
<div class="container-fluid mx-auto">
    <div class="row">
        <div class="col-md-12">

        <?php if (have_posts()) : ?>
        <?php query_posts("category_name=datos-transferencia"); ?>
    <?php while (have_posts()) : the_post(); ?> 
                
                <div class="modal" tabindex="-1" id="modal1">
                    <div class="modal-dialog modal-xl mx-auto overflow-auto font-kulim">
                        <div class="modal-content font-kulim">
                        <div class="modal-header bg-color-beige">
                            <h2 class="color-azul font-solway font-size-5">
                                <?php the_title(); ?>
                            </h2>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-footer bg-color-beige font-kulim">
                            <div class="pt-3"></div>
                            <div class="container-fluid">
                                <div class="row font-kulim ">
                                    
                                    <div class="col-md-8 font-kulim">
                                        <p class="font-size-2 font-kulim">
                                            <?php the_content(); ?>
                                        </p>
                                    </div>
                                    <div class="col-md-4 font-kulim">
                                        <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                                    </div>
                                        
                                    
                                </div>
                                
                            </div>
                            
                            
                            <button type="button" class="border1 p-2 bg-boton hover-boton align-self-end" data-bs-dismiss="modal">Cerrar</button>

                        </div>
                    </div>
                </div>
            </div>

    <?php endwhile; ?>	
    <?php else : ?>  
    <?php endif; ?>
    <?php wp_reset_query(); ?>

        </div>
    </div>
   
</div>

<!-------------------------------- Trayecto de tu aporte monetario -------------------------------->
<section>
    <?php
    $args = array(
        'category_name' => 'trayecto',
    );

    $custom_query = new WP_Query($args);

    if ($custom_query->have_posts()) :
        while ($custom_query->have_posts()) : $custom_query->the_post();
    ?>

    <div class="container-fluid px-100 pt-100">
        <h5 class="font-solway font-size-6 color-azul align-self-center">Trayecto Monetario</h5>
        <br><br>
    </div>
    <div class="container-fluid px-100 position-relative"> <!-- linea-vertical-container -->
        <div class="row">
            <div class="col-md-2 col-sm-4 align-self-center">
                <?php
                $image = get_field('imagen_trayecto_1');
                if (!empty($image)) :
                ?>
                    <img class="mx-auto img-fluid" src="<?php echo esc_url($image['url']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
            <div class="col-md-10 col-sm-8 align-self-center">
                <h2 class="color-naranjo font-solway font-size-5 servicios-p-r servicios-p-r2" data-aos="fade-right" data-aos-duration="1500">
                    <?php the_field('titulo_paso_1'); ?>
                </h2>
                <h6 class="color-azul font-kulim font-size-3 font-regular donaciones-p-r">
                    <?php the_field('descripcion_trayecto'); ?>
                </h6>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-2 col-sm-4 align-self-center">
                <?php
                $image = get_field('imagen_trayecto_2');
                if (!empty($image)) :
                ?>
                    <img class="mx-auto img-fluid" src="<?php echo esc_url($image['url']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
            <div class="col-md-10 col-sm-8 align-self-center">
                <h2 class="color-naranjo font-solway font-size-5 servicios-p-r servicios-p-r2" data-aos="fade-right" data-aos-duration="1500">
                    <?php the_field('titulo_pasos_2'); ?>
                </h2>
                <h6 class="color-azul font-kulim font-size-3 font-regular donaciones-p-r">
                    <?php the_field('descripcion_trayecto_2'); ?>
                </h6>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-2 col-sm-4 align-self-center">
                <?php
                $image = get_field('imagen_trayecto_3');
                if (!empty($image)) :
                ?>
                    <img class="mx-auto img-fluid" src="<?php echo esc_url($image['url']); ?>"
                         alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
            <div class="col-md-10 col-sm-8 align-self-center">
                <h2 class="color-naranjo font-solway font-size-5 servicios-p-r servicios-p-r2" data-aos="fade-right" data-aos-duration="1500">
                    <?php the_field('titulo_pasos_3'); ?>
                </h2>
                <h6 class="color-azul font-kulim font-size-3 font-regular donaciones-p-r">
                    <?php the_field('descripcion_trayecto_3'); ?>
                </h6>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-2 col-sm-4 align-self-center">
                <?php
                $image = get_field('imagen_trayecto_4');
                if (!empty($image)) :
                ?>
                    <img class="mx-auto img-fluid" src="<?php echo esc_url($image['url']); ?>"
                         alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
            <div class="col-md-10 col-sm-8 align-self-center">
                <h2 class="color-naranjo font-solway font-size-5 servicios-p-r servicios-p-r2" data-aos="fade-right" data-aos-duration="1500">
                    <?php the_field('titulo_pasos_4'); ?>
                </h2>
                <h6 class="color-azul font-kulim font-size-3 font-regular donaciones-p-r">
                    <?php the_field('descripcion_trayecto_4'); ?>
                </h6>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-2 col-sm-4 align-self-center">
                <?php
                $image = get_field('imagen_trayecto_5');
                if (!empty($image)) :
                ?>
                    <img class="mx-auto img-fluid" src="<?php echo esc_url($image['url']); ?>"
                         alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
            <div class="col-md-10 col-sm-8 align-self-center">
                <h2 class="color-naranjo font-solway font-size-5 servicios-p-r servicios-p-r2" data-aos="fade-right" data-aos-duration="1500">
                    <?php the_field('titulo_pasos_5'); ?>
                </h2>
                <h6 class="color-azul font-kulim font-size-3 font-regular donaciones-p-r">
                    <?php the_field('descripcion_trayecto_5'); ?>
                </h6>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-2 col-sm-4 align-self-center">
                <?php
                $image = get_field('imagen_trayecto_6');
                if (!empty($image)) :
                ?>
                    <img class="mx-auto img-fluid" src="<?php echo esc_url($image['url']); ?>"
                         alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
            <div class="col-md-10 col-sm-8 align-self-center">
                <h2 class="color-naranjo font-solway font-size-5 servicios-p-r servicios-p-r2" data-aos="fade-right" data-aos-duration="1500">
                    <?php the_field('titulo_pasos_6'); ?>
                </h2>
                <h6 class="color-azul font-kulim font-size-3 font-regular donaciones-p-r">
                    <?php the_field('descripcion_trayecto_6'); ?>
                </h6>
            </div>
        </div>
        
    </div>

    <?php endwhile;
        wp_reset_postdata(); // Restablecer datos de la consulta
    endif; ?>
    <div class="container pt-100"></div>
</section>


<!----------------------------------- Otras formas de Apoyarnos ----------------------------------->
<section>
    <div class="container-fluid px-100">
        <div class="row">
            <div class="col-md-12 mx-auto my-5">
                <div class="row">
                    <?php if (have_posts()): ?>
                        <?php query_posts("category_name=formas-de-apoyo"); ?>
                        <?php while (have_posts()):
                            the_post(); ?>
                            <div class="text-center font-size-7 font-solway pb-4">
                                <!-- Titulo Otras formas de Apoyarnos -->
                                <h2 class="color-azul font-bold" >
                                    <?php the_title(); ?>
                                </h2>
                            </div>
                            <div class="col-md-6 font-size-1 font-kulim">
                                <!-- Texto de Otras formas de Apoyarnos -->
                                <p class="font-kulim">
                                    <?php the_content(); ?>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <!-- SLIDER de Otras formas de Apoyarnos -->
                                <?php
                                $image = get_field('imagen_referencial_apoyo');
                                if (!empty($image)): ?>
                                    <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>"
                                        alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                            </div>

                        <?php endwhile; ?>
                    <?php else: ?>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                </div>
            </div>
        </div>
        <!-- Transparencia------------------------------ -->
        <div class="row">
            <div class="col-md-12 bg-color-beige border1" data-aos="fade-up" data-aos-duration="1500">
                <?php if (have_posts()): ?>
                    <?php query_posts("category_name=formas-de-apoyo"); ?>
                    <?php while (have_posts()):
                        the_post(); ?>
                        <div class="row p-3">
                        <div class="col-md-2">
                          <div class="row">
                            <div class="col-md-6">
                                  <!-- Icono de Megafono -->
                                    <?php
                                        $image = get_field('icono_transparencia');
                                        if (!empty($image)): ?>
                                            <img class="img-c d-flex align-self-center" src="<?php echo esc_url($image['url']); ?>"
                                                alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-10 font-kulim">
                            <!-- Contenido de Transparencia -->
                            <h3 class="font-size-4 font-bold color-azul font-solway">
                                <?php the_field('titulo_transparencia'); ?>
                            </h3>
                            <p class="font-size-2 font-kulim">
                                <?php the_field('descripcion_transparencia'); ?>
                            </p>
                        </div>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>

            </div>
        </div>
    </div>
</section>

<!--------------------------------------------------- Somos APARID --------------------------------------------------->

<section class="somos pt-100">
    <div class="container-fluid px-100 bg-color-beige">
        <div class="row pt-4">
            <?php if (have_posts()): ?>
                <?php query_posts("category_name=somos"); ?>
                <?php while (have_posts()):
                    the_post(); ?>
                    <div class="col-md-5 align-self-center">
                        <?php
                        $image = get_field('imagen_somos');
                        if (!empty($image)): ?>
                            <img class="img-fluid position-relative z-3" src="<?php echo esc_url($image['url']); ?>"
                                alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                        <div class="cuadrado bg-color-azul position-absolute "></div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-6 somos-p font-kulim">
                        <h2 class="font-size-7 font-solway color-azul">
                            <?php the_title(); ?>
                        </h2>
                        <p class="font-size-1 font-kulim">
                            <?php the_field('descripcion_somos'); ?>
                            <a href="quienes-somos">Ver más</a>
                        </p>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</section>

<!-------------------------------QUIERES SER SOCIO------------------------------------------>


<section class="socios">
    <div class="container-fluid px-100 qss">
        <div class="row">
            <!-----todo esto va dentro de un background image(?----->
            <?php if (have_posts()): ?>
            <?php query_posts("category_name=socio"); ?>
            <?php while (have_posts()):
                the_post(); ?>
                <div class="container-fluid p-0 position-relative">
                    <?php
                    echo do_shortcode('[smartslider3 slider="3"]');
                    ?>
                </div>
            <?php endwhile; ?>
            <?php else: ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</section>

<!-------------------------------------- Slider Colaboradores -------------------------------------->
<section class="pb-100">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?> 
        <?php
        echo do_shortcode('[smartslider3 slider="7"]');
        ?>
    <?php endwhile; ?>	
    <?php else : ?>  
    <?php endif; ?>
    <?php wp_reset_query(); ?>
</section>

<!-------------------------------------- Seccion Colaboradores -------------------------------------->
<section>
    <div class="container-fluid px-100">
        <div class="row pb-100">
            <?php if (have_posts()) : ?>
                <?php query_posts("category_name=colaboradores&showposts=3"); ?>
            <?php while (have_posts()) : the_post(); ?> 
            <div class="col-md-4 p-4 zoom-effect">
                    <div class="row border3">
                            <?php
                            $image = get_field('icono_empresa');
                            if (!empty($image)): ?>
                                <img class="img-fluid mx-auto" src="<?php echo esc_url($image['url']); ?>"
                                    alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                        <div class=" text-center py-3">
                            <h2 class="font-solway font-light font-size-3 color-azul">
                            <?php the_field('nombre_empresa'); ?>
                            </h2>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>	
            <?php else : ?>  
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</section>
<!-- Certificación -->
<section>
    <div class="container pb-100">
        <div class="row">
            <div class="col-md-10 mx-auto my-5">
                <div class="row">
                    <?php if (have_posts()): ?>
                        <?php query_posts("category_name=certificacion"); ?>
                        <?php while (have_posts()):
                            the_post(); ?>
                            <div class="col-md-5 font-kulim">
                                <!-- Texto de Certificacion -->
                                <h3 class="font-size-7 font-solway font-bold color-azul" data-aos="fade-right" data-aos-duration="1500">
                                    <?php the_title(); ?>
                                </h3>
                                <br>
                                <p class="font-size-1 font-kulim">
                                    <?php the_content(); ?>
                                </p>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-5" data-aos="fade-up" data-aos-duration="1500">
                                <!-- IMG de Certificacion -->
                                <?php
                                $image = get_field('imagen_certificacion');
                                if (!empty($image)): ?>
                                    <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>"
                                        alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                            </div>
                            <br>
                            <!------- Boton ------->
                            <div class="col-md-3 mx-auto">
                                <button class="border1 p-3 w-100 hover-boton bg-boton" href="servicios-#programas">Contáctanos</button>
                            </div>
                        <?php endwhile; ?>
                    <?php else: ?>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </div>
</section>




<!----------------------------- Script ----------------------------->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    //set up global variables for all functions to use
    var item = '.timeline-item';
    var content = '.p-timeline-content';
    var active = 'i-is-active';

    //Handling events
    $('.timeline-item').on('click', function () { showTimelineContent(this); });
    $('.close').on('click', function () { closeCurrentContent(this); });

    function showTimelineContent(element) {
        var itemId = $(element).find('.p-timeline-carmodel').attr('data-car');
        var highlighted = $(element).find('.p-timeline-carmodel');

        //Prevent having multiple items with the class i-is-active
        if ($(item).hasClass(active)) { $(item).removeClass(active); }

        //grab the id from the data attribute of each contentblock
        $(content).each(function () {
            var contentid = $(this).attr('data-car');

            //check if timeline item id is equal to the content id
            //If they're equal, show the content associated to that timeline item
            if (itemId == contentid) {
                var current = $(content + '[data-car="' + contentid + '"]');
                $(current).addClass(active);
                $(element).addClass(active);

                //If the content is not the selected (current) one
                $(content).not(current).removeClass(active);

                //Scroll to shown content
                var target = $(current);
                $('html, body').stop().animate({ scrollTop: target.offset().top }, 1000);
            }
        });
    }

    function closeCurrentContent(event) {
        var contentblock = $(event).parents(content);
        var contentid = $(contentblock).attr('data-car');
        $(item).each(function () {
            var itemId = $(this).find('.p-timeline-carmodel').attr('data-car');

            if (itemId == contentid) {
                //move page back to timeline
                var target = $('.timeline-title');
                $('html, body').stop().animate({ scrollTop: target.offset().top }, 1000);

                //remove class i-is-active from highlighted item 
                var currentItem = $(this).removeClass(active);
                contentblock.removeClass(active);

            }
        });
    }
</script>

<?php get_footer(); ?>