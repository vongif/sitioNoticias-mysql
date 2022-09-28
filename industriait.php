<?php include("./encabezado.php"); ?>


<?php
switch (isset ($_GET['menu'])) {

    case "industriait";

        $titulo = "Trabajar desde casa: cuales son los puestos que más se buscan en IT y cuánto pagan";
        $introarticulo = "<hr>El trabajo remoto en el sector IT es cada día más normal desde el inicio de la pandemia, pero hay puestos específicos que se destacan por siempre ofrecer esta modalidad.<hr>";
        $img = "./imagennota8.jpg";
        $articulo = "El sector IT es uno de los más beneficiados con la aparición de la virtualidad y el trabajo a distancia tras el inicio de la pandemia del coronavirus en el 2020, con el número de puestos capaces de ser ocupados mediante esta modalidad explotando exponencialmente en los últimos dos años
        </br>
        Y esto se ve reflejado en datos como el hecho de que la mayoría de las empresas del sector se nuclean en la ciudad de Buenos Aires, el 45% de los trabajadores en el sector de tecnología se radica en el interior del país.      
        El CEO de un banco internacional actuará como DJ en el Lollapalooza de Chicago
        Con esto en mente, la empresa Neoris formuló un informe sobre los mejores puestos que ofrecen puestos con la modalidad de trabajo a distancia en el sector IT. A continuación se puede encontrar cuales son.
        </br>
        TRABAJO A DISTANCIA EN IT: CUÁLES SON LOS MEJORES PUESTOS
        </br>
        Según el informe en cuestión, entre las posiciones más buscadas están aquellas que tienen que ver con el desarrollo de aplicaciones, administración de suites empresariales y testing, mientras que los desarrolladores Java Full Stack y .NET, consultores en procesos y migraciones de sistemas y especialistas en calidad y automatización también cuentan con un gran número de ofertas.
        </br>
        Estos últimos son de los más destacados por el informe, ya que los mismos requieren de conocimientos digitales sólidos para la creación, testeo y producción de programas y desarrollos web.
        </br>
        Cabe aclarar que la mayoría de estas posiciones permiten trabajar desde cualquier ciudad del país para una empresa digital mediante la modalidad remota, mientras que el informe también asegura que a pesar de este tipo de trabajo siempre se han alcanzado excelentes resultados.
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
    <br>
<div class="menuinicio1"> <?php echo $titulo; ?></div>
    <br>
    <div class="menuinicio3"> <?php echo $introarticulo; ?></h3>
            <br>
    </div>
    <div>
        <img class="menuinicio2" src="<?php echo $img; ?>"
    </div>

    <hr>
        <div class="datosnota">
    
    <div>Por &nbsp  Andrea Carnevale</div>
    <div class="fecha">23/03/2022</div>  
        
        </div>
        <hr> 
    
    <div><p class="menuinicio4"> <?php echo $articulo; ?></p>
    </div>
        

    </div>





    <?php include("./footer.php"); ?>