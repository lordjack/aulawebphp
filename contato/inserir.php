<?php
include_once '../config/conectar.php';

if (!empty($_POST['enviar'])) {
    $sql = "insert into contato(nome, datanascimento) VALUES(?, ?);";
    $i = $con->prepare($sql);

    $nome = $_POST['nome'];
    $datanascimento = $_POST['datanascimento'];

    $i->execute([$nome, $datanascimento]);

    header('Location:listar.php');

}
?>
<h3>Formulário Cadastrar Contato</h3>
<form method="post" action="">
    <label>Nome</label>
    <input type="text" name="nome" placeholder="Nome"/>
    <label>Data Nascimento</label>
    <input type="date" name="datanascimento" placeholder="00/00/2000"/>
    <a href="listar.php">Voltar</a>
    <input type="submit" name="enviar" value="Salvar">
</form>