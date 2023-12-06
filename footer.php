<!-- -----------Footer------------- -->

<div class="container-fluid px-100 footer">
    <?php if (have_posts()) : ?>
        <?php query_posts("category_name=contacto"); ?>
    <?php while (have_posts()) : the_post(); ?> 
        <div class="row pt-4">
            <div class="col-md-2">
            <?php 
                $image = get_field('logo_aparid');
                if( !empty( $image ) ): ?>
                    <img class="img-fluid w-r-60" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-3">
                        <img src="assets/correo-electronico 4.png" alt="">
                    </div>
                    <div class="col-9">
                        <h3 class="color-azul font-size-3">Contacto</h3>
                        <br>
                        <p class="font-size-1 pb-2">Tel: <?php the_field('contacto_telefono_fijo'); ?></p>
                        <p class="font-size-1"><?php the_field('contacto_correo'); ?></p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="row">
                    <div class="col-3">
                        <img src="assets/correo-electronico 4.png" alt="">
                    </div>
                    <div class="col-9">
                        <h3 class="color-azul font-size-3">Atención/Horario</h3>
                        <br>
                        <p class="font-size-1"><?php the_field('contacto_horario'); ?></p>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="row">
                    <div class="col-3">
                        <img src="assets/correo-electronico 4.png" alt="">
                    </div>
                    <div class="col-9">
                        <h3 class="color-azul font-size-3"><?php the_title(); ?></h3>
                        <br>
                        <p class="font-size-1"><?php the_field('ubicacion_textual'); ?></p>
                    </div>
                </div>
            </div>

            

        </div>

        <div class="row py-3">
            <div class="col-md-2">
                
            </div>

            <div class="col-md-10">
                <div class="row">
                    <div class="col-1">
                        <img src="assets/correo-electronico 4.png" alt="">
                    </div>
                    <div class="col-5">
                        <h3 class="color-azul font-size-3">Términos y condiciones</h3>
                        <br>
                        <a href="#">
                            <p class="font-size-1 pb-2">Microsoft iconos creados por Freepik - Flaticon</p>
                        </a>
                        
                        <a href="#">
                            <p class="font-size-1">Foto de RDNE Stock project - Pexels</p>
                        </a>
                    </div>
                    <div class="col-5">
                        <h3 class="color-invicible font-size-3"> . </h3>
                        <br>
                        <a href="#">
                            <p class="font-size-1 pb-2">Foto de Anna Shvets - Pexels</p>
                        </a>
                        <a href="#">
                            <p class="font-size-1">Foto de Pavol Štugel en Unsplash</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>	
    <?php else : ?>  
    <?php endif; ?>
    <?php wp_reset_query(); ?>
</div>
<div class="container-fluid bg-color-azul py-3">
        <?php if (have_posts()) : ?>
                    <?php query_posts("category_name=contacto"); ?>
                <?php while (have_posts()) : the_post(); ?> 
                <div class="row">
                    <div class="col-md-2 mx-auto">
                        <ul class="footer-rrss">
                            <li><a href="https://www.facebook.com/aparid" target="_blank">
                            <?php 
                            $image = get_field('logo_facebook_blanco');
                            if( !empty( $image ) ): ?>
                                <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                            </a></li>
                            <li><a href="https://www.instagram.com/aparidvina/" target="_blank">
                            <?php 
                            $image = get_field('logo_instagram_blanco');
                            if( !empty( $image ) ): ?>
                                <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                            </a></li>
                            <li><a href="https://wa.me/+56978402893" target="_blank">
                            <?php 
                            $image = get_field('logo_whatsapp_blanco');
                            if( !empty( $image ) ): ?>
                                <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                            </a></li>
                        </ul>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-2 mx-auto text-center">
                    <p class="text-white mb-0">© 2013 - APARID</p>
                    </div>
                    </div>
                <?php endwhile; ?>	
                <?php else : ?>  
                <?php endif; ?>
                <?php wp_reset_query(); ?>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> <!-- AOS JS -->
<script>
    AOS.init();
</script>
</body>
</html>