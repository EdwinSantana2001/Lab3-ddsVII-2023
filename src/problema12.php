<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 12</title>
</head>
<body>
    <?php require("navbar.php")?>
    <div class="container-fluid">
    <h3>Conversor de KG a LB</h3>
        <form action="resultado12.php" method="post">
            <br>
            <div class="mb-3">
                <label for="exampleInputText1" class="form-label">Digite los Kg a convertir</label>
                <input type="text" class="form-control" id="exampleInputText1" name="kg" aria-describedby="textHelp">
            </div>
            <button type="submit" class="btn btn-success">Calcular</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>