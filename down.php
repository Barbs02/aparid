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



<!-- Primera sección -->


<section> 
    <div class="container-fluid px-100 py-100">
        <div class="row">
            <div class="col-md-5">
                    <p class="font-size-2">
                        El síndrome de Down tiene su primera data del año 1.500 A.C. Es identificado inicialmente el siglo pasado por el médico Británico John Langdon Down, pero no fue hasta 1957 cuando el Dr. Jerome Lejeune descubrió la explicación genética y principal de su existencia .
                        <br>
                        Nuestro cuerpo está compuesto por miles de células, en cuyo núcleo se encuentran los cromosomas. Estas contienen la información genética de cada ser humano. El código genético de cada persona es único: es una combinación de cromosomas de la madre y el padre. 
                    </p>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5 align-self-center">
                <h2 class="font-size-6 font-solway text-center color-azul">"Somos igual que tú"</h2>
                <p class="font-solway font-size-3 font-light text-end color-azul">Francisco Garrido Pimentel-</p>
            </div>

            <div class="col-md-6 align-self-center">
                <h1>Imágen cromosomas</h1>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <p class="font-size-2">
                    Por lo tanto, cada célula contiene 46 cromosomas en total (Figura Nº 1). 44 de estos cromosomas son llamados regulares, y forman parejas de la 1 a la 22. Los otros 2 restantes corresponden a los cromosomas sexuales, llamados XX si el bebé es niña y XY si es niño.
                    <br><br>
                    La célula formada luego comienza a dividirse en 2, 4, 8...y así sucesivamente. En un niño con síndrome de Down, por un error de la naturaleza, la célula formada, en vez de contar con 46 cromosomas, cuenta con 47 (Figura Nº 2).
                    <br><br>
                    No se sabe cómo ni por qué el óvulo femenino o el espermatozoide masculino han aportado con 24 cromosomas en vez de los 23 en el par Nº 21. De manera que el padre o la madre aportan 2 cromosomas 21 que, sumados al cromosoma 21 del cónyuge, resultan 3 cromosomas del par 21.
                </p>
            </div>

            <div class="col-md-5">
                <p class="font-size-2">
                    Como esta anomalía se da en el par 21, se le denomina trisomía 21, término que se utiliza también con frecuencia para referirse al síndrome de Down. 
                    <br><br>
                    Los últimos estudios señalan que la alteración aparece antes de la concepción, cuando se están formando los óvulos y los espermatozoides. Los óvulos se forman cuando la futura mujer es todavía un feto y está en el vientre de su madre. Por este motivo no debe haber ningún sentimiento de culpabilidad, ya que la alteración no guarda relación alguna con lo que los padres hicieron o dejaron de hacer durante el período del embarazo. (Pueschel, 1997).
                </p>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-6 align-self-center">
                <h1>Imágen cromosomas</h1>
            </div>
        </div>
    </div>
</section>

<!--     ------------Proceso--------------      -->
<section>
    <div class="container-fluid px-100 pb-100">
        <div class="row">
            <div class="col-md-5 align-self-center">
                <h1>Imágen</h1>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5">
                <p class="font-size-2">
                    Nuestro objetivo es que las personas con Síndrome de Down tenga el mejor desarrollo posible, por lo que realizamos diferentes  actividades y talleres que ayuden a su crecimiento personal
                    <br><br>
                    Trabajamos incansablemente para que los niños sean primeramente acogidos en el seno familiar y luego incorporándolos a la sociedad por medio de una educación Inclusiva, tanto en Jardines Infantiles como en Colegios comunes de enseñanza.
                    <br><br>
                    Desarrollamos actividades que nos permiten generar recursos para dar cabida a numerosas familias de escasos recursos o de ingresos moderados para que sus hijos puedan asistir a nuestros distintos programas de atención.
                </p>
            </div>

            <div class="col-md-5">
                <p class="font-size-2">
                    Proporcionamos un espacio de formación para alumnos de universidades provenientes de carreras afines como, educación diferencial, psicología, educación parvularia, educación física, terapia ocupacional, fonoaudiología, entre otros.
                    <br><br>
                    Nos enfocamos hacia un(a) joven con Síndrome de Down, capaz de manejarse y manejar su entorno, una persona con discapacidad intelectual que producto del desarrollo de sus capacidades esté fortalecido(a) para aprovechar las oportunidades que les brinde la sociedad, buscando las oportunidades de desarrollo laboral y ser un aporte a la sociedad.
                </p>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-5 align-self-center">
                <h1>Imágen</h1>
            </div>
        </div>
    </div>
</section>



<!-- ---------------A tener en cuenta---------------- -->
<section>
    <div class="container-fluid px-100 py-100">
        <div class="row">
            <div class="col-md-6">
                <ul>
                    <li>
                        <p class="font-size-2">
                            No existen “grados” de Síndrome de Down. Solo se tiene o no.
                        </p>
                    </li>
                    <li>
                        <p class="font-size-2">
                            No es una enfermedad, es una condición genética.
                        </p>
                    </li>
                    <li>
                        <p class="font-size-2">
                            No son “bendiciones” ni “ángeles”
                        </p>
                    </li>
                    <li>
                        <p class="font-size-2">
                            No son niños eternos, respetar su edad cronológica
                        </p>
                    </li>
                    <li>
                        <p class="font-size-2">
                            Tienen derecho, como todas las otras personas, a tener la oportunidad de desarrollar todo su potencial físico, afectivo y cognitivo, a lo largo de su vida.
                        </p>
                    </li>
                    <li>
                        <p class="font-size-2">
                            Las personas con discapacidad son sujetos de derechos y no de caridad.
                        </p>
                    </li>
                </ul>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4 align-self-center">
                <h1>Imágen</h1>
            </div>
            <div class="col-md-1"></div>
        </div>

        <div class="row py-100">
            
            <div class="col-md-4 justify-content-center">
                <h1>IMG</h1>
                <br>
                <h2 class="color-azul font-solway font-size-6">
                    Comunicación
                </h2>
                <br>
                <p class="font-size-2">
                    La comunicación es clave. Habla con ellos de manera clara y amigable, manteniendo un contacto visual y siendo paciente si tienen dificultades para expresarse. Escucha activamente lo que tienen que decir.
                </p>
            </div>
            <div class="col-md-4 justify-content-center">
                <h1>IMG</h1>
                <br>
                <h2 class="color-azul font-solway font-size-6">
                    Trátalos con respeto
                </h2>
                <br>
                <p class="font-size-2">
                    Es fundamental tratar a las personas con síndrome de Down con respeto y dignidad, reconociendo su individualidad y valor como seres humanos.
                </p>
            </div>
            <div class="col-md-4 justify-content-center">
                <h1>IMG</h1>
                <br>
                <h2 class="color-azul font-solway font-size-6">
                    Evita prejuicios
                </h2>
                <br>
                <p class="font-size-2">
                    No asumas que las personas con síndrome de Down son limitadas en sus capacidades. Cada individuo es único, y muchos tienen talentos y habilidades sorprendentes.
                </p>
            </div>
        </div>
        <br>
        <hr>
    </div>
 
</section>

<!-- ---------------------Trabajamos la inclusión a través de nuestros---------------------------- -->

<section>
    <div class="container-fluid px-100">
        <div class="row align-items-center pb-100"></div>

            <div class="col-md-3 text-center">
                <hr class="my-4 border2 bg-color-naranjo">
            </div>

            <div class="col-md-6 text-center">
                <h2 class="font-size-7 font-solway color-azul">Trabajamos la inclusión a través de nuestros programas</h2>
            </div>

            <div class="col-md-3 text-center">
                <hr class="my-4 border2 bg-color-naranjo">
            </div>
            <br>
        </div>
    </div>

    <div class="container-fluid px-100">
        <div class="row">
            <div class="col-md-6 p-4">
                <div class="row border3">
                    <div class="col-md-4">
                        <h1>IMG</h1>
                        <br>
                        <p class="font-size-2">
                            Esta foto fue tomada durante una de nuestras actividades de nuestro programas.
                        </p>
                    </div>
                    <div class="col-md-8">
                        <h2 class="font-size-7 font-solway color-azul">PER</h2>
                        <br>
                        <p class="font-size-2">
                            El Programa de Educación Regular (P.E.R.) es esencial para garantizar que las personas con síndrome de Down, que no han completado la enseñanza básica o media, tengan una transición efectiva a la enseñanza media. Este programa permite trabajar con los estudiantes de acuerdo a programas establecidos por el Ministerio de Educación, Ver màs
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 p-4">
                <div class="row border3">
                    <div class="col-md-4">
                        <h1>IMG</h1>
                        <br>
                        <p class="font-size-2">
                            Esta foto fue tomada durante una de nuestras actividades de nuestro programas.
                        </p>
                    </div>
                    <div class="col-md-8">
                        <h2 class="font-size-7 font-solway color-azul">PEC</h2>
                        <br>
                        <p class="font-size-2">
                        Este programa es grupal, tiene como objetivo mantener en las mejores condiciones cognitivas a los adultos que por falta de oportunidades académicas, laborales, sociales, etc. han perdido habilidades. Este programa apunta a conseguir autonomía funcional, recuperar funciones alteradas, estimular el funcionamiento cognitivo, aumentar el rendimiento y las capacidades cerebrales, recuperar la capacidad cognitiva, Ver más
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mx-auto py-100">
                <button class="border1 p-2 w-100 hover-boton">Programas</button>
            </div>
        </div>
    </div>
</section>

<!-- ---------------------Encuentra más información sobre el Síndrome de Down---------------------------- -->

<section>
    <div class="container-fluid px-100">
        <div class="row align-items-center pb-100"></div>

            <div class="col-md-3 text-center">
                <hr class="my-4 border2 bg-color-naranjo">
            </div>

            <div class="col-md-6 text-center">
                <h2 class="font-size-7 font-solway color-azul">Encuentra más información sobre el Síndrome de Down </h2>
            </div>

            <div class="col-md-3 text-center">
                <hr class="my-4 border2 bg-color-naranjo">
            </div>
            <br>
        </div>
    </div>

    <div class="container-fluid px-100">
        <div class="row">
            <div class="col-md-4 p-4">
                <div class="row border3">
                    <h1>IMG</h1>
                    <div class=" text-center py-5">
                        <h2 class="font-solway font-light font-size-4 color-azul">
                            Federación Española de síndrome de Down
                        </h2>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 p-4">
                <div class="row border3">
                    <h1>IMG</h1>
                    <div class=" text-center py-5">
                        <h2 class="font-solway font-light font-size-4 color-azul">
                            Fundación Síndrome de Down de Cantabria
                        </h2>
                    </div>
                </div>
            </div>

            <div class="col-md-4 p-4">
                <div class="row border3">
                    <h1>IMG</h1>
                    <div class=" text-center py-5">
                        <h2 class="font-solway font-light font-size-4 color-azul">
                            Fundación Iberoamericana Down 21
                        </h2>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<?php get_footer(); ?>