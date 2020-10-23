<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
    </head>
    <body>
    <?php
        include "cabecalho.php";
        include "conexao.php";

        
        $prontuario= $_POST["prontuario"];
        $nome= $_POST["nome"];
        $email= $_POST["email"];
        $data_nascimento=$_POST["data_nascimento"];
        $sexo=$_POST["sexo"];
        $disciplinas=$_POST["disciplina"];

        $insert =" INSERT INTO aluno (
                                    prontuario,
                                    nome,
                                    email,
                                    data_nascimento,
                                    sexo
                                )
                                VALUES(
                                    '$prontuario',
                                    '$nome',
                                    '$email',
                                    '$data_nascimento',
                                    '$sexo'
                                )";
        mysqli_query($conexao,$insert) or
                                die(mysqli_error($conexao));
        echo"Aluno inserido com sucesso!";

        
        foreach($disciplinas as $disciplina){
               echo $disciplina; 
            /*$insertD =" INSERT INTO aluno_cursa_disciplina (
                                id_disciplina,
                                id_aluno
                            )
                            VALUES(
                                '$disciplina',
                                '$prontuario'
                            )";
            mysqli_query($conexao,$insertD) or
            die(mysqli_error($conexao));*/
        }
       
        //echo"Disciplinas e alunos inserido com sucesso!";

    ?>
    </body>
</html>