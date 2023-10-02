<?php  
    $resultado =0;
    $n1 =0;
    $n2 =0;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema-1</title>
</head>
<body>
    <?php  require("navbar.php") ?>

    <div class="container">
        <h1>Problema 1</h1>

        <form action="resultado1.php" method="post">
            
            <div class="mb-3">
                <label for="n1" class="form-label">Ingrese primer numero</label>
                <input type="number" class="form-control" id="n1" name="n1" aria-describedby="textHelp" step="0.00" value="<?php echo($n1)  ?>">
            </div>

            <div class="mb-3">
                <label for="n2" class="form-label">Ingrese segundo numero</label>
                <input type="number" class="form-control" id="n2" name="n2" aria-describedby="textHelp" step="0.00" value="<?php echo($n2)  ?>">
            </div>
            <input type="hidden" class="bandera">
            <button type="submit" class="btn btn-success">Enviar</button> 
            <?php if(isset($error)) ?>
            La suma es <?php echo($resultado)  ?>
        </form>        
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>