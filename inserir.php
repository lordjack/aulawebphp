<?php
include_once './conexao.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if (!empty($_POST['salvar'])) {
            $comando = "INSERT INTO agenda.contato(nome,datanascimento)
                     VALUES (?, ?);";

            $nome = $_POST['nome'];
            $datanascimento = $_POST['datanascimento'];
            
            $s = $con->prepare($comando);
            
            $s->execute( array($nome, $datanascimento) );
        }
        ?>
        <form method="post" action="">
            <label>Nome</label>
            <input type="text" name="nome">

            <label>Data Nascimento</label>
            <input type="date" name="datanascimento">

            <input type="submit" name="salvar" value="Salvar">
        </form>

    </body>
</html>
