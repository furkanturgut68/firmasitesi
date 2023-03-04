<?php require_once 'header.php' ?>
	


<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white">Novena Firma</span>
          <h1 class="text-capitalize mb-5 text-lg">İletişim</h1>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- contact form start -->

<section class="section contact-info pb-0">
    <div class="container">
         <div class="row">
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-live-support"></i>
                    <h5>Telefon:</h5>
                    <?php echo $ayarlar['telefon']; ?>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-support-faq"></i>
                    <h5>Email Us</h5>
                     <?php echo $ayarlar['mailadres']; ?>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-location-pin"></i>
                    <h5>Adres</h5>
                     <?php echo $ayarlar['adres']; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-form-wrap section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center">
                    <h2 class="text-md mb-2">İletişime Geçin</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p class="mb-5">Aşağıdaki formu eksiksiz şekilde doldurarak bizimle iletişime geçebilirsiniz.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form  class="contact__form " method="post" action="mail.php">
                 

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="name"  type="text" class="form-control" placeholder="Ad & Soyad giriniz" >
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="email"  type="email" class="form-control" placeholder="Mail adresi giriniz">
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="subject"  type="text" class="form-control" placeholder="Konu giriniz">
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="form-group">
                                <input name="phone"  type="text" class="form-control" placeholder="Telefon numarası giriniz">
                            </div>
                        </div>
                    </div>

                    <div class="form-group-2 mb-4">
                        <textarea name="message"  class="form-control" rows="8" placeholder="Mesajınızı giriniz"></textarea>
                    </div>

                    <div class="text-center">
                        <input class="btn btn-main btn-round-full" name="submit" type="submit" value="Gönder"></input>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25026.93458493508!2d34.0307137!3d38.363634749999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d6714764c1af75%3A0xc562589501cae7bc!2sErvah%20Kabristan%C4%B1!5e0!3m2!1str!2str!4v1676679778568!5m2!1str!2str" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<?php require_once 'footer.php' ?>