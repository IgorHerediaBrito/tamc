<?php
include "config.php";
include DIR_PATH."./templates/nav.php";
?>
<section>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center my-4">
                    <h1>Placa de vídeo</h1>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 text-center mt-3" > 
                    <img class="image-fluid" id="largura" src="./imagem/placa-video.jpg"  alt="...">
                </div>
                <div class="col-sm-6 mt-3"> 
                    <p id="texto">A placa de vídeo é responsável por tudo o que vemos na tela do computador, desde as telas do sistema operacional até o desenho do ponteiro do mouse, pois, ela é responsável por fazer o vidéo, ela desenha o que aparece nas nossas telas</p>
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
                    <a  href="<?php echo URL_BASE?>/ram.php"><img id="largura2" src="./imagem/ram.jpg" class="rounded" alt="..."></a>
                </div>
                <div class="col-sm-3 text-center mt-3">
                    <a  href="<?php echo URL_BASE?>/hd.php"><img id="largura2" src="./imagem/hd.jpg"  class="rounded" alt="..."></a>
                </div>
                <div class="col-sm-3 text-center mt-3">
                    <a  href="<?php echo URL_BASE?>/ssd.php"><img id="largura2" src="./imagem/ssd.jpg" class="rounded" alt="..."></a>
                </div>
                <div class="col-sm-3 text-center mt-3">
                    <a  href="<?php echo URL_BASE?>/cooler.php"><img id="largura2" src="./imagem/cooler.jpg" class="rounded" alt="..."></a>
                </div>
            </div>
            <div class="row" id="margin">

            </div>
        </div>


    </section>
