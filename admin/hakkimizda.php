<?php require_once 'header.php';
require_once 'sidebar.php';


$sql = "SELECT * FROM hakkimizda WHERE id=1";
$stmt = $baglan->prepare($sql);
$stmt->execute();
$hakkimizda = $stmt->fetch(PDO::FETCH_ASSOC);

?>
 

  <div class="content-wrapper">
    
  <div class="row">

    <section class="col-lg-12 connectedSortable">
    
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Hakkımızda</h3>
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
                  <input name="baslik" value="<?php echo $hakkimizda['baslik']; ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Başlık Giriniz">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Açıklama</label>
                 <textarea name="aciklama" id="editor1" rows="8" cols="80"> <?php echo $hakkimizda['aciklama'];  ?> </textarea>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Misyon</label>
                  <input name="misyon" type="text" value="<?php echo $hakkimizda['misyon']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Adres Giriniz">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Vizyon</label>
                  <input type="text" name="vizyon" value="<?php echo $hakkimizda['vizyon']; ?>" class="form-control" id="exampleInputEmail1" placeholder="Anahtar Kelime Giriniz">
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="hakkimizdakaydet" class="btn btn-primary">Kaydet</button>
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