<?php
    if(!empty($_POST["comensales"])){
        $comen = $_POST["comensales"];
        if($comen >0 && $comen <=199){
            $costo = $comen*95.00;
        }else{
            if($comen >= 200 && $comen <= 300){
                $costo = $comen*85.00;
            }else{
                if($comen > 300){
                    $costo = $comen*75.00;
                }else{
                    $costo = "Warning!: No están permintidos los datos negativos";
                }
            }
        }


    }else{
        $comen = "Warning: No se ingresaron datos";
        $costo = 0;
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
    <title>Problema 12+1</title>
</head>
<body>
    <?php require("navbar.php")?>
    <br>
    <div class="container-fluid">
        <?php if(isset($error)){
            echo($error);
        } ?>    
        <h3>Cantidad de comensales:</h3>
        <h4><?php echo($comen) ?></h4>

        <h3>Precio por comensales :</h3>
        <h4><?php echo($costo." USD") ?></h4>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>