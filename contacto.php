<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>actividad-integradora</title>
    <link rel="stylesheet" href="actividad.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@300&family=Lato:ital@1&family=Viga&display=swap" rel="stylesheet">
</head>



<?php include("./encabezado.php"); ?>

<body>

        <div class="contact">
            <h4>Contacto<h4>
        </div>

        <form action="enviar_consulta.php" method="POST">
            <input type="text" name="nombre" id="nombre" class="nombre_form" placeholder="Nombre">
            <input type="text" name="apellido" id="apellido" class="nombre_form" placeholder="Apellido">
            <input type="text" name="email" id="email" class="nombre_form" placeholder="Correo Electronico">
            <textarea class="textform" name="mensaje" id="mensaje" cols="30" rows="10"> </textarea>
            <input type="submit" value="Enviar" class="botonform">
       


        <?php

        if (isset($_GET['e'])) {
            echo "<h3>El mensaje fue enviado con exito</h3>";
        }
        ?>
        </form>

</body>

<?php include("./footer.php"); ?>