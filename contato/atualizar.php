<?php
include_once '../config/conectar.php';

#### Carregar ####
$id = $_GET['id'];

$sqlSelect = 'SELECT * FROM contato WHERE id = ?;';

$s = $con->prepare($sqlSelect);
$s->execute([$id]);

$objeto = $s->fetch(PDO::FETCH_OBJ);

if (!empty($_POST['btnAtualizar'])) {

    $nome = $_POST['nome'];
    $datanascimento = $_POST['datanascimento'];

    $sqlUpdate = 'UPDATE contato SET nome = ?, datanascimento = ? WHERE id = ?;';

    $u = $con->prepare($sqlUpdate);
    $u->execute(array($nome, $datanascimento, $id));

    header("Location: listar.php");
}
?>
<h3>Formulário Atualizar Contato</h3>
<form method="post" action="">
    <label>Nome</label>
    <input type="text" name="nome" value="<?php echo $objeto->nome; ?>" placeholder="nome"/>
    <label>Data Nascimento</label>
    <input type="date" name="datanascimento" value="<?php echo $objeto->datanascimento; ?>" placeholder="e-mail"/>
    <a href="listar.php">Voltar</a>
    <input type="submit" name="btnAtualizar" value="Atualizar">
</form>