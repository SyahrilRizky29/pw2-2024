<?php
$submit = isset($_POST['proses']) ? $_POST['proses'] : null;
$nama_pelanggan = isset($_POST["customer"]) ? $_POST["customer"] : null;
$brand = isset($_POST["produk"]) ? $_POST["produk"] : null;
$hasil = isset($_POST["jumlah"]) ? $_POST["jumlah"] : null;


$harga=0;
if ($brand=="TV") {
  $harga=4200000*$hasil;
} elseif ($brand=="Kulkas") {
  $harga=3100000*$hasil;
} elseif ($brand=="Mesin Cuci") {
  $harga=3800000*$hasil;
} else { 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .position-relative {
            position: relative;
        }

        .card-positioned {
            position: absolute;
            top: 10px;
            right: 10px;
            transform: translate(50%, -50%);
        }
    </style>

    <title>Document</title>
</head>
<body>

<div>
<h1>Belanja Online</h1>
</div>
<form class="p-5" action="form_belanja.php" method="POST">
  <div class="form-group row">
    <label for="customer" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="customer" name="customer" placeholder="Masukan Nama Anda..." type="text" class="form-control" style="width: 250px;">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="_1" type="radio" class="custom-control-input" value="Kulkas"> 
        <label for="_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="_2" type="radio" class="custom-control-input" value="Mesin Cuci"> 
        <label for="_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Jumlah Barang?" type="text" class="form-control" style="width: 200px;">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" class="btn btn-primary">Selesai</button>
    </div>
  </div>

  <div class="card float-right bg-primary d-flex justify-content-center" style="width: 18rem;">
    <div class="card-header text-white">
      Daftar Harga
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">TV: 4.200.000</li>
      <li class="list-group-item">Kulkas: 3.100.000</li>
      <li class="list-group-item">Mesin Cuci: 3.800.000</li>
    </ul>
    <div class="card-footer bg-primary text-white">
      Harga Dapat Berubah Setiap Saat!
    </div>
  </div>

<div class="mx-5 border" style="width: 300px;">
  <p>Nama: <?=$nama_pelanggan?></p>
  <p>Produk: <?=$brand?></p>
  <p>Jumlah: <?=$hasil?></p>
  <p>Bayar: <?=$harga?></p>
</div>

</body>
</html>