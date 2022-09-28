<?php include("./encabezado.php"); ?>


<?php
switch (isset($_GET['menu'])) {

    case "innovacion";

        $titulo = "55% de las empresas más grandes del mundo no logra defenderse efectivamente de los ataques cibernéticos";
        $img = "./imagennota1.jpg";
        $introarticulo = "<hr>Así lo determina un nuevo estudio de Accenture, según el cual, a pesar de que 82% de las organizaciones aumentó sus inversiones en ciberseguridad, los ataques exitosos crecieron 31% en el último año.<hr>";
        $articulo = "Más de la mitad (55%) de las empresas más grandes del mundo no están deteniendo eficazmente los ciberataques, detectando y solucionando rápidamente las brechas, o reduciendo el impacto de estas, según un nuevo estudio de Accenture.  
        </br>
        Basado en una encuesta realizada a más de 4.700 ejecutivos globalmente, el estudio State of Cybersecurity Resilience 2021 explora el grado en que las organizaciones priorizan la seguridad, la eficacia de sus esfuerzos y el rendimiento de sus inversiones en seguridad.
        </br>

             El estudio también reveló que cuatro de cada cinco encuestados (81%) creen que «adelantarse a los atacantes es una batalla constante y el costo es insostenible», lo que supone un aumento respecto al 69% de la encuesta del año pasado. 
             </br>
             </br>
             Al mismo tiempo, mientras que el 82% de los encuestados aumentó su gasto en ciberseguridad el año pasado, el número de infracciones exitosas -que incluyen el acceso no autorizado a datos, aplicaciones, servicios, redes o dispositivos- se disparó un 31% respecto al año anterior, hasta 270 por empresa, de media.
             </br>    
             </br>
             «Los ciberadversarios son cada vez más ingeniosos a la hora de encontrar nuevas formas de llevar a cabo sus ataques», dijo Kelly Bissell, líder de Accenture Security a nivel mundial. «Nuestro análisis revela que las organizaciones se centran con demasiada frecuencia únicamente en los resultados empresariales a expensas de la ciberseguridad, lo que genera un mayor riesgo.
             </br>
             </br>
              Aunque conseguir el equilibrio adecuado no es fácil, aquellos que tienen una visión clara del panorama de las amenazas y una fuerte alineación en los profesionales y los resultados del negocio consiguen mayores niveles de ciberresiliencia.»
             </br>    
             </br> 
             El informe destaca la necesidad de extender los esfuerzos de ciberseguridad más allá de las propias paredes de una empresa a todo su ecosistema, señalando que los ataques indirectos -es decir, las violaciones exitosas a una organización a través de la cadena de suministro- siguen creciendo.
             </br>
             Por ejemplo, a pesar de que dos tercios (67%) de las organizaciones creen que su ecosistema es seguro, los ataques indirectos representaron el 61% de todos los ciberataques del año pasado, frente al 44% del año anterior.
             </br>
             </br>
             Además, la investigación identificó un pequeño grupo de empresas (el 5% del total) que no sólo sobresalen en ciberresiliencia, sino que también se alinean con la estrategia empresarial para lograr mejores resultados de negocio y rendimiento de las inversiones en ciberseguridad.
             </br>
             Federico Tandeter, Director Ejecutivo de Ciberseguridad para Accenture Hispanoamérica, explicó que “en comparación con otras organizaciones, estos líderes logran un equilibrio entre la ciberseguridad y los objetivos empresariales; informan directamente al C-Level e impulsan en conjunto con el liderazgo la estrategia de ciberseguridad de su organización. Otros elementos clave son que protegen a su organización de la pérdida de datos; integran la seguridad en sus iniciativas en la nube; y miden la madurez de su programa de ciberseguridad al menos anualmente.
             </br>
             </br>
             Para lograr una resiliencia cibernética sostenida y medible, debe haber una colaboración a través de toda la organización, para obtener una visión de 360 grados de los riesgos y prioridades del negocio.»
             </br>
             </br>
             Link al estudio: https://www.accenture.com/us-en/insights/security/invest-cyber-resilience
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
   
<div class="menuinicio3"> <?php echo $introarticulo; ?></h3>
            <br>          
    </div>

    <div>
        <img class="menuinicio2" src="<?php echo $img; ?>"
    </div>
    <br>

    <hr>
        <div class="datosnota">
    
    <div>Por &nbsp  Andres Mastrangelo</div>
    <div class="fecha">23/03/2022</div>  
        
        </div>
        <hr> 

    <div><p class="menuinicio4"> <?php echo $articulo; ?></p>
    </div>
        

    </div>






    <?php include("./footer.php"); ?>