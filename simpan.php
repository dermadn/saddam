<?php
include("koneksi.php");

$carikode = mysqli_query($konek, "select max(kd_produk) from produk");
  // menjadikannya array
  $datakode = mysqli_fetch_array($carikode);
  // jika $datakode
  if ($datakode) {
   $nilaikode = substr($datakode[0], 3);
   // menjadikan $nilaikode ( int )
   $kode = (int) $nilaikode;
   // setiap $kode di tambah 1
   $kode = $kode + 1;
   $kode_otomatis = "MD-".str_pad($kode, 3, "0", STR_PAD_LEFT);
  } else {
   $kode_otomatis = "F0001";
  }

$nama=$_POST['nama'];
$harga=$_POST['harga'];
$kate=$_POST['kate'];
$url=$_POST['url'];
$satuan=$_POST['satuan'];
$stok=$_POST['stok'];

$perintah=mysqli_query($konek,"INSERT INTO `produk` (`kd_produk`, `nama_produk`, `harga_produk`, `satuan`, `kategori`, `url_gambar`, `stok`) VALUES ('$kode_otomatis', '$nama', '$harga', '$kate', '$satuan', '$url', '$stok')");
if($perintah==TRUE){
    header("Location: master2.php");
}else{
    echo "Data Gagal Simpan";
}

?>