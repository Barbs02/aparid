<?php
/*
Template Name: Inicio
*/
?>

<?php get_header(); ?>



<!-------------------------------INICIO------------------------------------------>

<!-- SLIDER -->
<header>
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?> 
    <?php
    echo do_shortcode('[smartslider3 slider="18"]');
    ?>
    <?php endwhile; ?>	
    <?php else : ?>  
    <?php endif; ?>
    <?php wp_reset_query(); ?>
</header>


<!-------------------------------primera sección------------------------------------------>

<section class="inicio">
    <div class="container-fluid px-100">
        <div class="row pt-100 ">
            <?php if (have_posts()): ?>
                <?php query_posts("category_name=inicio"); ?>
                <?php while (have_posts()):
                    the_post(); ?>
                    <div class="col-md-8 mx-auto text-center">
                        <p class="font-size-3">
                            <?php the_field('introduccion_aparid'); ?>
                        </p>
                    </div>
                </div>


                <div class="row py-100">
                    <div class="col-md-10 mx-auto">
                        <div class="row">
                            <div class="col-md-6">
                                <?php
                                $image = get_field('imagen_inicio_frase');
                                if (!empty($image)): ?>
                                    <img class="img-fluid position-relative" src="<?php echo esc_url($image['url']); ?>"
                                        alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                                <div class="cuadrado bg-color-azul position-absolute "></div>
                            </div>
                            <div class="col-md-6 text-center align-self-center justify-content-center">
                                <h1 class="font-size-7 font-solway color-azul">
                                    <?php the_field('frase_motivadora'); ?>​
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
</section>

<!-------------------------------Bienvenido a Holanda------------------------------------------>

<div class="container-fluid bg-color-beige px-100">
    <div class="row py-100">
        <?php if (have_posts()): ?>
            <?php query_posts("category_name=bienvenida"); ?>
            <?php while (have_posts()):
                the_post(); ?>
                <div class="col-md-8 mx-auto text-center">
                    <h2 class="mx-auto font-size-7 font-solway color-azul">
                        <?php the_title(); ?>
                    </h2>
                    <p class="font-size-2 font-kulim">
                        <?php the_field('subtitulo_bienvenida'); ?>
                    </p>
                    <p class="font-size-1 font-kulim">
                        <?php the_field('contexto_bienvenida'); ?>
                    </p>
                </div>

                <br>

                <div class="col-md-8 pt-4">
                    <h4 class="font-size-3 font-italic">
                        <?php the_field('cita_bienvenida'); ?>
                    </h4> <!-- CITA -->
                </div>


                <div class="col-md-1"></div>


                <div class="col-md-2 align-self-center">
                    <a href="https://www.smcoe.org/assets/files/About_FIL/San%20Mateo%20County%20SELPA_FIL/Parent%20and%20Community_FIL/RPC%20Handbook_FIL/Bienvenido%20a%20Holanda%20-%20Copy.pdf" target="blank"><button class="border1 p-2 w-100 bg-boton hover-boton">Ver Carta</button></a>
                </div>

                <div class="col-md-1"></div>
            <?php endwhile; ?>
        <?php else: ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
</div>

<!-------------------------------Somos Aparid------------------------------------------>

<section class="somos">
    <div class="container-fluid px-100">
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
                    <div class="col-md-6">
                        <h2 class="font-size-7 font-solway color-azul">
                            <?php the_title(); ?>
                        </h2>
                        <p class="font-size-1">
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
        <div class="row py-100">
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
                <div class="container position-absolute ">
                    <div class="row">
                        <div class="col-md-8 mx-auto text-center pt-5">
                            <h2 class="font-solway font-size-5 color-blanco font-bold">
                                <?php the_title(); ?>
                            </h2>
                        </div>
                        <div class="container mx-auto pt-5">
                            <div class="row">
                                <div class="col-md-6 mx-5 px-100">
                                    <p class="font-size-2 mx-4">
                                    <?php the_field('parrafo_socio'); ?>
                                    </p>
                                </div>
                                <div class="col-md-2 align-self-center">
                                    <a href="donaciones"><button class="border4 bg-boton p-2 w-100  hover-boton">Conócenos</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <div class="col-md-1"></div>
            <?php endwhile; ?>
            <?php else: ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</section>

<!-------------------------------CASOS DE ÉXITO------------------------------------------>
<section class="casos">
    <div class="container-fluid px-100">
        <h2 class="font-size-7 font-solway color-azul">Casos de éxito</h2>
    </div>

    <div class="container-fluid px-100">
        <div class="row pb-100">
            <?php if (have_posts()): ?>
                <?php query_posts("category_name=casos-de-exito"); ?>
                <?php while (have_posts()):
                    the_post(); ?>
                    <div class="col-md-4 text-center">
                        <?php
                        $image = get_field('imagen_casos');
                        if (!empty($image)): ?>
                            <img class="img-fluid pb-3" src="<?php echo esc_url($image['url']); ?>"
                                alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>

                        <h4 class="color-azul font-size-4 font-kulim">
                            <?php the_title(); ?>
                        </h4>
                        <p class="font-size-1">
                            <?php the_field('profesion_casos'); ?>
                        </p>
                        <a href="<?php the_permalink() ?>">Ver más</a>
                    </div>

                <?php endwhile; ?>
            <?php else: ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</section>



<!-------------------------------CONOCE NUESTROS SERVICIOS------------------------------------------>

<div class="container-fluid px-100 py-3 bg-color-beige">
<h2 class="font-size-7 font-solway color-azul pt-5 text-center">Conoce nuestros servicios</h2>
    <div class="row ">
        <?php if (have_posts()): ?>
            <?php query_posts("category_name=inicio"); ?>
            <?php while (have_posts()):
                the_post(); ?>

                <!---PROGRAMAS-->

                <div class="col-md-6 pt-3">
                        <?php
                        $image = get_field('imagen_referencial_servicios_1');
                        if (!empty($image)): ?>
                            <img class="img-fluid pb-3" src="<?php echo esc_url($image['url']); ?>"
                                alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>

                    <h4 class="text-center font-size-6 color-azul font-kulim"><?php the_field('titulo_servicio_1'); ?></h4>
                    <hr>
                    <p><?php the_field('descripcion_del_servicio_2'); ?>
                        <a href="servicios-#programas">Ver más</a>
                    </p>
                </div>

                <!---SERVICIOS-->

                <div class="col-md-6 pt-3">
                        <?php
                        $image = get_field('imagen_referencial_servicios_2');
                        if (!empty($image)): ?>
                            <img class="img-fluid pb-3" src="<?php echo esc_url($image['url']); ?>"
                                alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                    <h4 class="text-center font-size-6 color-azul font-kulim"><?php the_field('titulo_servicio_2'); ?></h4>
                    <hr>
                    <p><?php the_field('descripcion_del_servicio_2'); ?>
                        <a href="servicios-#actividades">Ver más</a>
                    </p>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
</div>

<!-------------------------------CONOCE LAS OPINIONES DE NUSTRAS FAMILIAS------------------------------------------>

<div class="container-fluid px-100 pt-100">
    <div class="row align-items-center">

        <!---TITULO CON HR A LA IZQUIERDA Y HR A LA DERECHA--> <!-- ....ok sergio -->

        <div class="col-md-3 text-center">
            <hr class="my-4 border2 bg-color-naranjo">
        </div>

        <div class="col-md-6 text-center">
            <h2 class="font-size-7 font-solway color-azul">Conoce las opiniones de nuestras familias</h2>
        </div>

        <div class="col-md-3 text-center">
            <hr class="my-4 border2 bg-color-naranjo">
        </div>
        <br>
    </div>
    <br>
</div>

<!---------------------------------------------TESTIMONIOS-------------------------------------------------->

<section>
<div class="container-fluid px-100">
    <div class="row pb-100">
        <?php if (have_posts()) : ?>
            <?php query_posts("category_name=resenas&showposts=2"); ?>
        <?php while (have_posts()) : the_post(); ?> 
                <div class="col-md-6"> 
                <h2 class="font-size-6 font-solway color-azul"><?php the_field('nombre_resena'); ?></h2>
                <p class="font-kulim font-size-2 font-bold"><?php the_field('nombre_del_hijo'); ?></p>
            <hr>
            <p> <?php the_field('resena'); ?></p><a href="#">Ver más</a>
                </div>
        <?php endwhile; ?>
        <?php else : ?>  
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
</div>
</section>

<?php get_footer(); ?>   