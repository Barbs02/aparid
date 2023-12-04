<?php get_header(); ?>

<section class="single-casos" >
    <div class="container-fluid px-100  py-100">
    <div class="row "> 
                <?php if (have_posts()): ?>
                    <?php while (have_posts()):
                        the_post(); ?>
                        <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <?php
                            $image = get_field('imagen_casos');
                            if (!empty($image)): ?>
                                <img class="img-fluid position-relative " src="<?php echo esc_url($image['url']); ?>"
                                    alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                            <div class="cuadrado bg-color-azul position-absolute "></div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-6">
                            <h2 class="font-solway font-size-5 font-bold color-azul"><?php the_title(); ?></h2>
                            <p class="font-size-1">
                                <?php the_field('historia_parte_1_casos'); ?>
                            </p>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
            <div class="row py-100">
                <?php if (have_posts()): ?>
                    <?php while (have_posts()):
                        the_post(); ?>
                        <div class="col-md-1"></div>
                        <div class="col-md-6">
                            <p class="font-size-1">
                                <?php the_field('historia_parte_2_casos'); ?>
                            </p>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <?php
                            $image = get_field('imagen_casos_2');
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
<!-- Casos de exito ------------------------------------------------------------------>
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
                <div class="col-md-6 p-4">
                    <div class="row border3">
                        <div class="col-md-4">
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
                        <div class="col-md-8">
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
                    <button class="border1 p-2 w-100 hover-boton" href="servicios-#programas">Programas</button>
            </div>
        </div>
    </div>
</section>

<!-------------------------------QUIERES SER SOCIO------------------------------------------>

<section class="socios">
    <div class="container-fluid px-100 qss">
        <div class="row pt-100">
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


<?php get_footer(); ?>