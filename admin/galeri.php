<?php require_once 'header.php';
require_once 'sidebar.php'?>
 

  <div class="content-wrapper">
    
  <div class="row">

    <section class="col-lg-12 connectedSortable">

    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Galeri</h3>

            <a href="galeri-ekle.php">  <button style="float:right" class="btn btn-primary">Galeri Ekle</button> </a>

            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Galeri Resim</th>
                  <th>Galeri Sıra</th>
                  <th>Düzenle</th>
                  <th>Sil</th>

<?php 

$sql = "SELECT * FROM galeri order by galeri_sira ASC";
$stmt = $baglan->prepare($sql);
$stmt->execute();

while($galeriler = $stmt->fetch(PDO::FETCH_ASSOC)){

?>

                </tr>
                <tr style="height:50px">
                  <td><img style="width:200px" src="../resimler/<?php echo $galeriler['galeri_resim'] ?>"></td>
                  <td><?php echo $galeriler['galeri_sira'] ?></td>
                  <td><a href="galeri-duzenle.php?id=<?php echo $galeriler['id']; ?>" > <span style="widht:85px; !important height:35px" class="btn btn-success">Düzenle</span> </a> </td>
                  <td>
                    <form action="yukle.php" method="POST">
                      <input type="hidden" name="id" value="<?php echo $galeriler['id']; ?>" >
                      <input type="hidden" name="gorsel" value="<?php echo $galeriler['galeri_resim']; ?>" > 
                    <button name="galerisil" style="widht:85px; !important height:35px" class="btn btn-danger">Sil</button>
                    </form>
                  </td>
                </tr>
                
                <?php } ?>               
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    
  

        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php require_once 'footer.php'?>

 