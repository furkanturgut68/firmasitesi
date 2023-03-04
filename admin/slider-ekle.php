<?php require_once 'header.php';
require_once 'sidebar.php';


?>
 

  <div class="content-wrapper">
    
  <div class="row">

    <section class="col-lg-12 connectedSortable">
    
    <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Slider Ekle</h3>
            </div>
            <!-- /.box-header -->
           

            <form action="yukle.php" method="post" enctype="multipart/form-data">
              <div class="box-body">

                <div class="form-group">
                  <label for="exampleInputEmail1">Resim</label>
                  <input type="file" name="gorsel"/>                
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Başlık</label>
                  <input name="baslik" type="text" class="form-control" id="exampleInputEmail1" placeholder="Sıra Giriniz">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Sıra</label>
                  <input name="sira" type="text" class="form-control" id="exampleInputEmail1" placeholder="Sıra Giriniz">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Açıklama</label>
                  <input name="aciklama" type="text" class="form-control" id="exampleInputEmail1" placeholder="Sıra Giriniz">
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="sliderkaydet" class="btn btn-primary">Kaydet</button>
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