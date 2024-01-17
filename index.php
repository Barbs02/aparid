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
                        <p class="font-size-3 font-kulim">
                            <?php the_field('introduccion_aparid'); ?>
                        </p>
                    </div>
                </div>


                <div class="row py-100">
                    <div class="col-md-10 mx-auto">
                        <div class="row">
                            <div class="col-md-5">
                                <?php
                                $image = get_field('imagen_inicio_frase');
                                if (!empty($image)): ?>
                                    <img class="img-fluid position-relative" src="<?php echo esc_url($image['url']); ?>"
                                        alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                                <div class="cuadrado bg-color-azul position-absolute "></div>
                            </div>
                            <div class="col-md-2"></div>
                            <div class="col-md-5 text-center d-flex align-items-center justify-content-center position-relative pt-5">
                                <h1 class="font-size-4 font-solway color-azul font-bold position-absolute z-1 align-self-center pt-5">
                                    <?php the_field('frase_motivadora'); ?>​
                                </h1>
                            <svg data-aos="fade-up" data-aos-duration="3000" data-aos-easing="linear" class="circle-css" width="698" height="417" viewBox="0 0 698 417" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle  cx="56.5" cy="105.5" r="27.5" fill="#FC9256"/>
                                <path  d="M506 83.5C506 98.6878 493.912 111 479 111C464.088 111 452 98.6878 452 83.5C452 68.3122 464.088 56 479 56C493.912 56 506 68.3122 506 83.5Z" fill="#FC9256"/>
                                <circle  cx="228.5" cy="352.5" r="24.5" fill="#FC9256"/>
                                <circle  cx="355.5" cy="304.5" r="14.5" fill="#FC9256"/>
                                <circle  cx="606" cy="311" r="21" fill="#FC9256"/>
                                <circle  cx="584.5" cy="14.5" r="14.5" fill="#FC9256"/>
                                <circle  cx="65.5" cy="402.5" r="14.5" fill="#FC9256"/>
                                <circle  cx="14.5" cy="262.5" r="14.5" fill="#FC9256"/>
                                <ellipse  cx="466.5" cy="376" rx="14.5" ry="14" fill="#FC9256"/>
                                <circle  cx="683.5" cy="144.5" r="14.5" fill="#FC9256"/>
                                <circle  cx="273.5" cy="73.5" r="20.5" fill="#FC9256"/>
                                <path d="M63.0771 114.034C62.8929 119.92 57.3794 124.721 50.7806 124.711C44.423 124.702 39.004 120.069 38.5969 114.305C38.5149 113.145 38.6548 112.01 40.2119 111.889C41.8066 111.764 42.0449 112.898 42.206 114.041C42.7318 117.868 45.3414 120.604 49.0334 121.26C52.8335 121.939 56.3876 120.507 58.3287 117.508C59.0835 116.366 59.5004 115.069 59.5394 113.74C59.5693 112.648 60.0893 111.823 61.3724 111.874C62.7925 111.934 63.1128 112.883 63.0771 114.034Z" fill="white"/>
                                <path d="M47.392 104.691C47.4132 105.806 46.9665 106.623 45.7374 106.712C44.629 106.791 44.0858 106.118 43.8601 105.084C43.3574 102.781 42.0338 101.699 40.0725 101.759C38.2009 101.818 36.9564 102.9 36.5175 105.105C36.3071 106.167 35.7167 106.789 34.6266 106.714C33.3869 106.629 32.9769 105.801 33.001 104.691C33.0811 101.304 36.394 98.4536 40.2934 98.4901C44.0521 98.5275 47.3293 101.421 47.392 104.691Z" fill="white"/>
                                <path d="M67.0897 106.695C65.8519 106.838 65.2567 106.119 65.0377 105.025C64.6016 102.862 63.3427 101.77 61.4392 101.754C59.5358 101.739 58.3241 102.786 57.8002 104.977C57.5542 106.006 57.0603 106.86 55.7743 106.7C54.4159 106.526 54.0725 105.569 54.1921 104.43C54.5423 101.129 57.7047 98.5092 61.3804 98.4918C65.1863 98.4744 68.3882 101.188 68.5725 104.562C68.6304 105.612 68.3786 106.547 67.0897 106.695Z" fill="white"/>
                                <path d="M242.408 355.323C242.223 361.209 236.71 366.01 230.111 366C223.754 365.99 218.335 361.357 217.927 355.593C217.845 354.433 217.985 353.299 219.542 353.177C221.137 353.053 221.375 354.186 221.537 355.33C222.062 359.157 224.672 361.892 228.364 362.549C232.164 363.227 235.718 361.796 237.659 358.797C238.414 357.655 238.831 356.358 238.87 355.029C238.9 353.937 239.42 353.111 240.703 353.163C242.123 353.223 242.443 354.171 242.408 355.323Z" fill="white"/>
                                <path d="M226.723 345.98C226.744 347.094 226.297 347.912 225.068 348C223.96 348.08 223.416 347.406 223.191 346.372C222.688 344.07 221.364 342.988 219.403 343.048C217.531 343.106 216.287 344.188 215.848 346.394C215.638 347.456 215.047 348.078 213.957 348.003C212.717 347.918 212.307 347.09 212.332 345.979C212.412 342.592 215.725 339.742 219.624 339.779C223.383 339.816 226.66 342.71 226.723 345.98Z" fill="white"/>
                                <path d="M246.42 347.984C245.183 348.127 244.587 347.408 244.368 346.314C243.932 344.151 242.673 343.059 240.77 343.043C238.866 343.027 237.655 344.075 237.131 346.265C236.885 347.294 236.391 348.148 235.105 347.988C233.747 347.814 233.403 346.858 233.523 345.719C233.873 342.418 237.035 339.798 240.711 339.781C244.517 339.763 247.719 342.477 247.903 345.851C247.961 346.901 247.709 347.836 246.42 347.984Z" fill="white"/>
                                <path d="M486.497 94.5447C486.313 100.43 480.799 105.231 474.2 105.222C467.843 105.212 462.424 100.579 462.017 94.8152C461.935 93.655 462.075 92.5208 463.632 92.399C465.227 92.2747 465.465 93.408 465.626 94.5517C466.152 98.3786 468.761 101.114 472.453 101.771C476.253 102.449 479.808 101.017 481.749 98.0185C482.503 96.8768 482.92 95.5794 482.959 94.2507C482.989 93.1583 483.509 92.3329 484.792 92.3843C486.212 92.4443 486.533 93.3932 486.497 94.5447Z" fill="white"/>
                                <path d="M470.812 85.2017C470.833 86.3158 470.386 87.1334 469.157 87.2221C468.049 87.3012 467.506 86.6281 467.28 85.5939C466.777 83.2917 465.454 82.2097 463.492 82.2697C461.621 82.328 460.376 83.41 459.937 85.6157C459.727 86.6776 459.137 87.2995 458.046 87.2247C456.807 87.1395 456.397 86.3115 456.421 85.2008C456.501 81.814 459.814 78.9638 463.713 79.0003C467.472 79.0377 470.749 81.9314 470.812 85.2017Z" fill="white"/>
                                <path d="M490.51 87.2058C489.272 87.3484 488.677 86.63 488.458 85.5358C488.022 83.3728 486.763 82.2804 484.859 82.2647C482.956 82.2491 481.744 83.2962 481.22 85.4871C480.974 86.5161 480.48 87.3701 479.194 87.2101C477.836 87.0362 477.492 86.0794 477.612 84.9409C477.962 81.6394 481.125 79.0197 484.8 79.0023C488.606 78.9849 491.808 81.6985 491.992 85.0723C492.05 86.1229 491.798 87.0579 490.51 87.2058Z" fill="white"/>
                            </svg>

                                
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
                    <h4 class="font-size-3 font-italic" data-aos="fade-right" data-aos-duration="3000">
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
                    <div class="col-md-6 somos-p">
                        <h2 class="font-size-7 font-solway color-azul">
                            <?php the_title(); ?>
                        </h2>
                        <p class="font-size-1 font-kulim">
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
                    <div class="col-md-4 text-center" data-aos="zoom-in" data-aos-duration="3000">
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



<!-------------------------------CONOCE NUESTROS SERVICIOS------------------------------------------>

<div class="container-fluid px-100 py-3 bg-color-beige">
<h2 class="font-size-7 font-solway color-azul pt-5 text-center">Conoce nuestros servicios</h2>
    <div class="row ">
        <?php if (have_posts()): ?>
            <?php query_posts("category_name=inicio"); ?>
            <?php while (have_posts()):
                the_post(); ?>

                <!---PROGRAMAS-->

                <div class="col-md-6 pt-3" data-aos="zoom-in" data-aos-duration="3000">
                        <?php
                        $image = get_field('imagen_referencial_servicios_1');
                        if (!empty($image)): ?>
                            <img class="img-fluid pb-3" src="<?php echo esc_url($image['url']); ?>"
                                alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>

                    <h4 class="text-center font-size-6 color-azul font-kulim"><?php the_field('titulo_servicio_1'); ?></h4>
                    <hr>
                    <p class="font-kulim"><?php the_field('descripcion_del_servicio_2'); ?>
                        <a href="servicios-#programas">Ver más</a>
                    </p>
                </div>

                <!---SERVICIOS-->

                <div class="col-md-6 pt-3" data-aos="zoom-in" data-aos-duration="3000">
                        <?php
                        $image = get_field('imagen_referencial_servicios_2');
                        if (!empty($image)): ?>
                            <img class="img-fluid pb-3" src="<?php echo esc_url($image['url']); ?>"
                                alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                    <h4 class="text-center font-size-6 color-azul font-kulim"><?php the_field('titulo_servicio_2'); ?></h4>
                    <hr>
                    <p class="font-kulim" ><?php the_field('descripcion_del_servicio_2'); ?>
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
            <p class="font-kulim"> <?php the_field('resena'); ?></p><a href="#">Ver más</a>
                </div>
        <?php endwhile; ?>
        <?php else : ?>  
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
</div>
</section>


<?php get_footer(); ?>   

