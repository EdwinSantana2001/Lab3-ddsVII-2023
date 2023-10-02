<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 5</title>
</head>
<body>
    <?php require("navbar.php") ?>
    <h1>Calificación final total</h1>
    
    <div class="container-sm">
        <form action="resultado6.php" method="post">
            <div class="mb-3">
                <label for="parcial1" class="form-label">Digite la nota del Parcial 1</label>
                <input type="text" class="form-control" id="parcial1" name="parcial1" aria-describedby="textHelp">
            </div>    
            <div class="mb-3">
                <label for="parcial2" class="form-label">Digite la nota del Parcial 2</label>
                <input type="text" class="form-control" id="parcial2" name="parcial2" aria-describedby="textHelp">
            </div>
            <div class="mb-3">
                <label for="parcial3" class="form-label">Digite la nota del Parcial 3</label>
                <input type="text" class="form-control" id="parcial3" name="parcial3" aria-describedby="textHelp">
            </div>
            <div class="mb-3">
                <label for="examen" class="form-label">Digite la nota del Examen Final</label>
                <input type="text" class="form-control" id="examen" name="examen" aria-describedby="textHelp">
            </div>
            <div class="mb-3">
                <label for="proyecto" class="form-label">Digite la nota del Proyecto Final</label>
                <input type="text" class="form-control" id="proyecto" name="proyecto" aria-describedby="textHelp">
            </div>
            <button type="submit" class="btn btn-success">Calificación Final</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>