<!DOCTYPE html>
<html>

<body>

  <?php
  class Car
  {
    private $model;
    public function setModel($model)
    {
      $this->model = $model;
    }
    public function hello()
    {
      return "Beep! am a Private <i>" . $this->model . "</i>";
    }
  }

  class SportsCar extends Car
  {
  }
  $sportsCar1 = new SportsCar();
  $sportsCar1->setModel('BMW');
  echo $sportsCar1->hello();
  ?>

</body>

</html>