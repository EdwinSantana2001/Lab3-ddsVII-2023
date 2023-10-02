<?php
    if(!empty($_POST["anio"])){
        $anio = $_POST["anio"];
        if($anio == 1){
            $cobro = 100;
        }else{
            if($anio == 2){
                $cobro = 200;
            }else{
                if($anio == 3){
                    $cobro= 300;
                }else{
                    if($anio == 4){
                        $cobro = 400;
                    }else{
                        if($anio == 5){
                            $cobro = 500;
                        }else{
                            if($anio > 5){
                                $cobro = 1000;
                            }
                        }
                    }
                }
            }
        }
    }else{
        $anio = "Warning: No se ingresaron datos";
        $cobro = 0;
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
    <title>Problema 14</title>
</head>
<body>
    <?php require("navbar.php")?>
    <br>
    <div class="container-fluid">
        <?php if(isset($error)){
            echo($error);
        } ?>    
        <h3>Cantidad años:</h3>
        <h4><?php echo($anio) ?></h4>

        <h3>Cobro por años:</h3>
        <h4><?php echo($cobro." USD") ?></h4>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>