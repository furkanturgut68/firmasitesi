<?php require_once 'header.php';
require_once 'sidebar.php';

$id = $_GET["id"];
$sql = "SELECT * FROM urunler WHERE id = :id";
$stmt = $baglan->prepare($sql);
$stmt->bindParam(":id",$id);
$stmt->execute();

$urunler = $stmt->fetch(PDO::FETCH_ASSOC);

?>
 

  <div class="content-wrapper">
    
  <div class="row">

    <section class="col-lg-12 connectedSortable">
    
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Ürün Ekle</h3>
            </div>
            <!-- /.box-header -->
           

            <form action="yukle.php" method="post" enctype="multipart/form-data" >
              <div class="box-body">

              

            <input type="hidden" name="id" value="<?php echo $urunler['id']; ?>" >
            <input type="hidden" name="guncelresim" value="<?php echo $urunler['urun_resim']; ?>" >

            <div class="form-group">
                  <label for="exampleInputEmail1">Güncel Resim</label>
                  <img src="../resimler/<?php echo $urunler['urun_resim'] ?>"  class="form-control" id="exampleInputEmail1">
                </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Resim</label>
                  <input name="gorsel" type="file" class="form-control" id="exampleInputEmail1">
                </div>



                <div class="form-group">
                  <label for="exampleInputEmail1">Başlık</label>
                  <input name="baslik" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $urunler['urun_baslik'] ?>">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Açıklama</label>
                 <textarea name="aciklama" id="editor1" rows="8" cols="80"><?php echo $urunler['urun_aciklama'] ?></textarea>
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">Sıra</label>
                  <input name="sira" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $urunler['urun_sira'] ?>">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Fiyat</label>
                  <input name="fiyat" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $urunler['urun_fiyat'] ?>">
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="urunduzenle" class="btn btn-primary">Kaydet</button>
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