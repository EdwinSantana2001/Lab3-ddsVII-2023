<?php 
    if(!empty($_POST["h"]) || !empty($_POST["m"]) || !empty($_POST["s"]) ){
        $h=$_POST["h"];
        $m=$_POST["m"];
        $s=$_POST["s"];

        $hTotal=$h*3600;
        $mTotal=$m*60;

        $suma = $hTotal+$mTotal+$s;

        $costo = $suma * 0.25;
    }else{
        $h=0;
        $m=0;
        $s=0;
        $suma = 0;
        $costo = "Warning: No se han recibido datos!";
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
    <title>Resultado 10</title>
</head>
<body>
    <?php require("navbar.php")?>
    <br>
        <div class="container-fluid">
            <?php if(isset($error)){
                    echo($error);
            }?>
            <h3>Las horas son</h3>
            <h4><?php echo($h) ?></h4>
            
            <h3>Los minutos son:</h3>
            <h4><?php echo($m) ?></h4>
            
            <h3>Los segundos son:</h3>
            <h4><?php echo($s) ?></h4>
            
            <h3>Los segundos totales son:</h3>
            <h4><?php echo($suma) ?></h4>

            <h3>El costo total en USD:</h3>
            <h4><?php echo($costo)?></h4>    
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>