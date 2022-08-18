<?php
include "config.php";
include 'templates/nav.php';
?>
<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/main.css"/>

    <!-- jsPdf Biblioteca -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>

    <title>TAMC</title>
</head>
<body>
    <!--Compatibilidade erros-->

<div id="erroCpuPlaca" class="display-none">
    <div class="alert alert-danger text-center" role="alert">
        <p class="fs-5">Soquete Incopativel</p>
    </div>
</div>
<div id="erroGabinetePlaca" class="display-none">
    <div class="alert alert-danger text-center" role="alert">
        <p class="fs-5">Tamanho da placa mãe incompativel com o tamanho do gabinete</p>
    </div>
</div>
<div id="erroEnergia" class="display-none">
    <div class="alert alert-danger text-center" role="alert">
        <p class="fs-5">O pc que você montou consome mais energia em que a fonte suporta passar</p>
    </div>
</div>
<div id="erroGabineteFonte" class="display-none">
    <div class="alert alert-danger text-center" role="alert">
        <p class="fs-5">Tamanho da fonte incompativel com o tamanho do gabinete</p>
    </div>
</div>
<!--/Compatibilidade erros-->
<!--INPUT-->
<form>
<div class="container">
        <div class="row">
            <div class="col-12 col-sm-4">
                <select onblur="Cpu()" class="select" id="CpuID">n
                    <option value="" disabled selected>CPU</option>
                    <option value="var cpuVerifica = ['i5-10400f', 'lga-1200', '65'];">i5-10400f</option>
                    <option value="var cpuVerifica = ['i7-10700f', 'lga-1200', '65'];">i7-10700f</option>
                    <option value="var cpuVerifica = ['Ryzen 5 5600X', 'am4', '65'];">Ryzen 5 5600X</option>
                    <option value="var cpuVerifica = ['Ryzen 3 3200G', 'am4', '65'];">Ryzen 3 3200G</option>
                    <option value="var cpuVerifica = ['i3-12100f', 'lga-1700', '58'];">i3-12100f</option>
                </select>
            </div>
            <div class="col-12 col-sm-4">
                <select onblur="PlacaMae()" class="select" id="PlacaMaeID">
                    <option value="" disabled selected>Placa mãe</option>
                    <option value="var placaVerifica = ['H510M-Biostar', 'lga-1200', '70', 'ATX'];">H510M-Biostar</option>
                    <option value="var placaVerifica = ['B560M-MSI', 'lga-1200', '60', 'mATX'];">B560M-MSI</option>
                    <option value="var placaVerifica = ['B450M-Colorful', 'am4', '60', 'mATX'];">B450M-Colorful</option>
                    <option value="var placaVerifica = ['A320M-MSI', 'am4', '60', 'mATX'];">A320M-MSI</option>
                    <option value="var placaVerifica = ['H610M-Gigabyte', 'lga-1700', '60', 'mATX'];">H610M-Gigabyte</option>
                </select>
            </div>
            <div class="col-12 col-sm-4">
                <select onblur="MemoriaRam()" class="select" id="MemoriaRamID">
                    <option value="" disabled selected>Memória ram</option>
                    <option value="var memoriaRamVerifica = ['4GB-Crucial 2666Mhz', '', '1.5', ''];">4GB-Crucial 2666Mhz</option>
                    <option value="var memoriaRamVerifica = ['8GB-HyperX Fury 2666Mhz', '', '3', ''];">8GB-HyperX Fury 2666Mhz</option>
                    <option value="var memoriaRamVerifica = ['8GB-Adata Xpg 3200Mhz', '', '3', ''];">8GB-Adata Xpg 3200Mhz</option>
                    <option value="var memoriaRamVerifica = ['16GB-T-Force Vulcan 3200Mhz', '', '6', ''];">16GB-T-Force Vulcan 3200Mhz</option>
                    <option value="var memoriaRamVerifica = ['32GB-Fury Beast 3200Mhz', '', '12', ''];">32GB-Fury Beast 3200Mhz</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-4">
                <select onblur="PlacaVideo()" class="select" id="PlacaVideoID">
                    <option value="" disabled selected>Placa de vídeo</option>
                    <option value="var placaVideoVerifica = ['Asus NVIDIA GeForce GTX 1650 4GB', '', '300', ''];">Asus NVIDIA GeForce GTX 1650 4GB</option>
                    <option value="var placaVideoVerifica = ['Galax GeForce RTX 3060 12GB', '', '170', ''];">Galax GeForce RTX 3060 12GB</option>
                    <option value="var placaVideoVerifica = ['Gigabyte GTX 1660 Super OC 6GB', '', '450', ''];">Gigabyte GTX 1660 Super OC 6GB</option>
                    <option value="var placaVideoVerifica = ['Palit NVIDIA GeForce RTX 3050 8GB', '', '130', ''];">Palit NVIDIA GeForce RTX 3050 8GB</option>
                    <option value="var placaVideoVerifica = ['Gigabyte Radeon RX 6500 XT 4GB', '', '107', ''];">Gigabyte Radeon RX 6500 XT 4GB</option>
                </select>
            </div>
            <div class="col-12 col-sm-4">
                <select onblur="DiscoRigido()" class="select" id="DiscoRigidoID">
                    <option value="" disabled selected>HD</option>
                    <option value="var memoriaVerifica = ['Hd 1TB Seagate Barracuda 7200 Rpm', '', '15', ''];">Hd 1TB Seagate Barracuda 7200 Rpm</option>
                    <option value="var memoriaVerifica = ['Hd 2TB Seagate Barracuda 7200 Rpm', '', '15', ''];">Hd 2TB Seagate Barracuda 7200 Rpm</option>
                    <option value="var memoriaVerifica = ['Hd 1TB WD Blue 7200 Rpm', '', '15', ''];">Hd 1TB WD Blue 7200 Rpm</option>
                    <option value="var memoriaVerifica = ['Hd 4TB WD Purple 7200 Rpm', '', '15', ''];">Hd 4TB WD Purple 7200 Rpm</option>
                    <option value="var memoriaVerifica = ['Hd 2tb WD Purple 7200 Rpm', '', '15', ''];">Hd 2tb WD Purple 7200 Rpm</option>
                </select>
            </div>
            <div class="col-12 col-sm-4">
                <select onblur="DiscoSSD()" class="select" id="DiscoSSDID">
                    <option value="" disabled selected>SSD</option>
                    <option value="var ssdVerifica = ['Ssd 240GB Kingston A400', '', '15', ''];">Ssd 240GB Kingston A400</option>
                    <option value="var ssdVerifica = ['Ssd 1TB PNY CS900', '', '15', ''];">Ssd 1TB PNY CS900</option>
                    <option value="var ssdVerifica = ['Ssd 480GB WD Green', '', '15', ''];">Ssd 480GB WD Green</option>
                    <option value="var ssdVerifica = ['Ssd 240GB Crucial BX500', '', '15', ''];">Ssd 240GB Crucial BX500</option>
                    <option value="var ssdVerifica = ['Ssd 512GB ADATA SU750', '', '15', ''];">Ssd 512GB ADATA SU750</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-4">
                <select onblur="Cooler()" class="select" id="CoolerID">
                    <option value="" disabled selected>Cooler</option>
                    <option value="var collerVerifica = ['Cooler Fan C3Tech F7-MB10BK', '', '10', ''];">Cooler Fan C3Tech F7-MB10BK</option>
                    <option value="var collerVerifica = ['Cooler Fan Rise Mode Wind W1', '', '10', ''];">Cooler Fan Rise Mode Wind W1</option>
                    <option value="var collerVerifica = ['Cooler Fan Pixxo', '', '10', ''];">Cooler Fan Pixxo</option>
                </select>
            </div>
            <div class="col-12 col-sm-4">
                <select onblur="FonteAlimentacao()" class="select" id="FonteAlimentacaoID">
                    <option value="" disabled selected>Fonte</option>
                    <option value="var fonteVerifica = ['Fonte CV650 80 Plus Bronze 650W', '', '', 'ATX', '650'];">Fonte CV650-80 PLUS BRONZE 650W</option>
                    <option value="var fonteVerifica = ['Fonte EVGA  80 Plus White 700W', '', '', 'ATX', '700'];">Fonte EVGA  80 Plus White 700W</option>
                    <option value="var fonteVerifica = ['Fonte Corsair TX550M 80 Plus Gold 550W', '', '', 'ATX', '550'];">Fonte Corsair TX550M 80 Plus Gold</option>
                    <option value="var fonteVerifica = ['Fonte Cooler Master Plus White 600W', '', '', 'ATX', '600'];">Fonte Cooler Master Plus White 600W</option>
                    <option value="var fonteVerifica = ['Fonte Corsair 80 Plus Gold 650W', '', '', 'ATX', '650'];">Fonte Corsair 80 Plus Gold 650W</option>
                </select>
            </div>
            <div class="col-12  col-sm-4">
                <select onblur="Gabinete()" class="select" id="GabineteID">
                    <option value="" disabled selected>Gabinete</option>
                    <option value="var gabineteVerifica = ['Gabinete Gamer Pichau HX300', '', '', '', '', 'mATX', 'itx', ''];">Gabinete Gamer T-Dagger RGB</option>
                    <option value="var gabineteVerifica = ['Gabinete Gamer Pichau LARK', '', '', '', '', 'mATX', 'ATX', 'mini-itx'];">Gabinete Gamer Gamdias</option>
                    <option value="var gabineteVerifica = ['Gabinete Gamer Pichau APUS RGB', '', '', '', '', 'mATX', 'ATX', 'mini-itx'];">Gabinete Gamer Pichau APUS RGB</option>
                </select>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center padding-input">
            <button type="button" class="input p-2" onclick="enviar()">Enviar</button>
            </div>
        </div>
    </div>
    </form>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-white">
                <div id="confirm">
                    <ul class="pt-5 lista">
                        <li id="listaCpu" class="textolista">CPU: </li>
                        <li id="listaPlaca" class="textolista">PLACA MÃE: </li>
                        <li id="listaRam" class="textolista">MEMÓRIA RAM: </li>
                        <li id="listaVideo"class="textolista">PLACA DE VÍDEO: </li>
                        <li id="listaHd"class="textolista">HD: </li>
                        <li id="listaSsd"class="textolista">SSD: </li>
                        <li id="listaColler"class="textolista">COOLER: </li>
                        <li id="listaFonte"class="textolista">FONTE: </li>
                        <li id="listaGabinete"class="textolista">GABINETE: </li>
                    </ul>                                       
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5 pb-5">
            <button type="button" class="input p-2" onclick="clickImpressao()">Sim</button>
            </div>
        </div>
    </div>
    <!--/INPUT-->
    <?php 
    include 'templates/footer.php'
    ?>
    <script src="./js/script.js"></script>
    </body>