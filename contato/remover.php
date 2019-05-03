<?php

include_once '../config/conectar.php';

$id = $_GET['id'];

$sql = 'DELETE FROM contato WHERE id = ?; ';
$delete = $con->prepare($sql);
$delete->execute([$id]);

header('Location:listar.php');

