<?php require_once 'header.php'; ?>
  <main id="main" data-aos="fade-in">

 <br><br> 
    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
<?php
 
$galerisor=$baglanti->prepare("SELECT * FROM galeri order by galeri_sira ASC ");
$galerisor->execute(array());
while ($galericek=$galerisor->fetch(PDO::FETCH_ASSOC)) {
 ?>
          <div style="margin-top:10px" class="col-lg-4 col-md-4 d-flex align-items-stretch">
            <div class="course-item">
              <img src="admin/resimler/galeri/<?php echo $galericek['galeri_resim'] ?>" class="img-fluid" alt="...">
              
            </div>
          </div> <!-- End Course Item-->

          
<?php } ?>
        

        </div>

      </div>
    </section><!-- End Courses Section -->

  </main><!-- End #main -->
  <?php require_once 'footer.php'; ?>