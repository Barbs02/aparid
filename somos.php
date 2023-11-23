<?php
/*
Template Name: Quienes somos
*/
?>

<?php get_header(); ?>

    <!-------------------------------SOMOS------------------------------------------>

    <!-- SLIDER -->

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
                    </p>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
</div>

<!-------------------------------METODOLOGIA------------------------------------------>

    <!-- SLIDER DE METODOLOGIA -->

<div class="container-fluid px-100 mx-auto pb-100">
    <div class="row">
        <?php if (have_posts()) : ?>
            <?php query_posts("category_name=metodologia-somos"); ?>
        <?php while (have_posts()) : the_post(); ?> 
            <div class="col-md-3">
                <?php
                $image = get_field('icono_referencial_metodologia');
                if (!empty($image)): ?>
                    <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                <p><?php the_field('descripcion_metodologia_somos'); ?></p>
            </div>

            <div class="col-md-1 align-self-center">
                    <?php
                    $image = get_field('icono_flecha_metodologia');
                    if (!empty($image)): ?>
                        <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
            </div>

            <div class="col-md-4">
                <?php
                $image = get_field('icono_referencial_metodologia_2');
                if (!empty($image)): ?>
                    <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
                <p><?php the_field('descripcion_metodologia_somos_2'); ?></p>
            </div>

            <div class="col-md-1 align-self-center">
                    <?php
                    $image = get_field('icono_flecha_metodologia');
                    if (!empty($image)): ?>
                        <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
            </div>

            <div class="col-md-3">
                <?php
                $image = get_field('icono_referencial_metodologia_3');
                if (!empty($image)): ?>
                    <img class="img-fluid" src="<?php echo esc_url($image['url']); ?>"
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


<div class="container-fluid px-100 bg-color-beige pt-5">
    <h2 class="font-size-7 font-solway color-azul">Casos de éxito</h2>
    <br>
    
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



<!-------------------------------DIRECTORIO------------------------------------------>

<div class="container-fluid px-100">
  <div class="row justify-content-center">

    <div class="col-md-6 text-center">
      <h2>IMAGEN</h2>
        <h3 class="font-size-3 color-azul">Patricia </h3>
        <h4 class="font-size-1 color-naranjo">Directora</h4>
      <p class="font-size-1">Encargada de organizar a aparid y ver que todo funcione como debería ser.</p>
    </div>

  </div>
</div>

<div class="container-fluid px-100">
    <div class="row justify-content-center">

        <div class="col-md-3 text-center">
            <h3 class="font-size-3 color-azul">Georgette Montañana</h3>
            <h4 class="font-size-1 color-naranjo">Vice-Presidenta</h4>
            <p class="font-size-1">Encargada de organizar a aparid y ver que todo funcione como debería ser.</p>
        </div>

        <div class="col-md-3 text-center">
            <h3 class="font-size-3 color-azul">Tonka Saavedra</h3>
            <h4 class="font-size-1 color-naranjo">Secretaria</h4>
            <p class="font-size-1">Recepciona a las personas y recibe llamadas durante el día.</p>
        </div>

        <div class="col-md-3 text-center">
            <h3 class="font-size-3 color-azul">Nina Olivares</h3>
            <h4 class="font-size-1 color-naranjo">Tesorera</h4>
            <p class="font-size-1">Maneja temas monetarios dentro de la organización.</p>
        </div>

        <div class="col-md-3 text-center">
            <h3 class="font-size-3 color-azul">Ma. José Vergara</h3>
            <h4 class="font-size-1 color-naranjo">1° Directora</h4>
            <p class="font-size-1">Maneja temas monetarios dentro de la organización.</p>
        </div>

    </div>
</div>

<div class="container-fluid px-100">
    <div class="row justify-content-center">

        <div class="col-md-4 text-center">
            <h3 class="font-size-3 color-azul">Ivonne Sandoval</h3>
            <h4 class="font-size-1 color-naranjo">Rep.Profesionales </h4>
            <p class="font-size-1">Encargada de organizar a aparid y ver que todo funcione como debería ser.</p>
        </div>

        <div class="col-md-4 text-center">
            <h3 class="font-size-3 color-azul">Jacqueline Mora</h3>
            <h4 class="font-size-1 color-naranjo">Secretaria</h4>
            <p class="font-size-1">Recepciona a las personas y recibe llamadas durante el día.</p>
        </div>

        <div class="col-md-4 text-center">
            <h3 class="font-size-3 color-azul">Sandra Millones</h3>
            <h4 class="font-size-1 color-naranjo">Coordinadora Pedagógica</h4>
            <p class="font-size-1">Maneja temas monetarios dentro de la organización.</p>
        </div>
        
    </div>
</div>

<div class="container-fluid bg-color-beige py-5">
    <div class="row">
         <!---tiene un background color por detras--->
         <h2 class="text-center font-size-6">Contamos con profesionales</h2>
         <p class="text-center font-size-1">
         Aparid cuenta con servicios de distintos profesionales como:
         <br>
        Kinesióloga - Educadoras diferenciales – Fonoaudiólogas – Terapeuta Ocupacional – Computación – Artes – Yoga 
         </p>
    </div>
</div>

<!-------------------------------ALIANZAS------------------------------------------>

    <!-- SLIDER PARA ALIANZAS -->

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-3">
                <h2>IMAGEN1</h2>
            </div>


            <div class="col-md-3">
                <h2>IMAGEN2</h2>
            </div>

            <div class="col-md-3">
                <h2>IMAGEN3</h2>
            </div>

            <div class="col-md-3">
                <h2>IMAGEN4</h2>
            </div>

            <p class="text-center font-size-3">Nuestras alianzas son importantes para poder potenciar las distintas actividades en conjunto, tenemos convenio de colaboración con otras organizaciones como Down21, centros de aprendizaje y diferentes organizaciones que ayuden al Síndrome de Down.</p>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-1"></div>

            <div class="col-md-4"> 
                <h2>IMAGEN EMPRESA 1</h2>
            </div>

            <div class="col-md-2"></div>

            <div class="col-md-4"> 
                <h2>IMAGEN EMPRESA 1</h2>
            </div>

            <div class="col-md-1"></div>
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

<!-------------------------------RESEÑAS------------------------------------------>
    <!-- SLIDER PARA RESEÑAS -->

    <div class="container-fluid px-100 py-5">
        <div class="row">
            
            <div class="col-md-1"><p>IMAGEN FLECHA IZQUIERDA</p></div>

            <div class="col-md-5">
                <h2 class="font-size-6 font-kulim color-azul">Jorge Salas</h2>
                <hr>
                <p class="font-size-2">Como organización comunitaria, nos enfocamos hacia un(a) joven con Síndrome de Down para que sea capaz de manejarse y manejar su entorno. 
                <br>
                Una persona con discapacidad intelectual puede adaptarse producto del desarrollo de sus capacidades y así aprovechar las oportunidades que les brinde la sociedad, buscando las oportunidades de desarrollo laboral y ser un aporte a la sociedad. <a href="#">Ver más</a> 
            </div>

            <div class="col-md-5">
                <h2 class="font-size-6 font-kulim color-azul">Cecilia Martínez</h2>
                <hr>
                <p class="font-size-2">Como organización comunitaria, nos enfocamos hacia un(a) joven con Síndrome de Down para que sea capaz de manejarse y manejar su entorno.  
                <br>
                Una persona con discapacidad intelectual puede adaptarse producto del desarrollo de sus capacidades y así aprovechar las oportunidades que les brinde la sociedad, buscando las oportunidades de desarrollo laboral y ser un aporte a la sociedad. <a href="#">Ver más</a> 
            </div>

            <div class="col-md-1"><p>IMAGEN FLECHA DERECHA</p></div>

        </div>
    </div>

<?php get_footer(); ?>