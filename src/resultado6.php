<?php 
    if(!empty($_POST["parcial1"]) || !empty($_POST["parcial2"]) || !empty($_POST["parcial3"]) || !empty($_POST["examen"]) || !empty($_POST["proyecto"]) ){
        $par1 =  $_POST["parcial1"];
        $par2 =  $_POST["parcial2"];
        $par3 =  $_POST["parcial3"];
        $examen   =  $_POST["examen"];
        $proyecto =  $_POST["proyecto"];

        $sumaParcial = $par1+$par2+$par3;
        $puntosParcial =  ($sumaParcial/3) * 0.55;

        $puntosExamen = $examen * 0.3;
        $puntosProyecto = $proyecto * 0.15;

        $sumaFinal = $puntosParcial + $puntosExamen + $puntosProyecto;
    } else {
        $par1 =  0;
        $par2 =  0;
        $par3 =  0;
        $examen =0;
        $proyecto =0;
        $puntosParcial=0;
        $puntosExamen =0;
        $puntosProyecto=0;
        $sumaFinal= "Sin registros"; 
        $error ='<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> No se ingresaron los datos completos
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Resultado 6</title>
</head>
<body>
    <?php require("navbar.php") ?>
    <br>
    <div class="container-fluid">
    <table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm">
        <thead>
            <tr>
                <th scope="col">Parcial 1</th>
                <th scope="col">Parcial 2</th>
                <th scope="col">Parcial 3</th>
                <th scope="col">Puntos Obtenidos(55%)</th>
                <th scope="col">Examen Final</th>
                <th scope="col">Puntos Obtenidos(30%)</th>
                <th scope="col">Proyecto Final</th>
                <th scope="col">Puntos obtenidos(15%)</th>
                <th scope="col">Calificacion Final</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <th scope="row"><?php echo($par1)?></th>
                <td><?php echo($par2)?></td>
                <td><?php echo($par3)?></td>
                <td><?php echo($puntosParcial)?></td>
                <td><?php echo($examen)?></td>
                <td><?php echo($puntosExamen)?></td>
                <td><?php echo($proyecto)?></td>
                <td><?php echo($puntosProyecto)?></td>
                <td><?php echo($sumaFinal)?></td>
            </tr>
        </tbody>
    </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>