<section id="inicio" class="section py-5 bg-danger">
    <div class="container">
    </div>
</section>

  <section id="cardapio" class="section py-5 bg-body">
    <div class="container">
      <p class="lead text-center mb-4 bg-warning">Prepare-se para uma experiência inesquecível. Nossos hambúrgueres são
        artesanais,
        feitos com os melhores ingredientes.</p>
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <?php

          include 'prodarray.php';

          foreach ($cardapio as $produto) {
          echo '<div class="col-sm-6 col-md-4 col-lg-3 mb-4 cardapio" >';
          echo '<div class="card produto-card h-100">';
          echo '<img src="' . $produto['image'] . '" class="card-img-top" alt="' . $produto['title'] . '">';
          echo '<div class="card-body text-center bg-warning">';
          echo '<h5 class="card-title">' . $produto['title'] . '</h5>';
          echo '<p class="card-text">' . $produto['description'] . '</p>';
          echo '</div></div></div>'; 
          }

        ?>
      </div>
    </div>
  </section>

      <button id="scrollToTopBtn" class="btn btn-danger rounded-circle shadow" title="Voltar ao Topo">
        <i class="bi bi-arrow-up"></i>
    </button>

      <script>
        // Script para o botão "Voltar ao Topo"
document.addEventListener('DOMContentLoaded', function() {
    const scrollToTopBtn = document.getElementById('scrollToTopBtn');
    
    // Mostrar/ocultar botão baseado na posição do scroll
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            scrollToTopBtn.style.display = 'block';
        } else {
            scrollToTopBtn.style.display = 'none';
        }
    });
    
    // Função para voltar ao topo suavemente
    scrollToTopBtn.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});

      </script>