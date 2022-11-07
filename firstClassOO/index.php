<?php
  include "./commonClasses.php";


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


  echo Student::sayHi();
  $studentOne = new Student("Mario", "Super", "18");
  $studentOne->doExam();
  echo $studentOne->getStatus();
  echo "<br>";
  $studentOne->setName("Luigi");
  $studentOne->doExam();
  echo $studentOne->getStatus();

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
?>