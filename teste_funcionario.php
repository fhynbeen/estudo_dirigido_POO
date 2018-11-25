<?php
    require "funcionario.php";


    new Funcionario();

    $funcionarios = new Funcionario();
    $funcionarios -> departamento = "limpeza";
    $funcionarios -> salario = "1500";
    $funcionarios -> cpf = "12134754890";

    new Data();
    $data = new Data();
    $data -> dia = "12";
    $data -> mes = "12";
    $data -> ano = "2018";

    function mostra($funcionarios, $data){

         echo "O funcionario do cpf $funcionarios->cpf do departamento de $funcionarios->departamento foi efetivado no $data->dia/$data->mes/$data->ano com o salario de $funcionarios->salario";

    }mostra($funcionarios, $data);

    function recebeAumento($funcionarios){
         $salario = $funcionarios->salario;
         $valor = 10;
         $aumento = $funcionarios->salario + ($salario / 100 * $valor);
         echo ", recebeu um aumento de 10% e está recebendo R$".$aumento;
}
    recebeAumento($funcionarios);

    function calculaGanhoAnual($funcionarios){
        $salario = $funcionarios->salario;
        $valor = 10;
        $aumento = $funcionarios->salario + ($salario / 100 * $valor);
        $ganho = $aumento * 12;
        echo "e seu ganho anual agora é de R$".$ganho;

    }
    calculaGanhoAnual($funcionarios);