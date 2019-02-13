<?php

namespace Cliente; //informar que tá na pasta cliente - namespace

class Cadastro extends \Cadastro{

    public function registrarVenda(){
        echo "Foi registrada uma venda para o(a) cliente " . $this->getName();
    }

}

 ?>
