/*Script das semanas e do Formulário*/ 

var range = document.querySelector('.range-type')
var texto = document.querySelector('#texto')
var data = document.querySelector('.date-css')
var anoAtual = new Date()
if(anoAtual.getMonth.length == 1)
    var formata = (anoAtual.getFullYear() + '-' + `0${anoAtual.getMonth() + 1}` + '-' + anoAtual.getDate())
else
    var formata = (anoAtual.getFullYear() + '-' + `${anoAtual.getMonth() + 1}` + '-' + anoAtual.getDate())

data.value = formata


range.oninput = () => {
    texto.innerHTML = range.value;
}

var n = document.querySelector('.tipo-01')
n.innerHTML=n;