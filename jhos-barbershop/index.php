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
    
    <meta name="autor"  content="Arthur Costa">

    <!-- Open Graph -->
     <meta property="og:title"  content="Jho's Barbershop">
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
     <link rel="icon" type="image/png" sizes="192x192"  href="assets/icon//android-icon-192x192.png">
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
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <!-- Estilo -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
 

</head>
<body>
    <!-- cabeçalho -->

    <header class="topo">

        <div class="site">

        <h1>Jho's Barbershop</h1>
        <button class="abrir-menu"></button>
        <nav class="menu">
       <button class="fechar-menu"></button>     
            
            <!-- nav>ul>li*6>a+tab -->
            <ul>
                <li><a class="menu-ativo" href="#">Home</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Serviços</a></li>
                <li><a href="#">Contato</a></li>
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
        <!-- inicio banner -->
       <?php require_once ('conteudo/banner.php'); ?>
        <!-- fim banner -->
         
        <!-- inicio historia jho -->

        <?php require_once ('conteudo/historia-jho.php'); ?>
        
        <!-- fim historia jho -->

        <!-- inicio serviços -->

        <?php require_once ('conteudo/servicos.php'); ?>

        <!-- fim serviços -->

        <!-- inicio galeria -->

         <?php require_once ('conteudo/galeria.php'); ?>
      
        <!-- fim galeria -->

        <!-- inicio agendamentos -->

        <?php require_once ('conteudo/agendamentos.php'); ?>


        <!-- fim agendamentos -->

        <!-- inicio depoimentos -->

        <?php require_once ('conteudo/depoimentos.php'); ?>

        <!-- fim depoimentos -->


         <!-- Inicio produtos -->
          <?php require_once ('conteudo/produtos.php'); ?>
       
        <!-- fim produtos -->
        
     </main>


     <!-- Rodapé -->
      <footer>

      <!-- inicio localização -->

        <section class="localizacao">
            <header class="parallax-padrao">
                <h2>
                    Localização da Barbearia
                </h2>
            </header>

            <div class="funcionamento">
                <h3 class="wow animate__animated animate__fadeInUp animate__delay-1s">
                    Horários de funcionamento
                </h3>
                <h4 class="wow animate__animated animate__fadeInUp animate__delay-2s">
                    Ter-Sex:10:00-22:00
                </h4>
                <h5 class="wow animate__animated animate__fadeInUp animate__delay-2s">
                    Sáb:09:00-22:00
                </h5>
            </div>

            <div class="imagem-mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.2495717492966!2d-46.41300382391537!3d-23.523524460204612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce646f15058653%3A0x84286c8ac28b5cae!2sJho&#39;S%20BarberShop!5e0!3m2!1spt-BR!2sbr!4v1765389965100!5m2!1spt-BR!2sbr" width="500" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
            <div class="logo_fim">

               <img src="assets/Logo_Jho.png" alt="logo da barbearia">

               
                   
                   <ul class="icone_redeFim rede-social">
                    <li><a href="#" target="_blank"><img src="assets/whatsapp-24.png" alt="Logo do whatsapp"></a></li>
                </ul>
               

               


            </div>

        </section>

      <!-- fim localização -->

        <section class="creditos">
            <h2>
               <?php  $data = date('Y');
          echo $data ?>
          -Criado e desenvolvido por Arthur Costa - Senac Smp
            </h2>

        </section>


      </footer>

      <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

      <script src="js/slick.min.js"></script>

      <script src="js/wow.min.js"></script>

      <script src="js/script.js"></script>


      


</body>


</html>