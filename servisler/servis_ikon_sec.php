<?php
include_once "../session.php";
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../css/random.css">
</head>
<body>
<h3><center>Çalışan Resimleri</center></h3>
	<?php
if(isset($_GET['servis_id'])){
 $KIMLIK =  $_GET['servis_id'];
}

    
    


$resim = array();
$dizin = "../images/ikonlar" ;//Resminizin Bulunduğu Yolu Yazınız
$tutucu = opendir($dizin);
while($dosya = readdir($tutucu)){
if(is_file($dizin."/".$dosya))
$resim[] = $dosya;
}
closedir($tutucu);



$toplam = count($resim);
if($toplam<1){
    echo "Klasör boş lütfen resim ekleyin";
    header("Refresh: 2; url=../resimler/resimAl.php");

}
 
# Bu bilgiler doğrultusunda

 
# $kactan başlayıp $kaca kadar resim bas
for($i=0; $i < $toplam; $i++){
echo "
<table  style='padding-left:18px;float:left;'>

    <tr><td>
<a href='servis_ikon_ekle.php?resimisim=".$resim[$i]."&servis_id=" . "$KIMLIK" . " '>
<img onContextMenu='return false' src='".$dizin."/".$resim[$i]."'
width='150' height='200' border='2' style='float:left;'></a>
<td></tr>

<th><p  style='text-align:center;width:170px;height:100px;margin-bottom:5px;'>$resim[$i]</p></th>
    </table>
    ";


}
echo "
<a style='margin-left:5px;margin-top:3px;' class='link' href='../resimler/resimAl.php'><img style='margin-top:10px;' width='150' height='167' src='../images/arti_simgesi.png'></a>";




?>
</body>
</html>



