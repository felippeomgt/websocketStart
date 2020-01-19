<?php


$parametro = $_GET['parametro'];

$tempo = strlen($parametro);

sleep($tempo);

$retorno = [];
$mensagem = "Retorno da request '$parametro' em $tempo segundos!";

$retorno['resultado'] = $mensagem;
echo json_encode($retorno);




?>