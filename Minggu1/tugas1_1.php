<!DOCTYPE html>
<html>
<body>

<?php
class book {
  // Properties
  public $judul_buku = "Bababa";
  public $pengarang = "Agastya Amaranthine";
  public $penerbit = "PT CV Bababa";
  public $tahun = 2021;
  public $cetakan = "Banyak Gan";
}

$buku = new book();
$pengarang = new book();
$penerbit = new book();
$tahun = new book();
$cetakan = new book();

echo $buku->judul_buku;
echo "<br>";
echo $buku->pengarang;
echo "<br>";
echo $buku->penerbit;
echo "<br>";
echo $buku->tahun;
echo "<br>";
echo $buku->cetakan;
echo "<br>";
?>
 
</body>
</html>