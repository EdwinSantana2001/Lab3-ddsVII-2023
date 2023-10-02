<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 5</title>
</head>
<body>
    <?php require("navbar.php")?>
    <div class="container-sm">
        <br>
        <form action="resultado5.php" method="get" >
            <div class="mb-3">
                <label for="name" class="form-label">Digite su nombre</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="textHelp">
            </div>
            <div class="mb-3">
                <label for="nota1" class="form-label">Digite su nota 1</label>
                <input type="text" class="form-control" id="nota1" name="nota1" aria-describedby="textHelp">
            </div>
            <div class="mb-3">
                <label for="nota2" class="form-label">Digite su nota 2</label>
                <input type="text" class="form-control" id="nota2" name="nota2" aria-describedby="textHelp">
            </div>
            <div class="mb-3">
                <label for="nota3" class="form-label">Digite su nota 3</label>
                <input type="text" class="form-control" id="nota3" name="nota3" aria-describedby="textHelp">
            </div>
            <div class="mb-3">
                <label for="nota4" class="form-label">Digite su nota 4</label>
                <input type="text" class="form-control" id="nota4" name="nota4" aria-describedby="textHelp">
            </div>
            <div class="mb-3">
                <label for="nota5" class="form-label">Digite su nota 5</label>
                <input type="text" class="form-control" id="nota5" name="nota5" aria-describedby="textHelp">
            </div>
            <button type="submit" class="btn btn-success">Enviar</button>
        </form> 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>