<?php
    if(!empty($_GET["name"] || !empty($_GET["nota1"]) || !empty($_GET["nota2"]) || !empty($_GET["nota3"]) || !empty($_GET["nota4"]) || !empty($_GET["nota5"]) )){
        $name = $_GET["name"];
        $n1   = $_GET["nota1"]; 
        $n2   = $_GET["nota2"]; 
        $n3   = $_GET["nota3"];
        $n4   = $_GET["nota4"]; 
        $n5   = $_GET["nota5"];
        
        $suma = $n1+$n2+$n3+$n4+$n5;
        $promedio = $suma/5;
    }else{
        $promedio=0;
        $name = "(Nombre desconocido)";
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
    <title>Resultado 5</title>
</head>
<body>
    <?php require("navbar.php")?>
    <?php if(isset($error)){
            echo($error);
    } ?>
    <h3>El estudiante con nombre:</h3>
    <h4><?php echo($name) ?></h4><br>

    <h3>El promedio del estudiante:</h3>
    <h4><?php echo($promedio) ?></h4><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>