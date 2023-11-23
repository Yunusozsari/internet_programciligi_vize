<?php require_once 'header.php';
require_once 'sidebar.php';



 ?>
 <?php if($_GET['sayfa']=="ekip"){


$ekipsor=$baglanti->prepare("SELECT * FROM ekip where ekip_id=:ekip_id");
$ekipsor->execute(array(
'ekip_id'=>$_GET['id']
));
$ekipcek=$ekipsor->fetch(PDO::FETCH_ASSOC);






  ?>
  <div class="content-wrapper">
 
    <section class="content">
      <div class="container-fluid">
     
        <div class="row">
      <div  class="col-md-12">
<div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">Ekip düzenle</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                   <div class="form-group">
                    <label for="exampleInputEmail1">Ekip Resim</label>
                    <img style="width:150px" src="resimler/ekip/<?php echo $ekipcek['ekip_resim'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ekip Resim</label>
                    <input name="resim"  type="file" class="form-control"  >
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Ekip isim</label>
                    <input value="<?php echo $ekipcek['ekip_isim'] ?>" name="isim"  type="text" class="form-control"  placeholder="Lütfen ekip üye ismini  giriniz.">
                  </div> 
                   <div class="form-group">
                    <label for="exampleInputEmail1">Ekip konum</label>
                    <input value="<?php echo $ekipcek['ekip_konum'] ?>" name="konum"  type="text" class="form-control"  placeholder="Lütfen ekip üye ismini  giriniz.">
                  </div> 
                    <div class="form-group">
                    <label for="exampleInputEmail1">Ekip sıra</label>
                    <input value="<?php echo $ekipcek['ekip_sira'] ?>" name="sira"  type="text" class="form-control"  placeholder="Lütfen ekip üye ismini  giriniz.">
                  </div> 
                     <div class="form-group">
                    <label for="exampleInputEmail1">Ekip Açıklama</label>
                    <textarea name="aciklama" id="editor1" class="ckeditor"><?php echo $ekipcek['ekip_aciklama'] ?></textarea>
                  </div>
                   
                       <div class="form-group">
                    <label for="exampleInputEmail1">Ekip twitter</label>
                    <input value="<?php echo $ekipcek['ekip_twitter'] ?>" name="twitter"  type="text" class="form-control"  placeholder="Lütfen twitter adresini giriniz.">
                  </div> 

                      <div class="form-group">
                    <label for="exampleInputEmail1">Ekip instagram</label>
                    <input value="<?php echo $ekipcek['ekip_instagram'] ?>" name="instagram"  type="text" class="form-control"  placeholder="Lütfen instagram adresini  giriniz.">
                  </div> 
                      <div class="form-group">
                    <label for="exampleInputEmail1">Ekip youtube</label>
                    <input value="<?php echo $ekipcek['ekip_youtube'] ?>" name="youtube"  type="text" class="form-control"  placeholder="Lütfen  youtube adresini   giriniz.">
                  </div> 
                </div>
                <!-- /.card-body -->
    <input type="hidden" name="eskiresim" value="<?php echo $ekipcek['ekip_resim'] ?>">
        <input type="hidden" name="id" value="<?php echo $ekipcek['ekip_id'] ?>">
                <div class="card-footer">
                  <button name="ekipduzenle" style="float:right" type="submit" class="btn btn-primary">Kaydet</button>
                </div>
              </form> 
            </div>
            <!-- /.card -->
 </div>
        </div>
    
      </div>
    </section>
    <!-- /.content -->
  </div>
<?php } elseif ($_GET['sayfa']=="galeri") {


$galerisor=$baglanti->prepare("SELECT * FROM galeri where galeri_id=:galeri_id");
$galerisor->execute(array(
'galeri_id'=>$_GET['id']
));
$galericek=$galerisor->fetch(PDO::FETCH_ASSOC);



 ?>
 <div class="content-wrapper">
 
    <section class="content">
      <div class="container-fluid">
     
        <div class="row">
      <div  class="col-md-12">
<div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">Galeri düzenle</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                   <div class="form-group">
                    <label for="exampleInputEmail1">Galeri Resim</label>
                    <img style="width:150px" src="resimler/galeri/<?php echo $galericek['galeri_resim'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Galeri Resim</label>
                    <input name="resim"  type="file" class="form-control"  >
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Galeri sıra</label>
                    <input value="<?php echo $galericek['galeri_sira'] ?>" name="sira"  type="text" class="form-control"  placeholder="Lütfen ekip üye ismini  giriniz.">
                  </div> 
                  
                 
                  

                </div>
                <!-- /.card-body -->
    <input type="hidden" name="eskiresim" value="<?php echo $galericek['galeri_resim'] ?>">
        <input type="hidden" name="id" value="<?php echo $galericek['galeri_id'] ?>">
                <div class="card-footer">
                  <button name="galeriduzenle" style="float:right" type="submit" class="btn btn-primary">Kaydet</button>
                </div>
              </form> 
            </div>
            <!-- /.card -->
 </div>
        </div>
    
      </div>
    </section> 
    <!-- /.content -->
  </div>
<?php } elseif ($_GET['sayfa']=="blog") {

$blogsor=$baglanti->prepare("SELECT * FROM blog where blog_id=:blog_id");
$blogsor->execute(array(
'blog_id'=>$_GET['id']
));
$blogcek=$blogsor->fetch(PDO::FETCH_ASSOC);




 ?>
 <div class="content-wrapper">
 
    <section class="content">
      <div class="container-fluid">
     
        <div class="row">
      <div  class="col-md-12">
<div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">Blog düzenle</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                   <div class="form-group">
                    <label for="exampleInputEmail1">Blog  Resim</label>
                    <img style="width:150px" src="resimler/blog/<?php echo $blogcek['blog_resim'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Blog  Resim</label>
                    <input name="resim"  type="file" class="form-control"  >
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Blog  Başlık</label>
                    <input value="<?php echo $blogcek['blog_baslik'] ?>" name="baslik"  type="text" class="form-control"  placeholder="Lütfen başlık giriniz.">
                  </div> 
                   <div class="form-group">
                    <label for="exampleInputEmail1">Blog  anahtar kelime</label>
                    <input value="<?php echo $blogcek['blog_anahtarkelime'] ?>" name="anahtarkelime"  type="text" class="form-control"  placeholder="Lütfen anahtar kelime   giriniz.">
                  </div> 
                    <div class="form-group">
                    <label for="exampleInputEmail1">Blog  sıra</label>
                    <input value="<?php echo $blogcek['blog_sira'] ?>" name="sira"  type="text" class="form-control"  placeholder="Lütfen sıra  giriniz.">
                  </div> 
                     <div class="form-group">
                    <label for="exampleInputEmail1">Ekip Açıklama</label>
                    <textarea name="aciklama" id="editor1" class="ckeditor"><?php echo $blogcek['blog_aciklama'] ?></textarea>
                  </div>
                 
                  
                </div>
                <!-- /.card-body -->
    <input type="hidden" name="eskiresim" value="<?php echo $blogcek['blog_resim'] ?>">
        <input type="hidden" name="id" value="<?php echo $blogcek['blog_id'] ?>">
                <div class="card-footer">
                  <button name="blogduzenle" style="float:right" type="submit" class="btn btn-primary">Kaydet</button>
                </div>
              </form> 
            </div>
            <!-- /.card -->
 </div>
        </div>
    
      </div>
    </section>
    <!-- /.content -->
  </div>
<?php } ?>


<?php require_once 'footer.php'; ?> 