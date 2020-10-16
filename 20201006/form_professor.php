<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
    </head>
    <body>
        <?php include "cabecalho.php"; ?>
        <fieldset>
        <legend><b>Cadastro Professor</b></legend>
        <form method="post" action="insere_professor.php">
            <input type="text" name="prontuario" placeholder="Prontuario.."><br /><br />
            <input type="text" name="nome" placeholder="Nome.."><br /><br />
            <input type="email" name="email" placeholder="Email.."><br /><br />
            <input type="text" name="formacao" placeholder="Fprmacao Academica.."><br /><br />
            <br />
            <button>Enviar</button>
        </form>
        </fieldset>
    </body>
</html>