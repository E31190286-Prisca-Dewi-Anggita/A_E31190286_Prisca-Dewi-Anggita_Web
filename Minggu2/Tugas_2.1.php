<!DOCTYPE html>
<html>

<body>

  <?php
  class laptop
  {
    public $pemilik = "Prisca";
    public $merk = "Macbook";
    public function hidupkan_laptop()
    {
      return "Hidupkan Laptop " . $this->merk . " punya " . $this->pemilik;
    }
    //$this yaitu memanggil properti merk
    //return : jika tidak menggunakan retun data tidak akan mau keluar
    
    public function matikan_laptop()
    {
      return "Matikan Laptop " . $this->merk . " punya " . $this->pemilik;
    }
    public function restart_laptop()
    {
      return "Matikan Laptop " . $this->merk . " punya " . $this->pemilik . "<br>" . "Hidupkan Laptop " . $this->merk . " punya " . $this->pemilik;
    }
  }

  $laptop = new laptop();
  echo "1." . $laptop->hidupkan_laptop();
  echo "<br>";
  echo "2." . $laptop->matikan_laptop();
  echo "<br>";
  echo "3." . $laptop->restart_laptop();
  ?>

</body>

</html>