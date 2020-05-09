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
  <div id="" class="iletişim1 row">
      <div class="col-lg-6 col-12">
       <form action="iletişimgönder.php" name="uye_formu" method="post" onsubmit="return isValid(this)">
         <label for=""> <h3>İLETİŞİM FORMU</h3></label> <br>
         <label for="">Adınız :</label>
         <input type="text" name="ad" id="" placeholder="Adınızı Giriniz..."  autofocus > <br>
         <label for="">Soyadınız :</label>
         <input type="text" name="soyad" id="" placeholder="Soyadınızı Giriniz..." > <br>
         <label for="">Cinsiyetiniz :</label>
         <input type="radio" name="cinsiyet" value="erkek">Erkek
         <input type="radio" name="cinsiyet" value="kadin">Kadın <br>
         <label for="">Doğum Tarihiniz :</label>
         <input type="date" id="" name="doğumtarihi"><br>
         <label for="">Mail Adresiniz :</label>
         <input type="text" id="email" name="email" />
         <br><label for="">Telefon Numaranız :</label>
         <input type="tel" id="" name="telefon"><br>
         <label for="">Yüklemek İstediğiniz Dosyayı Seçiniz.</label> 
         <input type="file" name="dosya" multiple> 
         <textarea name="mesaj" rows="6" cols="55" > </textarea> <br>
         <input type="submit" value="Gönder" class="btn btn-success">
         <input type="submit" value="Temizle" class="btn btn-primary">
       </form>
       </div>
       <div class="iletişimharita col-lg-4 col-12">
        <h3>AÇIK ADRESİM</h3><br>
        <p id="adres">Bağlarbaşı Mahallesi Aydınlar Sokak No:7/2 YALOVA/MERKEZ <br>Raif AKYOL</p>
        <iframe id="harita" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2806.322104634104!2d29.268397015232956!3d40.650958979338576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cafad3a58f0481%3A0x232748b0d54871ed!2zQmHEn2xhcmJhxZ_EsSwgQXlkxLFubGFyIFNrLiBObzo3LCA3NzIwMCBZYWxvdmEgTWVya2V6L1lhbG92YQ!5e1!3m2!1str!2str!4v1588115121321!5m2!1str!2str" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
       </div>
    </div>
   <br> <p class="copyright">&copy; 2020 Raif AKYOL<p></p>
   <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript">
function isValid(form)
{
    var ad = form.ad.value;
    var soyad = form.soyad.value;
    var email = form.email.value;
    var atpos=email.indexOf("@");
    var dotpos=email.lastIndexOf(".");
    if ( ad==null || ad=="" || ad.length < 2 )
    {
        alert("Ad 2 karakterden az olamaz!...");
        return false;
    }
    if ( soyad==null || soyad=="" || soyad.length < 2 )
    {
        alert("Soyad adı 2 karakterden az olamaz!...");
        return false;
    }
    if ( atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length )
    {
        alert("Geçerli bir email adresi giriniz!...");
        return false;
    }   
    return true;
}
$('.toggle').click(function(){
  $('nav > ul').slideToggle(200);
});
</script>
 </body>
</html>