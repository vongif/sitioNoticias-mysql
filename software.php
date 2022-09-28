<?php include("./encabezado.php"); ?>


<?php
switch (isset($_GET['menu'])) {

    case "software";

        $titulo = "Flight Simulator 2020: El impresionante contraste entre dos imágenes separadas por 40 años";
        $img = "./imagennota5.jpg";
        $introarticulo = "<hr>En noviembre se cumplirán cuatro décadas de la primera versión del Flight Simulator de Microsoft –cuya historia comenzó en 1977 con la compañía Sublogic, de Bruce Artwick–, y las imágenes son elocuentes. En el curso de una vida vimos cambios que la mente no puede terminar de metabolizar<hr>";
        $articulo = "Tenía 25 años y había ido de visita a la casa familiar y, un poco por casualidad, me encontré con que la que computadora de mi padre, un clon de la IBM/PC, estaba ahí, encendida y sin vigilancia. 
        </br>
        </br>
        Por supuesto, teníamos prohibido tocar esa máquina (sí, incluso cuando ya me había independizado; una computadora era algo fuera del mundo real todavía). Pero la curiosidad siempre fue una de mis principales fuerzas motrices, y antes de meditarlo mucho, había encontrado lo único que realmente me intrigaba de ese armatoste: el simulador de vuelo.
        </br>
        </br>
        Lo puse en marcha (era una de las poquísimas cosas que sabía hacer con una PC en esa época) y muy pronto estuve volando. Volar es una forma de decir; lo que veía eran una serie de líneas blancas sobre el fondo negro del monitor. Las líneas representaban el horizonte, la pista y los instrumentos. Eran pocas líneas y se movían a razón de uno o dos fotogramas por segundo. Y sin embargo la mente es tan poderosa que alcanzaba para construir la ilusión del vuelo.
        El primer Flight Simulator de 1982, listo para despegar; por la localización de Meigs Field, lo más usual era terminar en el agua. Splash! La captura fue tomada con el emulador de Jos Grupping
        </br>
        </br>
        El primer Flight Simulator de 1982, listo para despegar; por la localización de Meigs Field, lo más usual era terminar en el agua. Splash! La captura fue tomada con el emulador de Jos Grupping
        Ariel Torres
        Eso fue a principios o mediados de la década del ‘80 del siglo pasado y los datos se me ha borrado casi por entero. Pero recuerdo que también lo volé en una TRS-80 portátil, donde la ilusión era todavía más rudimentaria, por la pantalla LCD gris con pixeles grandes como galletitas de agua.
        </br>
        </br>
        Con todo y estas brutales limitaciones, me enamoré de los simuladores de vuelo. A pesar de las rudimentarias rayas blancas de movimientos torpes y a pesar del ruidito ridículo del parlantito interno (no existían placas de audio para PC en esa época todavía), que gruñía una mala imitación del motor del Cessna, fue amor a primera vista. Me estrellé un número de veces y descubrí que, definitivamente, iba a necesitar alguna vez un joystick. Y antes, una computadora. Pero todo eso estaba por venir.
        En el medio pasaron alrededor de 40 años, y el otro día puse en marcha, por primera vez, el nuevo Flight Simulator de Microsoft, que usa fotogrametría satelital y tecnologías de gráficos 3D que en 1982 o 1983 eran todavía un sueño en la mente de los ingenieros. Obviamente, habrán leído mucho sobre el nuevo Flight Simulator (MSFS, para abreviar), así que no los aburriré (todavía) con una reseña. Sí quiero apuntar dos cosas.
        </br>
        </br>
        En 2009, cuando descubrimos que Google Earth tenía un atajo de teclado secreto (Ctrl+Alt+A) que disparaba un simulador de vuelo, lo primero que pensé fue en por qué Microsoft no hacía lo mismo. A fin de cuentas también se habían comprado una empresa de mapas. Pues bien, pasaron más o menos once años hasta que el MSFS, que creíamos que había sido declarado objeto de museo, se subió al realismo satelital y a las nuevas tecnologías de gráficos 3D. 
        </br>
        </br>
        Tengo muchos reparos, eso sí, como apuntaré cuando haga una reseña, pero este simulador es, a mi juicio, histórico. No porque sí ganó el premio al mejor simulador de 2020 y todo el mundo lo cubrió de elogios. Sin embargo, el título exhibe fallas severas en varios aspectos clave, como el modelo de vuelo (la aerodinámica, en otras palabras) y el realismo satelital, al que todavía se le notan mucho las costuras. Ya abundaré en ese aspecto. Y además todo eso se puede arreglar.
        Lo que sí me interesa señalar es que luego de una vida (literalmente, una vida; vi la primera computadora cuando tenía 6 años) de ver avanzar esta industria, el nuevo MSFS me dejó estupefacto.
        </br>
        </br>
        Incluso habiendo probado todas las versiones previas, más casi todos los simuladores de vuelo que han salido al mercado en estos 40 años, aún así, me costaba dar crédito a lo que veía. Se supone que debe ser al revés, que cuando viste muchas cosas, nada te asombra demasiado.
        </br>
        </br>
        Pero tenía muy fresco el recuerdo de esas primeras líneas en blanco y negro y, de pronto, en una pantalla, en casa, en otra casa, cuando tengo más o menos la edad que mi padre tenía por entonces, me encontré con imágenes que cuesta discernir si son reales o no. La mente no está preparada para cambios tan profundos en períodos tan cortos, en menos de una vida, en tan solo una generación. Y, sin embargo, eso exactamente es lo que estaba pasando en mi pantalla.
        </br>
        </br>
        <hr>
        </br>
        </br>
         </br>";
        

        break;
}



?>

<div class="menuinicio">
    
<div class="menuinicio1"> <?php echo $titulo; ?></div>
    <br>
    <div class="menuinicio3"> <?php echo $introarticulo; ?></h3>
    <br>
    </div>
    <div>
        <img class="menuinicio2" src="<?php echo $img; ?>" </div>
        <br>
        <br>
        
        <hr>
        <div class="datosnota">
    
    <div>Por &nbsp  Silvina Garre</div>
    <div class="fecha">23/03/2022</div>  
        
        </div>
        <hr> 
        <div>
            <p class="menuinicio4"> <?php echo $articulo; ?></p>
        </div>

        

    </div>






    <?php include("./footer.php"); ?>