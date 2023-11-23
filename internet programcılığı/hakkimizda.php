<?php require_once 'header.php' ?>
<br><br><br>
  <main id="main"> 
 
  
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="Admin/resimler/hakkimizda/<?php echo $hakkimizdacek['hakkimizda_resim'] ?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3><?php echo $hakkimizdacek['hakkimizda_title'] ?></h3>
            <p class="font-italic">
              <?php echo $hakkimizdacek['hakkimizda_text'] ?>
            </p>
        
       

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

 
  </main><!-- End #main -->
<?php require_once 'footer.php'; ?>