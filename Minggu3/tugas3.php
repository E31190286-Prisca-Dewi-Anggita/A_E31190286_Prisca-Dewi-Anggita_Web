<!DOCTYPE html>
<html>

<body>

  <?php
  class kalkulator
  {
    private $angka1 = "10";
    private $angka2 = "15";
    private $angka3 = "5";
    public function tambah()
    {
      return $this->angka1 + $this->angka2;
    }
    public function kurang()
    {
      return $this->angka2 - $this->angka3;
    }
    public function bagi()
    {
      return $this->angka1 / $this->angka3;
    }
    public function kali()
    {
      return $this->angka1 * $this->angka3;
    }
  }

  $kalkulator = new kalkulator();

  echo "Tambah : ";
  echo $kalkulator->tambah();
  echo "<br>";
  echo "Kurang : ";
  echo $kalkulator->kurang();
  echo "<br>";
  echo "Bagi : ";
  echo $kalkulator->bagi();
  echo "<br>";
  echo "Kali : ";
  echo $kalkulator->kali();

  ?>

</body>

</html>