<?php
include "config.php";
include DIR_PATH."./templates/nav.php";
?>
<section>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center my-4">
                    <h1>Cooler</h1>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 text-center mt-3" > 
                    <img class="image-fluid" id="largura" src="./imagem/cooler.jpg"  alt="...">
                </div>
                <div class="col-sm-6 mt-3"> 
                    <p id="texto">O cooler que nada mais é que um mini ventilador colocado em cima de uma placa de metal, que é colocada em cima da peça, utilizado para substituir o dissipador que era utilizado para resfriar as peças. Existem alguns tipos de cooler, tais como: air cooler, water cooler, heatpipe cooler.</p>
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
                    <a  href="<?php echo URL_BASE?>/ssd.php"><img id="largura2" src="./imagem/ssd.jpg" class="rounded" alt="..."></a>
                </div>
                <div class="col-sm-3 text-center mt-3">
                    <a  href="<?php echo URL_BASE?>/fonte.php"><img id="largura2" src="./imagem/fonte.jpg"  class="rounded" alt="..."></a>
                </div>
                <div class="col-sm-3 text-center mt-3">
                    <a  href="<?php echo URL_BASE?>/gabinete.php"><img id="largura2" src="./imagem/gabinete.jpg" class="rounded" alt="..."></a>
                </div>
                <div class="col-sm-3 text-center mt-3">
                    <a  href="<?php echo URL_BASE?>/processador.php"><img id="largura2" src="./imagem/processador.png" class="rounded" alt="..."></a>
                </div>
            </div>
            <div class="row" id="margin">

            </div>
        </div>


    </section>
