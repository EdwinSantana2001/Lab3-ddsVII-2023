<?php 
    if(!empty($_POST["txt_n1"]) || !empty($_POST["txt_n2"])){
        $n1 = $_POST["txt_n1"];
        $n2 = $_POST["txt_n2"];
        
        $sumar = $n1+$n2;
        $restar= $n1-$n2;
        $multi = $n1*$n2; 
        $div   = $n1/$n2;
    }else{
        $sumar = 0;
        $restar= 0;
        $multi = 0; 
        $div   = 0;
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
    <title>Resultado 2</title>
</head>
<body>
    <?php require("navbar.php") ?>
    <?php if(isset($error)) 
        echo($error)
    ?>
    
    <h3>La suma es:</h3>
    <?php echo($sumar) ?><br>
    <h3>La resta es:</h3>
    <?php echo($restar) ?><br>
    <h3>La multiplicación es:</h3>
    <?php echo($multi) ?><br>
    <h3>La division es:</h3>
    <?php echo($div) ?><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>