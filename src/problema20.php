<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Problema 20</title>
</head>
<body>
    <?php require("navbar.php")?>
    <br>
    <br>
    <div class="container-sm">
        <table class="table table-dark table-striped table-hover table-bordered table-sm table-responsive-sm">
            <thead>
                <tr>
                    <th scope="col">Número</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Progress Bar</th>
                </tr>
            </thead>
            <tbody>
                <?php for($i=1; $i<=10; $i++){?>
                <tr>
                    <th scope="row"><?php echo($i)?></th>
                    <td><?php echo($r = rand(0,100))?></td>
                    <td>
                        <div class="progress">
                        <div class="progress-bar bg-<?php if($r < 61){
                            echo("secondary");
                            }else{ 
                                if($r>60 && $r<71){
                                    echo("danger");
                                    }else{
                                        if($r>70 && $r<81){
                                            echo("warning");
                                            }else{
                                                if($r>80 && $r<91){
                                                    echo("info");
                                                }else{
                                                    if($r>90){
                                                     echo("success");
                                                    }
                                                }
                                        }
                                    }
                            }?> progress-bar-striped " role="progressbar" style="width: <?php echo $r?>%;" aria-valuenow="<?php echo $r?>" aria-valuemin="0" aria-valuemax="100"><?php echo $r?></div>
                        </div>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>