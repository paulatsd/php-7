<?php

  //Somar 15 dias numa data
  date_default_timezone_set("America/Fortaleza");
  $dt = new DateTime(); //classe date time
  echo $dt->format("d/m/Y H:i");
  // echo $dt->format("d/m/Y"); //Exibe a hora no formato dia/mes/ano
  $periodo = new DateInterval("P25D");

  $dt->add($periodo);
  echo "<br>";
  echo $dt->format("d/m/Y");

?>
