<?php require_once 'header.php';
require_once 'sidebar.php'?>
 

  <div class="content-wrapper">
    
  <div class="row">

    <section class="col-lg-12 connectedSortable">

    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Ürünler</h3>

            <a href="urun-ekle.php?altid=<?php echo $_GET['altid']; ?>">  <button style="float:right" class="btn btn-primary">Ürün Ekle</button> </a>

            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>

                  <th>Ürün Resim</th>
                  <th>Ürün Başlık</th>
                  <th>Ürün Sıra</th>
                  <th>Ürün Fiyat</th>

<?php 
$id = $_GET["altid"];

$sql = "SELECT * FROM urunler WHERE altkategori_id = :altkategori_id ORDER BY urun_sira";
$stmt = $baglan->prepare($sql);
$stmt->bindParam(":altkategori_id",$id);
$stmt->execute();

while($urunler = $stmt->fetch(PDO::FETCH_ASSOC)){

?>

                </tr>
                <tr style="height:50px">
                  <td> <img style="widht:300px" src="../resimler/<?php echo $urunler['urun_resim'] ?>" > </td>
                  <td><?php echo $urunler['urun_baslik'] ?></td>
                  <td><?php echo $urunler['urun_sira'] ?></td>
                  <td><?php echo $urunler['urun_fiyat'] ?></td>
                  <td><a href="urunler-duzenle.php?id=<?php echo $urunler['id']; ?>" > <span style="widht:85px; !important height:35px" class="btn btn-success">Düzenle</span> </a> </td>
                  <td>
                    <form action="yukle.php" method="POST">
                      <input type="hidden" name="id" value="<?php echo $urunler['id']; ?>" >
                      <input type="hidden" name="gorsel" value="<?php echo $urunler['urun_resim']; ?>" > 
                    <button name="urunsil" style="widht:85px; !important height:35px" class="btn btn-danger">Sil</button>
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

 