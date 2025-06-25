<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hamburgueria do Teko</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Cursive:wght@400..700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="style.css">
  <link rel="shortcut icon" href="imagens/logohamburgueria.JPG">

</head>

<body>
  <header class="bg-danger text-white py-lg-5 position-fixed w-100">
    <nav class="navbar navbar-expand-lg navbar-light container">
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="imagens/logohamburgueria.JPG" alt="Hamburgueria do Teko" class="me-2" height="30">
        <h1 class="fs-4 mb-0">Hamburgueria do Teko</h1>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cardapio.html">Cardápio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contato.html">Contato</a>
          </li>
          <li class="nav-item">
            <button type="button" class="btn btn-danger btn-lg btn-outline-danger">
              <a class="nav-link" href="pedido.html"><strong>Peça aqui!</strong></a></button>
          </li>
        </ul>
      </div>
    </nav>
    <div class="hero container-fluid p-0">
      <div class="hero-content position-absolute top-50 start-50 translate-middle text-center text-white">
        <!-- <a href="#cardapio" class="btn btn-primary btn-warning btn-lg icon-link-hover">Ver Cardápio</a>
        <a href="#ifood" class="btn btn-danger btn-outline-danger btn-lg icon-link-hover text-light-emphasis">ifood</a> -->

      </div>
    </div>
  </header>

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
        <div class="col">
          <div class="card h-100 bg-warning">
            <img src="imagens/xburguer.png" class="card-img-top" alt="X-Burguer">
            <div class="card-body">
              <h3 class="card-title">X-Burguer</h3>
              <p class="card-text descricao">Pão brioche, carne, queijo cheddar, alface, tomate, maionese.
              </p>
              <p class="card-text preco"><strong>R$ 25,00</strong></p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 bg-warning">
            <img src="imagens/xegg.png" class="card-img-top" alt="X-Egg">
            <div class="card-body">
              <h3 class="card-title">X-Egg</h3>
              <p class="card-text descricao">Pão De Brioche, Hamburguer Bovino 180g, Mussarela, Tomate,
                Alface, Cebola Roxa E Ovo.</p>
              <p class="card-text preco"><strong>R$ 33,00</strong></p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 bg-warning">
            <img src="imagens/xsalada.png" class="card-img-top" alt="X-Salada">
            <div class="card-body">
              <h3 class="card-title">X-Salada</h3>
              <p class="card-text descricao">Pão De Brioche, Hamburguer Bovino 180g, Mussarela, Tomate,
                Alface, Cebola Roxa.</p>
              <p class="card-text preco"><strong>R$ 29,90</strong></p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 bg-warning">
            <img src="imagens/xcalabresa.png" class="card-img-top" alt="X-Calabresa">
            <div class="card-body">
              <h3 class="card-title">X-Calabresa</h3>
              <p class="card-text descricao">PPão De Brioche, Hamburguer Bovino 180g, Mussarela, Tomate,
                Alface, Cebola Roxa E Calabresa.</p>
              <p class="card-text preco"><strong>R$ 29,90</strong></p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 bg-warning   ">
            <img src="imagens/cheddarduplo.png" class="card-img-top" alt="Hambúrguer Duplo Cheddar">
            <div class="card-body text-center">
              <h3 class="card-title">Duplo Cheddar</h3>
              <p class="card-text">Pão De Brioche, 2 Hambuguer Bovino 180g, Mussarela, Bacon E Cheddar.
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 bg-warning">
            <img src="imagens/xbacon.png" class="card-img-top" alt="Hambúrguer X-Bacon">
            <div class="card-body text-center">
              <h3 class="card-title">X-Bacon</h3>
              <p class="card-text">Pão De Brioche, Hamburguer Bovino 180g, Mussarela, Tomate, Alface,
                Cebola Roxa E Bacon.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 bg-warning">
            <img src="imagens/smashduplo.png" class="card-img-top" alt="Hambúrguer Smash">
            <div class="card-body text-center">
              <h3 class="card-title">Smash Cheddar Duas Camadas</h3>
              <p class="card-text">Imagine dois hambúrguer no estilo smash, com 100g de carne cada até
                alcançar aquela crosta dourada irresistível.
                Por cima, uma generosa camada de cheddar cremoso, derretido perfeitamente para envolver
                cada pedaço.
                Para completar, fatias crocantes de bacon, que trazem um toque defumado e uma textura
                incrível ao lanche.
                Tudo isso, harmonizado dentro de um pão macio e levemente tostado,
                criando uma combinação perfeita de sabores e texturas que fazem cada mordida
                inesquecível.</p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="imagens/combo1lanche.png" class="card-img-top" alt="Combo Lanche1">
            <div class="card-body bg-warning">
              <h3 class="card-title">Dois X-Burguer's + Coca-Cola 1L</h3>
              <p class="card-text descricao">Dois deliciosos X-burguers, recheados com ingredientes
                frescos e irresistíveis,
                acompanhados por uma Coca-Cola geladinha de 1 litro. Perfeito para matar a fome e a sede
                com muito sabor!</p>
              <p class="card-text preco"><strong>R$ 19,90</strong></p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 bg-warning">
            <img src="imagens/combolanche.png" class="card-img-top" alt="Combo Lanche">
            <div class="card-body">
              <h3 class="card-title">X-Bacon + X-Salada + Coca-Cola 1L</h3>
              <p class="card-text descricao">Um suculento X-Bacon, com seu toque defumado e irresistível,
                acompanhado por um clássico X-Salada fresquinho e uma Coca-Cola bem gelada de 1 litro
                para completar a experiência.
                A combinação perfeita para quem ama variedade e sabor!</p>
              <p class="card-text preco"><strong>R$ 73,00</strong></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="bg-warning-subtle text-body text-center py-3">
    <div class="container">
      <p>© 2025 Hamburgueria do Teko - Todos os direitos reservados.</p>
      <a href="https://www.instagram.com/hamburgueriadoteko" target="_blank" class="text-body mx-2">
        <i class="bi bi-instagram" style="font-size: 1.5rem;"></i>
      </a>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

</body>

</html>