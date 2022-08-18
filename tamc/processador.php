<?php
include "config.php";
include DIR_PATH."./templates/nav.php";
?>
<section>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center my-4">
                    <h1>Processador</h1>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 text-center mt-3" > 
                    <img class="image-fluid" id="largura" src="./imagem/processador.png"  alt="...">
                </div>
                <div class="col-sm-6 mt-3"> 
                    <p id="texto"> CPU, sigla dada para Unidade Central de Processamento, é o principal item do hardware do computador, é ele quem realiza as tarefas determinadas pelo usuário, sendo considerado o cérebro do computador.</p>
                </div>
            </div>
        </div>
        
    </section>

        <br><br><br><br>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mt-5 ">
                    <h3 id="h3">OUTROS COMPONENTES</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3 text-center mt-3" >
                    <a  href="<?php echo URL_BASE?>/placa-mae.php"><img id="largura2" src="./imagem/placa-mae.jpg" class="rounded" alt="..."></a>
                </div>
                <div class="col-sm-3 text-center mt-3">
                    <a  href="<?php echo URL_BASE?>/ram.php"><img id="largura2" src="./imagem/ram.jpg"  class="rounded" alt="..."></a>
                </div>
                <div class="col-sm-3 text-center mt-3">
                    <a  href="<?php echo URL_BASE?>/placa-video.php"><img id="largura2" src="./imagem/placa-video.jpg" class="rounded" alt="..."></a>
                </div>
                <div class="col-sm-3 text-center mt-3">
                    <a  href="<?php echo URL_BASE?>/hd.php"><img id="largura2" src="./imagem/hd.jpg" class="rounded" alt="..."></a>
                </div>
            </div>
            <div class="row" id="margin">

            </div>
        </div>


    </section>
