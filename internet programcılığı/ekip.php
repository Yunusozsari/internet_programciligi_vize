<?php require_once 'header.php'; ?>
<br><br>
  <main id="main" data-aos="fade-in">


    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
         
           <?php $ekipsor=$baglanti->prepare("SELECT * FROM ekip ");
$ekipsor->execute(array());
while ($ekipcek=$ekipsor->fetch(PDO::FETCH_ASSOC)) { 

 ?>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img style="wifth:250px" src="Admin/resimler/ekip/<?php echo $ekipcek['ekip_resim'] ?>" class="img-fluid" alt="">
              <div class="member-content">
                <h4><?php echo $ekipcek['ekip_isim'] ?></h4>
                <span><?php echo $ekipcek['ekip_konum'] ?></span>
                <p>
                <?php echo $ekipcek['ekip_aciklama'] ?>
                </p>
                <div class="social">
                  <a href="<?php echo $ekipcek['ekip_twitter'] ?>"><i class="icofont-twitter"></i></a>
               
                  <a href="<?php echo $ekipcek['ekip_instagram'] ?>"><i class="icofont-instagram"></i></a>
                  <a href="<?php echo $ekipcek['ekip_youtube'] ?>"><i class="icofont-youtube"></i></a>
                </div>
              </div>
            </div>
          </div>
<?php } ?>
        </div>

      </div>
    </section><!-- End Trainers Section -->

  </main><!-- End #main -->
<?php require_once 'footer.php'; ?>