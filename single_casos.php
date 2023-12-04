<?php get_header(); ?>

<div class="container-fluid px-100">
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
                    <div class="col-md-6">
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
                    <div class="col-md-6">
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











<?php get_footer(); ?>