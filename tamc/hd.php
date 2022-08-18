<?php
include "config.php";
include DIR_PATH."./templates/nav.php";
?>
<section>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center my-4">
                    <h1>HD</h1>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 text-center mt-3" > 
                    <img class="image-fluid" id="largura" src="./imagem/hd.jpg"  alt="...">
                </div>
                <div class="col-sm-6 mt-3"> 
                    <p id="texto">O HD significa disco rígido ele traz uma importante função aos nossos computadores, guardando informações mesmo se desligado</p>
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
                    <a  href="<?php echo URL_BASE?>/placa-video.php"><img id="largura2" src="./imagem/placa-video.jpg" class="rounded" alt="..."></a>
                </div>
                <div class="col-sm-3 text-center mt-3">
                    <a  href="<?php echo URL_BASE?>/ssd.php"><img id="largura2" src="./imagem/ssd.jpg"  class="rounded" alt="..."></a>
                </div>
                <div class="col-sm-3 text-center mt-3">
                    <a  href="<?php echo URL_BASE?>/cooler.php"><img id="largura2" src="./imagem/cooler.jpg" class="rounded" alt="..."></a>
                </div>
                <div class="col-sm-3 text-center mt-3">
                    <a  href="<?php echo URL_BASE?>/fonte.php"><img id="largura2" src="./imagem/fonte.jpg" class="rounded" alt="..."></a>
                </div>
            </div>
            <div class="row" id="margin">

            </div>
        </div>


    </section>
