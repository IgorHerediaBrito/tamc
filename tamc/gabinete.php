<?php
include "config.php";
include DIR_PATH."./templates/nav.php";
?>
<section>
        <div class="container">
            <div class="row">
                <div class="col-12 text-center my-4">
                    <h1>Gabinete</h1>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 text-center mt-3" > 
                    <img class="image-fluid" id="largura" src="./imagem/gabinete.jpg"  alt="...">
                </div>
                <div class="col-sm-6 mt-3"> 
                    <p id="texto">Por mais que não pareça, o gabinete é um componente importante para o computador, sendo aquela carcaça de metal ou plástico, é nela que os componente do computador como placa-mãe, placa de vídeo, fonte ficam alojados e organizados, além disso, o gabinete serve para proteger esses componentes sensíveis, de poeira, umidade, sol e de batidas.</p>
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
                    <a  href="<?php echo URL_BASE?>/fonte.php"><img id="largura2" src="./imagem/fonte.jpg" class="rounded" alt="..."></a>
                </div>
                <div class="col-sm-3 text-center mt-3">
                    <a  href="<?php echo URL_BASE?>/processador.php"><img id="largura2" src="./imagem/processador.png"  class="rounded" alt="..."></a>
                </div>
                <div class="col-sm-3 text-center mt-3">
                    <a  href="<?php echo URL_BASE?>/placa-mae.php"><img id="largura2" src="./imagem/placa-mae.jpg" class="rounded" alt="..."></a>
                </div>
                <div class="col-sm-3 text-center mt-3">
                    <a  href="<?php echo URL_BASE?>/ram.php"><img id="largura2" src="./imagem/ram.jpg" class="rounded" alt="..."></a>
                </div>
            </div>
            <div class="row" id="margin">

            </div>
        </div>


    </section>
