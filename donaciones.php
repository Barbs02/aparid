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
                                    <?php the_content(); ?>
                                </p>
                            </div>
                            <div class="col-md-5">
                                <!-- IMG de ¿Quieres Ayudarnos? -->
                                <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
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
                                    <?php the_content(); ?>
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
                                <?php the_content(); ?>
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
                                <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
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
<section>

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
                                <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                                <br>
                                <p class="font-size-2 font-kulimpark">
                                    <?php the_content(); ?>
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
                                <h3 class="font-size-7 font-solway"><?php the_title(); ?></h3>
                                <br>
                                <p class="font-size-3 font-kulimpark">
                                    <?php the_excerpt(); ?>
                                </p>
                            </div>
                            <div class="col-md-5">
                                <!-- IMG de Certificacion -->
                                <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
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

<?php get_footer(); ?>