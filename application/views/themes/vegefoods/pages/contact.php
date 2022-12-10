<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="hero-wrap hero-bread" style="background-image: url('<?php echo get_theme_uri('images/bg_1.jpg'); ?>');">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><?php echo anchor(base_url(), 'Home'); ?></span> <span>Hubungi Kami</span></p>
          <h1 class="mb-0 bread">Hubungi Kami</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section contact-section bg-light">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
        <div class="w-100"></div>
        <div class="col-md-3 d-flex">
            <div class="info bg-white p-4">
              <p><span><em>Alamat</em><br>
              </span> <?php echo get_settings('store_address'); ?></p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="info bg-white p-4">
              <p><span><em>No. HP</em><br>
              </span> <?php echo get_settings('store_phone_number'); ?></p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="info bg-white p-4">
              <p><span><em>Email</em><br>
              </span> <?php echo get_settings('store_email'); ?></p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
            <div class="info bg-white p-4">
              <p><span><em>Website</em><br>
              </span>www.polnes.ac.id</p>
            </div>
        </div>
      </div>
		<center>
        <div class="col-md-6 d-flex">
            <div style="width: 100%">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d853.2486217432357!2d117.17186982914666!3d-0.5725336589358111!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x97b7b13b45773b61!2zMMKwMzQnMjEuMSJTIDExN8KwMTAnMjAuNyJF!5e1!3m2!1sid!2sid!4v1642344480805!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>
        </div>
		</center>
      </div>
    </div>
  </section>