const corFundo = document.getElementById('cor-fundo');
const corTexto = document.getElementById('cor-texto');

corFundo.addEventListener('change', () => {
    if (corFundo.value === corTexto.value) {
        corTexto.value = '';
    }
});

corTexto.addEventListener('change', () => {
    if (corFundo.value === corTexto.value) {
        corFundo.value = '';
    }
});