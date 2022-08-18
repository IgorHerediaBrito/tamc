<?php
include "config.php";
include DIR_PATH."./templates/nav.php";
?>
    <!--cont1-->
    <div id="conteudo1">
        <div class="container">
            <h1 class="display-3 text-center fs-1 p-3">Qual peça devo priorizar na escolha <br> do meu computador?</h1>
            <div class="row">
                <div class="col-12 col-sm-4">
                    <img class="image-fluid img-cont1" src="./imagem/imgcont1.png" alt="">
                </div>
                <div class="col-12 col-sm-8 p-3">
                    <a href="<?php echo URL_BASE?>/compatibilidade.php">
                        <button type="button" class="btn btn-primary rounded-pill p-2">Clique aqui</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--/Cont1-->
    <!--Cont2-->
    <div id="conteudo2">
        <div class="container">
            <h1 id="h1cont2" class="display-3 text-center fs-1 p-3">Qual peça escolher para montar meu PC?</h1>
            <div class="row">
                <div class="col-12 col-sm-9">
                    <a href="<?php echo URL_BASE?>/componentes.php">
                        <button type="button" class="btn btn-primary rounded-pill pt-2 pb-2 pl-4 pr-4">SIMULE</button>
                    </a>
                </div>
                <div class="col-12 col-sm-3">
                    <img class="image-fluid" src="./imagem/chave.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!--/Cont2-->
    <!--Cont3-->
    <div id="conteudo3">
        <div class="container">
            <h1 class="display-5 p-3">Montagem do computador passo a passo</h1>
            <div class="row pt-5 pb-5">
                <div class="col-12 col-sm-7 pt-3">
                    <p class="conteudo3txt p-3">O vídeo mostra como realizar a <br> montagem de seu
                        microcomputador <br>
                        passo a passo</p>
                </div>
                <div class="col-12 col-sm-5 mt-3">
                    <iframe id="video" src="https://www.youtube.com/embed/O9845EjK7o0"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <!--/cont3-->
<?php
    require DIR_PATH."/templates/footer.php";
?>