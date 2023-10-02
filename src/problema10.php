<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 10</title>
</head>
<body>
    <?php require("navbar.php") ?>
    <div class="container-fluid">
        <h3>Costo por segundo de un servicio</h3>
        <br>
        <form action="resultado10.php" method="post">
            <div class="mb-3">
                <label for="h" class="form-label">Ingrese hora</label>
                <input type="text" class="form-control" id="h" name="h" aria-describedby="textHelp" placeholder="000">
            </div>
            <div class="mb-3">
                <label for="m" class="form-label">Ingrese minutos</label>
                <input type="text" class="form-control" id="m" name="m" aria-describedby="textHelp" placeholder="000">
            </div>
            <div class="mb-3">
                <label for="s" class="form-label">Ingrese segundos</label>
                <input type="text" class="form-control" id="s" name="s" aria-describedby="textHelp" placeholder="000">
            </div>
            <button type="submit" class="btn btn-success">Calcular</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>