<?php require_once 'header.php';
require_once 'sidebar.php';



$id = $_GET["id"];
$sql = "SELECT * FROM slider WHERE id = :id";
$stmt = $baglan->prepare($sql);
$stmt->bindParam(":id",$id);
$stmt->execute();

$slider = $stmt->fetch(PDO::FETCH_ASSOC);

?>
 

  <div class="content-wrapper">
    
  <div class="row">

    <section class="col-lg-12 connectedSortable">
    
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Slider Düzenle</h3>
            </div>
            <!-- /.box-header -->
           

            <form action="yukle.php" method="post" enctype="multipart/form-data">
              <div class="box-body">

              <div class="form-group">
                  <label for="exampleInputEmail1">Güncel Resim</label>
                  <img src="../resimler/<?php echo $slider['resim'] ?>"/>                
                </div>

                <input type="hidden" name="id" value="<?php echo $slider['id'] ?>" >

                <input type="hidden" name="guncelresim" value="<?php echo $slider['resim'] ?>" >

                <div class="form-group">
                  <label for="exampleInputEmail1">Resim</label>
                  <input type="file" name="gorsel"/>                
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Başlık</label>
                  <input name="baslik" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $slider['baslik'] ?>">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Sıra</label>
                  <input name="sira" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $slider['sira'] ?>" >
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Açıklama</label>
                  <input name="aciklama" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $slider['aciklama'] ?>">
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="sliderduzenle" class="btn btn-primary">Kaydet</button>
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