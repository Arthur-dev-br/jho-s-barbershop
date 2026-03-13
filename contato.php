<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$ok = 0;
//email != ''; //
if (isset($_POST['email'])) {

  //Create an instance; passing `true` enables exceptions
  require 'vendor/phpmailer/PHPMailer.php';
  require 'vendor/phpmailer/SMTP.php';

  $mail = new PHPMailer(true);

  try {


    // Pegar info do formulário
    $nome      = $_POST["nome"];
    $email     = $_POST["email"];
    $fone      = $_POST["fone"];
    $assunto   = $_POST["assunto"];
    $mens      = $_POST["mens"];


    //Server settings
    $mail->SMTPDebug = //SMTP::DEBUG_SERVER;                      //Enable verbose debug output
      $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smpsistema.com.br';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'tipi06@smpsistema.com.br';                     //SMTP username
    $mail->Password   = 'SMP-Tipi@@06';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('tipi06@smpsistema.com.br', 'Site Casa do Barista'); //quem dispara o email
    $mail->addAddress('arthur.cogrodowski@senacsp.edu.br');     //Add a recipient


    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Site Casa do Barista';
    $mail->Body    = "
      Nome: $nome <br>
      E-mail: $email <br>
      Telefone: $fone <br>
      Assunto: $assunto <br>
      Mensagem: $mens
    ";
    $mail->AltBody = "
      Nome: $nome /n
      E-mail $email /n
      Telefone: $fone /n
      Assunto: $assunto /n
      Mensagem $mens
    ";

    $mail->send();
    $ok = 1;
  } catch (Exception $e) {
    $ok = 2;
  }
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- DescriÃ§Ã£o do site - SEO e compartilhamento -->

  <meta name="description" content="Mais do que servir cafÃ©, Ã© um ambiente que celebra o ofÃ­cio artesanal, a cultura do cafÃ© brasileiro e as histÃ³rias por trÃ¡s de cada grÃ£o.
Cada xÃ­cara Ã© uma narrativa do produtor ao barista, do barista ao cliente. Aqui, o tempo desacelera, os sentidos despertam e o cafÃ© volta a ser o que sempre foi: um ritual de cuidado e partilha.">
  <!-- Palavra Chave -->

  <meta name="keywords" content=" cafÃ©, barista, cafÃ© brasileiro, artesanal, grÃ£o">

  <!-- Autor do site -->

  <meta name="autor" content="Arthur Costa">

  <!-- Open Graph (Compartilhar no Whats, Face, X, LinkedIn)-->

  <meta property="og:title" content="CASA DO BARISTA">
  <meta property="og:description"
    content="Mais do que servir cafÃ©, Ã© um ambiente que celebra o ofÃ­cio artesanal, a cultura do cafÃ© brasileiro e as histÃ³rias por trÃ¡s de cada grÃ£o.
    Cada xÃ­cara Ã© uma narrativa do produtor ao barista, do barista ao cliente. Aqui, o tempo desacelera, os sentidos despertam e o cafÃ© volta a ser o que sempre foi: um ritual de cuidado e partilha.">
  <meta property="og:image" content="https://">
  <meta property="og:type" content="website">

  <!-- Links dos ICONS para FAVICOM -->

  <link rel="apple-touch-icon" sizes="57x57" href="assets/icon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="assets/icon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="assets/icon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/icon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="assets/icon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="assets/icon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="assets/icon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="assets/icon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/icon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="assets/icon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/icon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/icon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/icon/favicon-16x16.png">
  <link rel="manifest" href="assets/icon/manifest.json">
  <meta name="msapplication-TileColor" content="#8b5e3c">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#8b5e3c">

  <title>CASA DO BARISTA</title>
  <!-- Reset limpa os estilos -->
  <link rel="stylesheet" href="css/reset.css">

  <!-- Slick -->

  <link rel="stylesheet" href="css/slick.css">

  <link rel="stylesheet" href="css/slick-theme.css">
  <!-- AnimaÃ§Ã£o - Animate CSS -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<!-- estilo adiciona -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css">


<!-- ID Ã© como um class mas para modificar sessÃµes exclusivas -->

<body id="pg-contato">
  <!-- inicio CabeÃ§alho -->

  <?php require_once('conteudo/topo.php'); ?>


  <!-- Fim cabeÃ§alho -->

  <!-- Corpo -->
  <main>
    <!-- Inicio banner -->
    <?php require_once('conteudo/banner.php'); ?>
    <!-- Fim banner -->

    <!-- ConteÃºdo contato -->

    <section class="contato">
      <h2>Casa do Barista</h2>
      <h3 class="wow animate__animated animate__fadeInUp">

        <?php
        if ($ok == 1) {
          echo $nome . ", sua mensagem foi enviada com sucesso";
        } elseif ($ok == 2) {
          echo $nome . ", não foi possível enviar sua mensagem";
        }

        ?>
      </h3>

      <div class="site">

        <!-- Texto -->

        <div class="contato-txt">


          <p>
            a casa do barista nasceu da vontade de unir pessoas através de algo simples e profundo: o ato de compartilhar uma xí­cara de café.
          </p>
          <p>
            acreditamos no poder das histórias que começam no campo, passam pelo barista e chegam até vocês em forma de aroma, sabor e sentimento.
          </p>
          <p>
            valorizamos pequenos produtores, técnicas artesanais e processos manuais que resgatam o verdadeiro significado do café brasileiro: riqueza cultural,dedicação e tradição.
          </p>
          <div>
            <div>

              <div>
                <h3>Nosso Endereço</h3>
                <h4>Av marachal tito, 1500 <br>São Miguel Paulista</h4>

              </div>

              <div class="emails">
                <h3>Nossos Emails</h3>
                <a href="mailto:contato@email.com.br"> contato@email.com.br</a>
                <a href="mailto:atendimento@email.com.br">atendimento@email.com.br</a>

              </div>

            </div>

            <div>
              <div class="telefone">
                <h3>Nossos Telefones</h3>
                <a href="tel:+5511999999888"> (11) 999-999-888</a>
                <a href="tel:+5511999999888">(11) 999-999-888 </a>

              </div>

              <div>
                <h3>Siga-nos</h3>
                <ul class="rede-social">

                  <li><a href="#" target="_blank"><img src="assets/facebook-24.png" alt="Logo facebook"></a></li>

                  <li><a href="#" target="_blank"><img src="assets/instagram-24.png" alt="Logo instagram"></a></li>

                  <li><a href="#" target="_blank"><img src="assets/linkedin-24.png" alt="Logo linkedin"></a></li>

                  <li><a href="https://wa.me/5511999999999" target="_blank"><img src="assets/whatsapp-24.png" alt="Logo whatsapp"></a></li>

                </ul>


              </div>

            </div>
          </div>

        </div>


        <!-- Form -->

        <div class="contato-form">
          <h2>Formulario de contato</h2>

          <form class="form-contato" action="#" method="POST">
            <div class="campo-linha">
              <input type="text" name="nome" placeholder="NOME COMPLETO*" required>
            </div>

            <div class="campo-linha">
              <input type="email" name="email" placeholder="E-MAIL*" required>
            </div>

            <div class="campo-duplo">
              <div class="campo-linha">
                <input type="tel" name="fone" placeholder="TELEFONE" required>
              </div>
              <div class="campo-linha">
                <select name="assunto" required>
                  <option value="" disabled selected>ASSUNTO</option>
                  <option value="cafe">CAFÉ</option>
                  <option value="expresso">EXPRESSO</option>
                </select>
              </div>
            </div>

            <div class="campo-linha">
              <textarea name="mens" cols="30" rows="10" placeholder="MENSAGEM*" required></textarea>
            </div>

            <div class="acoes-form">
              <button type="submit">ENVIAR MENSAGEM</button>
              <button type="reset">LIMPAR</button>
            </div>
          </form>
        </div>

      </div>

    </section>

    <!-- Mapa Contato -->
    <section class="map">

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.0277219480263!2d-46.43442765958825!3d-23.495510959265513!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce63dda7be6fb9%3A0xa74e7d5a53104311!2sSenac%20S%C3%A3o%20Miguel%20Paulista!5e0!3m2!1spt-BR!2sbr!4v1773078001953!5m2!1spt-BR!2sbr" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </section>



  </main>


  <!-- Inicio-Rodapé -->

  <?php require_once('conteudo/rodape.php'); ?>




  <!-- Fim-Rodapé -->






  <!-- JQUERY -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

  <!-- SLICK -->
  <script src="js/slick.min.js"></script>

  <!-- ANIMAÃ‡ÃƒO WOW -->

  <script src="js/wow.min.js"></script>

  <!-- Meu script animaÃ§Ã£o -->


  <script src="js/script.js"></script>





</body>






</html>