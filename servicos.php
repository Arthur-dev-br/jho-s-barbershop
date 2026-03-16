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
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!-- Estilo -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">


</head>

<body>
  <!-- cabeçalho -->

  <header class="topo topo2">

    <div class="site">

      <h1>Jho's Barbershop</h1>
      <button class="abrir-menu"></button>
      <nav class="menu">
        <button class="fechar-menu"></button>

        <!-- nav>ul>li*6>a+tab -->
        <ul>
          <li><a class="menu-ativo" href="index.php">Home</a></li>
          <li><a href="sobre.php">Sobre</a></li>
          <li><a href="servicos.php">Serviços</a></li>
          <li><a href="galeria.php">Galeria</a></li>
          <li><a href="contato.php">Contato</a></li>
        </ul>
      </nav>
      <!-- ul>li>a>img+tab -->
      <ul class="rede-social">
        <li><a href="#" target="_blank"><img src="assets/instagram-24.png" alt="Logo do instagram 60x60"></a></li>
        <li><a href="#" target="_blank"><img src="assets/whatsapp-24.png" alt="Logo do whatsapp 60x60"></a></li>
        <li><a href="#" target="_blank"><img src="assets/facebook-24.png" alt="Logo do facebook 60x60"></a></li>
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
     


    </section>

    <!-- fim serviços -->




    <!-- Inicio produtos -->
    <?php require_once('conteudo/produtos.php'); ?>

    <!-- fim produtos -->

  </main>




  <!-- Inicio rodapé -->
  <?php require_once('conteudo/rodape.php') ?>

  <!-- Fim Rodapé -->

  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

  <script src="js/slick.min.js"></script>

  <script src="js/wow.min.js"></script>

  <script src="js/script.js"></script>





</body>


</html>