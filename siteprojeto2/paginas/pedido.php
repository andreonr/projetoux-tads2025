    <style>
        #pedido {
            margin-top: 7.9rem;
            margin-bottom:1.9rem;
        }


    </style>
    
    <section id="pedido" class="section py-5 bg-light-subtle">
        <div class="container text-center">
            <h1 class="display-4 mb-4">Faça seu Pedido Online!</h1>
            <p class="lead mb-5">Clique no botão abaixo para ser direcionado ao nosso cardápio no iFood e pedir suas delícias favoritas!</p>
            
            <?php
            // Define o link do iFood
            $ifood_link = "https://www.ifood.com.br/delivery/campo-mourao-pr/hamburgueria-do-teko-centro";
            ?>

            <a href="<?php echo $ifood_link; ?>" target="_blank" class="btn btn-danger btn-lg icon-link-hover">
                <i class="fas fa-utensils me-2"></i> Pedir no iFood
            </a>

            <div class="mt-5">
                <p>Ou se preferir, entre em contato conosco:</p>
                <p><i class="fas fa-phone-alt me-2"></i> (44) 99945-0920</p>
                <p><i class="fas fa-envelope me-2"></i> contato@hamburgueriadoteko.com.br</p>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" integrity="sha512-..." crossorigin="anonymous"></script>
