<?php
  include "./commonClasses.php";
?>

<!-- DOMACI -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <title>Class Calculator</title>
</head>
<body>
  <h1>Class Calculator</h1>
  <section>
  <p>
  <?php 
    $calc = new Calculator(10, 6);
    echo "new Calculator(" . $calc->num1 . ", " . $calc->num2 . ")";
  ?>
  </p><br>
  <table>
    <thead>
      <tr>
        <th>Function</th>
        <th>Result</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Add</td>
        <td>
          <?php 
            $calc->add();
            echo $calc->getResult(); 
          ?>
        </td>
      </tr>
      <tr>
        <td>Sub</td>
        <td>
          <?php 
            $calc->sub();
            echo $calc->getResult(); 
          ?>
        </td>
      </tr>
      <tr>
        <td>Mul</td>
        <td>
          <?php 
            $calc->mul();
            echo $calc->getResult(); 
          ?>
        </td>
      </tr>
      <tr>
        <td>Div</td>
        <td>
          <?php 
            $calc->div();
            echo $calc->getResult(); 
          ?>
        </td>
      </tr>
    </tbody>
  </table><br>
  <p>
  <?php 
    $calc2 = new Calculator(20, 3);
    echo "new Calculator(" . $calc2->num1 . ", " . $calc2->num2 . ")";
  ?>
  </p><br>
  <table>
    <thead>
      <tr>
        <th>Function</th>
        <th>Result</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Add</td>
        <td>
          <?php 
            $calc2->add();
            echo $calc2->getResult(); 
          ?>
        </td>
      </tr>
      <tr>
        <td>Sub</td>
        <td>
          <?php 
            $calc2->sub();
            echo $calc2->getResult(); 
          ?>
        </td>
      </tr>
      <tr>
        <td>Mul</td>
        <td>
          <?php 
            $calc2->mul();
            echo $calc2->getResult(); 
          ?>
        </td>
      </tr>
      <tr>
        <td>Div</td>
        <td>
          <?php 
            $calc2->div();
            echo $calc2->getResult(); 
          ?>
        </td>
      </tr>
    </tbody>
  </table>
  </section>
</body>
</html>
<!-- kraj domaceg -->

<?php
  // include "./commonClasses.php";


  $draganasVehicle = new Vehicle();
  $draganasVehicle->setManufacturer("Volvo");
  // $draganasVehicle->manufacturer = "WrongCar";
  $draganasVehicle->setType("car");
  // echo $draganasVehicle->getManufacturer();
  // echo $draganasVehicle->getType();

  // echo "<br>";
  $milicasVehicle = new Vehicle();
  $milicasVehicle->setManufacturer("BMW");
  $milicasVehicle->setType("drift car");
  // echo $milicasVehicle->getManufacturer();
  // echo $milicasVehicle->getType();
  // echo "<br>";

  // create class student (give attributes)
  // create method doExam which return random 1-5 grade
  // create method getStatus which returns name and grade


  // echo Student::sayHi();
  // $studentOne = new Student("Mario", "Super", "18");
  // $studentOne->doExam();
  // echo $studentOne->getStatus();
  // echo "<br>";
  // $studentOne->setName("Luigi");
  // $studentOne->doExam();
  // echo $studentOne->getStatus();

  // domaci
  // klasa kalkulator
  // kalkulator ima svoje ime
  // kalkulator moze da sabira, oduzime, mnozi i deli 2 broja
  // ima atribute broj 1, broj 2 i rezultat
  // vraca rezultat samo kada pozovete getResult
  // rezultat je prikazan u formatu "ime kalkulatora + rezultat
  // unit testovi za kalkulator
  // sve je strogo tipizirano -> ne mozemo slova u brojeve
  // hint: rezultat nece biti int
  // instancirati 2 kalkulatora i napraviti racunice
  // bonus: clean code
  // ne radimo na master/main branchu -> develop branch ili feature branch koji mergujemo u develop
  // Lepsa HTML strana ++

  // $calc = new Calculator("Calc1", 10, 6);
  // $calc->add();
  // echo $calc->getResult();
  // echo "<br>";
  // $calc->sub();
  // echo $calc->getResult();
  // echo "<br>";
  // $calc->mul();
  // echo $calc->getResult();
  // echo "<br>";
  // $calc->div();
  // echo $calc->getResult();
  // echo "<br>";
  // echo "<br>";


  // $calc = new Calculator("Calc2", 20, 3);
  // $calc->add();
  // echo $calc->getResult();
  // echo "<br>";
  // $calc->sub();
  // echo $calc->getResult();
  // echo "<br>";
  // $calc->mul();
  // echo $calc->getResult();
  // echo "<br>";
  // $calc->div();
  // echo $calc->getResult();
?>
