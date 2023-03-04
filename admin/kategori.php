<?php require_once 'header.php';
require_once 'sidebar.php'?>
 

  <div class="content-wrapper">
    
  <div class="row">

    <section class="col-lg-12 connectedSortable">

    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Kategori</h3>

            <a href="kategori-ekle.php">  <button style="float:right" class="btn btn-primary">Kategori Ekle</button> </a>

            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>Kategori Başlık</th>
                  <th>Kategori Sıra</th>
                  <th>Git</th>
                  <th>Düzenle</th>
                  <th>Sil</th>

<?php 

$sql = "SELECT * FROM kategori order by kategori_sira ASC";
$stmt = $baglan->prepare($sql);
$stmt->execute();

while($kategoriler = $stmt->fetch(PDO::FETCH_ASSOC)){

?>

                </tr>
                <tr style="height:50px">
                  <td><?php echo $kategoriler['kategori_sira'] ?></td>
                  <td><?php echo $kategoriler['kategori_baslik'] ?></td>
                  <td><a href="alt-kategori.php?katid=<?php echo $kategoriler['id']; ?>"> <span style="widht:85px; !important height:35px" class="btn btn-info">Git</span></a></td>
                  <td><a href="kategori-duzenle.php?id=<?php echo $kategoriler['id']; ?>" > <span style="widht:85px; !important height:35px" class="btn btn-success">Düzenle</span> </a> </td>
                  <td><a href="yukle.php?kategorisil&id=<?php echo $kategoriler['id']; ?>" ><span style="widht:85px; !important height:35px" class="btn btn-danger">Sil</span></a></td>
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

 