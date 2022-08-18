let erroCpuPlaca = document.querySelector("#erroCpuPlaca");
let erroEnergia = document.querySelector("#erroEnergia");
let erroGabinetePlaca = document.querySelector("#erroGabinetePlaca");
let erroGabineteFonte = document.querySelector("#erroGabineteFonte");
let consumoPc = 0;
var consumoMaximo;
function Cpu(){
    var select = document.getElementById('CpuID');
	window.cpuarray = select.options[select.selectedIndex].value;
}
function PlacaMae(){
    var select = document.getElementById('PlacaMaeID');
	window.placaarray = select.options[select.selectedIndex].value;
    CompCpuPlaca();
}
function MemoriaRam(){
    var select = document.getElementById('MemoriaRamID');
	window.ramarray = select.options[select.selectedIndex].value;
}
function PlacaVideo(){
    var select = document.getElementById('PlacaVideoID');
	window.videoarray = select.options[select.selectedIndex].value;
}
function DiscoRigido(){
    var select = document.getElementById('DiscoRigidoID');
	window.hdarray = select.options[select.selectedIndex].value;
}
function DiscoSSD(){
    var select = document.getElementById('DiscoSSDID');
	window.ssdarray = select.options[select.selectedIndex].value;
}
function Cooler(){
    var select = document.getElementById('CoolerID');
	window.coolerarray = select.options[select.selectedIndex].value;
}
function FonteAlimentacao(){
    var select = document.getElementById('FonteAlimentacaoID');
	window.fontearray = select.options[select.selectedIndex].value;
    psuCalc();
}
function Gabinete(){
    var select = document.getElementById('GabineteID');
	window.gabinetearray = select.options[select.selectedIndex].value;
    CompFonteGabinete();
    CompPlacaGabinete();
}
function CompCpuPlaca(){
    eval(cpuarray);
    eval(placaarray);
    if(cpuVerifica[1]===placaVerifica[1]){
        erroCpuPlaca.classList.add("display-none");
    }else{
        erroCpuPlaca.classList.remove("display-none");
        console.log("Soquete não incopativel")
    }
    
}
function psuCalc(){
    eval(cpuarray);
    eval(placaarray);
    eval(ramarray);
    eval(videoarray);
    eval(hdarray);
    eval(ssdarray);
    eval(coolerarray);
    eval(fontearray);
    var num = [];
    num[0] = parseInt(cpuVerifica[2]);
    num[1] = parseInt(placaVerifica[2]);
    num[2] = parseInt(memoriaRamVerifica[2]);
    num[3] = parseInt(placaVideoVerifica[2]);
    num[4] = parseInt(memoriaVerifica[2]);
    num[5] = parseInt(ssdVerifica[2]);
    num[6] = parseInt(collerVerifica[2]);
    
    for (let i = 0; i < num.length; i++) {
        consumoPc += num[i];
    }
    consumoMaximo = parseInt(fonteVerifica[4]);
    if(consumoMaximo>consumoPc){
        erroEnergia.classList.add("display-none");
    }else{
        erroEnergia.classList.remove("display-none");
    }
}
function CompFonteGabinete(){
    eval(fontearray);
    eval(gabinetearray);
    if(fonteVerifica[3] == gabineteVerifica[5] || fonteVerifica[3] == gabineteVerifica[6] || fonteVerifica[3] == gabineteVerifica[7]){
        erroGabineteFonte.classList.add("display-none");
    }else{
        erroGabineteFonte.classList.remove("display-none");
    }
}
function CompPlacaGabinete(){
    eval(gabinetearray);
    eval(placaarray);
    if(placaVerifica[3] == gabineteVerifica[5] || placaVerifica[3] == gabineteVerifica[6] || placaVerifica[3] == gabineteVerifica[7]){
        erroGabinetePlaca.classList.add("display-none");
    }else{
        erroGabinetePlaca.classList.remove("display-none");
    }
}
function enviar(){
    eval(cpuarray);
    eval(placaarray);
    eval(ramarray);
    eval(videoarray);
    eval(hdarray);
    eval(ssdarray);
    eval(coolerarray);
    eval(fontearray);
    eval(gabinetearray);
    let listaCpu = document.querySelector("#listaCpu");
    var textlistaCpu = document.createTextNode(cpuVerifica[0]);
    listaCpu.appendChild(textlistaCpu);

    let listaPlaca = document.querySelector("#listaPlaca");
    var textlistaPlaca = document.createTextNode(placaVerifica[0]);
    listaPlaca.appendChild(textlistaPlaca);

    let listaRam = document.querySelector("#listaRam");
    var textlistaRam = document.createTextNode(memoriaRamVerifica[0]);
    listaRam.appendChild(textlistaRam);

    let listaVideo = document.querySelector("#listaVideo");
    var textlistaVideo = document.createTextNode(placaVideoVerifica[0]);
    listaVideo.appendChild(textlistaVideo);

    let listaHd = document.querySelector("#listaHd");
    var textlistaHd = document.createTextNode(memoriaVerifica[0]);
    listaHd.appendChild(textlistaHd);

    let listaSsd = document.querySelector("#listaSsd");
    var textlistaSsd = document.createTextNode(ssdVerifica[0]);
    listaSsd.appendChild(textlistaSsd);

    let listaColler = document.querySelector("#listaColler");
    var textlistaColler = document.createTextNode(collerVerifica[0]);
    listaColler.appendChild(textlistaColler);

    let listaFonte = document.querySelector("#listaFonte");
    var textlistaFonte = document.createTextNode(fonteVerifica[0]);
    listaFonte.appendChild(textlistaFonte);

    let listaGabinete = document.querySelector("#listaGabinete");
    var textlistaGabinete = document.createTextNode(gabineteVerifica[0]);
    listaGabinete.appendChild(textlistaGabinete);
}
function clickImpressao(){
    eval(cpuarray);
    eval(placaarray);
    eval(ramarray);
    eval(videoarray);
    eval(hdarray);
    eval(ssdarray);
    eval(coolerarray);
    eval(fontearray);
    eval(gabinetearray);

    var doc = new jsPDF();
    doc.text(10, 20, "Nome do cliente")
    doc.text(10, 30, "Processador: "+cpuVerifica[0])
    doc.text(10, 40, "Placa mãe: "+placaVerifica[0])
    doc.text(10, 50, "Ram: "+memoriaRamVerifica[0])
    doc.text(10, 60, "Placa de vídeo: "+placaVideoVerifica[0])
    doc.text(10, 70, "HD: "+memoriaVerifica[0])
    doc.text(10, 80, "SSD: "+ssdVerifica[0])
    doc.text(10, 90, "Cooler: "+collerVerifica[0])
    doc.text(10, 100, "Fonte: "+fonteVerifica[0])
    doc.text(10, 110, "Gabinete: "+gabineteVerifica[0])
    doc.text(10, 120, "O seu pc vai consumir em media "+consumoPc+"W e a sua fonte aguenta entregar "+consumoMaximo+"W")
    doc.output("dataurlnewwindow");
}
