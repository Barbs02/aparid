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











<?php get_footer(); ?>