<?php require_once 'header.php';
require_once 'sidebar.php';


$sql = "SELECT * FROM ayarlar WHERE id=1";
$stmt = $baglan->prepare($sql);
$stmt->execute();
$ayarlarim = $stmt->fetch(PDO::FETCH_ASSOC);

?>
 

  <div class="content-wrapper">
    
  <div class="row">

    <section class="col-lg-12 connectedSortable">
    
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Ayarlar</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            <!-- PHP if kontrolü ile işlem takibi -->
            <?php if(@$_GET["yukleme"]=="basarili"){ ?>

              <b style="color:green">Yükleme işlemi başarılı!</b>

              <?php  }elseif(@$_GET["yukleme"]=="basarisiz"){ ?>

                <b style="color:red">Yükleme işlemi başarısız!</b>

                <?php } ?>

            <form action="yukle.php" method="post">
              <div class="box-body">

                <div class="form-group">
                  <label for="exampleInputEmail1">Başlık</label>
                  <input name="baslik" value="<?php echo $ayarlarim['baslik']; ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Başlık Giriniz">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Açıklama</label>
                  <input name="aciklama" value="<?php echo $ayarlarim['aciklama']; ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Açıklama Giriniz">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Adres</label>
                  <input name="adres" type="text" value="<?php echo $ayarlarim['adres']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Adres Giriniz">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Anahtar Kelime</label>
                  <input type="text" name="anahtarkelime" value="<?php echo $ayarlarim['anahtarkelime']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Anahtar Kelime Giriniz">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Mail Adres</label>
                  <input type="text" name="mailadres" value="<?php echo $ayarlarim['mailadres']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Mail Adresi Giriniz">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Telefon</label>
                  <input type="text" name="telefon" value="<?php echo $ayarlarim['telefom']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Telefon Numarası Giriniz">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">WhatsApp</label>
                  <input type="text" name="whatsapp" value="<?php echo $ayarlarim['whatsapp']; ?>" class="form-control" id="exampleInputEmail1" placeholder="WhatsApp Numarası Giriniz">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Instagram</label>
                  <input type="text" name="instagram" value="<?php echo $ayarlarim['instagram']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Instagram Adresi Giriniz">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Facebook</label>
                  <input type="text" name="facebook" value="<?php echo $ayarlarim['facebook']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Facebook Adresi Giriniz">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Twitter</label>
                  <input type="text" name="twitter" value="<?php echo $ayarlarim['twitter']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Başlık Giriniz">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Linkedin</label>
                  <input type="text" name="linkedin" value="<?php echo $ayarlarim['linkedin']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Linkedin Adresi Giriniz">
                </div>

                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="ayarkaydet" class="btn btn-primary">Kaydet</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php require_once 'footer.php'?>