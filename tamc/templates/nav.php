
<?php
//inicia a sessao do login para as paginas
    if(!isset($_SESSION)){
        session_start();
    }
?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/main.css">
    
    <title>TAMC</title>
</head>

<body>
    <div id="header">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container-fluid">
                    <a class="navbar-brand" href="<?php echo URL_BASE?>/index.php"><img id="logo" class="img-fluid" src="./imagem/tamc.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                        <li class="nav-item">
                                <a id="txtnav" class="nav-link" href="<?php echo URL_BASE?>/index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a id="txtnav" class="nav-link active " aria-current="page" href="<?php echo URL_BASE?>/compatibilidade.php">Compatibilidade</a>
                            </li>
                            <li class="nav-item">
                                <a id="txtnav" class="nav-link" href="<?php echo URL_BASE?>/componentes.php">Peças</a>
                            </li>
                            <li class="nav-item">
                                <a id="txtnav" class="nav-link" href="<?php echo URL_BASE?>/user.php">Usuário</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!--/NAV-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>