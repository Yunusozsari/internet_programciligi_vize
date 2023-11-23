<?php require_once 'header.php';
require_once 'sidebar.php';



 ?>
 <?php if($_GET['sayfa']=="ekip"){ ?>
  <div class="content-wrapper">
 
    <section class="content">
      <div class="container-fluid">
     
        <div class="row">
      <div  class="col-md-12">
<div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">Ekip</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ekip Resim</label>
                    <input name="resim"  type="file" class="form-control"  >
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Ekip isim</label>
                    <input name="isim"  type="text" class="form-control"  placeholder="Lütfen ekip üye ismini  giriniz.">
                  </div> 
                   <div class="form-group">
                    <label for="exampleInputEmail1">Ekip konum</label>
                    <input name="konum"  type="text" class="form-control"  placeholder="Lütfen ekip üye ismini  giriniz.">
                  </div> 
                    <div class="form-group">
                    <label for="exampleInputEmail1">Ekip sıra</label>
                    <input name="sira"  type="text" class="form-control"  placeholder="Lütfen ekip üye ismini  giriniz.">
                  </div> 
                     <div class="form-group">
                    <label for="exampleInputEmail1">Ekip Açıklama</label>
                    <textarea name="aciklama" id="editor1" class="ckeditor"></textarea>
                  </div>
                   
                       <div class="form-group">
                    <label for="exampleInputEmail1">Ekip twitter</label>
                    <input name="twitter"  type="text" class="form-control"  placeholder="Lütfen twitter adresini giriniz.">
                  </div> 

                      <div class="form-group">
                    <label for="exampleInputEmail1">Ekip instagram</label>
                    <input name="instagram"  type="text" class="form-control"  placeholder="Lütfen instagram adresini  giriniz.">
                  </div> 
                      <div class="form-group">
                    <label for="exampleInputEmail1">Ekip youtube</label>
                    <input name="youtube"  type="text" class="form-control"  placeholder="Lütfen  youtube adresini   giriniz.">
                  </div> 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="ekipkaydet" style="float:right" type="submit" class="btn btn-primary">Kaydet</button>
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
<?php } elseif ($_GET['sayfa']=="galeri") { ?>
<div class="content-wrapper">
 
    <section class="content">
      <div class="container-fluid">
     
        <div class="row">
      <div  class="col-md-12">
<div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">Ekip</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Galeri Resim</label>
                    <input name="resim"  type="file" class="form-control"  >
                  </div>
                 
                    <div class="form-group">
                    <label for="exampleInputEmail1">Galeri sıra</label>
                    <input name="sira"  type="text" class="form-control"  placeholder="Lütfen sıra giriniz.">
                  </div> 
                   
                

                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="galerikaydet" style="float:right" type="submit" class="btn btn-primary">Kaydet</button>
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
<?php } elseif ($_GET['sayfa']=="blog") { ?>
 <div class="content-wrapper">
 
    <section class="content">
      <div class="container-fluid">
     
        <div class="row">
      <div  class="col-md-12">
<div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title">Blog</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Blog Resim</label>
                    <input name="resim"  type="file" class="form-control"  >
                  </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">Blog Başlık</label>
                    <input name="baslik"  type="text" class="form-control"  placeholder="Lütfen ekip üye ismini  giriniz.">
                  </div> 
                   <div class="form-group">
                    <label for="exampleInputEmail1">Blog Sıra</label>
                    <input name="sira"  type="text" class="form-control"  placeholder="Lütfen ekip üye ismini  giriniz.">
                  </div> 
                    <div class="form-group">
                    <label for="exampleInputEmail1">Blog Anahtar Kelime</label>
                    <input name="anahtarkelime"  type="text" class="form-control"  placeholder="Lütfen ekip üye ismini  giriniz.">
                  </div> 
                     <div class="form-group">
                    <label for="exampleInputEmail1">Blog Açıklama</label>
                    <textarea name="aciklama" id="editor1" class="ckeditor"></textarea>
                  </div>
                   

                </div>
                <!-- /.card-body -->
 
                <div class="card-footer">
                  <button name="blogkaydet" style="float:right" type="submit" class="btn btn-primary">Kaydet</button>
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