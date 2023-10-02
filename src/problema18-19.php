<?php   
    /* Este ejercicio es un vinculo dinamico */ 
    //preguntar sobre el echo de del modal(¿Porqué ncesita el echo?) 
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 18</title>
</head>
<body>
    <?php require("navbar.php") ?>
    <div class="container">
        <table class="table table-light table-striped table-hover table-bordered table-sm table-responsive-sm">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Cifrado</th>
                    <th scope="col">Ver</th>
                    <th scope="col">Ver en esta pagina</th>
                </tr>
            </thead>
            <tbody>
                <?php for($n = 1; $n <= 100; $n++){?>
                <tr>
                    <th scope="row"> <?php echo($n) ?></th>
                    <td> <?php echo(md5($n)) ?> </td>
                    <td><a href="resultado18.php?numero=<?php echo(base64_encode($n)) ?>&valor=<?php echo(md5($n)) ?>"><button type="button" class="btn btn-success">Ver</button></a> </td>
                    <th scope="row">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $n; ?>">
                            Ver aqui. <?php //$n1= $n?>
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal<?php echo $n; ?>" tabindex="-1" aria-labelledby="exampleModalLabel<?php echo $n?>" aria-hidden="true">
                            <div class="modal-dialog        ">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel<?php echo $n?>">Encriptado 2</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <?php
                                    echo ($n);
                                    ?> 
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </th>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>