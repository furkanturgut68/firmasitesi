<?php require_once 'header.php';
require_once 'sidebar.php';

$id = $_GET["id"];
$sql = "SELECT * FROM altkategori WHERE id = :id";
$stmt = $baglan->prepare($sql);
$stmt->bindParam(":id",$id);
$stmt->execute();

$altkategoriler = $stmt->fetch(PDO::FETCH_ASSOC);


?>
 

  <div class="content-wrapper">
    
  <div class="row">

    <section class="col-lg-12 connectedSortable">
    
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Alt Kategori Düzenle</h3>
            </div>
            <!-- /.box-header -->
           

            <form action="yukle.php" method="post">
              <div class="box-body">

                <div class="form-group">
                  <label for="exampleInputEmail1">Başlık</label>
                  <input name="baslik" value="<?php echo $altkategoriler['alt_baslik']; ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Başlık Giriniz">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Sıra</label>
                  <input name="sira" value="<?php echo $altkategoriler['alt_sira']; ?>" type="text" class="form-control" id="exampleInputEmail1" placeholder="Sıra Giriniz">
                </div>

              </div>

              <input type="hidden" name="id" value="<?php echo $altkategoriler['id']; ?>" ></input>

              <input type="hidden" name="katid" value="<?php echo $altkategoriler['kategori_id']; ?>" ></input>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="altkategoriduzenle" class="btn btn-primary">Kaydet</button>
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