<?php include("./encabezado.php"); ?>


<?php
switch (isset($_GET['menu'])) {

    case "innovacion";

        $titulo = "Todo lo que debe saber sobre WI-FI 6 y 5G"; 
        $img = "./imagennota4.jpg";
        $introarticulo = "Para soportar las aplicaciones actuales, la tendencia se enfoca ahora sobre el Wi-Fi 6 y el 5G, dos tecnologías con la capacidad de ajustarse a estos requerimientos.";
        $articulo = "¿Qué es Wi-Fi 6?
        </br>
        </br>
        Es la sexta generación de conectividad Wi-Fi que está cambiando la forma en la que se consume la información, al proveer mayor eficiencia, flexibilidad y escalabilidad a las operaciones.
        
        </br>
        Beneficios que aporta:
        </br>
        Soporta aplicaciones nuevas y emergentes en la misma infraestructura LAN inalámbrica (WLAN).
        Provee una mejor experiencia para usuarios de las redes LAN inalámbricas.
        Posibilita un desempeño más predecible para aplicaciones avanzadas.
        Ver más: 6 startups costarricenses reciben fondos para escalar sus negocios
        ¿Qué es 5G?
        </br>
        Es la quinta generación de tecnología celular, diseñada para incrementar la velocidad, reducir la latencia y mejorar la flexibilidad de los servicios inalámbricas.
        </br>
        Beneficios que aporta:
        </br>
        
        Mejor desempeño, mayor eficiencia energética y menores costos de la red.
        Operación multibanda, con rendimiento basado en atributos de velocidad y distancia.
        Hasta 4 veces menos latencia.
        “Está demostrado al día de hoy que más de 60% del tráfico que tradicionalmente se usaba en el interior de los edificios, hoy en día se cursa a través de wi fi, que en este momento está tendiendo a ser wifi 6. Esto sucede porque las aplicaciones que estamos tratando de desarrollar requieren de mucho ancho de banda y una reacción de velocidad muy rápida que nos brinda tanto el wifi 6 o el 5G”, aseguró Ariel Szternberg, Gerente de Ingeniería de Sistemas en Cisco.
        </br>
        5 características que debe saber sobre Wi-Fi 6 y 5G:
        </br>
        </br>
        Son soluciones complementarias: Ambas soportan ambientes de IoT densos y habilitan aplicaciones inmersivas para el trabajo híbrido.
        Son capaces de coexistir y trabajan mejor juntas.
        </br>
        </br>
        Wi-Fi 6 garantiza un desempeño más seguro para entornos de trabajo híbrido, aumenta el ancho de banda y la velocidad, y mejora el rendimiento.
        5G aporta mayor flexibilidad a las compañías mediante conexiones ultra confiables y con poca latencia, cobertura para espacios amplios, distribución acelerada de terminales y mejor precisión.
        Se pueden implementar en muchas industrias, como salud, educación y manufactura, entre otras.
        </br>
        </br>
        En Costa Rica, el Plan Nacional de Desarrollo e Inversión Pública 2019-2022, incorporó en 2018 la Intervención Estratégica denominada “Evolución de Redes Móviles de Telecomunicaciones (Ruta 5G)” y se trazó la meta de contar con el 100% de avance en el proyecto de Red 5G al 2022, con el objetivo de “impulsar la transformación digital del país a través del desarrollo y evolución de los sistemas de telecomunicaciones móviles internacionales (IMT), para habilitar la generación de servicios innovadores y fomentar la competitividad” (Ministerio de Planificación Nacional y Política Económica, 2018).
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
    <div>
        <img class="menuinicio2" src="<?php echo $img; ?>"
    </div>

    <div class="menuinicio3"> <?php echo $introarticulo; ?></h3>
            <br>
            <br>
    </div>
    
    <hr>
        <div class="datosnota">
    
    <div>Por &nbsp  Sofia Lopez</div>
    <div class="fecha">23/03/2022</div>  
        
        </div>
        <hr> 

    
    <div><p class="menuinicio4"> <?php echo $articulo; ?></p>
    </div>
        
    
    </div>






    <?php include("./footer.php"); ?>