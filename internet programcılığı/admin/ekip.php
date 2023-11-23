<?php require_once 'header.php';
require_once 'sidebar.php';
$ekipsor=$baglanti->prepare("SELECT * FROM ekip ");
$ekipsor->execute(array());


 ?>



  <div class="content-wrapper">
 
    <section class="content">
      <div class="container-fluid">
     
        <div class="row">
       <?php
if (@$_GET['durum']=="okey") { ?>
  <p style="color:green ; ">İşlem başarılı</p>
<?php } elseif (@$_GET['durum']=="no") { ?>
  <p style="color:red ; ">İşlem başarısız</p>

<?php }  ?>
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Ekip Üyeleri</h3>
                <a href="ekle.php?sayfa=ekip">
<button style="float:right" type="submit" class="btn btn-info">Yeni ekip ekle</button></a>
           <!-- 
     <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
           -->
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Ekip Resim</th>
                      <th>Ekip Sıra</th>
                      <th>Ekip İsim</th>
                      <th>Ekip Konum</th>
                      <th>Düzenle</th>
                      <th>Sil</th>
                    </tr>
                  </thead>
                  <tbody>
                  	<?php 

while ($ekipcek=$ekipsor->fetch(PDO::FETCH_ASSOC)) { ?>
         
                    <tr>
                      <td><img style="width:150px" src="resimler/ekip/<?php echo $ekipcek['ekip_resim'] ?>"></td>
                      <td><?php echo $ekipcek['ekip_sira'] ?></td>
                      <td><?php echo $ekipcek['ekip_isim'] ?></td>
                      <td><span class="tag tag-success"><?php echo $ekipcek['ekip_konum'] ?></span></td>
                      <td><a href="duzenle.php?sayfa=ekip&id=<?php echo $ekipcek['ekip_id'] ?>"><button type="submit" class="btn btn-success">Düzenle</button></td>
                         <td>
                           <form action="islem.php" method="post">
                          <button  name="ekipsil" type="submit" class="btn btn-danger">Sil</button>
                          <input name="id" value="<?php echo $ekipcek['ekip_id'] ?>" type="hidden">
                           <input name="eskiresim" value="<?php echo $ekipcek['ekip_resim'] ?>" type="hidden">
                           </form>


                        </td>
                    </tr>
                   <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
 
        </div>
    
      </div>
    </section>
    <!-- /.content -->
  </div>
<?php require_once 'footer.php'; ?>