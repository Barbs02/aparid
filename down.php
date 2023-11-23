<?php
/*
Template Name: Sindrome de Down
*/
?>

<?php get_header(); ?>

<!---------------------------------------------------- Banner Sindrome de Down ---------------------------------------------------->




<!--------------------------------------------------- Sobre el Sindrome de Down --------------------------------------------------->
<div class="container-fluid px-100">
    <div class="row py-100">
        <?php if (have_posts()): ?>
            <?php query_posts("category_name="); ?>
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
                    <p class="font-size-1">
                        <?php the_field('------------------'); ?>
                    </p>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
    <div class="row py-100">
        <?php if (have_posts()): ?>
            <?php query_posts("category_name="); ?>
            <?php while (have_posts()):
                the_post(); ?>
                <div class="col-md-1"></div>
                <div class="col-md-6">
                    <p class="font-size-1">
                        <?php the_field('------------------'); ?>
                    </p>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-4">
                    <?php
                    $image = get_field('logo_instagram_blanco');
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

<!--------------------------------------------------- Somos APARID --------------------------------------------------->

<div class="container-fluid px-100 bg-color-beige">
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

<!------------------------------------------------- Quieres Ser Socio ------------------------------------------------->

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

<!----------------------------------------------------- Banner Proceso ----------------------------------------------------->

<!-- Contenido del Proceso -->

<div class="container-fluid px-100">
    <div class="row py-100">
        <?php if (have_posts()): ?>
            <?php query_posts("category_name="); ?>
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
                    <p class="font-size-1">
                        <?php the_field('------------------'); ?>
                    </p>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
    <div class="row py-100">
        <?php if (have_posts()): ?>
            <?php query_posts("category_name="); ?>
            <?php while (have_posts()):
                the_post(); ?>
                <div class="col-md-1"></div>
                <div class="col-md-6">
                    <p class="font-size-1">
                        <?php the_field('------------------'); ?>
                    </p>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-4">
                    <?php
                    $image = get_field('logo_instagram_blanco');
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

<!------------------------------------------ Banner A Tener En Cuenta ------------------------------------------>



<!------------------ Contenido ------------------>

<div class="container-fluid px-100">
    <div class="row py-100">
            <?php if (have_posts()): ?>
                <?php query_posts("category_name="); ?>
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
                        <p class="font-size-1">
                            <?php the_field('------------------'); ?>
                        </p>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
            <?php endif; ?>
            <?php wp_reset_query(); ?>
    </div>
</div>





<?php get_footer(); ?>