<?php
require_once 'baglan.php';

if(isset($_POST["ayarkaydet"])){
    $baslik = $_POST["baslik"];
    $aciklama = $_POST["aciklama"];
    $anahtarkelime = $_POST["anahtarkelime"];
    $adres = $_POST["adres"];
    $mail = $_POST["mailadres"];
    $telefon = $_POST["telefon"];
    $whatsapp = $_POST["whatsapp"];
    $facebook = $_POST["facebook"];
    $twitter = $_POST["twitter"];
    $instagram = $_POST["instagram"];
    $linkedin = $_POST["linkedin"];



    $sql = "UPDATE ayarlar SET baslik = :baslik, aciklama = :aciklama, anahtarkelime = :anahtarkelime, adres = :adres,
    mailadres = :mail, telefon = :telefon, whatsapp = :whatsapp, facebook = :facebook, twitter = :twitter, instagram = :instagram, linkedin = :linkedin 
    WHERE id=1";

    $stmt = $baglan->prepare($sql);

    $stmt->bindParam(":baslik",$baslik);
    $stmt->bindParam(":aciklama",$aciklama);
    $stmt->bindParam(":anahtarkelime",$anahtarkelime);
    $stmt->bindParam(":adres",$adres);
    $stmt->bindParam(":mail",$mail);
    $stmt->bindParam(":telefon",$telefon);
    $stmt->bindParam(":whatsapp",$whatsapp);
    $stmt->bindParam(":facebook",$facebook);
    $stmt->bindParam(":twitter",$twitter);
    $stmt->bindParam(":instagram",$instagram);
    $stmt->bindParam(":linkedin",$linkedin);

    $stmt->execute();


    if($stmt){
        Header("Location:config.php?yukleme=basarili");
    }else {
        Header("Location:config.php?yukleme=basarisiz");
    }


}


if(isset($_POST["hakkimizdakaydet"])){
    $baslik = $_POST["baslik"];
    $aciklama = $_POST["aciklama"];
    $misyon = $_POST["misyon"];
    $vizyon = $_POST["vizyon"];


    $sql = "UPDATE hakkimizda SET baslik = :baslik, aciklama = :aciklama, misyon = :misyon, vizyon = :vizyon WHERE id=1";
    $stmt = $baglan->prepare($sql);
    $stmt->bindParam(":baslik",$baslik);
    $stmt->bindParam(":aciklama",$aciklama);
    $stmt->bindParam(":misyon",$misyon);
    $stmt->bindParam(":vizyon",$vizyon);
    $stmt->execute();

    if($stmt){
        Header("Location:hakkimizda.php?yukleme=basarili");
    }else{
        Header("Location:hakkimizda.php?yukleme=basarisiz");
    }

}

if(isset($_POST["kategorikaydet"])){
    $baslik = $_POST["baslik"];
    $sira = $_POST["sira"];

    $sql = "INSERT INTO kategori(kategori_baslik,kategori_sira) VALUES (:kategori_baslik, :kategori_sira)";
    $stmt = $baglan->prepare($sql);
    $stmt->bindParam(":kategori_baslik",$baslik);
    $stmt->bindParam(":kategori_sira",$sira);
    $stmt->execute();

    if($stmt){
        Header("Location:kategori.php?yukleme=basarili");
    }else{
        Header("Location:kategori.php?yukleme=basarisiz");
    }
}

if(isset($_POST["kategoriduzenle"])){
    $id = $_POST["id"];
    $baslik = $_POST["baslik"];
    $sira = $_POST["sira"];

    $sql = "UPDATE kategori SET kategori_baslik = :kategori_baslik, kategori_sira = :kategori_sira WHERE id = :id";
    $stmt = $baglan->prepare($sql);
    $stmt->bindParam(":id",$id);
    $stmt->bindParam(":kategori_baslik",$baslik);
    $stmt->bindParam(":kategori_sira",$sira);
    $stmt->execute();
    
    if($stmt){
        Header("Location:kategori.php?yukleme=basarili");
    }else{
        Header("Location:kategori.php?yukleme=basarisiz");
    }

}

if(isset($_GET["kategorisil"])){
    $id = $_GET["id"];
    $sql = "DELETE FROM kategori WHERE id = :id";
    $stmt = $baglan->prepare($sql);
    $stmt->bindParam(":id",$id);
    $stmt->execute();

    if($stmt){
        Header("Location:kategori.php?yukleme=basarili");
    }else{
        Header("Location:kategori.php?yukleme=basarisiz");
    }
    
}

if(isset($_POST["altkategorikaydet"])){
    $baslik = $_POST["baslik"];
    $sira = $_POST["sira"];
    $katid = $_POST["katid"];

    $sql = "INSERT INTO altkategori(alt_baslik,alt_sira,kategori_id) VALUES (:alt_baslik, :alt_sira, :kategori_id)";
    $stmt = $baglan->prepare($sql);
    $stmt->bindParam(":alt_baslik",$baslik);
    $stmt->bindParam(":alt_sira",$sira);
    $stmt->bindParam(":kategori_id",$katid);
    $stmt->execute();

    if($stmt){
        Header("Location:alt-kategori.php?katid=$katid&yukleme=basarili");
    }else{
        Header("Location:alt-kategori.php?katid=$katid&yukleme=basarisiz");
    }
}

if(isset($_POST["altkategoriduzenle"])){
    $katid = $_POST["katid"];
    $id = $_POST["id"];
    $baslik = $_POST["baslik"];
    $sira = $_POST["sira"];

    $sql = "UPDATE altkategori SET alt_baslik = :alt_baslik, alt_sira = :alt_sira WHERE id = :id";
    $stmt = $baglan->prepare($sql);
    $stmt->bindParam(":id",$id);
    $stmt->bindParam(":alt_baslik",$baslik);
    $stmt->bindParam(":alt_sira",$sira);
    $stmt->execute();
    
    if($stmt){
        Header("Location:alt-kategori.php?katid=$katid&yukleme=basarili");
    }else{
        Header("Location:alt-kategori.php?katid=$katid&yukleme=basarisiz");
    }

}

if(isset($_GET["altkategorisil"])){
    $id = $_GET["id"];
    $katid = $_GET["katid"];
    $sql = "DELETE FROM altkategori WHERE id = :id";
    $stmt = $baglan->prepare($sql);
    $stmt->bindParam(":id",$id);
    $stmt->execute();

    if($stmt){
        Header("Location:alt-kategori.php?katid=$katid&yukleme=basarili");
    }else{
        Header("Location:alt-kategori.php?katid=$katid&yukleme=basarisiz");
    }
    
}

if(isset($_POST['galeriekle'])){
    $sira = $_POST['sira'];
    $gorsel = $_POST['gorsel'];

    
    $yukle = '../resimler';
    @$resimad = $_FILES['gorsel'] ["tmp_name"];
    @$isim = $_FILES['gorsel'] ["name"];
    $sayi1 = rand(20000,30000);
    $sayi2 = rand(20000,30000);
    $sayilar = $sayi1.$sayi2;
    $resimyolu = $sayilar.$isim;
    @move_uploaded_file($resimad, "{$yukle}/{$resimyolu}");
    
    

    //var_dump($_FILES['gorsel']);

    $sql = "INSERT INTO galeri(galeri_sira,galeri_resim) VALUES (:galeri_sira, :galeri_resim)";
    $stmt = $baglan->prepare($sql);
    $stmt->bindParam(":galeri_sira",$sira);
    $stmt->bindParam(":galeri_resim",$resimyolu);
    $stmt->execute();

    if($stmt){
        Header("Location:galeri.php?yukleme=basarili");
    }else{
        Header("Location:galeri.php?yukleme=basarisiz");
    }

    /*
    if(@move_uploaded_file($resimad, "{$yukle}/{$resimyolu}")){
        echo "OK";
    }else {
       echo "Hata";
       echo var_dump(@move_uploaded_file($resimad, "{$yukle}/{$resimyolu}"));
       
    }
    */

    // move_uploaded_file($_FILES["resim"]["tmp_name"],"../resimler" . $_FILES["resim"]["name"]);			
    // phpinfo();
    //echo var_dump($degisken); 

}

if(isset($_POST["galeriduzenle"])){

    if($_FILES['gorsel'] ['size']>0){

    $id = $_POST["id"];
    $sira = $_POST['sira'];
    $gorsel = $_POST['gorsel'];

    
    $yukle = '../resimler';
    @$resimad = $_FILES['gorsel'] ["tmp_name"];
    @$isim = $_FILES['gorsel'] ["name"];
    $sayi1 = rand(20000,30000);
    $sayi2 = rand(20000,30000);
    $sayilar = $sayi1.$sayi2;
    $resimyolu = $sayilar.$isim;
    @move_uploaded_file($resimad, "{$yukle}/{$resimyolu}");

    $sql = "UPDATE galeri SET galeri_sira = :galeri_sira, galeri_resim = :galeri_resim WHERE id = :id";
    $stmt = $baglan->prepare($sql);
    $stmt->bindParam(":id",$id);
    $stmt->bindParam(":galeri_resim",$resimyolu);
    $stmt->bindParam(":galeri_sira",$sira);
    $stmt->execute();

    $sil = $_POST['guncelresim'];
    unlink("../resimler/$sil");
    
    if($stmt){
        Header("Location:galeri.php?yukleme=basarili");
    }else{
        Header("Location:galeri.php?yukleme=basarisiz");
    }

}else {
    $id = $_POST["id"];
    $sira = $_POST['sira'];


    $sql = "UPDATE galeri SET galeri_sira = :galeri_sira WHERE id = :id";
    $stmt = $baglan->prepare($sql);
    $stmt->bindParam(":id",$id);
    $stmt->bindParam(":galeri_sira",$sira);
    $stmt->execute();
    
    if($stmt){
        Header("Location:galeri.php?yukleme=basarili");
    }else{
        Header("Location:galeri.php?yukleme=basarisiz");
    }
}

}

if(isset($_POST["galerisil"])){
    $id = $_POST["id"];
    $gorsel = $_POST["gorsel"];
    $sql = "DELETE FROM galeri WHERE id = :id";
    $stmt = $baglan->prepare($sql);
    $stmt->bindParam(":id",$id);
    $stmt->execute();
    unlink("../resimler/$gorsel");


    if($stmt){
        Header("Location:galeri.php?yukleme=basarili");
    }else{
        Header("Location:galeri.php?yukleme=basarisiz");
    }
    
}


if(isset($_POST['urunkaydet'])){
    $sira = $_POST['sira'];
    $baslik = $_POST['baslik'];
    $aciklama = $_POST['aciklama'];
    $fiyat = $_POST['fiyat'];
    $id = $_POST['altid'];


    
    $yukle = '../resimler';
    @$resimad = $_FILES['gorsel'] ["tmp_name"];
    @$isim = $_FILES['gorsel'] ["name"];
    $sayi1 = rand(20000,30000);
    $sayi2 = rand(20000,30000);
    $sayilar = $sayi1.$sayi2;
    $resimyolu = $sayilar.$isim;
    @move_uploaded_file($resimad, "{$yukle}/{$resimyolu}");
    
    $sql = "INSERT INTO urunler(urun_baslik,urun_resim,urun_aciklama,urun_fiyat,urun_sira,altkategori_id) 
    VALUES (:urun_baslik, :urun_resim, :urun_aciklama, :urun_fiyat, :urun_sira, :altkategori_id)";
    $stmt = $baglan->prepare($sql);
    $stmt->bindParam(":urun_baslik",$baslik);
    $stmt->bindParam(":urun_resim",$resimyolu);
    $stmt->bindParam(":urun_aciklama",$aciklama);
    $stmt->bindParam(":urun_fiyat",$fiyat);
    $stmt->bindParam(":urun_sira",$sira);
    $stmt->bindParam(":altkategori_id",$id);


    $stmt->execute();

    if($stmt){
        Header("Location:urunler.php?altid=$id&yukleme=basarili");
    }else{
        Header("Location:urunler.php?altid=$id&yukleme=basarisiz");
    }

}



if(isset($_POST["urunduzenle"])){
    $sira = $_POST['sira'];
    $baslik = $_POST['baslik'];
    $aciklama = $_POST['aciklama'];
    $fiyat = $_POST['fiyat'];
    $id = $_POST['id'];

    if($_FILES['gorsel'] ['size']>0){

    $yukle = '../resimler';
    @$resimad = $_FILES['gorsel'] ["tmp_name"];
    @$isim = $_FILES['gorsel'] ["name"];
    $sayi1 = rand(20000,30000);
    $sayi2 = rand(20000,30000);
    $sayilar = $sayi1.$sayi2;
    $resimyolu = $sayilar.$isim;
    @move_uploaded_file($resimad, "{$yukle}/{$resimyolu}");

    $sql = "UPDATE urunler SET urun_baslik = :urunbaslik ,urun_resim = :urun_resim ,urun_aciklama = :urun_aciklama ,urun_fiyat = :urun_fiyat ,urun_sira = :urun_sira WHERE id = :id";
    $stmt = $baglan->prepare($sql);
    $stmt->bindParam(":id",$id);
    $stmt->bindParam(":urun_baslik",$baslik);
    $stmt->bindParam(":urun_resim",$resimyolu);
    $stmt->bindParam(":urun_aciklama",$aciklama);
    $stmt->bindParam(":urun_fiyat",$fiyat);
    $stmt->bindParam(":urun_sira",$sira);
    $stmt->execute();

    $sil = $_POST['guncelresim'];
    unlink("../resimler/$sil");
    
    if($stmt){
        Header("Location:urunler.php?altid=$id&yukleme=basarili");
    }else{
        Header("Location:urunler.php?altid=$id&yukleme=basarisiz");
    }


}else {
    
    $sql = "UPDATE urunler SET urun_baslik = :urunbaslik ,urun_aciklama = :urun_aciklama ,urun_fiyat = :urun_fiyat ,urun_sira = :urun_sira WHERE id = :id";
    $stmt = $baglan->prepare($sql);
    $stmt->bindParam(":id",$id);
    $stmt->bindParam(":urun_baslik",$baslik);
    $stmt->bindParam(":urun_aciklama",$aciklama);
    $stmt->bindParam(":urun_fiyat",$fiyat);
    $stmt->bindParam(":urun_sira",$sira);
    $stmt->execute();

  
    
    if($stmt){
        Header("Location:urunler.php?altid=$id&yukleme=basarili");
    }else{
        Header("Location:urunler.php?altid=$id&yukleme=basarisiz");
    }

}


}

if(isset($_POST["urunsil"])){
    $id = $_POST["id"];
    $gorsel = $_POST["gorsel"];
    $sql = "DELETE FROM urunler WHERE id = :id";
    $stmt = $baglan->prepare($sql);
    $stmt->bindParam(":id",$id);
    $stmt->execute();
    unlink("../resimler/$gorsel");


    if($stmt){
        Header("Location:urunler.php?altid=$id&yukleme=basarili");
    }else{
        Header("Location:urunler.php?altid=$id&yukleme=basarisiz");
    }
    
}


if(isset($_POST['sliderkaydet'])){
    $sira = $_POST['sira'];
    $baslik = $_POST['baslik'];
    $aciklama = $_POST['aciklama'];

    
    $yukle = '../resimler';
    @$resimad = $_FILES['gorsel'] ["tmp_name"];
    @$isim = $_FILES['gorsel'] ["name"];
    $sayi1 = rand(20000,30000);
    $sayi2 = rand(20000,30000);
    $sayilar = $sayi1.$sayi2;
    $resimyolu = $sayilar.$isim;
    @move_uploaded_file($resimad, "{$yukle}/{$resimyolu}");
    
    

    //var_dump($_FILES['gorsel']);

    $sql = "INSERT INTO slider(sira,baslik,aciklama,resim) VALUES (:sira, :baslik, :aciklama, :resim)";
    $stmt = $baglan->prepare($sql);
    $stmt->bindParam(":sira",$sira);
    $stmt->bindParam(":baslik",$baslik);
    $stmt->bindParam(":aciklama",$aciklama);
    $stmt->bindParam(":resim",$resimyolu);
    $stmt->execute();

    if($stmt){
        Header("Location:slider.php?yukleme=basarili");
    }else{
        Header("Location:slider.php?yukleme=basarisiz");
    }

}

if(isset($_POST["sliderduzenle"])){

    if($_FILES['gorsel'] ['size']>0){

    $id = $_POST["id"];
    $sira = $_POST['sira'];
    $baslik = $_POST['baslik'];
    $aciklama = $_POST['aciklama'];

    
    $yukle = '../resimler';
    @$resimad = $_FILES['gorsel'] ["tmp_name"];
    @$isim = $_FILES['gorsel'] ["name"];
    $sayi1 = rand(20000,30000);
    $sayi2 = rand(20000,30000);
    $sayilar = $sayi1.$sayi2;
    $resimyolu = $sayilar.$isim;
    @move_uploaded_file($resimad, "{$yukle}/{$resimyolu}");

    $sql = "UPDATE slider SET sira = :sira, resim = :resim, baslik = :baslik, aciklama = :aciklama WHERE id = :id";
    $stmt = $baglan->prepare($sql);
    $stmt->bindParam(":id",$id);
    $stmt->bindParam(":resim",$resimyolu);
    $stmt->bindParam(":sira",$sira);
    $stmt->bindParam(":baslik",$baslik);
    $stmt->bindParam(":aciklama",$aciklama);
    $stmt->execute();

    $sil = $_POST['guncelresim'];
    unlink("../resimler/$sil");
    
    if($stmt){
        Header("Location:slider.php?yukleme=basarili");
    }else{
        Header("Location:slider.php?yukleme=basarisiz");
    }

}else {

    $id = $_POST["id"];
    $sira = $_POST['sira'];
    $baslik = $_POST['baslik'];
    $aciklama = $_POST['aciklama'];


    
    $sql = "UPDATE slider SET sira = :sira, baslik = :baslik, aciklama = :aciklama WHERE id = :id";
    $stmt = $baglan->prepare($sql);
    $stmt->bindParam(":id",$id);
    $stmt->bindParam(":sira",$sira);
    $stmt->bindParam(":baslik",$baslik);
    $stmt->bindParam(":aciklama",$aciklama);
    $stmt->execute();
    
    if($stmt){
        Header("Location:slider.php?yukleme=basarili");
    }else{
        Header("Location:slider.php?yukleme=basarisiz");
    }
}

}

if(isset($_POST["slidersil"])){
    $id = $_POST["id"];
    $gorsel = $_POST["gorsel"];
    $sql = "DELETE FROM slider WHERE id = :id";
    $stmt = $baglan->prepare($sql);
    $stmt->bindParam(":id",$id);
    $stmt->execute();
    unlink("../resimler/$gorsel");

    if($stmt){
        Header("Location:slider.php?yukleme=basarili");
    }else{
        Header("Location:slider.php?yukleme=basarisiz");
    }
    
}



?>