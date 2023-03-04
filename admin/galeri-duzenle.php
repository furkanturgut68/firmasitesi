<?php require_once 'header.php';
require_once 'sidebar.php';

$id = $_GET["id"];
$sql = "SELECT * FROM galeri WHERE id = :id";
$stmt = $baglan->prepare($sql);
$stmt->bindParam(":id",$id);
$stmt->execute();

$galeri = $stmt->fetch(PDO::FETCH_ASSOC);

?>
 

  <div class="content-wrapper">
    
  <div class="row">

    <section class="col-lg-12 connectedSortable">
    
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Resim Düzenle</h3>
            </div>
            <!-- /.box-header -->
           

            <form action="yukle.php" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <img style="width:300px;" src="../resimler/<?php echo $galeri['galeri_resim']; ?>" >

                <div class="form-group">
                  <label for="exampleInputEmail1">Resim</label>
                  <input type="file" name="gorsel"/>                
                </div>

                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="hidden" name="guncelresim" value="<?php echo $galeri['galeri_resim'] ?>" >

                <div class="form-group">
                  <label for="exampleInputEmail1">Sıra</label>
                  <input name="sira"  value="<?php echo $galeri['galeri_sira'] ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Sıra Giriniz">
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="galeriduzenle" class="btn btn-primary">Kaydet</button>
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