<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
    </head>
    <body>
    <?php include "cabecalho.php"; ?>
        <fieldset>
        <legend><b>Cadastro Disciplina</b></legend>
        <form method="post" action="insere_disciplina.php">
            <input type="text" name="nome" placeholder="Nome da Disciplina.."><br />
            <br />
            <textarea name="descricao" placeholder="Descricao da disciplina.."></textarea><br />
            <br />
            <?php
                include "conexao.php";
                $select="SELECT * FROM professor ORDER BY nome";
                $resultado = mysqli_query($conexao,$select)
                    or die("Erro no sistema. Contacte o adimin");
                echo"<select name='cod_professor'>";
                echo"<option label='::SELECIONE UM PROFESSOR::' required></option>";
                while($linha=mysqli_fetch_assoc($resultado)){
                    echo"<option value='".$linha["prontuario"]."'>".$linha["nome"]."</option>";
                }
                echo"</select>";
            ?>
            
            <br />
            <button>Enviar</button>
        </form>
        </fieldset>

    </body>
</html>