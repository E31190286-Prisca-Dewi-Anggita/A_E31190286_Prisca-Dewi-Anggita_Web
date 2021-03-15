<!DOCTYPE html>
<html>

<body>

  <?php
  class Car
  {
    protected $model;
    public function setModel($model)
    {
      $this->model = $model;
    }
  }

  class SportsCar extends Car
  {
    public function hello()
    {
      return "Beep! am a Protected <i>" . $this->model . "</i>";
    }
  }
  $sportsCar1 = new SportsCar();
  $sportsCar1->setModel('BMW');
  echo $sportsCar1->hello();
  ?>

</body>

</html>