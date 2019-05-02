<?php

include_once './conexao.php';

$comando = "SELECT * FROM agenda.contato; ";

$s = $con->prepare($comando);
$s->execute();

$rs = $s->fetchAll();

foreach ($rs as $item) {
    echo $item['nome'] . " - " . $item['datanascimento'] .
    "  <a href='deletar.php?id={$item['id']}' >Deletar</a><br>";
}

