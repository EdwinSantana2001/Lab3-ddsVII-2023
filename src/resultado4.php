<?php 
   
    if (!empty($_POST["HT"]) || !empty($_POST["SH"])){
        $horasT = $_POST["HT"];
        $salarioHora = $_POST["SH"];

        $salBruto = $horasT*$salarioHora;
        $desc = 0.2 * $salBruto;
        $salNeto = $salBruto - $desc;
    }else {
        $error='<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> No se ingresaron los datos completos
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
    <title>Practica 4</title>
</head>
<body>
    <?php require("navbar.php") ?>
   

    <h2>Salario Bruto</h2>
    <?php if(isset($error)){
        echo $error;
    }
    ?>
    <p>Su salario bruto es de :<?php echo($salBruto) ?></p><br>
    <h2>Descuento</h2>
    <p>Su Descuento es de :<?php echo($desc) ?></p><br>
    <?php if(isset($error)){
        echo $error;
    }
    ?>
    <h2>Salario Neto</h2>
    <p>Su Salario Neto es de :<?php echo($salNeto) ?></p><br>
    <?php if(isset($error)){
        echo $error;
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>