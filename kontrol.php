<?php
$dogru_kullanici = "berat.karahan1@org.sakarya.edu.tr";
$dogru_sifre = "B241210103";

$gelen_kullanici = $_POST['email'] ?? '';
$gelen_sifre = $_POST['password'] ?? '';

// Kullanıcı adı doğruysa e-posta adresini parçala:
$parcalar = explode("@", $gelen_kullanici);
$kullanici_adi = $parcalar[0]; // b2412100001

if ($gelen_kullanici === $dogru_kullanici && $gelen_sifre === $dogru_sifre) {
    echo "
    <html>
    <head>
      <title>Hoşgeldiniz</title>
      <style>
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
          box-shadow: 0 0 15px rgba(0,0,0,0.2);
        }
      </style>
    </head>
    <body>
      <div class='kutucuk'>Hoşgeldiniz, $kullanici_adi</div>
    </body>
    </html>
    ";
} else {
    echo "<script>
      alert('Kullanıcı adı veya şifre hatalı!');
      window.location.href = 'login.html';
    </script>";
}
?>
