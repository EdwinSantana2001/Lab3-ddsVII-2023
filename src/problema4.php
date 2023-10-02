<?php 
    $HT = 0;
    $SH = 0;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>
</head>
<body>
    <?php  require("navbar.php") ?>
    <div class="container-sm">
        <h1>Problema 4</h1>
            <form action="resultado4.php" method="post">   
                
                    <div class="mb-3">
                    <label for="HT" class="form-label">Ingerse las horas trabajadas</label>
                    <input type="number" class="form-control" id="HT" name="HT"  aria-describedby="textHelp" placeholder="ingrese las horas trabajadas" value="<?php echo($HT) ?>">
                    </div>
                    <div class="mb-3">
                    <label for="SH" class="form-label">Ingrese el salario por hora</label>
                    <input type="number" class="form-control" id="SH" name="SH" aria-describedby="textHelp" placeholder="ingrese El salario por hora" value="<?php echo($SH) ?>">
                    </div>
                    <button type="submit" class="btn btn-success">Enviar</button>
                
            </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>