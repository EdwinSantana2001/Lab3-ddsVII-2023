<?php 
    if(!empty($_POST["limite"])){
        $lim =  $_POST["limite"];
        
        if($lim<1){
            $lim = "Warning!: Digite solo numeros positivos";
        }else{
            switch($lim){
                case 1:
                    $limNuevo = "Le hemos aumentado en un 25% su limite de credito";
                    break;
                case 2:
                    $limNuevo = "Le hemos aumentado en un 35% su limite de credito";
                    break;
                case 3:
                    $limNuevo = "Le hemos aumentado en un 40% su limite de credito";
                    break;
                default:
                    $limNuevo = "Le hemos aumentado en un 50% su limite de credito";
                    break;
            }
        }
    }else {
        $lim = "Datos no ingresados";
        $limNuevo = "Error: Aumento de limite no posible";
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
    <title>Resultado 15</title>
</head>
<body>
    <?php require("navbar.php")?>
    <br>
    <div class="container-fluid">
        <?php if(isset($error)){
            echo($error);
        }?>
        <h3>El tipo de targeta:</h3>
        <h4><?php echo($lim) ?></h4>
        <br>
        <h3>Tiene un aumento de credito de:</h3>
        <h4><?php echo($limNuevo) ?></h4>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>