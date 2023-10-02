<?php 
    if(!empty($_POST["primer"]) || !empty($_POST["segundo"]) || !empty($_POST["tercero"])){
        $primer = $_POST["primer"];
        $segundo = $_POST["segundo"];
        $tercero = $_POST["tercero"];
        $total = $primer + $segundo+ $tercero;

        $porcentaje1 = ($primer * 100)/$total; 

        $porcentaje2 = ($segundo * 100)/$total;

        $porcentaje3 = ($tercero * 100)/$total;
    }else{
        $total = "Warnig: Cantidad de inversion no digitada!! ";
        $primer = 0;
        $segundo = 0;
        $tercero = 0;
        $porcentaje1 = 0; 
        $porcentaje2 = 0;
        $porcentaje3 = 0;
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
    <title>Respuesta 8</title>
</head>
<body>
    <?php require("navbar.php")?>
    <br>
    
    <div class="container-fluid">
        <h3>Porcentajes de inversión</h3>
        <?php if(isset($error)){
            echo($error);
        } ?>
        <br>
        <table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm">
            <thead>
                <tr>
                    <th scope="col">Inversión Total</th>
                    <th scope="col">Primer Inversor</th>
                    <th scope="col">Porcentaje de inversor</th>
                    <th scope="col">Segundo Inversor</th>
                    <th scope="col">Porcentaje de inversor</th>
                    <th scope="col">Tercer Inversor</th>
                    <th scope="col">Porcertanje de inversor</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><?php echo(round($total,2)) ?></th>
                    <td><?php echo(round($primer,2)) ?></td>
                    <td><?php echo(round($porcentaje1,2))?></td>
                    <td><?php echo(round($segundo,2))?></td>
                    <td><?php echo(round($porcentaje2,2))?></td>
                    <td><?php echo(round($tercero,2))?></td>
                    <td><?php echo(round($porcentaje3,2))?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>