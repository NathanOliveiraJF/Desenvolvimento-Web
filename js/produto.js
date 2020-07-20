var inputTamanho = document.querySelector('[name=tamanho]');
var outputTamanho = document.querySelector('[name=valorTamanho]');

inputTamanho.oninput = function() {
    outputTamanho.value = inputTamanho.value;
};