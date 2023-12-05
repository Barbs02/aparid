<?php
/*
Template Name: Servicios
*/
?>

<?php get_header(); ?>

<!------- AQUÍ DEBES PONER EL BANNER DEL SMART SLIDER PRINCIPAL------->
<header>
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?> 
        <?php
        echo do_shortcode('[smartslider3 slider="14"]');
        ?>
    <?php endwhile; ?>	
    <?php else : ?>  
    <?php endif; ?>
    <?php wp_reset_query(); ?>
</header>


<!-------------------------------CONTENIDO METODOLOGÍA DE TRABAJO------------------------------------------>
<section>
    <?php if (have_posts()) : ?>
            <?php query_posts("category_name=metodologia-servicios "); ?>
    <?php while (have_posts()) : the_post(); ?> 
        <div class="container-fluid py-100 px-100 clearfix">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="timeline-title font-solway font-size-6 font-bold text-center color-azul">Metodologías de trabajo</h2>
                    <p class="font-size-1 text-center">Tenemos diferentes procesos de aprendizajes para las distintas etapas en la
                        vida de las personas con síndrome de Down, para ello contamos con atenciones individuales y grupales
                        para potenciar las capacidades de sus hijos a través de los programas de atención.</p>

                        <br>
                        
                        
                        
                </div>
                <div class="col-md-12 mx-auto text-center">
                    <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                    <br><br>
                    <button type="button" class="border1 p-3 mx-auto bg-boton hover-boton color-azul font-size-4" data-bs-toggle="modal" data-bs-target="#modal1">
                            Ver Línea de Tiempo
                        </button>
                </div>
            </div>
            
        </div>
    <?php endwhile; ?>	
    <?php else : ?>  
    <?php endif; ?>
    <?php wp_reset_query(); ?>
</section>
<!--------------------------------------------------- Somos APARID --------------------------------------------------->

<section class="somos">
    <div class="container-fluid px-100 bg-color-beige">
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
        <div class="row">
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

<!-------AQUÍ DEBES PONER EL BANNER DEL SMART SLIDER PRINCIPAL------->
<section>
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?> 
        <?php
        echo do_shortcode('[smartslider3 slider="13"]');
        ?>
    <?php endwhile; ?>	
    <?php else : ?>  
    <?php endif; ?>
    <?php wp_reset_query(); ?>
</section>

<!-----------------------------------------------------PROGRAMAS----------------------------------------------------->
<section id="programas">
    <?php if (have_posts()) : ?>
        <?php query_posts("category_name=programas"); ?>
    <?php while (have_posts()) : the_post(); ?> 
    <div class="container-fluid mx-auto">
        <div class="row px-100 py-50">
                <div class="col-md-12 mx-auto">
                    <h2 class="font-size-6 color-azul font-solway font-bold"><?php the_title(); ?> (<?php the_field('siglas_programas'); ?>)</h2>
                    <br>
                </div>
                <div class="col-md-5">

                    <p class="font-size-1">
                        <?php the_content(); ?>
                    </p>
                </div>

                <div class="col-md-2"></div>

                <div class="col-md-5">
                    <?php
                    $image = get_field('imagen_referencial_programa');
                    if (!empty($image)): ?>
                        <img class="img-fluid " src="<?php echo esc_url($image['url']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    <p class="font-size-1"><?php the_field('descripcion_extra_del_programa'); ?></p>
                </div>
        </div>
    </div>
    <!-------OBJETIVOS DEL PROGRAMA ------->
    <div class="container-fluid mx-auto ">
        <div class="row">
            <div class=" pt-4 px-100 bg-color-beige">
            <div class="row">
                <h2 class="font-size-6 color-azul text-center  font-solway font-bold">Objetivos</h2>
            </div>
        </div>

        <div class="container-fluid px-100 bg-color-beige pb-100 pt-4">
            <div class="row">
                    <div class="col-md-4">
                        <div class="col-md-6 mx-auto">
                        <?php
                        $image = get_field('icono_referencial_objetivos_1');
                        if (!empty($image)): ?>
                            <img class="img-c mx-auto" src="<?php echo esc_url($image['url']); ?>"
                                alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                        </div>
                        <p class="font-size-1"><?php the_field('descripcion_objetivo_1'); ?></p>
                    </div>

                    <div class="col-md-4">
                        <div class="col-md-6 mx-auto">
                        <?php
                        $image = get_field('icono_referencial_objetivos_2');
                        if (!empty($image)): ?>
                            <img class="img-c mx-auto" src="<?php echo esc_url($image['url']); ?>"
                                alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                        </div>
                        <p class="font-size-1"><?php the_field('descripcion_objetivo_2'); ?></p>
                    </div>

                    <div class="col-md-4">
                        <div class="col-md-6 mx-auto">
                        <?php
                        $image = get_field('icono_referencial_objetivos_3');
                        if (!empty($image)): ?>
                            <img class="img-c mx-auto" src="<?php echo esc_url($image['url']); ?>"
                                alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                        </div>
                        <p class="font-size-1"><?php the_field('descripcion_objetivo_3'); ?></p>
                    </div>
            </div>
        </div>
        </div>
    </div>
    <?php endwhile; ?>	
    <?php else : ?>  
    <?php endif; ?>
    <?php wp_reset_query(); ?>
</section>


<!-------AQUÍ DEBES PONER EL BANNER DEL SMART SLIDER QUE DIGA "Otras Actividades y Talleres------->

<section>
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?> 
        <?php
        echo do_shortcode('[smartslider3 slider="9"]');
        ?>
    <?php endwhile; ?>	
    <?php else : ?>  
    <?php endif; ?>
    <?php wp_reset_query(); ?>
</section>

<section id="actividades" class="pb-100" >
    <?php if (have_posts()) : ?>
        <?php query_posts("category_name=actividades"); ?>
    <?php while (have_posts()) : the_post(); ?> 
        <!-------PRIMERAS 2 TARJETAS------->
        <div class="container-fluid  mx-auto px-100 pt-100">
            <div class="row">

                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-6 p-0 ">
                            <?php
                            $image = get_field('imagen_actividad_1');
                            if (!empty($image)): ?>
                                <img class="img-fluid mx-auto" src="<?php echo esc_url($image['url']); ?>"
                                    alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6 bg-color-naranjo p-3 ">
                            <p class="font-size-1 color-blanco">
                                <?php the_field('descripcion_actividad_1'); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-5 ">
                    <div class="row">
                        <div class="col-md-6 bg-color-azul p-3">
                            <p class="font-size-1 color-blanco"><?php the_field('descripcion_actividad_2'); ?></p>
                        </div>
                        <div class="col-md-6 p-0">
                            <?php
                            $image = get_field('imagen_actividad_2');
                            if (!empty($image)): ?>
                                <img class="img-fluid mx-auto" src="<?php echo esc_url($image['url']); ?>"
                                    alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-------ULTIMAS 2 TARJETAS------->

        <div class="container-fluid px-100 pb-100 py-3">
            <div class="row">

                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-6 p-0">
                            <?php
                            $image = get_field('imagen_actividad_3');
                            if (!empty($image)): ?>
                                <img class="img-fluid mx-auto" src="<?php echo esc_url($image['url']); ?>"
                                    alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6 bg-color-celeste p-3">
                            <p class="font-size-1">
                                <?php the_field('descripcion_actividad_3'); ?>
                            </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-6 bg-color-amarillo p-3">
                            <p class="font-size-1">
                            <?php the_field('descripcion_actividad_4'); ?>
                            </p>
                        </div>
                        <div class="col-md-6 p-0">
                            <?php
                            $image = get_field('imagen_actividad_4');
                            if (!empty($image)): ?>
                                <img class="img-fluid mx-auto" src="<?php echo esc_url($image['url']); ?>"
                                    alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>	
    <?php else : ?>  
    <?php endif; ?>
    <?php wp_reset_query(); ?>
</section>

<!-- -----------------------------------Modal-------------------------------------- -->

<div class="container-fluid mx-auto">
    <div class="row">
        <div class="col-md-12">

        <?php if (have_posts()) : ?>
        <?php query_posts("category_name=metodologia-servicios"); ?>
    <?php while (have_posts()) : the_post(); ?> 
                
                <div class="modal px-100" tabindex="-1" id="modal1">
                    <div class="modal-dialog modal-xl mx-auto overflow-auto">
                        <div class="modal-content">
                        <div class="modal-header bg-color-beige">
                            <h5 class="modal-title font-solway font-size-6 color-azul align-self-center">Línea de Tiempo</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-footer bg-color-beige">
                            <div class="pt-3"></div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-2">
                                    <?php
                                        $image = get_field('imagen_numero_metodologia');
                                        if (!empty($image)): ?>
                                            <img class="mx-auto" src="<?php echo esc_url($image['url']); ?>"
                                                alt="<?php echo esc_attr($image['alt']); ?>" />
                                                <?php endif; ?>
                                    </div>
                                    <div class="col-md-10">
                                        <h2 class="color-azul font-solway font-size-5">
                                            <?php the_field('titulo_paso'); ?><?php the_field('rango_de_edad'); ?><?php the_field('programas_'); ?>

                                        </h2>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="font-size-2">
                                                    <?php the_field('descripcion_metodologia'); ?>
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                            <?php
                                        $image = get_field('imagen_referencial_metodologia');
                                        if (!empty($image)): ?>
                                            <img class="img-fluid mx-auto" src="<?php echo esc_url($image['url']); ?>"
                                                alt="<?php echo esc_attr($image['alt']); ?>" />
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <div class="pt-5"></div>

                                <div class="row">
                                    <div class="col-md-2">
                                    <?php
                                        $image = get_field('imagen_numero_metodologia_2');
                                        if (!empty($image)): ?>
                                            <img class="mx-auto" src="<?php echo esc_url($image['url']); ?>"
                                                alt="<?php echo esc_attr($image['alt']); ?>" />
                                                <?php endif; ?>
                                    </div>
                                    <div class="col-md-10">
                                        <h2 class="color-azul font-solway font-size-5">
                                            <?php the_field('titulo_paso_2'); ?><?php the_field('rango_de_edad_2'); ?><?php the_field('programas_2'); ?>

                                        </h2>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="font-size-2">
                                                    <?php the_field('descripcion_metodologia_2'); ?>
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                            <?php
                                        $image = get_field('imagen_referencial_metodologia_2');
                                        if (!empty($image)): ?>
                                            <img class="img-fluid mx-auto" src="<?php echo esc_url($image['url']); ?>"
                                                alt="<?php echo esc_attr($image['alt']); ?>" />
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>

                                <div class="pt-5"></div>

                                <div class="row">
                                    <div class="col-md-2">
                                    <?php
                                        $image = get_field('imagen_numero_metodologia_3');
                                        if (!empty($image)): ?>
                                            <img class="mx-auto" src="<?php echo esc_url($image['url']); ?>"
                                                alt="<?php echo esc_attr($image['alt']); ?>" />
                                                <?php endif; ?>
                                    </div>
                                    <div class="col-md-10">
                                        <h2 class="color-azul font-solway font-size-5">
                                            <?php the_field('titulo_paso_3'); ?><?php the_field('rango_de_edad_3'); ?><?php the_field('programas_3'); ?>

                                        </h2>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="font-size-2">
                                                    <?php the_field('descripcion_metodologia_3'); ?>
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                            <?php
                                        $image = get_field('imagen_referencial_metodologia_3');
                                        if (!empty($image)): ?>
                                            <img class="img-fluid mx-auto" src="<?php echo esc_url($image['url']); ?>"
                                                alt="<?php echo esc_attr($image['alt']); ?>" />
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>

                                <div class="pt-5"></div>

                                <div class="row">
                                    <div class="col-md-2">
                                    <?php
                                        $image = get_field('imagen_numero_metodologia_4');
                                        if (!empty($image)): ?>
                                            <img class="mx-auto" src="<?php echo esc_url($image['url']); ?>"
                                                alt="<?php echo esc_attr($image['alt']); ?>" />
                                                <?php endif; ?>
                                    </div>
                                    <div class="col-md-10">
                                        <h2 class="color-azul font-solway font-size-5">
                                            <?php the_field('titulo_paso_4'); ?><?php the_field('rango_de_edad_4'); ?><?php the_field('programas_4'); ?>

                                        </h2>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="font-size-2">
                                                    <?php the_field('descripcion_metodologia_4'); ?>
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                            <?php
                                        $image = get_field('imagen_referencial_metodologia_4');
                                        if (!empty($image)): ?>
                                            <img class="img-fluid mx-auto" src="<?php echo esc_url($image['url']); ?>"
                                                alt="<?php echo esc_attr($image['alt']); ?>" />
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>

                                <div class="pt-5"></div>


                                <div class="row">
                                    <div class="col-md-2">
                                    <?php
                                        $image = get_field('imagen_numero_metodologia_5');
                                        if (!empty($image)): ?>
                                            <img class="mx-auto" src="<?php echo esc_url($image['url']); ?>"
                                                alt="<?php echo esc_attr($image['alt']); ?>" />
                                                <?php endif; ?>
                                    </div>
                                    <div class="col-md-10">
                                        <h2 class="color-azul font-solway font-size-5">
                                            <?php the_field('titulo_paso_5'); ?><?php the_field('rango_de_edad_5'); ?><?php the_field('programas_5'); ?>

                                        </h2>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="font-size-2">
                                                    <?php the_field('descripcion_metodologia_5'); ?>
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                            <?php
                                        $image = get_field('imagen_referencial_metodologia_5');
                                        if (!empty($image)): ?>
                                            <img class="img-fluid mx-auto" src="<?php echo esc_url($image['url']); ?>"
                                                alt="<?php echo esc_attr($image['alt']); ?>" />
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>

                                <div class="pt-5"></div>
                                
                            </div>
                            
                            
                            <button type="button" class="border1 p-2 bg-boton hover-boton align-self-end" data-bs-dismiss="modal">Cerrar</button>

                        </div>
                    </div>
                </div>
            </div>

    <?php endwhile; ?>	
    <?php else : ?>  
    <?php endif; ?>
    <?php wp_reset_query(); ?>

        </div>
    </div>
   
</div>







<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    //set up global variables for all functions to use
    var item = '.timeline-item';
    var content = '.p-timeline-content';
    var active = 'i-is-active';

    //Handling events
    $('.timeline-item').on('click', function () { showTimelineContent(this); });
    $('.close').on('click', function () { closeCurrentContent(this); });

    function showTimelineContent(element) {
        var itemId = $(element).find('.p-timeline-carmodel').attr('data-car');
        var highlighted = $(element).find('.p-timeline-carmodel');

        //Prevent having multiple items with the class i-is-active
        if ($(item).hasClass(active)) { $(item).removeClass(active); }

        //grab the id from the data attribute of each contentblock
        $(content).each(function () {
            var contentid = $(this).attr('data-car');

            //check if timeline item id is equal to the content id
            //If they're equal, show the content associated to that timeline item
            if (itemId == contentid) {
                var current = $(content + '[data-car="' + contentid + '"]');
                $(current).addClass(active);
                $(element).addClass(active);

                //If the content is not the selected (current) one
                $(content).not(current).removeClass(active);

                //Scroll to shown content
                var target = $(current);
                $('html, body').stop().animate({ scrollTop: target.offset().top }, 1000);
            }
        });
    }

    function closeCurrentContent(event) {
        var contentblock = $(event).parents(content);
        var contentid = $(contentblock).attr('data-car');
        $(item).each(function () {
            var itemId = $(this).find('.p-timeline-carmodel').attr('data-car');

            if (itemId == contentid) {
                //move page back to timeline
                var target = $('.timeline-title');
                $('html, body').stop().animate({ scrollTop: target.offset().top }, 1000);

                //remove class i-is-active from highlighted item 
                var currentItem = $(this).removeClass(active);
                contentblock.removeClass(active);

            }
        });
    }
</script>
<?php get_footer(); ?>