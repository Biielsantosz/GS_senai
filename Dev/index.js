window.addEventListener('scroll', function() {
    var rodape = document.querySelector('footer');
    var alturaPagina = window.innerHeight;
    var alturaScroll = window.scrollY;
    var alturaRodape = rodape.offsetHeight;

    if (alturaScroll > alturaPagina - alturaRodape) {
        rodape.classList.remove('hidden');
    } else {
        rodape.classList.add('hidden');
    }
});
