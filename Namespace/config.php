<?php

/**
* Classe de configuração da aplicação
*/

//Carregar as classes que serão utilizadas na aplicação de acordo
//com o nome da classe passado como parametro

//Esta função carrega automaticamente os arquivos com os nomes da classes instanciadas
spl_autoload_register(function($nameClass){

  //A pasta onde deve procurar as classes
  $dirClass = "class";
  $filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php"; //path do arquivo

  // Procura pelo oposto de DIRECTORY_SEPARATOR, e substitui pela
  // constante DIRECTORY_SEPARATOR
  $filename = str_replace( (DIRECTORY_SEPARATOR === '/' ? '\\' : '/'), DIRECTORY_SEPARATOR, $filename);

  //Verificar se o arquivo existe
  if (file_exists($filename)){
    require_once($filename);
  }

});



?>
