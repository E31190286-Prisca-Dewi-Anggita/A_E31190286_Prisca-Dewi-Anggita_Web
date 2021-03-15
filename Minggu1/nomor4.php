<!DOCTYPE html>
<html>

<body>

  <?php
  class property
  {
    public $jenis;
    public $promo;
    public $type;
    public $harganormal;
    public $tahunbangun;
    function harganormal($harganormal)
    {
      return $this->harganormal = $harganormal;
    }
    function promo($promo)
    {
      return $this->promo = $promo;
    }
    function tahunbangun($tahunbangun)
    //$tahun bangun adalah parameter
    {
      return $this->tahunbangun = $tahunbangun;
    }
  }

  $property = new property();

  $tahun =  $property->tahunbangun(2006);
  $harga =  $property->harganormal(10000);
  $promo =  $property->promo(10);
  if ($tahun > 2010) {
    if ($promo != 0) {
      echo "Bangunan Baru";
      echo "<br>";
      echo "======";
      $price = $harga * $promo / 100;
      echo "<br>";
      echo "diskon :", $price;
      echo "<br>";
      $total_harga=$harga-$price;
      echo $total_harga;

    } else {
      echo "Bangunan Baru";
      echo "Gak Ada Promo";
    }
  } else {
    if ($promo) {
      echo "Bangunan lama";
      echo "<br>";
      echo "======";
      $price = $harga * $promo / 100;
      echo "<br>";
      echo "diskon :", $price;
      echo "<br>";
      $prise = $harga-$price;
      echo $price;
    } else {
      echo "bangunan lama";
      echo "<br>";
      echo "gak ada promo";
      echo "Harga :", $harga;
    }
  }


  ?>

</body>

</html>