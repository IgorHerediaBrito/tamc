<?php
    include('conexao.php');
    
    if(isset($_POST['email']) || isset($_POST['senha']) ){
        if(strlen($_POST['email'] == 0)){
            echo "Preencha o email";
        }else if(strlen($_POST['senha'] == 0)){
            echo "Preencha o senha";
        }else{

            $email = $mysqli->real_escape_string($_POST['email']);
            $senha = $mysqli->real_escape_string($_POST['senha']);

            $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
            $sql_query = $mysqli->query($sql_code) or die("falha na conexao");

            $quantidade = $sql_query->num_rows;
            if($quantidade == 1){

                $usuario = $sql_query->fetch_assoc();

                if(!isset($_SESSION)){
                    session_start();
                }

                $_SESSION['user'] = $usuario['usuario'];

                header("Location: index.php");

            }else{
                echo "falha ao logar! email ou senha incorretos";
            }
        }
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

                    <form action="" method="POST">
                        <div id="login">
                            <h1 id="h1login" class="display-3">Login</h1>

                            <input type="text" name="email" class="form-control" placeholder="Email"
                                aria-label="Recipiente para nickname" aria-describedby="basic-addon2">

                            <input type="password" name="senha" class="form-control" placeholder="Senha"
                                aria-label="Recipiente para nickname" aria-describedby="basic-addon2"> 

                            <button type="submit" name="submit" value="Enviar"class="form-control" aria-describedby="basic-addon2"><a>enviar</a></button>
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

