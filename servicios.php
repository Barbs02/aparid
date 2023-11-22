<?php
/*
Template Name: Servicios
*/
?>

<?php get_header(); ?>

<!------- AQUÍ DEBES PONER EL BANNER DEL SMART SLIDER PRINCIPAL------->

<!-------------------------------CONTENIDO METODOLOGÍA DE TRABAJO------------------------------------------>
<div class="container-fluid py-100">
    <div class="row">
        <h2>Metodologías de trabajo</h2>
        <p>Tenemos diferentes procesos de aprendizajes para las distintas etapas en la vida de las personas con síndrome de Down, para ello contamos con atenciones individuales y grupales para potenciar las capacidades de sus hijos a través de los programas de atención.</p>
    </div>
</div>

<!-------------------------------LINEA DE TIEMPO------------------------------------------>

<div class="container-fluid">
    <div class="row">
        <h1>AQUÍ TIENE QUE ESTAR LA LINEA DE TIEMPO</h1>
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
                        <a href="#">Ver más</a>
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

        <div class="col-md-2 align-items-center">
            <a href=""><button class="border1 p-2 w-100 bg-color-beige hover-boton">Conócenos</button></a>
        </div>

        <div class="col-md-1"></div>
        <?php endwhile; ?>
        <?php else: ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
</div>

<!-------AQUÍ DEBES PONER EL BANNER DEL SMART SLIDER PRINCIPAL------->

<h1>BANNER QUE DIGA: PROGAMAS</h1>

<!-------PROGRAMA P.E.R------->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-5">
            <h2>Programa de Educación Regular (P.E.R.)</h2>
            <p>Busca preparar a los estudiantes para rendir exámenes libres en los distintos cursos (educación básica y educación media) con el fin de certificar sus estudios ante el Ministerio de Educación.
                <br>
                El Programa de Educación Regular (P.E.R.) es esencial para garantizar que las personas con síndrome de Down, que no han completado la enseñanza básica o media, tengan una transición efectiva a la enseñanza media. Este programa permite trabajar con los estudiantes de acuerdo a programas establecidos por el Ministerio de Educación, realizando las adaptaciones curriculares correspondientes para que rindan exámenes  libres a fin de cada año escolar en las fechas fijadas por Mineduc, evitando con esto retrasos significativos en su desarrollo académico. El apoyo ofrecidos por el P.E.R. es fundamental promover la igualdad de oportunidades en jóvenes y adultos de nuestra organización.
            </p>
        </div>

        <div class="col-md-2"></div>

        <div class="col-md-5">
            <h1>AQUÍ NECESITAMOS UNA IMG</h1>
            <p>Sin duda alguna este programa ha dado muy buenos resultados y ha sido el responsable de que muchas personas de nuestro Centro  se puedan graduar a tiempo de la enseñanza media y que puedan optar  al mundo laboral obteniendo mejores oportunidades.</p>
        </div>
    </div>
</div>

<!-------OBJETIVOS DEL PROGRAMA P.E.R------->
<div class="container-fluid py-100">
    <div class="row">
        <h2>Objetivos</h2>
    </div>
</div>

<div class="container-fluid">
    <div class="row">

            <div class="col-md-4">
                <h1>imageeeen</h1>
                <p>Integración óptima al mundo laboral</p>
            </div>

            <div class="col-md-4">
                <h1>imageeeen</h1>
                <p>Termino de enseñanza media en un tiempo ideal</p>
            </div>

            <div class="col-md-4">
                <h1>imageeeen</h1>
                <p>Generación de competencias necesarias para el mundo laboral</p>
            </div>

    </div>
</div>

<!-------PROGRAMA P.E.C------->

<div class="container-fluid">
    <div class="row">
        <div class="col-md-5">
            <h2>Programa de Estimulación Cognitiva (P.E.C.)</h2>
            <p>Este programa es grupal, tiene como objetivo mantener en las mejores condiciones cognitivas a los adultos que por falta de oportunidades académicas, laborales, sociales, etc. han perdido habilidades. Este programa apunta a conseguir autonomía funcional, recuperar funciones alteradas, estimular el funcionamiento cognitivo, aumentar el rendimiento y las capacidades cerebrales, recuperar la capacidad cognitiva, evitando o retrasando a edad temprana el Alzheimer en los mayores.
                <br>
                La estimulación cognitiva es el conjunto de actividades y técnicas dirigidas a mantener y perfeccionar el funcionamiento cognitivo, a través de ejercicios de memoria, atención, concentración, lenguaje, razonamiento y control, etc.
            </p>
        </div>

        <div class="col-md-2"></div>

        <div class="col-md-5">
            <h1>AQUÍ NECESITAMOS UNA IMG</h1>
            <p>Este programa es abordado por  3 profesionales y se imparte 1 vez por semana.</p>
        </div>
    </div>
</div>

<!-------OBJETIVOS DEL PROGRAMA P.E.C------->
<div class="container-fluid py-100">
    <div class="row">
        <h2>Objetivos</h2>
    </div>
</div>

<div class="container-fluid">
    <div class="row">

            <div class="col-md-4">
                <h1>imageeeen</h1>
                <p>Recuperar funciones alteradas</p>
            </div>

            <div class="col-md-4">
                <h1>imageeeen</h1>
                <p>Estimular el funcionamiento cognitivo</p>
            </div>

            <div class="col-md-4">
                <h1>imageeeen</h1>
                <p>Conseguir Autonomía funcional</p>
            </div>

    </div>
</div>

<!-------AQUÍ DEBES PONER EL BANNER DEL SMART SLIDER QUE DIGA "Otras Actividades y Talleres------->

<!-------PRIMERAS 2 TARJETAS------->

<div class="container fluid">
    <div class="row">

            <div class="col-md-3">
                <h1>IMAGEN</h1>
            </div>
            <div class="col-md-3">
            Salidas deportivas: Visitas a las  cercanías del plano de Viña del Mar (Quinta Vergara, Playa las Salinas, Laguna Sausalito y diversas plazas).
            </div>

            <div class="col-md-3">
            Salidas deportivas: Visitas a las  cercanías del plano de Viña del Mar (Quinta Vergara, Playa las Salinas, Laguna Sausalito y diversas plazas).
            </div>
            <div class="col-md-3">
                <h1>IMAGEN</h1>
            </div>
    </div>
</div>

<!-------ULTIMAS 2 TARJETAS------->

<div class="container fluid">
    <div class="row">

            <div class="col-md-3">
                <h1>IMAGEN</h1>
            </div>
            <div class="col-md-3">
            Salidas deportivas: Visitas a las  cercanías del plano de Viña del Mar (Quinta Vergara, Playa las Salinas, Laguna Sausalito y diversas plazas).
            </div>

            <div class="col-md-3">
            Salidas deportivas: Visitas a las  cercanías del plano de Viña del Mar (Quinta Vergara, Playa las Salinas, Laguna Sausalito y diversas plazas).
            </div>
            <div class="col-md-3">
                <h1>IMAGEN</h1>
            </div>
    </div>
</div>

<?php get_footer(); ?>