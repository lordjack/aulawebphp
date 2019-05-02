<?php

include_once './conexao.php';

$comando = "DELETE FROM agenda.contato where id = ?;";

$id = $_GET['id'];

$s = $con->prepare($comando);

$s->execute( array($id) );

header("Location: listar.php");