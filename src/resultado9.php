<?php 
    if(!empty($_GET["m"] || !empty($_GET["f"] ))){
        $m =$_GET["m"]; 
        $f =$_GET["f"] ;

        $total = $m+$f;
        $procentajeM = ( $m* 100)/$total;
        $procentajeF = ( $f* 100)/$total;
    }else{
        $m =0; 
        $f =0;
        $total ="No se conocen los datos";
        $procentajeM = 0;
        $procentajeF = 0;
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
    <title>Resultado 9</title>
</head>
<body>
    <?php require("navbar.php") ?>
    <br>
    <div class="container-fluid">
        <?php if(isset($error)){
            echo($error);
        } ?>
        <table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm">
            <thead>
                <tr>
                    <th scope="col">Totalidad de Estudiantes(100%)</th>
                    <th scope="col">Estudiantes Masculinos</th>
                    <th scope="col">Porcentaje</th>
                    <th scope="col">Estudiantes Femeninos</th>
                    <th scope="col">Porcentaje</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><?php echo($total) ?></th>
                    <td><?php echo($m) ?></td>
                    <td><?php echo(round($procentajeM,2)."%") ?></td>
                    <td><?php echo($f) ?></td>
                    <td><?php echo(round($procentajeF,2)."%") ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>