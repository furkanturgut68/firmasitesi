<?php require_once 'header.php';
require_once 'sidebar.php';


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

            <input type="hidden" name="altid" value="<?php echo $_GET['altid']; ?>" >
              <div class="form-group">
                  <label for="exampleInputEmail1">Resim</label>
                  <input name="gorsel" type="file" class="form-control" id="exampleInputEmail1">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Başlık</label>
                  <input name="baslik" type="text" class="form-control" id="exampleInputEmail1" placeholder="Başlık Giriniz">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Açıklama</label>
                 <textarea name="aciklama" id="editor1" rows="8" cols="80"></textarea>
                </div>


                <div class="form-group">
                  <label for="exampleInputEmail1">Sıra</label>
                  <input name="sira" type="text" class="form-control" id="exampleInputEmail1" placeholder="Sıra Giriniz">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Fiyat</label>
                  <input name="fiyat" type="text" class="form-control" id="exampleInputEmail1" placeholder="Fiyat Giriniz">
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="urunkaydet" class="btn btn-primary">Kaydet</button>
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