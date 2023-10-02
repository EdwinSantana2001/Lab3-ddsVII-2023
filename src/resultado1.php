<?php  
    if(!empty($_POST["n1"]) or !empty($_POST["n2"])){
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        $resultado = $n1+$n2;
    }else{
        $resultado=0;
        $error ='<div class="alert alert-danger alert-dismissible fade show" role="alert">
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
    <title>Resultado-1</title>
</head>
<body>
    <?php  require("navbar.php") ?>
    <div class="container">
        <h1>Resultado</h1>
        <?php if(isset($error)) 
        echo($error)
        ?>
        <h3>La suma es:</h3>
        <h4><?php echo $resultado ?></h4>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>