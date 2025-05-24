<?php
// Doğru kullanıcı adı ve şifre tanımlanıyor
$dogru_kullanici = "B241210103@gmail.com";
$dogru_sifre = "B241210103";

// Formdan gelen bilgiler alınıyor (boşsa varsayılan boş değer)
$gelen_kullanici = $_POST['email'] ?? '';
$gelen_sifre = $_POST['password'] ?? '';

// E-posta adresinden kullanıcı adı (ön kısım) çıkarılıyor
$parcalar = explode("@", $gelen_kullanici);
$kullanici_adi = $parcalar[0]; 

// Kullanıcı adı ve şifre doğruysa
if ($gelen_kullanici === $dogru_kullanici && $gelen_sifre === $dogru_sifre) {
   echo "
<html>
<head>
  <title>Hoşgeldiniz</title>

  <!-- 4 saniye sonra anasayfaya yönlendirme -->
  <script>
  setTimeout(function() {
    window.location.href = 'hakkimda.html';
  }, 4000);
  </script>

  <style>
    /* Sayfa stil ayarları */
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      font-family: Arial, sans-serif;
      background-color: #e6f0ff;
    }
    .kutucuk {
      background-color: #003366;
      color: white;
      padding: 30px 50px;
      border-radius: 10px;
      font-size: 24px;
      text-align: center;
      box-shadow: 0 0 15px rgba(0,0,0,0.2);
    }
    .kutucuk small {
      display: block;
      margin-top: 10px;
      font-size: 16px;
      color: #ccc;
    }
  </style>
</head>
<body>
  <!-- Başarılı giriş mesajı -->
  <div class='kutucuk'>
    Hoşgeldiniz, $kullanici_adi
    <small>4 saniye içinde anasayfaya yönlendiriliyorsunuz...</small>
  </div>
</body>
</html>
";

} else {
    // Giriş başarısızsa uyarı göster ve login sayfasına dön
    echo "<script>
      alert('Kullanıcı adı veya şifre hatalı!');
      window.location.href = 'login.html';
    </script>";
}
?>