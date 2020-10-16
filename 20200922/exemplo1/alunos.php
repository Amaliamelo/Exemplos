<?php
    
    include "conexao.php";

    $select ="SELECT * FROM aluno ORDER BY nome";

    //onde acontece a comunicação
    $resultado = mysqli_query($conexao,$select);

    //print_r($resultado);

    //armazena como vetor na variavel linha
    while($linha=mysqli_fetch_assoc($resultado)){
        echo "Prontuario aluno: ".$linha["prontuario"]."<br />";
        echo "Nome  aluno: ".$linha["nome"]."<br />";
        echo "Email aluno: ".$linha["email"]."<br />";
        echo "Data de nascimento aluno: ".$linha["data_nascimento"]."<br />";
        echo "Sexo aluno: ".$linha["sexo"]."<br />";
        echo "<hr />";
    }
?>