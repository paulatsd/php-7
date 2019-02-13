<!DOCTYPE>

<html>
  <head>
    <title>    </title>
    <meta charset="utf-8"/>
  </head>

  <body>
    <?php

      // Monte toda a configuração que eu tenho (server - location)  para português - Padrão para linux e windows
      // setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

      // echo strftime("%A") . ", " . strftime("%d") . " de " . strftime("%B") . " de " . strftime("%Y");

      echo "<br>";

      setlocale(LC_TIME, "C");

      echo "<br />";
      echo strftime("%A");
      echo "<br />";

      setlocale(LC_TIME, "de_DE.utf-8");
      echo strftime(" in Finnish is %A,") . "<br />";

      setlocale(LC_TIME, "fr_FR", "fr_FR.utf-8");
      echo strftime(" in French %A and") . "<br />";

      setlocale(LC_TIME, "de_DE");
      echo strftime(" in German %A.\n") . "<br />";


    ?>
  </body>

</html>
