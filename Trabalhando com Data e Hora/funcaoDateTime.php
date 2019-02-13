<!DOCTYPE>

<html>
  <head>
    <title>    </title>
    <meta charset="utf-8"/>
  </head>

  <body>
    <?php

      //Ver no manual function date
      echo date("d/m/Y H:i:s");
      //No caso de um sistema de entregas, posso usar essa função e passar como parametro em quanto tempo deve chegar
      $ts = strtotime("+1 week"); //gera timestamp - quantidade de segundos desde 1º janeiro de 1970
      echo "<br>";
      echo "Hoje: " . date("l, d/m/Y", $ts);


    ?>
  </body>

</html>
