<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
    </head>
    <body>
        <?php include "cabecalho.php"; ?>
        <fieldset>
        <legend><b>Cadastro Aluno</b></legend>
        <form method="post" action="insere_aluno.php">
            <input type="text" name="prontuario" placeholder="Prontuario.."><br /><br />
            <input type="text" name="nome" placeholder="Nome.."><br /><br />
            <input type="email" name="email" placeholder="Email.."><br /><br />
            <b>Data de Nascimento:</b>
            <input type="date" name="data_nascimento"><br /><br />
            <b>Sexo:</b>
            <input type="radio" name="sexo" value="m"/>Masc.
            <input type="radio" name="sexo" value="f"/>Fem. <br /> <br />           
            <b>Quais Disciplinas o aluno irá cursar?</b><br /><br />
            <?php
                include "conexao.php";
                $select="SELECT * FROM disciplina ORDER BY nome";
                $resultado = mysqli_query($conexao,$select)
                    or die("Erro no sistema. Contacte o adimin");
                while($linha=mysqli_fetch_assoc($resultado)){
                    echo"<input type='checkbox' name='disciplina' value='".$linha["Id_disciplina"]."'/>'".$linha["nome"]."'<br /><br />";
                }
            ?>
            <br />
            <button>Enviar</button>
        </form>
        </fieldset>
    </body>
</html>