<?php include_once "server.php"; ?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta http-equiv="Content-Type" content = "text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content = "tr">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/random.css">
    <title>Admin Paneli</title>
</head>
<body>
    <?php 
        session_start();
        ob_start();
        
        
        if(!isset($_SESSION["login"])){//Session kontrol
            header("Location:adminError.php");
        }
    ?>
    <table id="tablo">

        <tr>
        <th>Yazılar</th>
        <th>Işlem</th>
        </tr>

        <tr>
            <td>En üstteki yazı için</td><td> <a class="link" href="ayarlar/en_ust_yazi.php">Tıklayınız.</a></td>
        </tr>

        <tr>
            <td>Slogan için </td><td> <a class="link" href="ayarlar/slogan.php">Tıklayınız.</a></td>
        </tr>

        <tr>
            <td>Hakkımızda için </td><td> <a class="link" href="ayarlar/hakkimizda.php">Tıklayınız.</a></td>
        </tr>

        <tr>
            <td>Hakkimizda Alt Kisim için </td><td> <a  class="link"href="ayarlar/hakkimizda_footer.php">Tıklayınız.</a></td>
        
        </tr>

        <tr>
        <th>Sosyal Medya Linkleri</th>
        <th>Işlem</th>
        </tr>

        <tr>
            <td>Facebook için </td><td> <a class="link" href="ayarlar/facebook.php">Tıklayınız.</a></td>
        </tr>

        <tr>
            <td>Twitter için </td><td> <a class="link" href="ayarlar/twitter.php">Tıklayınız.</a></td>
        </tr>

         <tr>
            <td>Instagram için </td><td> <a class="link" href="ayarlar/instagram.php">Tıklayınız.</a></td>
        </tr>

        <tr>
            <td>LinkedIn için </td><td> <a class="link" href="ayarlar/linkedin.php">Tıklayınız.</a></td>
        </tr>

        <tr>
            <td>Pinterest için </td><td> <a class="link" href="ayarlar/pinterest.php">Tıklayınız.</a></td>
        </tr>

        <tr>
            <td>Youtube için </td><td> <a  class="link"href="ayarlar/youtube.php">Tıklayınız.</a></td>
        </tr>

        <tr>
        <th>Iletişim Bilgileri</th>
        <th>Işlem</th>
        </tr>

        <tr>
            <td>E-mail için </td><td> <a  class="link"href="ayarlar/email.php">Tıklayınız.</a></td>
        </tr>

        <tr>
            <td>Adres için </td><td> <a  class="link"href="ayarlar/adres.php">Tıklayınız.</a></td>
        </tr>

        <tr>
            <td>Telefon için </td><td> <a class="link" href="ayarlar/telefon.php">Tıklayınız.</a></td>
        </tr>

        <tr>

        <th style="background-color: #c01c33;">Çıkış</th>
        <th style="background-color: #c01c33;">Işlem</th>

        </tr>
        <tr>
            <td>Güvenli çıkış için </td><td> <a class="linkred" href="guvenliCikis.php">Tiklayiniz.</a></td>
        </tr>

    
    </table>
    
</body>
</html>