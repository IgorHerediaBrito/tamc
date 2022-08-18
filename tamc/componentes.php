<?php
include "config.php";
include DIR_PATH."./templates/nav.php";
?>

<section>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" id="margin">
                    <h1 id="h1componentes" class="display-3">Componentes</h1>
                </div>
            </div>
            <div class="row">
            <div class="col-sm-4 text-center mt-5" >
                  <a href="<?php echo URL_BASE?>/processador.php"><img id="largura2" src="./imagem/processador.png" class="rounded" alt="..."></a>
                </div>
                <div class="col-sm-4 text-center mt-5" >
                  <a href="<?php echo URL_BASE?>/placa-mae.php"><img id="largura2" src="./imagem/placa-mae.jpg" class="rounded" alt="..."></a>
                </div>
                <div class="col-sm-4 text-center mt-5" >
                  <a href="<?php echo URL_BASE?>/ram.php"><img id="largura2" src="./imagem/ram.jpg" class="rounded" alt="..."></a>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4 text-center mt-5" >
                  <a href="<?php echo URL_BASE?>/placa-video.php"><img id="largura2" src="./imagem/placa-video.jpg" class="rounded" alt="..."></a>
                </div>
                <div class="col-sm-4 text-center mt-5" >
                  <a href="<?php echo URL_BASE?>/hd.php"><img id="largura2" src="./imagem/hd.jpg" class="rounded" alt="..."></a>
                </div>
                <div class="col-sm-4 text-center mt-5" >
                  <a href="<?php echo URL_BASE?>/ssd.php"><img id="largura2" src="./imagem/ssd.jpg" class="rounded" alt="..."></a>
                </div>
            </div>

            <div class="row">
            <div class="col-sm-4 text-center mt-5" >
                  <a href="<?php echo URL_BASE?>/cooler.php"><img id="largura2" src="./imagem/cooler.jpg" class="rounded" alt="..."></a>
                </div>
                <div class="col-sm-4 text-center mt-5" >
                  <a href="<?php echo URL_BASE?>/fonte.php"><img id="largura2" src="./imagem/fonte.jpg" class="rounded" alt="..."></a>
                </div>
                <div class="col-sm-4 text-center mt-5" >
                  <a href="<?php echo URL_BASE?>/gabinete.php"><img id="largura2" src="./imagem/gabinete.jpg" class="rounded" alt="..."></a>
                </div>
            </div>
            <div class="row" id="margin">

            </div>
        </div>
    </section>

<?php
    require DIR_PATH."/templates/footer.php";
?>
