<?php
/*
Template Name: Inicio
*/
?>

<?php get_header(); ?>



<!-------------------------------INICIO------------------------------------------>

<!-- SLIDER -->


<!-------------------------------primera sección------------------------------------------>


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
                            $image = get_field('logo_instagram_blanco');
                            if (!empty($image)): ?>
                                <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>"
                                    alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6 text-center">
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
                    <br>
                    <p class="font-size-1">
                        <?php the_field('subtitulo_bienvenida'); ?>
                    </p><br>
                    <p class="font-size-1">
                        <?php the_field('contexto_bienvenida'); ?>
                    </p>
                </div>


                <div class="col-md-8">
                    <h4 class="font-size-3">
                        <?php the_field('cita_bienvenida'); ?>
                    </h4> <!-- CITA -->
                </div>


                <div class="col-md-1"></div>


                <div class="col-md-2  ">
                    <a href=""><button class="border1 p-2 w-100 bg-color-beige hover-boton">Ver Carta</button></a>
                </div>

                <div class="col-md-1"></div>
            <?php endwhile; ?>
        <?php else: ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
</div>

<!-------------------------------Somos Aparid------------------------------------------>

<div class="container-fluid px-100">
    <div class="row py-100">
        <?php if (have_posts()): ?>
            <?php query_posts("category_name=somos"); ?>
            <?php while (have_posts()):
                the_post(); ?>
                <div class="col-md-1"></div>
                <div class="col-md-4">
                    <?php
                    $image = get_field('logo_instagram_blanco');
                    if (!empty($image)): ?>
                        <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
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

<!-------------------------------QUIERES SER SOCIO------------------------------------------>


<div class="container-fluid px-100">
    <div class="row py-100">
        <!-----todo esto va dentro de un background image(?----->
        <?php if (have_posts()): ?>
        <?php query_posts("category_name=socio"); ?>
        <?php while (have_posts()):
            the_post(); ?>
        <div class="col-md-8 mx-auto text-center">
            <h2 class="font-solway font-size-5 color-naranjo">
                <?php the_title(); ?>
            </h2>
        </div>
        <br>

        <div class="col-md-8">
            <p class="font-size-3 color-light">
                <?php the_content(); ?>
            </p>
        </div>

        <div class="col-md-1"></div>

        <div class="col-md-2 align-self-center">
            <a href=""><button class="border1 p-2 w-100 bg-color-beige hover-boton">Conócenos</button></a>
        </div>

        <div class="col-md-1"></div>
        <?php endwhile; ?>
        <?php else: ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
</div>

<!-------------------------------CASOS DE ÉXITO------------------------------------------>
<div class="container-fluid px-100">
    <h2 class="font-size-7 font-solway color-azul">Casos de éxito</h2>
</div>

<div class="container-fluid px-100">
    <div class="row pb-100">
        <?php if (have_posts()): ?>
            <?php query_posts("category_name=casos-de-exito"); ?>
            <?php while (have_posts()):
                the_post(); ?>
                <div class="col-md-4">
                    <?php
                    $image = get_field('logo_instagram_blanco');
                    if (!empty($image)): ?>
                        <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>

                    <h4>
                        <?php the_title(); ?>
                    </h4>
                    <p>
                        <?php the_field('profesion_casos'); ?>
                    </p>
                    <a href="">Ver más</a>
                </div>

            <?php endwhile; ?>
        <?php else: ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
</div>



<!-------------------------------CONOCE NUESTROS SERVICIOS------------------------------------------>

<div class="container-fluid px-100 bg-color-beige">
<h2 class="font-size-7 font-solway color-azul">Conoce nuestros servicios</h2>
    <div class="row py-100">
        <?php if (have_posts()): ?>
            <?php query_posts("category_name=inicio"); ?>
            <?php while (have_posts()):
                the_post(); ?>

                <!---PROGRAMAS-->

                <div class="col-md-6">
                    <!---imagen para programas-->

                    <h4 class="text-center font-size-6 color-azul font-kulim"><?php the_field('titulo_servicio_1'); ?></h4>
                    <hr>
                    <p><?php the_field('descripcion_del_servicio_2'); ?>
                        <a href="#">Ver más</a>
                    </p>
                </div>

                <!---SERVICIOS-->

                <div class="col-md-6">
                    <!---imagen para servicios-->
                    <h4 class="text-center font-size-6 color-azul font-kulim"><?php the_field('titulo_servicio_2'); ?></h4>
                    <hr>
                    <p><?php the_field('descripcion_del_servicio_2'); ?>
                        <a href="#">Ver más</a>
                    </p>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
</div>

<!-------------------------------CONOCE LAS OPINIONES DE NUSTRAS FAMILIAS------------------------------------------>

<div class="container-fluid">
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
</div>

<!---TESTIMONIOOOOOOOOOOOS-->

<div class="container-fluid">
    <div class="row">

        <div class="col-md-6">
            <h2 class="font-size-6 font-kulim text-dark">Jorge Salas</h2>
            <hr>
            <p>Como organización comunitaria, nos enfocamos hacia un(a) joven con Síndrome de Down para que sea capaz de
                manejarse y manejar su entorno.
                <br>
                Una persona con discapacidad intelectual puede adaptarse producto del desarrollo de sus capacidades y
                así aprovechar las oportunidades que les brinde la sociedad, buscando las oportunidades de desarrollo
                laboral y ser un aporte a la sociedad. <a href="#">Ver más</a>
        </div>

        <div class="col-md-6">
            <h2 class="font-size-6 font-kulim text-dark"></h2>Cecilia Martínez</h2>
            <hr>
            <p>Como organización comunitaria, nos enfocamos hacia un(a) joven con Síndrome de Down para que sea capaz de
                manejarse y manejar su entorno.
                <br>
                Una persona con discapacidad intelectual puede adaptarse producto del desarrollo de sus capacidades y
                así aprovechar las oportunidades que les brinde la sociedad, buscando las oportunidades de desarrollo
                laboral y ser un aporte a la sociedad. <a href="#">Ver más</a>
        </div>

    </div>
</div>
<!-------------------------------GALERÍA------------------------------------------>

<div class="container-fluid">
    <div class="row">

        <div class="col-md-3">
            <h4>imagen1</h4>
        </div>
        <div class="col-md-3">
            <h4>imagen2</h4>
        </div>
        <div class="col-md-3">
            <h4>imagen3</h4>
        </div>
        <div class="col-md-3">
            <h4>imagen4</h4>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">

        <div class="col-md-3">
            <h4>imagen1</h4>
        </div>
        <div class="col-md-3">
            <h4>imagen2</h4>
        </div>
        <div class="col-md-3">
            <h4>imagen3</h4>
        </div>
        <div class="col-md-3">
            <h4>imagen4</h4>
        </div>
    </div>
</div>


<h5 class="text-left">
    <?php previous_post_link(' %link', '&laquo Anterior', '1') ?>
</h5>
<h5 class="text-left"><a href="<?php the_permalink(); ?>/noticias">info</a></h5>
<h5 class="text-left">
    <?php next_post_link('%link ', 'Siguiente &raquo', '1') ?>
</h5>

<?php get_footer(); ?>