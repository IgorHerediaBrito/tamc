<?php
include "config.php";
include DIR_PATH."./templates/nav.php";
?>
<section>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center my-4">
                    <h1>Memória RAM</h1>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 text-center mt-3" > 
                    <img class="image-fluid" id="largura" src="./imagem/ram.jpg"  alt="...">
                </div>
                <div class="col-sm-6 mt-3"> 
                    <p id="texto">A memória RAM é uma peça essencial para que um computador possa funcionar, com sua funcionalidade de armazenar temporariamente dados durante a ação de um aplicativo e sistemas operacionais. Assim que finalizado seu uso, ele grava as informações em um SSD ou HD.
	Quanto mais gigabytes (unidade de medida usada em memórias) a memória RAM possui, maior a sua capacidade de armazenamento e quanto maior a frequência de hertz (unidade de medida de velocidade) maior a sua velocidade de ação.</p>
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
                    <a  href="<?php echo URL_BASE?>/placa-video.php"><img id="largura2" src="./imagem/placa-video.jpg"  class="rounded" alt="..."></a>
                </div>
                <div class="col-sm-3 text-center mt-3">
                    <a  href="<?php echo URL_BASE?>/hd.php"><img id="largura2" src="./imagem/hd.jpg" class="rounded" alt="..."></a>
                </div>
                <div class="col-sm-3 text-center mt-3">
                    <a  href="<?php echo URL_BASE?>/ssd.php"><img id="largura2" src="./imagem/ssd.jpg" class="rounded" alt="..."></a>
                </div>
            </div>
            <div class="row" id="margin">

            </div>
        </div>


    </section>
