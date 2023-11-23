<?php require_once 'header.php'; ?>
<br><br><br>
  <section style="background-image:url(admin/resimler/slider/<?php echo $slidercek['slider_resim'] ?>)" id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1><?php echo $slidercek['slider_baslik'] ?></h1>
      <h2><?php echo $slidercek['slider_aciklama'] ?></h2>
      <a target="_blank" href="<?php echo $slidercek['slider_link'] ?>" class="btn-get-started"><?php echo $slidercek['slider_buton'] ?></a>
    </div>
  </section>



  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Hakkında</h2>
          <p>Hakkımızda</p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Yunus Özsarı</h3>
            <p class="font-italic">
              Yunus Özsarı 2002 yılında Afyonkarahisar'da doğdu şuan SMYO'da eğitimini sürdürmektedir
            </p>
            <ul>
              <li><i class="icofont-check-circled"></i> Örrnek1</li>
              <li><i class="icofont-check-circled"></i> Örrnek2</li>
              <li><i class="icofont-check-circled"></i>  Örrnek3</li>
            </ul>
            <p>
              Bu yazı vize sınavı için yapılmıştır
            </p>
            
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

 




    

  </main><!-- End #main -->
<?php require_once 'footer.php'; ?>