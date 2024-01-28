<?php
/*
Template Name: Quienes somos
*/
?>

<?php get_header(); ?>

    <!-------------------------------SOMOS------------------------------------------>

    <!-- SLIDER -->
<header>
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?> 
        <?php
        echo do_shortcode('[smartslider3 slider="4"]');
        ?>
    <?php endwhile; ?>	
    <?php else : ?>  
    <?php endif; ?>
    <?php wp_reset_query(); ?>
</header>


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
                    <div class="col-md-6 somos-p font-kulim">
                        <h2 class="font-size-7 font-solway color-azul">
                            <?php the_title(); ?>
                        </h2>
                        <p class="font-size-1">
                            <?php the_field('descripcion_somos'); ?>
                        </p>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</section>

<!-------------------------------METODOLOGIA------------------------------------------>

    <!-- SLIDER DE METODOLOGIA -->
<section class="pb-100">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?> 
        <?php
        echo do_shortcode('[smartslider3 slider="17"]');
        ?>
    <?php endwhile; ?>	
    <?php else : ?>  
    <?php endif; ?>
    <?php wp_reset_query(); ?>
</section>

<div class="container-fluid px-100 mx-auto pb-100">
    <div class="row">
        <?php if (have_posts()) : ?>
            <?php query_posts("category_name=metodologia-somos"); ?>
        <?php while (have_posts()) : the_post(); ?> 
            <div class="col-md-3 align-items-center justify-content-center text-center font-kulim" data-aos="fade-right" data-aos-duration="1000">
                <?php
                $image = get_field('icono_referencial_metodologia');
                if (!empty($image)): ?>
                    <img class="mx-auto" src="<?php echo esc_url($image['url']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                <p><?php the_field('descripcion_metodologia_somos'); ?></p>
            </div>

            <div class="col-md-1 align-self-center" data-aos="fade-right" data-aos-duration="1500">
                    <?php
                    $image = get_field('icono_flecha_metodologia');
                    if (!empty($image)): ?>
                        <img class="" src="<?php echo esc_url($image['url']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
            </div>

            <div class="col-md-4 align-items-center justify-content-center text-center font-kulim" data-aos="fade-right" data-aos-duration="2000">
                <?php
                $image = get_field('icono_referencial_metodologia_2');
                if (!empty($image)): ?>
                    <img class="mx-auto" src="<?php echo esc_url($image['url']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                <p><?php the_field('descripcion_metodologia_somos_2'); ?></p>
            </div>

            <div class="col-md-1 align-self-center" data-aos="fade-right" data-aos-duration="2500">
                    <?php
                    $image = get_field('icono_flecha_metodologia');
                    if (!empty($image)): ?>
                        <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
            </div>

            <div class="col-md-3 align-items-center justify-content-center text-center font-kulim" data-aos="fade-right" data-aos-duration="3000">
                <?php
                $image = get_field('icono_referencial_metodologia_3');
                if (!empty($image)): ?>
                    <img class="mx-auto" src="<?php echo esc_url($image['url']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                <p><?php the_field('descripcion_metodologia_somos_3'); ?></p>
            </div>
        <?php endwhile; ?>	
        <?php else : ?>  
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
</div>

<!-------------------------------CASOS DE ÉXITO------------------------------------------>
<section class="casos">
        <div class="container-fluid px-100 bg-color-beige">
            <h2 class="font-size-7 font-solway color-azul py-4">Casos de éxito</h2>
            <div class="row pb-100">
                <?php if (have_posts()): ?>
                    <?php query_posts("category_name=casos-de-exito"); ?>
                    <?php while (have_posts()):
                        the_post(); ?>
                        <div class="col-md-4 text-center"  data-aos="zoom-in" data-aos-duration="3000">
                            <?php
                            $image = get_field('imagen_casos');
                            if (!empty($image)): ?>
                                <img class="img-fluid pb-3" src="<?php echo esc_url($image['url']); ?>"
                                    alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>

                            <h4 class="color-azul font-size-4 font-kulim">
                                <?php the_title(); ?>
                            </h4>
                            <p class="font-size-1 font-kulim">
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

<!-------------------------------DIRECTORIO------------------------------------------>

<section class="pb-100">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?> 
        <?php
        echo do_shortcode('[smartslider3 slider="16"]');
        ?>
    <?php endwhile; ?>	
    <?php else : ?>  
    <?php endif; ?>
    <?php wp_reset_query(); ?>
</section>
<section class="directorio">
    <div class="container-fluid px-100">
        <div class="row justify-content-center">
            <?php if (have_posts()) : ?>
                <?php query_posts("category_name=directorio"); ?>
            <?php while (have_posts()) : the_post(); ?> 
            <div class="col-md-6 text-center font-kulim"> <!-- Directora -->
                <?php
                $image = get_field('imagen_directora');
                if (!empty($image)): ?>
                    <img class="img-d pb-3" src="<?php echo esc_url($image['url']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                <h3 class="font-size-3 color-azul"><?php the_field('nombre_directora_directorio'); ?></h3>
                <h4 class="font-size-1 color-naranjo"><?php the_field('cargo_directora'); ?></h4>
                <p class="font-size-1"><?php the_field('descripcion_de_cargo'); ?></p>
            </div>
            <?php endwhile; ?>	
            <?php else : ?>  
            <?php endif; ?>
            <?php wp_reset_query(); ?>
    </div>
</div>

    <div class="container-fluid px-100 ">
        <div class="row justify-content-center">
            <?php if (have_posts()) : ?>
                <?php query_posts("category_name=directorio"); ?>
            <?php while (have_posts()) : the_post(); ?> 
                <div class="col-md-3 text-center font-kulim"> <!-- Vice-Presidenta -->
                    <?php
                    $image = get_field('imagen_vicepresidenta');
                    if (!empty($image)): ?>
                        <img class="img-d pb-3" src="<?php echo esc_url($image['url']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    <h3 class="font-size-3 color-azul"><?php the_field('nombre_vicepresidenta_directorio'); ?></h3>
                    <h4 class="font-size-1 color-naranjo"><?php the_field('cargo_vicepresidenta'); ?></h4>
                    <p class="font-size-1"><?php the_field('descripcion_de_cargo_v'); ?></p>
                </div>

                <div class="col-md-3 text-center font-kulim"> <!-- Secretaria -->
                    <?php
                    $image = get_field('imagen_secretaria');
                    if (!empty($image)): ?>
                        <img class="img-d pb-3" src="<?php echo esc_url($image['url']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    <h3 class="font-size-3 color-azul"><?php the_field('nombre_secretaria_directorio'); ?></h3>
                    <h4 class="font-size-1 color-naranjo"><?php the_field('cargo_secretaria'); ?></h4>
                    <p class="font-size-1"><?php the_field('descripcion_de_cargo_s'); ?></p>
                </div>

                <div class="col-md-3 text-center font-kulim"> <!-- Tesorera -->
                    <?php
                    $image = get_field('imagen_tesorera');
                    if (!empty($image)): ?>
                        <img class="img-d pb-3" src="<?php echo esc_url($image['url']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    <h3 class="font-size-3 color-azul"><?php the_field('nombre_tesorera_directorio'); ?></h3>
                    <h4 class="font-size-1 color-naranjo"><?php the_field('cargo_tesorera'); ?></h4>
                    <p class="font-size-1"><?php the_field('descripcion_de_cargo_t'); ?></p>
                </div>

                <div class="col-md-3 text-center font-kulim"> <!-- 1era Directora -->
                    <?php
                    $image = get_field('imagen_1era__directora');
                    if (!empty($image)): ?>
                        <img class="img-d pb-3" src="<?php echo esc_url($image['url']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    <h3 class="font-size-3 color-azul"><?php the_field('nombre__1era_directora_directorio'); ?></h3>
                    <h4 class="font-size-1 color-naranjo"><?php the_field('cargo_1era_directora'); ?></h4>
                    <p class="font-size-1"><?php the_field('descripcion_de_cargo_1d'); ?></p>
                </div>
            <?php endwhile; ?>	
            <?php else : ?>  
            <?php endif; ?>
            <?php wp_reset_query(); ?>

        </div>
    </div>

    <div class="container-fluid px-100 pb-100">
        <div class="row justify-content-center">
            <?php if (have_posts()) : ?>
                <?php query_posts("category_name=directorio"); ?>
            <?php while (have_posts()) : the_post(); ?> 
                <div class="col-md-4 text-center font-kulim"> <!-- Rep. profesionales -->
                    <?php
                    $image = get_field('imagen_rep_profesionales');
                    if (!empty($image)): ?>
                        <img class="img-d pb-3" src="<?php echo esc_url($image['url']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    <h3 class="font-size-3 color-azul"><?php the_field('nombre_rep_profesionales_directorio'); ?></h3>
                    <h4 class="font-size-1 color-naranjo"><?php the_field('cargo_rep_profesionales'); ?></h4>
                    <p class="font-size-1"><?php the_field('descripcion_de_cargo_p'); ?></p>
                </div>

                <div class="col-md-4 text-center font-kulim"> <!-- Secretaria -->
                    <?php
                    $image = get_field('imagen_secretaria_2');
                    if (!empty($image)): ?>
                        <img class="img-d pb-3" src="<?php echo esc_url($image['url']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    <h3 class="font-size-3 color-azul"><?php the_field('nombre_secretaria_directorio_2'); ?></h3>
                    <h4 class="font-size-1 color-naranjo"><?php the_field('descripcion_de_cargo_s2'); ?></h4>
                    <p class="font-size-1"><?php the_field('descripcion_de_cargo_s2'); ?></p>
                </div>

                <div class="col-md-4 text-center font-kulim"> <!-- Coordinadora Pedagógica -->
                    <?php
                    $image = get_field('imagen_coordinadora_pedagogica');
                    if (!empty($image)): ?>
                        <img class="img-d pb-3" src="<?php echo esc_url($image['url']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    <h3 class="font-size-3 color-azul"><?php the_field('nombre_coordinadora_pedagogica_directorio'); ?></h3>
                    <h4 class="font-size-1 color-naranjo"><?php the_field('cargo_coordinadora_pedagogica'); ?></h4>
                    <p class="font-size-1"><?php the_field('descripcion_de_cargo_cp'); ?></p>
                </div>
            <?php endwhile; ?>	
            <?php else : ?>  
            <?php endif; ?>
            <?php wp_reset_query(); ?>
            
        </div>
    </div>
    <div class="container-fluid bg-color-beige pt-5">
    <div class="row font-kulim">
        <?php if (have_posts()) : ?>
            <?php query_posts("category_name=directorio"); ?>
        <?php while (have_posts()) : the_post(); ?> 
        <!---tiene un background color por detras--->
            <h2 class="text-center font-size-6 font-bold font-solway color-azul">Contamos con profesionales</h2>
            <p class="text-center font-size-1">
                <?php the_field('titulo_profesionales'); ?>
            </p>
            <p class="text-center font-size-1 ">
                <?php the_field('nombre_de_profesionales'); ?>
            </p>
        <?php endwhile; ?>	
        <?php else : ?>  
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
</div>
</section>




<!-------------------------------ALIANZAS------------------------------------------>

    <!-- SLIDER PARA ALIANZAS -->
<section class="pb-100">
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?> 
        <?php
        echo do_shortcode('[smartslider3 slider="15"]');
        ?>
    <?php endwhile; ?>	
    <?php else : ?>  
    <?php endif; ?>
    <?php wp_reset_query(); ?>

</section>
    <?php if (have_posts()) : ?>
        <?php query_posts("category_name=alianzas"); ?>
        <?php while (have_posts()) : the_post(); ?> 
            <div class="container-fluid px-100">
            <div class="row font-kulim">

                <div class="col-md-3">
                    <?php
                    $image = get_field('imagen_galeria_1');
                    if (!empty($image)): ?>
                        <img class="img-fluid pb-3" src="<?php echo esc_url($image['url']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>


                <div class="col-md-3">
                    <?php
                    $image = get_field('imagen_galeria_2');
                    if (!empty($image)): ?>
                        <img class="img-fluid pb-3" src="<?php echo esc_url($image['url']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>

                <div class="col-md-3">
                    <?php
                    $image = get_field('imagen_galeria_3');
                    if (!empty($image)): ?>
                        <img class="img-fluid pb-3" src="<?php echo esc_url($image['url']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>

                <div class="col-md-3 ">
                    <?php
                    $image = get_field('imagen_galeria_4');
                    if (!empty($image)): ?>
                        <img class="img-fluid pb-3" src="<?php echo esc_url($image['url']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>

                <p class="text-center font-size-3 font-kulim"><?php the_field('descripcion_alianzas'); ?></p>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">

                <div class="col-md-1"></div>

                <div class="col-md-4" data-aos="zoom-in" data-aos-duration="1500"> 
                    <?php
                    $image = get_field('logo_alianzas_1');
                    if (!empty($image)): ?>
                        <img class="img-fluid pb-3" src="<?php echo esc_url($image['url']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>

                <div class="col-md-2"></div>

                <div class="col-md-4" data-aos="zoom-in" data-aos-duration="1500"> 
                    <?php
                    $image = get_field('logo_alianzas_2');
                    if (!empty($image)): ?>
                        <img class="img-fluid pb-3" src="<?php echo esc_url($image['url']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>

                <div class="col-md-1"></div>
            </div>
        </div>
        <?php endwhile; ?>	
        <?php else : ?>  
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    

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
            <?php endwhile; ?>
            <?php else: ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</section>

<!-------------------------------RESEÑAS------------------------------------------>
    <!-- SLIDER PARA RESEÑAS -->
<section>
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?> 
        <?php
        echo do_shortcode('[smartslider3 slider="6"]');
        ?>
    <?php endwhile; ?>	
    <?php else : ?>  
    <?php endif; ?>
    <?php wp_reset_query(); ?>
</section>
<section>
<div class="container-fluid px-100">
    <div class="row py-100">
        <?php if (have_posts()) : ?>
            <?php query_posts("category_name=resenas&showposts=2"); ?>
        <?php while (have_posts()) : the_post(); ?> 
                <div class="col-md-6 font-kulim"> 
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