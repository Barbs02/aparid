<?php
/*
Template Name: Sindrome de Down
*/
?>

<?php get_header(); ?>

<!---------------------------------------------------- Banner Sindrome de Down ---------------------------------------------------->
<header>
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?> 
        <?php
        echo do_shortcode('[smartslider3 slider="11"]');
        ?>
    <?php endwhile; ?>	
    <?php else : ?>  
    <?php endif; ?>
    <?php wp_reset_query(); ?>
</header>


<!--------------------------------------------------- Sobre el Sindrome de Down --------------------------------------------------->
<section class="sd" >
    <div class="container-fluid px-100">
    <div class="row py-100">
            <?php if (have_posts()): ?>
                <?php query_posts("category_name=down"); ?>
                <?php while (have_posts()):
                    the_post(); ?>
                    <div class="col-md-1"></div>
                    <div class="col-md-6 font-kulim">
                        <p class="font-size-1">
                            <?php the_field('descripcion_sd_1'); ?>
                        </p>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4" data-aos="fade-left"  data-aos-duration="1500">
                        <h2 class="font-bold"><?php the_field('cita_sd'); ?></h2>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
        <div class="row "> <!-- segundo loop -->
            <?php if (have_posts()): ?>
                <?php query_posts("category_name=down"); ?>
                <?php while (have_posts()):
                    the_post(); ?>
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <?php
                        $image = get_field('imagen_cromosomas_1');
                        if (!empty($image)): ?>
                            <img class="img-fluid position-relative " src="<?php echo esc_url($image['url']); ?>"
                                alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                        <div class="cuadrado bg-color-azul position-absolute "></div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-6 font-kulim">
                        <p class="font-size-1">
                            <?php the_field('descripcion_sd_2'); ?>
                        </p>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
        <div class="row py-100">
            <?php if (have_posts()): ?>
                <?php query_posts("category_name=down"); ?>
                <?php while (have_posts()):
                    the_post(); ?>
                    <div class="col-md-1"></div>
                    <div class="col-md-6 font-kulim">
                        <p class="font-size-1">
                            <?php the_field('descripcion_sd_3'); ?>
                        </p>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <?php
                        $image = get_field('imagen_cromosomas_2');
                        if (!empty($image)): ?>
                            <img class="img-fluid position-relative" src="<?php echo esc_url($image['url']); ?>"
                                alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                        <div class="cuadrado bg-color-celeste position-absolute "></div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</section>

<!--------------------------------------------------- Somos APARID --------------------------------------------------->

<section class="somos">
    <div class="container-fluid px-100 bg-color-beige">
        <div class="row py-100">
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

<!----------------------------------------------------- Banner Proceso ----------------------------------------------------->

<section>
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?> 
        <?php
        echo do_shortcode('[smartslider3 slider="10"]');
        ?>
    <?php endwhile; ?>	
    <?php else : ?>  
    <?php endif; ?>
    <?php wp_reset_query(); ?>
</section>
<!-- Contenido del Proceso -->
<section class="proceso" >
    <div class="container-fluid px-100">
        <div class="row py-100">
            <?php if (have_posts()): ?>
                <?php query_posts("category_name=down"); ?>
                <?php while (have_posts()):
                    the_post(); ?>
                    <div class="col-md-5">
                        <?php
                        $image = get_field('imagen_referencial_1');
                        if (!empty($image)): ?>
                            <img class="img-fluid position-relative z-3" src="<?php echo esc_url($image['url']); ?>"
                                alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                        <div class="cuadrado bg-color-celeste position-absolute "></div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5 font-kulim">
                        <p class="font-size-1 font-kulim">
                            <?php the_field('descripcion_proceso_1'); ?>
                        </p>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
        <div class="row pb-100">
            <?php if (have_posts()): ?>
                <?php query_posts("category_name=down"); ?>
                <?php while (have_posts()):
                    the_post(); ?>
                    <div class="col-md-5 font-kulim">
                        <p class="font-size-1">
                            <?php the_field('descripcion_proceso_2'); ?>
                        </p>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <?php
                        $image = get_field('imagen_referencial_2');
                        if (!empty($image)): ?>
                            <img class="img-fluid position-relative z-3" src="<?php echo esc_url($image['url']); ?>"
                                alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                        <div class="cuadrado bg-color-azul position-absolute "></div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</section>

<!------------------------------------------ Banner A Tener En Cuenta ------------------------------------------>

<section class="pb-100">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?> 
        <?php
        echo do_shortcode('[smartslider3 slider="8"]');
        ?>
    <?php endwhile; ?>	
    <?php else : ?>  
    <?php endif; ?>
    <?php wp_reset_query(); ?>
</section>

<!------------------ Contenido ------------------>

<section class="cuenta" >
    <div class="container-fluid px-100">
        <div class="row pb-100">
                <?php if (have_posts()): ?>
                    <?php query_posts("category_name=tener-en-cuenta"); ?>
                    <?php while (have_posts()):
                        the_post(); ?>
                        <div class="col-md-5 font-kulim">
                            <p class="font-size-1">
                                <?php the_field('descripcion_tener_en_cuenta'); ?>
                            </p>
                        </div>
                        <div class="col-md-3"></div>
                        <div class="col-md-4" data-aos="fade-up-right" data-aos-duration="2000">
                            <?php
                            $image = get_field('imagen_referencial_1');
                            if (!empty($image)): ?>
                                <img class="img-fluid position-relative z-3" src="<?php echo esc_url($image['url']); ?>"
                                    alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                            <div class="cuadrado bg-color-celeste position-absolute "></div>
                        </div>
                                <!-- elemntos a 3 columnas -->
                        <div class="row pt-100">
                            <div class="col-md-4 justify-content-center font-kulim" data-aos="fade-up" data-aos-duration="1000">
                                <div class="row">
                                    <div class="col-md-6 mx-auto text-center">
                                    <?php
                                    $image = get_field('icono_referencial_1');
                                    if (!empty($image)): ?>
                                        <img class="img-c mx-auto" src="<?php echo esc_url($image['url']); ?>"
                                            alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                    </div>
                                </div>
                                <br>
                                <h2 class="color-azul font-solway font-size-4 font-bold text-center">
                                    <?php the_field('titulo_caracteristica_1'); ?>
                                </h2>
                                <p class="font-size-2">
                                    <?php the_field('descripcion_pautas_1'); ?>
                                </p>
                            </div>
                            <div class="col-md-4 justify-content-center font-kulim" data-aos="fade-up" data-aos-duration="2000">
                                <div class="row">
                                    <div class="col-md-6 mx-auto text-center">
                                    <?php
                                    $image = get_field('icono_referencial_2');
                                    if (!empty($image)): ?>
                                        <img class="img-c mx-auto " src="<?php echo esc_url($image['url']); ?>"
                                            alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                    </div>
                                </div>
                                <br>
                                <h2 class="color-azul font-solway font-size-4 font-bold text-center">
                                    <?php the_field('titulo_caracteristica_2'); ?>
                                </h2>
                                <p class="font-size-2">
                                    <?php the_field('descripcion_pautas_2'); ?>
                                </p>
                            </div>
                            <div class="col-md-4 justify-content-center font-kulim" data-aos="fade-up" data-aos-duration="3000">
                                <div class="row">
                                    <div class="col-md-6 mx-auto text-center">
                                    <?php
                                    $image = get_field('icono_referencial_3');
                                    if (!empty($image)): ?>
                                        <img class="img-c mx-auto" src="<?php echo esc_url($image['url']); ?>"
                                            alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                    </div>
                                </div>
                                <br>
                                <h2 class="color-azul font-solway font-size-4 font-bold text-center">
                                    <?php the_field('titulo_caracteristica_3'); ?>
                                </h2>
                                <p class="font-size-2">
                                    <?php the_field('descripcion_pautas_3'); ?>
                                </p>
                            </div>
                        </div>
                        
                    <?php endwhile; ?>
                <?php else: ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
        </div>
    </div>
</section>

<!-- ---------------------Trabajamos la inclusión a través de nuestros---------------------------- -->

<div class="container-fluid px-100 ">
    <div class="row align-items-center">

        <!---TITULO CON HR A LA IZQUIERDA Y HR A LA DERECHA--> <!-- ....ok sergio -->

        <div class="col-md-3 text-center">
            <hr class="my-4 border2 bg-color-naranjo">
        </div>

        <div class="col-md-6 text-center">
            <h2 class="font-size-7 font-solway color-azul">Trabajamos la inclusión a través de nuestros programas</h2>
        </div>

        <div class="col-md-3 text-center">
            <hr class="my-4 border2 bg-color-naranjo">
        </div>
        <br>
    </div>
    <br>
</div>
<section>

    <div class="container-fluid px-100">
        <div class="row">
            <?php if (have_posts()) : ?>
                <?php query_posts("category_name=programas"); ?>
            <?php while (have_posts()) : the_post(); ?> 
                <div class="col-md-6 p-4 zoom-effect">
                    <div class="row border3">
                        <div class="col-md-4 font-kulim">
                            <?php
                            $image = get_field('imagen_referencial_programa');
                            if (!empty($image)): ?>
                                <img class="img-fluid mx-auto pt-3 border-radius" src="<?php echo esc_url($image['url']); ?>"
                                    alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>

                            <p class="font-size-2">
                                <?php the_field('descripcion_extra_de_la_imagen_del_programa'); ?>
                            </p>
                        </div>
                        <div class="col-md-8 font-kulim">
                            <h2 class="font-size-7 font-solway color-azul"><?php the_field('siglas_programas'); ?></h2>
                            <p class="font-size-2">
                                <?php the_excerpt(); ?><a href="servicios-#programas">Ver más</a>
                            </p>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>	
            <?php else : ?>  
            <?php endif; ?>
            <?php wp_reset_query(); ?>
            <div class="col-md-2 mx-auto py-100">
                    <button class="border1 p-2 w-100 hover-boton bg-boton" href="<?php echo get_permalink( '15' ); ?>">Programas</button>
            </div>
        </div>
    </div>
</section>

<!-- ---------------------Encuentra más información sobre el Síndrome de Down---------------------------- -->
<div class="container-fluid px-100 ">
    <div class="row align-items-center">

        <!---TITULO CON HR A LA IZQUIERDA Y HR A LA DERECHA--> <!-- ....ok sergio -->

        <div class="col-md-3 text-center">
            <hr class="my-4 border2 bg-color-naranjo">
        </div>

        <div class="col-md-6 text-center">
            <h2 class="font-size-7 font-solway color-azul">Encuentra más información sobre el Síndrome de Down </h2>
        </div>

        <div class="col-md-3 text-center">
            <hr class="my-4 border2 bg-color-naranjo">
        </div>
        <br>
    </div>
    <br>
</div>
<section>
    <div class="container-fluid px-100">
        <div class="row pb-100">
            <?php if (have_posts()) : ?>
                <?php query_posts("category_name=links&showposts=3"); ?>
            <?php while (have_posts()) : the_post(); ?> 
            <div class="col-md-4 p-4 zoom-effect">
                    <div class="row border3">
                            <?php
                            $image = get_field('logo_sitio');
                            if (!empty($image)): ?>
                                <img class="img-fluid p-0" src="<?php echo esc_url($image['url']); ?>"
                                    alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                        <div class=" text-center py-5">
                            <h2 class="font-solway font-light font-size-3 color-azul">
                            <?php the_field('nombre_del_sitio'); ?>
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

<?php get_footer(); ?>