<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19/11/2018
 * Time: 01:19
 */

class Funcionario{

    public $departamento;
    public $salario;
    public $dataEntrada;
    public $cpf;

    public function __toString(){
        return $this->departamento;
        return $this->salario;
        return $this->dataEntrada;
        return $this->cpf;
    }
}
class Data{

    public $dia;
    public $mes;
    public $ano;

}


