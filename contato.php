<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href=css.css>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    <title>Kpoop</title>
</head>
<body>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://localhost/2021/bts/Renata_kpoop.php">Inicio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/2021/bts/videos.php">videos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/2021/bts/fotos.php">fotos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/2021/bts/contato.php">contato</a>
          </li>
     </ul>
    </div>
</div>
</nav>
</div>  
 <ul>
        <h3>Contato</h3>
        
      <li><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png"><a href="https://www.instagram.com/renata_yurley_/" target="blank">Instagram</a></li> 
      <li><img src="https://img.icons8.com/bubbles/100/000000/twitter.png"><a  href="https://twitter.com/renata_yurley" target="blank">twitter</a></li> 
      <li><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png"><a  href="https://www.facebook.com/RenataSinna" target="black">facebook</a></li> 
    </ul>
    
    </body>
</html>
<head>
 <title>Formulário de contato com HTML5 + CSS3</title>
 <meta charset="utf-8">
 <link rel="stylesheet" type="text/css" href="style.css">
 </head>

<body>



<form method="GET" name="formteste" action="dadosKpop.php">

<h1>Contato</h1>

<p class="nome">
 <input type="text" name="nome" placeholder="informe seu nome" required="required">
 </p>

<p class="email">
 <input type="email" name="email" placeholder="informe seu email" required="required">
 </p>

<p class="assunto">
 <input type="text" name="assunto" placeholder="informe o assunto" required="required">
 </p>

<p class="mensagem">
 <textarea name="mensagem" placeholder="deixe sua mensagem"></textarea>
 </p>

<p class="enviar">
 <input type="submit" name="enviar" value="Enviar">
 </p>

</form>

</body>
 </html>