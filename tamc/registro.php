<?php
    if(isset($_POST['submit'])){
        //print_r($_POST['email']);
       // print_r($_POST['user']);
       // print_r($_POST['senha']);

       include_once('conexao.php');

       $email = $_POST['email'];
       $usuario = $_POST['user'];
       $senha = $_POST['senha'];


       $result = mysqli_query($mysqli, "INSERT INTO usuarios(email,usuario,senha) 
       VALUES ('$email','$usuario','$senha')");

       header('Location: login.php');
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

<body style="background-color: #4f4f4f;">
    <div id="cont-login">
        <div class="container">
            <div class="row">
                <div class="col-6">
                <form action="registro.php" method="POST">
                    <div id="login">
                        <h1 id="h1login" class="display-3">Registre-se</h1>
                        <input type="text" id="email" name="email" class="form-control" placeholder="E-mail"
                            aria-label="Recipiente para nickname" aria-describedby="basic-addon2">

                        <input type="text" id="user" name="user" class="form-control" placeholder="Usuario"
                            aria-label="Recipiente para nickname" aria-describedby="basic-addon2">

                        <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha"
                            aria-label="Recipiente para nickname" aria-describedby="basic-addon2"> 
                            <button name="submit"  type="submit" class="form-control" aria-describedby="basic-addon2"><a>Registrar</a></button>
                    </div>
               </form>

                </div>
                <div class="col-1">
                    <div id="linha"></div>
                </div>
                <div class="col-5">
                    
                    <div id="img-login">
                        <img id="imagem" class="image-fluid" src="./imagem/tamc.png" alt="">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>