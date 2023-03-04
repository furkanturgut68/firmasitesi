<?php require_once 'header.php';
require_once 'sidebar.php'?>
 

  <div class="content-wrapper">
    
  <div class="row">

    <section class="col-lg-12 connectedSortable">

    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Alt Kategori</h3>

            <a href="altkategori-ekle.php?katid=<?php echo $_GET['katid']; ?>">  <button style="float:right" class="btn btn-primary">Alt Kategori Ekle</button> </a>

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
$id = $_GET["katid"];
$sql = "SELECT * FROM altkategori WHERE kategori_id = :katid ORDER BY alt_sira";
$stmt = $baglan->prepare($sql);
$stmt->bindParam(":katid",$id);
$stmt->execute();

while($altkategori = $stmt->fetch(PDO::FETCH_ASSOC)){

?>

                </tr>
                <tr style="height:50px">
                  <td><?php echo $altkategori['alt_sira'] ?></td>
                  <td><?php echo $altkategori['alt_baslik'] ?></td>
                  <td><a href="urunler.php?altid=<?php echo $altkategori['id'] ?>" <span style="widht:85px; !important height:35px" class="btn btn-info">Git</span></a> </td>
                  <td><a href="altkategori-duzenle.php?id=<?php echo $altkategori["id"]; ?>" > <span style="widht:85px; !important height:35px" class="btn btn-success">Düzenle</span> </a> </td>
                  <td><a href="yukle.php?altkategorisil&id=<?php echo $altkategori['id']; ?>&katid=<?php echo $_GET['katid'];?>" ><span style="widht:85px; !important height:35px" class="btn btn-danger">Sil</span></a></td>
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

 