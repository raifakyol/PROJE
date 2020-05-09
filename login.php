<?php
$url="login.php";

$_eposta="g191210017@sakarya.edu.tr";
$_sifre=12345;
if($_POST{'kadi'}==$_eposta and $_POST{'sifre1'}==$_sifre){
  echo "Hoşgeldin g191210017 ";
  
}
else{
  echo "Hatalı giriş!!! ";
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raif AKYOL</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="phpstil.css"  type="text/css" rel="stylesheet" >
    <link href="projestil.css"  type="text/css" rel="stylesheet" >
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/x.y.z/underscore-min.js"></script>
    <meta name="viewport" content="width=device-width; initial-scale=1.0">
</head>
<body>
 <header class="menu">
    <nav class="navbar navbar-expand-sm">
      <ul class="navbar-nav">
        <li>
          <img class="logo" src="proje_resimler/logo.png" alt="">  
        </li>
        <li class="nav-item">
          <a class="nav-link" href="hakkında.html">Hakkımda</a>
        </li>
        <br>
        <li class="nav-item">
          <a class="nav-link" href="özgeçmiş.html" target="_self">Özgeçmiş</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="şehrim.html" target="_self">Şehrim</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="takımımız.html" target="_self">Takımımız</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="iletişim.php" target="_self" >İletişim</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php" target="_self">Login</a>
        </li>
      </ul>
    </nav>  
 </header>
 <header class="resp-header">
      <nav class="resp-nav">
        <div class="toggle">
          <i class="fa fa-bars menu2" aria-hidden="true"></i>
        </div>
        <ul id="resp-ul">
          <li><a href="hakkında.html">Hakkımda</a></li>
          <li><a href="özgeçmiş.html">Özgeçmiş</a></li>
          <li><a href="şehrim.html">Şehrim</a></li>
          <li><a href="takımımız.html">Takımımız</a></li>
          <li><a href="iletişim.php">İletişim</a></li>
          <li><a href="login.php">Login</a></li>
        </ul>
      </nav>
  </header>
 <div class="login1 card">
     <form  id="lgnfrm" action="login.php" method="post" onsubmit="return login(this)">
        <h3 id="başlıklgn">Giriş Yap</h3> <br>
        <label for="">Kullanıcı Adı :</label>
        <input type="text" name="kadi" id="" placeholder="Kullanıcı Adınızı Giriniz..."  autofocus > <br>
        <label for="">Şifre :</label>
        <input type="password" name="sifre1" placeholder="Şifre Giriniz..."> <br>
        <input type="submit" value="Giriş Yap" class="btn btn-success" id="lgnbuton">
     </form>
   </div>
   <p class="copyright">&copy; 2020 Raif AKYOL<p></p>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript">
{

  $('.toggle').click(function(){
  $('nav > ul').slideToggle(200);
  });
}
</script>
</body>
</html>