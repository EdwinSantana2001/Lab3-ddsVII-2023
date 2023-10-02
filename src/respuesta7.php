<?php 
    if(!empty($_GET["presupuesto"])){
        $pre = $_GET["presupuesto"];
        
        $gine = $pre * 0.4;
        $trauma = $pre * 0.3;
        $pediatria = $pre * 0.3;
    }else {
        $pre="Datos no ingresados";
        $gine = 0;
        $trauma = 0;
        $pediatria = 0;
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
    <title>Respuesta 7</title>
</head>
<body>
    <?php require("navbar.php") ?>
    <br>
    <?php if(isset($error)){
        echo($error);   
    }?>
    <div class="container-fluid">
        <h3>Clinica Santana Presupuesto Anual</h3>
    
        <table class="table table-primary table-striped table-hover table-bordered table-sm table-responsive-sm">
            <thead>
                <tr>
                    <th scope="col">Año</th>
                    <th scope="col">Presupuesto General(100%)</th>
                    <th scope="col">Ginecologia(40%)</th>
                    <th scope="col">Traumatismo (30%)</th>
                    <th scope="col">Pediatria(30%)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">2023</th>
                    <td><?php echo($pre." <b>USD</b>") ?></td>
                    <td><?php echo($gine." <b>USD</b>") ?></td>
                    <td><?php echo($trauma." <b>USD</b>") ?></td>
                    <td><?php echo($pediatria." <b>USD</b>") ?></td>
                </tr>
            </tbody>
        </table>    
    </div>        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>