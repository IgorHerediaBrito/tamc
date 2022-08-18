<?php
include "config.php";
include DIR_PATH."./templates/nav.php";
?>

<div class="container">
    <div class="row">
        <div class="col-12 text-center my-4 ">
            <h1>
                <?php 
                    //aparece o nome do usuario caso ele estraja logado
                    if(isset($_SESSION['user'])){
                        echo $_SESSION['user'];
                    }else{
                        echo "Usuário não logado";
                    }
                ?>  
            </h1>
        </div>
    </div> 
    
        <div class="row">
            <div class="col-12 text-center mt-4">
                <a id="dados" href="<?php echo URL_BASE?>/login.php">
                    <button type="button" class="btn btn-dark px-5">Login</button>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center mt-2">
                <a id="dados" href="<?php echo URL_BASE?>/registro.php">
                    <button type="button" class="btn btn-dark px-4">Registrar-se</button>
                </a>
            </div>
        </div>

    <div class="row">
        <div class="col-12 text-start mt-4 mb-2 ">
            <h2>
                Configurações salvas
            </h2>
        </div>
    </div> 
</div>

<div class="container mb-5">
    <div class="row">
        <div  class="col-12 text-center bg-dark rounded-3">
            
                <br><br><br>
                <br><br><br>
                <br><br><br>
                <br><br><br>
                <br><br><br>
                <br><br><br>
                <br><br><br>
                <br><br><br>
            
        </div>
    </div> 
    <div class="row">
            <div class="col-12 text-center mt-4">
                <a href="sair.php">
                    <button type="button" class="btn btn-outline-danger">Sair da conta</button>
                </a>
            </div>
    </div>
</div>
<script src="./js/user.js"></script>
<?php 
    include 'templates/footer.php'
?>
