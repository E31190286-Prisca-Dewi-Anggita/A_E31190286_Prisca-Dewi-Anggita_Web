<!DOCTYPE html>
<html>

<body>

  <?php
  abstract class Car
  {
    protected $tankVolume;
    public function setTankVolume($volume)
    {
      $this->tankVolume = $volume;
    }
    //abstract method
    // abstract public function calcNumMlesOnFullTank();
  }

  // class SportsCar extends Car
  // {
  //   public function hello()
  //   {
  //     return "Beep! am a Protected <i>" . $this->model . "</i>";
  //   }
  // }
  // $sportsCar1 = new SportsCar();
  // $sportsCar1->setModel('BMW');
  // echo $sportsCar1->hello();
  ?>

</body>

</html>