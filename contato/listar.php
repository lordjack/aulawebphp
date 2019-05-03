<?php
include '../config/conectar.php';

?>
<a href="../index.php">Voltar</a><br><br>
<a href="inserir.php">Adicionar</a><br><br>

<table>
    <tr>
        <th>#</th>
        <th>Nome:</th>
        <th>Data Nascimento:</th>
        <th>Ações</th>
    </tr>
    <?php
    $sql = 'SELECT * FROM contato order by id desc;';
    $s = $con->prepare($sql);
    $s->execute();

    $rs = $s->fetchAll(PDO::FETCH_OBJ);

    foreach ($rs as $objeto) {
        ?>
        <tr>
            <td><?php echo $objeto->id; ?></td>
            <td><?php echo $objeto->nome; ?></td>
            <td><?php echo $objeto->datanascimento; ?></td>
            <td>
                <a href="atualizar.php?id=<?php echo $objeto->id; ?>">Editar</a>
                <a href="remover.php?id=<?php echo $objeto->id; ?>"
                   onclick="return confirm('Deseja deletar?');">Deletar</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>