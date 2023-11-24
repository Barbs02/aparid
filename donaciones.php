<?php
/*
Template Name: Donaciones
*/
?>

<?php get_header(); ?>

<!-------------------------------------- Slider Donaciones -------------------------------------->
<section>

</section>

<!------------------------------------- ¿Quieres Ayudarnos? ------------------------------------->
<section>
    <div class="container">
        <div class="row">
            <div class="text-center font-size-7 font-solway">
                <!-- Titulo de ¿Quieres Ayudarnos -->
                <h2>
                    <?php the_title(); ?>
                </h2>
            </div>
            <div class="col-md-10 mx-auto my-5">
                <div class="row">
                    <?php if (have_posts()): ?>
                        <?php query_posts("-------------------"); ?>
                        <?php while (have_posts()):
                            the_post(); ?>
                            <div class="col-md-5 font-size-3 font-kulimpark">
                                <!-- Texto de ¿Quieres Ayudarnos? -->
                                <p>
                                    <?php the_field(''); ?>
                                </p>
                            </div>
                            <div class="col-md-5">
                                <!-- IMG de ¿Quieres Ayudarnos? -->
                                <?php
                                $image = get_field('');
                                if (!empty($image)): ?>
                                    <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>"
                                        alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                            </div>
                            <br>
                            <!------- Boton ------->

                    <?php endwhile; ?>
                    <?php else: ?>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-------------------------------- Trayecto de tu aporte monetario -------------------------------->
<section>
    <div class="container-fluid py-100 px-100">
        <div class="wrap">
            <div class="timeline-wrap">
                <h2 class="timeline-title font-solway font-size-7 text-center">Metodologías de trabajo</h2>
                <p class="font-size-5">Tenemos diferentes procesos de aprendizajes para las distintas etapas en la
                    vida de las personas con síndrome de Down, para ello contamos con atenciones individuales y grupales
                    para potenciar las capacidades de sus hijos a través de los programas de atención.</p>
                <ul class="timeline">
                    <li class="timeline-item bmw">
                        <div class="p-timeline-item">
                            <time class="p-timeline-date font-solway font-size-6">1</time>
                            <span class="p-timeline-carmodel font-kulim" data-car="1">Programa de Atención
                                Temprana</span>
                            <div class="p-timeline-block"></div>
                        </div>
                    </li>
                    <li class="timeline-item mini">
                        <div class="p-timeline-item">
                            <time class="p-timeline-date font-solway font-size-6">2</time>
                            <span class="p-timeline-carmodel font-kulim" data-car="2">Programa de Atención
                                Temprana</span>
                            <div class="p-timeline-block"></div>
                        </div>
                    </li>
                    <li class="timeline-item mini">
                        <div class="p-timeline-item">
                            <time class="p-timeline-date font-solway font-size-6">3</time>
                            <span class="p-timeline-carmodel font-kulim" data-car="3">Programa de Atención
                                Temprana</span>
                            <div class="p-timeline-block"></div>
                        </div>
                    </li>
                    <li class="timeline-item bmw">
                        <div class="p-timeline-item">
                            <time class="p-timeline-date font-solway font-size-6">4</time>
                            <span class="p-timeline-carmodel font-kulim" data-car="4">Programa de Atención
                                Temprana</span>
                            <div class="p-timeline-block"></div>
                        </div>
                    </li>
                    <li class="timeline-item bmw">
                        <div class="p-timeline-item">
                            <time class="p-timeline-date font-solway font-size-6">5</time>
                            <span class="p-timeline-carmodel font-kulim" data-car="5">Programa de Atención
                                Temprana</span>
                            <div class="p-timeline-block"></div>
                        </div>
                    </li>
                </ul>
                <div class="timeline-content">

                    <div class="p-timeline-content" data-car="1">
                        <div class="timeline-content-card">
                            <h3 class="timeline-content-title bmw">1</h3>
                            <time class="timeline-content-date font-kulim">Programa de Atención Temprana (0 a 6 años):
                                Kinesiología -
                                Educación – Fonoaudiología –
                                Terapia Ocupacional</time>
                            <p class="font-size-3 font-kulim">
                                Desde los 0 a 2 años trabajamos principalmente lo que son las habilidades motrices,
                                considerando que generalmente los niños con S.D. , tienen hipotonía debemos estimular
                                todas
                                las áreas motoras, lo que les permitirá lograr en menor tiempo la marcha.
                                Entre los 2 a 6 años se realiza estimulación cognitiva, en esta etapa se comienza con
                                las
                                primeras etapas de Lectura Global, facilitando así la inclusión escolar.</p>
                            <div class="close" data-type-close></div>
                        </div>
                        <div class="timeline-content-image">
                            <!-- Imagen Representativa  -->
                        </div>
                    </div>
                    <div class="p-timeline-content" data-car="2">
                        <div class="timeline-content-card">
                            <h3 class="timeline-content-title mini">2</h3>
                            <time class="timeline-content-date font-kulim">Programa de Atención Temprana (0 a 6 años):
                                Kinesiología -
                                Educación – Fonoaudiología –
                                Terapia Ocupacional</time>
                            <p class="font-size-3 font-kulim"> Desde los 0 a 2 años trabajamos principalmente lo que son
                                las habilidades motrices,
                                considerando que generalmente los niños con S.D. , tienen hipotonía debemos estimular
                                todas
                                las áreas motoras, lo que les permitirá lograr en menor tiempo la marcha.
                                Entre los 2 a 6 años se realiza estimulación cognitiva, en esta etapa se comienza con
                                las
                                primeras etapas de Lectura Global, facilitando así la inclusión escolar.</p>
                            <div class="close" data-type-close></div>
                        </div>
                        <div class="timeline-content-image">
                            <!-- Imagen Representativa  -->
                        </div>
                    </div>
                    <div class="p-timeline-content" data-car="3">
                        <div class="timeline-content-card">
                            <h3 class="timeline-content-title mini">3</h3>
                            <time class="timeline-content-date font-kulim">Programa de Atención Temprana (0 a 6 años):
                                Kinesiología -
                                Educación – Fonoaudiología –
                                Terapia Ocupacional</time>
                            <p class="font-size-3 font-kulim"> Desde los 0 a 2 años trabajamos principalmente lo que son
                                las habilidades motrices,
                                considerando que generalmente los niños con S.D. , tienen hipotonía debemos estimular
                                todas
                                las áreas motoras, lo que les permitirá lograr en menor tiempo la marcha.
                                Entre los 2 a 6 años se realiza estimulación cognitiva, en esta etapa se comienza con
                                las
                                primeras etapas de Lectura Global, facilitando así la inclusión escolar.</p>
                            <div class="close" data-type-close></div>
                        </div>
                        <div class="timeline-content-image">
                            <!-- Imagen Representativa  -->
                        </div>
                    </div>
                    <div class="p-timeline-content" data-car="4">
                        <div class="timeline-content-card">
                            <h3 class="timeline-content-title bmw">4</h3>
                            <time class="timeline-content-date font-kulim">Programa de Atención Temprana (0 a 6 años):
                                Kinesiología -
                                Educación – Fonoaudiología –
                                Terapia Ocupacional</time>
                            <p class="font-size-3 font-kulim"> Desde los 0 a 2 años trabajamos principalmente lo que son
                                las habilidades motrices,
                                considerando que generalmente los niños con S.D. , tienen hipotonía debemos estimular
                                todas
                                las áreas motoras, lo que les permitirá lograr en menor tiempo la marcha.
                                Entre los 2 a 6 años se realiza estimulación cognitiva, en esta etapa se comienza con
                                las
                                primeras etapas de Lectura Global, facilitando así la inclusión escolar.</p>
                            <div class="close" data-type-close></div>
                        </div>
                        <div class="timeline-content-image">
                            <!-- Imagen Representativa  -->
                        </div>
                    </div>
                    <div class="p-timeline-content" data-car="5">
                        <div class="timeline-content-card">
                            <h3 class="timeline-content-title bmw">5</h3>
                            <time class="timeline-content-date font-kulim">Programa de Atención Temprana (0 a 6 años):
                                Kinesiología -
                                Educación – Fonoaudiología –
                                Terapia Ocupacional</time>
                            <p class="font-size-3 font-kulim"> Desde los 0 a 2 años trabajamos principalmente lo que son
                                las habilidades motrices,
                                considerando que generalmente los niños con S.D. , tienen hipotonía debemos estimular
                                todas
                                las áreas motoras, lo que les permitirá lograr en menor tiempo la marcha.
                                Entre los 2 a 6 años se realiza estimulación cognitiva, en esta etapa se comienza con
                                las
                                primeras etapas de Lectura Global, facilitando así la inclusión escolar.</p>
                            <div class="close" data-type-close></div>
                        </div>
                        <div class="timeline-content-image">
                            <!-- Imagen Representativa  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!----------------------------------- Otras formas de Apoyarnos ----------------------------------->
<section>
    <div class="container">
        <div class="row">
            <div class="text-center font-size-7 font-solway">
                <!-- Titulo Otras formas de Apoyarnos -->
                <h2>
                    <?php the_title(); ?>
                </h2>
            </div>
            <div class="col-md-12 mx-auto my-5">
                <div class="row">
                    <?php if (have_posts()): ?>
                        <?php query_posts("---------------"); ?>
                        <?php while (have_posts()):
                            the_post(); ?>
                            <div class="col-md-6 font-size-3 font-kulimpark">
                                <!-- Texto de Otras formas de Apoyarnos -->
                                <p>
                                    <?php the_field(''); ?>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <!-- SLIDER de Otras formas de Apoyarnos -->
                            </div>

                        <?php endwhile; ?>
                    <?php else: ?>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 bg-color-beige">
                <?php if (have_posts()): ?>
                    <?php query_posts("---------------"); ?>
                    <?php while (have_posts()):
                        the_post(); ?>
                        <div class="col-md-2">
                            <!-- Icono de Megafono -->
                        </div>
                        <div class="col-md-8">
                            <!-- Contenido de Transparencia -->
                            <h3 class="font-size-5 font-solway">
                                <?php the_title(); ?>
                            </h3>
                            <p class="font-size-3 font-kulimpark">
                                <?php the_field(''); ?>
                            </p>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>

            </div>
        </div>
    </div>
</section>

<!--------------------------------------- Somos Aparid --------------------------------------->
<section>
    <div class="container-fluid bg-color-beige">
        <div class="row">
            <div class="text-center font-size-7 font-solway">
                <!-- Titulo de Somos Aparid -->
                <h2>
                    <?php the_title(); ?>
                </h2>
            </div>
            <div class="col-md-10 mx-auto my-5">
                <div class="row">
                    <?php if (have_posts()): ?>
                        <?php query_posts("-------------------"); ?>
                        <?php while (have_posts()):
                            the_post(); ?>
                            <div class="col-md-5">
                                <!-- IMG de Somos Aparid -->
                                <?php
                                $image = get_field('');
                                if (!empty($image)): ?>
                                    <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>"
                                        alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                            </div>
                            <div class="col-md-5 font-size-3 font-kulimpark">
                                <!-- Texto de Somos Aparid -->
                                <p>
                                    <?php the_excerpt(); ?>
                                </p>
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

<!--------------------------------- Quieres Ser Socio de Nosotros --------------------------------->
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
                            <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>"
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
                            <h2 class="font-solway font-size-5 color-naranjo">
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
                                    <a href="contacto"><button class="border4 bg-boton p-2 w-100  hover-boton">Conócenos</button></a>
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

<!-------------------------------------- Slider Colaboradores -------------------------------------->
<section>

</section>

<!-------------------------------------- Seccion Colaboradores -------------------------------------->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <?php if (have_posts()): ?>
                        <?php query_posts("-------------------"); ?>
                        <?php while (have_posts()):
                            the_post(); ?>
                            <div class="col-md-4">
                                <?php
                                $image = get_field('');
                                if (!empty($image)): ?>
                                    <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>"
                                        alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                                <br>
                                <p class="font-size-2 font-kulimpark">
                                    <?php the_field(''); ?>
                                </p>
                            </div>
                        <?php endwhile; ?>
                    <?php else: ?>
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10 mx-auto my-5">
                <div class="row">
                    <?php if (have_posts()): ?>
                        <?php query_posts("-------------------"); ?>
                        <?php while (have_posts()):
                            the_post(); ?>
                            <div class="col-md-5">
                                <!-- Texto de Certificacion -->
                                <h3 class="font-size-7 font-solway">
                                    <?php the_title(); ?>
                                </h3>
                                <br>
                                <p class="font-size-3 font-kulimpark">
                                    <?php the_excerpt(); ?>
                                </p>
                            </div>
                            <div class="col-md-5">
                                <!-- IMG de Certificacion -->
                                <?php
                                $image = get_field('');
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
    </div>
</section>




<!--  -->

<?php get_footer(); ?>