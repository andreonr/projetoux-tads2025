document.addEventListener('DOMContentLoaded', function() {
    const scrollToTopBtn = document.getElementById('scrollToTopBtn');

    // Mostra ou esconde o botão com base na posição de rolagem
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) { // Mostra o botão após rolar 300px
            scrollToTopBtn.style.display = 'block';
        } else {
            scrollToTopBtn.style.display = 'none';
        }
    });

    // quando é clicado rola para cima
    scrollToTopBtn.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});