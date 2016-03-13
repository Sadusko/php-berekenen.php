<?php
  $geld = $_POST["p1"];
  $getal2 = $_POST["p2"] / 100;
  $Percentage = $getal2;
  $jaren = $_POST["p3"];
  echo 'Uw geld: '. $geld . " <br /> Ingevoerde percentage: " . $Percentage . "<br /> Ingevoerde aantal jaren: ". $jaren;
  while ($i <= $jaren) {
    echo "<br /> Jaren: ". $i . " Uw geld: " . $geld . "<br /><br />";
    $geld = $geld * $Percentage;
    $i++;
  }
?>
