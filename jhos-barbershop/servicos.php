<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Descrição do site -->
  <meta name="description" content="wawawawawawawawwaaw">
  <!-- palavras chave -->
  <meta name="keywords" content="corte, cabelo, barba, progressiva, penteados">
  <!-- autor do site -->

  <meta name="autor" content="Arthur Costa">

  <!-- Open Graph -->
  <meta property="og:title" content="Jho's Barbershop">
  <meta property="og:description" content="wawawawawawawawwaaw">
  <meta property="og:image" content="https://">
  <meta property="og:type" content="website">
  <!-- Links dos ICONS FAVICOM -->
  <link rel="apple-touch-icon" sizes="57x57" href="assets/icon//apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="assets/icon//apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="assets/icon//apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/icon//apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="assets/icon//apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="assets/icon//apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="assets/icon//apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="assets/icon//apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/icon//apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="assets/icon//android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/icon//favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/icon//favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/icon//favicon-16x16.png">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#e0a215">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#e0a215">


  <title>Jho's Barbershop</title>
  <!-- Reset limpa os estilos -->
  <link rel="stylesheet" href="css/reset.css">

  <!-- slick -->
  <link rel="stylesheet" href="css/slick.css">

  <link rel="stylesheet" href="css/slick-theme.css">

  <!-- Animate CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!-- Estilo -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">


</head>

<body>
  <!-- cabeçalho -->

  <header class="topo topo2" id="topoFixo">

    <div class="site">

      <h1>Jho's Barbershop</h1>
      <button class="abrir-menu"></button>
      <nav class="menu">
        <button class="fechar-menu"></button>

        <?php $pgAtual = basename($_SERVER['PHP_SELF']); ?>

        <!-- nav>ul>li*6>a+tab -->
        <ul>
          <li><a class="<?php if ($pgAtual == 'index.php')
            echo 'menu-ativo'; ?>" href="index.php">Home</a></li>

          <li><a class="<?php if ($pgAtual == 'sobre.php')
            echo 'menu-ativo'; ?>" href="sobre.php">Sobre</a></li>

          <li><a class="<?php if ($pgAtual == 'servicos.php')
            echo 'menu-ativo'; ?>" href="servicos.php">Serviços</a></li>

          <li><a class="<?php if ($pgAtual == 'galeria.php')
            echo 'menu-ativo'; ?>" href="galeria.php">Galeria</a></li>

          <li><a class="<?php if ($pgAtual == 'contato.php')
            echo 'menu-ativo'; ?>" href="contato.php">Contato</a></li>
        </ul>
        
      </nav>
      <ul class="rede-social topozao">
        <li><a href="https://www.instagram.com/jhos_barbershop/" target="_blank"><img src="assets/instagram-24.png"
              alt="Logo do instagram 60x60"></a></li>
        <li><a href="https://wa.me/5511958871348" target="_blank"><img src="assets/whatsapp-24.png"
              alt="Logo do whatsapp 60x60"></a></li>
        <li><a href="https://www.facebook.com/jhosbarbershop/" target="_blank"><img src="assets/facebook-24.png"
              alt="Logo do facebook 60x60"></a></li>
      </ul>

    </div>

  </header>

  <!-- Corpo -->
  <main>



    <!-- inicio serviços -->

    <section class="servicos">
      <header class="parallax-padrao">
        <h2>
          Nossos Serviços
        </h2>
        <h3>
          confira a variedade de trabalhos oferecidos em nosso local
        </h3>

      </header>

      <div class="tabela-servicos">
        <div class="linha-servico">
          <span>CORTE SOCIAL 1-2-3-4 SEM TESOURA</span>
          <span>R$ 35.00</span>
        </div>
        <div class="linha-servico">
          <span>CORTE DEGRADÊ / DE 0 / 1 OU NAVALHADO / TESOURA</span>
          <span>R$ 40.00</span>
        </div>
        <div class="linha-servico">
          <span>CORTE 1 DE ALTURA + PEZINHO</span>
          <span>R$ 25.00</span>
        </div>
        <div class="linha-servico">
          <span>CORTE + PENTEADO, A PARTIR</span>
          <span>R$ 55.00</span>
        </div>
        <div class="linha-servico">
          <span>CORTE + BARBA + SOBRANCELHA</span>
          <span>R$ 80.00</span>
        </div>
        <div class="linha-servico">
          <span>CORTE + BARBA</span>
          <span>R$ 70.00</span>
        </div>
        <div class="linha-servico">
          <span>CORTE + SOBRANCELHA</span>
          <span>R$ 50.00</span>
        </div>
        <div class="linha-servico">
          <span>CORTE + ALISAMENTO, A PARTIR</span>
          <span>R$ 70.00</span>
        </div>
        <div class="linha-servico">
          <span>CORTE + BARBOTERAPIA</span>
          <span>R$ 70.00</span>
        </div>
        <div class="linha-servico">
          <span>CORTE INFANTIL</span>
          <span>R$ 40.00</span>
        </div>
        <div class="linha-servico">
          <span>CORTE + ALISA + PENTEADO, A PARTIR</span>
          <span>R$ 90.00</span>
        </div>
        <div class="linha-servico">
          <span>CORTE + PROGRESSIVA, A PARTIR</span>
          <span>R$ 110.00</span>
        </div>
        <div class="linha-servico">
          <span>CORTE + BARBA + SOBRANCELHA + PENTEADO, A PARTIR</span>
          <span>R$ 100.00</span>
        </div>
        <div class="linha-servico">
          <span>DESIGN PEZINHO</span>
          <span>R$ 15.00</span>
        </div>
        <div class="linha-servico">
          <span>PROGRESSIVA, A PARTIR</span>
          <span>R$ 80.00</span>
        </div>
        <div class="linha-servico">
          <span>REFLEXO / LUZES, A PARTIR</span>
          <span>R$ 70.00</span>
        </div>
        <div class="linha-servico">
          <span>DESIGN BARBA</span>
          <span>R$ 30.00</span>
        </div>
        <div class="linha-servico">
          <span>DESIGN DE SOBRANCELHA</span>
          <span>R$ 15.00</span>
        </div>
        <div class="linha-servico">
          <span>PLATINADO GLOBAL + CORTE, A PARTIR</span>
          <span>R$ 150.00</span>
        </div>
        <div class="linha-servico">
          <span>PENTEADO</span>
          <span>R$ 25.00</span>
        </div>
        <div class="linha-servico">
          <span>ALISAMENTO + HIDRATAÇÃO</span>
          <span>R$ 45.00</span>
        </div>
        <div class="linha-servico">
          <span>CORTE + ALISAMENTO + HIDRATAÇÃO</span>
          <span>R$ 80.00</span>
        </div>
      </div>


    </section>

    <!-- fim serviços -->




    <!-- Inicio produtos -->
    <section class="produtos">
      <header class="parallax-padrao">
        <h2>
          Produtos
        </h2>
        <h3>
          kits personalizados para seu cuidado!
        </h3>

      </header>

      <div class="site card-produtos">

        <div class="card-flip wow animate__animated animate__fadeInUp animate__delay-1s">
          <article class="card-flip-miolo">

            <div class="flip1">
              <img src="assets/pomada_premium.png" alt="imagem de um kit de produtos para cabelo">
              <h4>
                pomada extra forte “fox for men”
              </h4>
            </div>

            <div class="flip2">


              <h4>
                pomada extra forte “fox for men”
              </h4>
              <h4>
                R$ 35,00
              </h4>
              <p>
                Pomadas para cabelo
              </p>

            </div>
          </article>


        </div>

        <div class="card-flip wow animate__animated animate__fadeInUp animate__delay-1s">
          <article class="card-flip-miolo">

            <div class="flip1">
              <img src="assets/pomada_matte.png" alt="imagem de um kit de produtos para cabelo">
              <h4>
                pomada matte “fox for men”
              </h4>
            </div>

            <div class="flip2">
              <h4>
                pomada matte “fox for men”
              </h4>
              <h4>
                R$ 35,00
              </h4>
              <p>
                cera modeladora efeito matte
              </p>

            </div>
          </article>


        </div>


        <div class="card-flip wow animate__animated animate__fadeInUp animate__delay-1s">
          <article class="card-flip-miolo">

            <div class="flip1">
              <img src="assets/pomada_teia.png" alt="imagem de um kit de produtos para cabelo">
              <h4>
                pomada teia “fox for men” 80g
              </h4>
            </div>

            <div class="flip2">
              <h4>
                pomada teia “fox for men” 80g
              </h4>
              <h4>
                R$ 35,00
              </h4>
              <p>
                creme modelador efeito teia
              </p>

            </div>
          </article>


        </div>


        <div class="card-flip wow animate__animated animate__fadeInUp animate__delay-1s">
          <article class="card-flip-miolo">

            <div class="flip1">
              <img src="assets/modelador_em_po.png" alt="imagem de um kit de produtos para cabelo">
              <h4>
                modelador em pó “fox for men” 7g
              </h4>
            </div>

            <div class="flip2">
              <h4>
                modelador em pó “fox for men” 7g
              </h4>
              <h5>
                R$ 35,00
              </h5>
              <p>
                modelador em pó para o couro cabeludo
              </p>

            </div>
          </article>


        </div>


        <div class="card-flip wow animate__animated animate__fadeInUp animate__delay-1s">
          <article class="card-flip-miolo">

            <div class="flip1">
              <img src="assets/shaving_gel_barba.png" alt="imagem de um kit de produtos para cabelo">
              <h4>
                shaving gel “fox for men” 500g
              </h4>
            </div>

            <div class="flip2">
              <h4>
                shaving gel “fox for men” 500g
              </h4>
              <h5>
                R$ 35,00
              </h5>
              <p>
                gel de barbear 500g
              </p>

            </div>
          </article>


        </div>


        <div class="card-flip wow animate__animated animate__fadeInUp animate__delay-1s">
          <article class="card-flip-miolo">

            <div class="flip1">
              <img src="assets/limpador_facial.png" alt="imagem de um kit de produtos para cabelo">
              <h4>
                limpador facial “fox for men” 250g
              </h4>
            </div>

            <div class="flip2">
              <h4>
                limpador facial “fox for men” 250g
              </h4>
              <h5>
                R$ 35,00
              </h5>
              <p>
                limpador facial pré barba
              </p>

            </div>
          </article>


        </div>


        <div class="card-flip wow animate__animated animate__fadeInUp animate__delay-1s">
          <article class="card-flip-miolo">

            <div class="flip1">
              <img src="assets/balm_para_barba.png" alt="imagem de um kit de produtos para cabelo">
              <h4>
                Balm para barba “fox for men” 120ml
              </h4>
            </div>

            <div class="flip2">
              <h4>
                Balm para barba “fox for men” 120ml
              </h4>
              <h5>
                R$ 35,00
              </h5>
              <p>
                hidratação para a barba
              </p>

            </div>
          </article>


        </div>


        <div class="card-flip wow animate__animated animate__fadeInUp animate__delay-1s">
          <article class="card-flip-miolo">

            <div class="flip1">
              <img src="assets/oleo_para_barba.png" alt="imagem de um kit de produtos para cabelo">
              <h4>
                Óleo para barba “fox for men” 60ml
              </h4>
            </div>

            <div class="flip2">
              <h4>
                Óleo para barba “fox for men” 60ml
              </h4>
              <h5>
                R$ 35,00
              </h5>
              <p>
                Óleo para barba
              </p>

            </div>
          </article>


        </div>


        <div class="card-flip wow animate__animated animate__fadeInUp animate__delay-1s">
          <article class="card-flip-miolo">

            <div class="flip1">
              <img src="assets/pos_barba.png" alt="imagem de um kit de produtos para cabelo">
              <h4>
                Hidratante facial Pós barba “fox for men” 120ml
              </h4>
            </div>

            <div class="flip2">
              <h4>
                Hidratante facial Pós barba “fox for men” 120ml
              </h4>
              <h5>
                R$ 35,00
              </h5>
              <p>
                Hidratante facial pós barba
              </p>

            </div>
          </article>


        </div>


        <div class="card-flip wow animate__animated animate__fadeInUp animate__delay-1s">
          <article class="card-flip-miolo">

            <div class="flip1">
              <img src="assets/locao_pos_barba.png" alt="imagem de um kit de produtos para cabelo">
              <h4>
                Loção pós barba “fox for men” 240ml
              </h4>
            </div>

            <div class="flip2">
              <h4>
                Loção pós barba “fox for men” 240ml
              </h4>
              <h5>
                R$ 35,00
              </h5>
              <p>
                Loção pós barba
              </p>

            </div>
          </article>


        </div>


        <div class="card-flip wow animate__animated animate__fadeInUp animate__delay-1s">
          <article class="card-flip-miolo">

            <div class="flip1">
              <img src="assets/gel_cola.png" alt="imagem de um kit de produtos para cabelo">
              <h4>
                Gel Cola “fox for men” 300g
              </h4>
            </div>

            <div class="flip2">
              <h4>
                Gel Cola “fox for men” 300g
              </h4>
              <h5>
                R$ 35,00
              </h5>
              <p>
                Pomadas para cabelo
              </p>

            </div>
          </article>


        </div>


        <div class="card-flip wow animate__animated animate__fadeInUp animate__delay-1s">
          <article class="card-flip-miolo">

            <div class="flip1">
              <img src="assets/shampoo_anti_caspa.png" alt="imagem de um kit de produtos para cabelo">
              <h4>
                Shampo Anti Caspa “fox for men”
              </h4>
            </div>

            <div class="flip2">
              <h4>
                Shampo Anti Caspa “fox for men”
              </h4>
              <h5>
                R$ 35,00
              </h5>
              <p>
                Pomadas para cabelo
              </p>

            </div>
          </article>


        </div>


        <div class="card-flip wow animate__animated animate__fadeInUp animate__delay-1s">
          <article class="card-flip-miolo">

            <div class="flip1">
              <img src="assets/shampoo_4_em_1.png" alt="imagem de um kit de produtos para cabelo">
              <h4>
                Shampoo 4 em 1 “fox for men” 240 ML
              </h4>
            </div>

            <div class="flip2">
              <h4>
                Shampoo 4 em 1 “fox for men” 240 ML
              </h4>
              <h5>
                R$ 35,00
              </h5>
              <p>
                Pomadas para cabelo
              </p>

            </div>
          </article>


        </div>

        <div class="card-flip wow animate__animated animate__fadeInUp animate__delay-1s">
          <article class="card-flip-miolo">

            <div class="flip1">
              <img src="assets/esfoliante_facial_pre.png" alt="imagem de um kit de produtos para cabelo">
              <h4>
                Esfoliante Facial Pré Barba “fox for men” 120ML
              </h4>
            </div>

            <div class="flip2">
              <h4>
                Esfoliante Facial Pré Barba “fox for men” 120ML
              </h4>
              <h5>
                R$ 35,00
              </h5>
              <p>
                Pomadas para cabelo
              </p>

            </div>
          </article>


        </div>

        <div class="card-flip wow animate__animated animate__fadeInUp animate__delay-1s">
          <article class="card-flip-miolo">

            <div class="flip1">
              <img src="assets/mascara_black.png" alt="imagem de um kit de produtos para cabelo">
              <h4>
                Máscara Black “fox for men” 120ML
              </h4>
            </div>

            <div class="flip2">
              <h4>
                Máscara Black “fox for men” 120ML
              </h4>
              <h5>
                R$ 35,00
              </h5>
              <p>
                Máscara Facial
              </p>

            </div>
          </article>


        </div>







      </div>
    </section>


    <!-- fim produtos -->

  </main>




  <!-- Inicio rodapé -->
  <?php require_once('conteudo/rodape.php') ?>

  <!-- Fim Rodapé -->

  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

  <script src="js/slick.min.js"></script>

  <script src="js/wow.min.js"></script>

  <script src="js/script.js"></script>





</body>


</html>