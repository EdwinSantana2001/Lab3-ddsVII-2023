<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 2</title>
</head>
<body>
    <?php require("navbar.php") ?>    
    <div class="container-sm">
        <br>
        <h3>Calculadora de dos números</h3>
        
        <form action="resultado2.php" method="post">
            <div class="mb-3">
                <label for="txt_n1" class="form-label">Ingrese primer número</label>
                <input type="text" class="form-control" id="txt_n1" name ="txt_n1" aria-describedby="textHelp">
            </div>
            <div class="mb-3">
                <label for="txt_n2" class="form-label">Ingrese segundo número</label>
                <input type="text" class="form-control" id="txt_n2" name="txt_n2" aria-describedby="textHelp">
            </div>
            <button type="submit" class="btn btn-success">Calcular</button>
        </form>    
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>