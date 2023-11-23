<?php
session_start();
require_once 'baglanti.php';

if (isset($_POST['ayarkaydet'])) {
$kaydet=$baglanti->prepare("UPDATE ayarlar SET 

ayar_baslik=:ayar_baslik,
ayar_aciklama=:ayar_aciklama,
ayar_anahtar=:ayar_anahtar,
ayar_adres=:ayar_adres,
ayar_telefon=:ayar_telefon,
ayar_email=:ayar_email
	");
$update=$kaydet->execute(array(

'ayar_baslik'=>htmlspecialchars($_POST['baslik']),
'ayar_aciklama'=>htmlspecialchars($_POST['aciklama']),
'ayar_anahtar'=>htmlspecialchars($_POST['anahtar']),
'ayar_adres'=>htmlspecialchars($_POST['adres']),
'ayar_telefon'=>htmlspecialchars($_POST['telefon']),
'ayar_email'=>htmlspecialchars($_POST['email'])
));


if ($update) {
Header("Location:ayarlar.php?sayfa=ayarlar&durum=okey");
}else{
	Header("Location:ayarlar.php?sayfa=ayarlar&durum=no");
}

}





if (isset($_POST['sosyalmedyakaydet'])) {
$kaydet=$baglanti->prepare("UPDATE ayarlar SET 

ayar_facebook=:ayar_facebook,
ayar_instagram=:ayar_instagram,
ayar_youtube=:ayar_youtube,
ayar_twitter=:ayar_twitter

	");
$update=$kaydet->execute(array(

'ayar_facebook'=>htmlspecialchars($_POST['facebook']),
'ayar_instagram'=>htmlspecialchars($_POST['instagram']),
'ayar_youtube'=>htmlspecialchars($_POST['youtube']),
'ayar_twitter'=>htmlspecialchars($_POST['twitter'])

));


if ($update) {
Header("Location:ayarlar.php?sayfa=sosyalmedya&durum=okey");
}else{
	Header("Location:ayarlar.php?sayfa=sosyalmedya&durum=no");
}
}






if (isset($_POST['hakkimizdakaydet'])) {

if ($_FILES['resim'] ["size"]>0) {

$uploads_dir='resimler/hakkimizda';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");




$kaydet=$baglanti->prepare("UPDATE hakkimizda SET 

hakkimizda_title=:hakkimizda_title,
hakkimizda_text=:hakkimizda_text,
hakkimizda_resim=:hakkimizda_resim

	");
$update=$kaydet->execute(array(

'hakkimizda_title'=>htmlspecialchars($_POST['baslik']),
'hakkimizda_text'=>$_POST['text'],
'hakkimizda_resim'=>$resimadi
));


if ($update) {
	$eskiresim=$_POST['eskiresim'];
	unlink("resimler/hakkimizda/$eskiresim");
Header("Location:hakkimizda.php?durum=okey");
}else{
	Header("Location:hakkimizda.php?durum=no");
}

}

else{

$kaydet=$baglanti->prepare("UPDATE hakkimizda SET 

hakkimizda_title=:hakkimizda_title,
hakkimizda_text=:hakkimizda_text


	");
$update=$kaydet->execute(array(

'hakkimizda_title'=>htmlspecialchars($_POST['title']),
'hakkimizda_text'=>$_POST['text']
));
if ($update) {
Header("Location:hakkimizda.php?durum=okey");
}else{
	Header("Location:hakkimizda.php?durum=no");
}

}


}









if (isset($_POST['sliderkaydet'])) {

if ($_FILES['resim'] ["size"]>0) {

$uploads_dir='resimler/slider';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");




$kaydet=$baglanti->prepare("UPDATE slider SET 

slider_baslik=:slider_baslik,
slider_aciklama=:slider_aciklama,
slider_buton=:slider_buton,
slider_link=:slider_link,
slider_resim=:slider_resim

	");
$update=$kaydet->execute(array(

'slider_baslik'=>$_POST['baslik'],
'slider_aciklama'=>$_POST['aciklama'],
'slider_buton'=>$_POST['buton'],
'slider_link'=>$_POST['link'],
'slider_resim'=>$resimadi
));


if ($update) {
	$eskiresim=$_POST['eskiresim'];
	unlink("resimler/slider/$eskiresim");
Header("Location:slider.php?durum=okey");
}else{
	Header("Location:slider.php?durum=no");
}

}

else{

$kaydet=$baglanti->prepare("UPDATE slider SET 

slider_baslik=:slider_baslik,
slider_aciklama=:slider_aciklama,
slider_buton=:slider_buton,
slider_link=:slider_link

	");
$update=$kaydet->execute(array(

'slider_baslik'=>$_POST['baslik'],
'slider_aciklama'=>$_POST['aciklama'],
'slider_buton'=>$_POST['buton'],
'slider_link'=>$_POST['link']
));
if ($update) {
Header("Location:slider.php?durum=okey");
}else{
	Header("Location:slider.php?durum=no");
}

}


}








if (isset($_POST['ekipkaydet'])) {
	$uploads_dir='resimler/ekip';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");


$kaydet=$baglanti->prepare("INSERT into ekip SET 

ekip_isim=:ekip_isim,
ekip_konum=:ekip_konum,
ekip_sira=:ekip_sira,
ekip_aciklama=:ekip_aciklama,
ekip_twitter=:ekip_twitter,
ekip_instagram=:ekip_instagram,
ekip_youtube=:ekip_youtube,
ekip_resim=:ekip_resim
	");
$insert=$kaydet->execute(array(

'ekip_isim'=>htmlspecialchars($_POST['isim']),
'ekip_konum'=>htmlspecialchars($_POST['konum']),
'ekip_sira'=>htmlspecialchars($_POST['sira']),
'ekip_aciklama'=>$_POST['aciklama'],
'ekip_twitter'=>htmlspecialchars($_POST['twitter']),
'ekip_instagram'=>htmlspecialchars($_POST['instagram']),
'ekip_youtube'=>htmlspecialchars($_POST['youtube']),
'ekip_resim'=>$resimadi
));


if ($insert) {
Header("Location:ekip.php?sayfa=ekip&durum=okey");
}else{
	Header("Location:ekip.php?sayfa=ekip&durum=no");
}

}








if (isset($_POST['ekipduzenle'])) {

if ($_FILES['resim'] ["size"]>0) {

$uploads_dir='resimler/ekip';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");




$kaydet=$baglanti->prepare("UPDATE ekip SET 

ekip_isim=:ekip_isim,
ekip_konum=:ekip_konum,
ekip_sira=:ekip_sira,
ekip_aciklama=:ekip_aciklama,
ekip_twitter=:ekip_twitter,
ekip_instagram=:ekip_instagram,
ekip_youtube=:ekip_youtube,
ekip_resim=:ekip_resim
WHERE blog_id={$_POST['id']}
	");
$update=$kaydet->execute(array(
'ekip_isim'=>htmlspecialchars($_POST['isim']),
'ekip_konum'=>htmlspecialchars($_POST['konum']),
'ekip_sira'=>htmlspecialchars($_POST['sira']),
'ekip_aciklama'=>$_POST['aciklama'],
'ekip_twitter'=>htmlspecialchars($_POST['twitter']),
'ekip_instagram'=>htmlspecialchars($_POST['instagram']),
'ekip_youtube'=>htmlspecialchars($_POST['youtube']),
'ekip_resim'=>$resimadi
));


if ($update) {
	$eskiresim=$_POST['eskiresim'];
	unlink("resimler/ekip/$eskiresim");
Header("Location:ekip.php?durum=okey");
}else{
	Header("Location:ekip.php?durum=no");
}

}

else{

$kaydet=$baglanti->prepare("UPDATE ekip SET 
ekip_isim=:ekip_isim,
ekip_konum=:ekip_konum,
ekip_sira=:ekip_sira,
ekip_aciklama=:ekip_aciklama,
ekip_twitter=:ekip_twitter,
ekip_instagram=:ekip_instagram,
ekip_youtube=:ekip_youtube
WHERE ekip_id={$_POST['id']}

	");
$update=$kaydet->execute(array(

'ekip_isim'=>htmlspecialchars($_POST['isim']),
'ekip_konum'=>htmlspecialchars($_POST['konum']),
'ekip_sira'=>htmlspecialchars($_POST['sira']),
'ekip_aciklama'=>$_POST['aciklama'],
'ekip_twitter'=>htmlspecialchars($_POST['twitter']),
'ekip_instagram'=>htmlspecialchars($_POST['instagram']),
'ekip_youtube'=>htmlspecialchars($_POST['youtube'])
));
if ($update) {
Header("Location:ekip.php?durum=okey");
}else{
	Header("Location:ekip.php?durum=no");
}

}


}





if (isset($_POST['ekipsil'])) {
$eskiresim=$_POST['eskiresim'];
	unlink("resimler/ekip/$eskiresim");

$sil=$baglanti->prepare("DELETE  FROM ekip where ekip_id=:ekip_id");
$sil->execute(array(

'ekip_id'=>$_POST['id']
));


if ($sil) {
	Header("Location:ekip.php?durum=okey");
}
else{
		Header("Location:ekip.php?durum=no");

}
}







if (isset($_POST['galerikaydet'])) {
	$uploads_dir='resimler/galeri';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");


$kaydet=$baglanti->prepare("INSERT into galeri SET 

galeri_sira=:galeri_sira,

galeri_resim=:galeri_resim
	");
$insert=$kaydet->execute(array(

'galeri_sira'=>htmlspecialchars($_POST['sira']),

'galeri_resim'=>$resimadi
));


if ($insert) {
Header("Location:galeri.php?durum=okey");
}else{
	Header("Location:galeri.php?durum=no");
}

}









if (isset($_POST['galeriduzenle'])) {

if ($_FILES['resim'] ["size"]>0) {

$uploads_dir='resimler/galeri';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");




$kaydet=$baglanti->prepare("UPDATE galeri SET 

galeri_sira=:galeri_sira,

galeri_resim=:galeri_resim
WHERE galeri_id={$_POST['id']}
	");
$update=$kaydet->execute(array(

'galeri_sira'=>htmlspecialchars($_POST['sira']),

'galeri_resim'=>$resimadi
));


if ($update) {
	$eskiresim=$_POST['eskiresim'];
	unlink("resimler/galeri/$eskiresim");
Header("Location:galeri.php?durum=okey");
}else{
	Header("Location:galeri.php?durum=no");
}

}

else{

$kaydet=$baglanti->prepare("UPDATE galeri SET 
galeri_sira=:galeri_sira

WHERE galeri_id={$_POST['id']}

	");
$update=$kaydet->execute(array(

'galeri_sira'=>htmlspecialchars($_POST['sira'])

));
if ($update) {
Header("Location:galeri.php?durum=okey");
}else{
	Header("Location:galeri.php?durum=no");
}

}


}




if (isset($_POST['galerisil'])) {
$eskiresim=$_POST['eskiresim'];
	unlink("resimler/galeri/$eskiresim");

$sil=$baglanti->prepare("DELETE  FROM galeri where galeri_id=:galeri_id");
$sil->execute(array(

'galeri_id'=>$_POST['id']
));


if ($sil) {
	Header("Location:galeri.php?durum=okey");
}
else{
		Header("Location:galeri.php?durum=no");

}
}


 



if (isset($_POST['blogkaydet'])) {
	$uploads_dir='resimler/blog';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");


$kaydet=$baglanti->prepare("INSERT into blog SET 

blog_baslik=:blog_baslik,
blog_anahtarkelime=:blog_anahtarkelime,
blog_sira=:blog_sira,
blog_aciklama=:blog_aciklama,

blog_resim=:blog_resim
	");
$insert=$kaydet->execute(array(

'blog_baslik'=>htmlspecialchars($_POST['baslik']),
'blog_anahtarkelime'=>htmlspecialchars($_POST['anahtarkelime']),
'blog_sira'=>htmlspecialchars($_POST['sira']),
'blog_aciklama'=>$_POST['aciklama'],

'blog_resim'=>$resimadi
));




if ($insert) {
Header("Location:blog.php?durum=okey");
}else{
	Header("Location:blog.php?durum=no");
}

}





if (isset($_POST['blogduzenle'])) {

if ($_FILES['resim'] ["size"]>0) {

$uploads_dir='resimler/blog';
@$tmp_name=$_FILES['resim'] ["tmp_name"];
@$name=$_FILES['resim'] ["name"];

$sayi1=rand(1,10000000);
$sayi2=rand(1,10000000);
$sayi3=rand(1,10000000);
$sayilar=$sayi1.$sayi2.$sayi3;
$resimadi=$sayilar.$name;
@move_uploaded_file($tmp_name, "$uploads_dir/$resimadi");





$kaydet=$baglanti->prepare("UPDATE blog SET 


blog_baslik=:blog_baslik,
blog_anahtarkelime=:blog_anahtarkelime,
blog_sira=:blog_sira,
blog_aciklama=:blog_aciklama,

blog_resim=:blog_resim
WHERE blog_id={$_POST['id']}
	");
$update=$kaydet->execute(array(


'blog_baslik'=>htmlspecialchars($_POST['baslik']),
'blog_anahtarkelime'=>htmlspecialchars($_POST['anahtarkelime']),
'blog_sira'=>htmlspecialchars($_POST['sira']),
'blog_aciklama'=>$_POST['aciklama'],
'blog_resim'=>$resimadi
));


if ($update) {
	$eskiresim=$_POST['eskiresim'];
	unlink("resimler/blog/$eskiresim");
Header("Location:blog.php?durum=okey");
}else{
	Header("Location:blog.php?durum=no");
}

}

else{


$kaydet=$baglanti->prepare("UPDATE blog SET 

blog_baslik=:blog_baslik,
blog_anahtarkelime=:blog_anahtarkelime,
blog_sira=:blog_sira,
blog_aciklama=:blog_aciklama

WHERE blog_id={$_POST['id']}

	");
$update=$kaydet->execute(array(
'blog_baslik'=>htmlspecialchars($_POST['baslik']),
'blog_anahtarkelime'=>htmlspecialchars($_POST['anahtarkelime']),
'blog_sira'=>htmlspecialchars($_POST['sira']),
'blog_aciklama'=>$_POST['aciklama']
));
if ($update) {
Header("Location:blog.php?durum=okey");
}else{
	Header("Location:blog.php?durum=no");
}

}


}






if (isset($_POST['blogsil'])) {
$eskiresim=$_POST['eskiresim'];
	unlink("resimler/blog/$eskiresim");

$sil=$baglanti->prepare("DELETE  FROM blog where blog_id=:blog_id");
$sil->execute(array(

'blog_id'=>$_POST['id']
));


if ($sil) {
	Header("Location:blog.php?durum=okey");
}
else{
		Header("Location:blog.php?durum=no");

}
}






 ?>