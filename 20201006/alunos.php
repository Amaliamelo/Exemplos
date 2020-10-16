<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <div id="filtro">
            <b>Filtrar alunos por:</b><br/>
            <form method="POST" action="alunos.php">
            Sexo:
            <input type="radio" name="sexo" value="m"/>Masc.
            <input type="radio" name="sexo" value="f"/>Fem. <br /> <br/>
            <input type="text" name="nome" placeholder="Procurar por nome..."/><br/><br/>
            Nascidos a partir de: <input type="date" name="data"/>
        </div>
        
        <hr /><button>Filtrar</button>
        <hr /> <hr />

        <?php
    
    include "conexao.php";

    $select ="SELECT * FROM aluno";

    if(!empty($_POST)){
        $select.=" WHERE (1=1) ";
        if(isset($_POST["sexo"])){
            $sexo = $_POST["sexo"];
            $select.="AND sexo = '$sexo'";
        }
        if($_POST["nome"]!=""){
            $nome = $_POST["nome"];
            $select.=" AND nome like '%$nome%' ";
        }
        if(isset($_POST["data"])){
            $data = $_POST["data"];
            $select.=" AND data_nascimento >= '$data' ";
        }
    }

    $select.= " ORDER BY nome";

    $resultado = mysqli_query($conexao,$select)
        or die(mysqli_error($conexao));
    
    while($linha=mysqli_fetch_assoc($resultado)){
        echo "Prontuario aluno: ".$linha["prontuario"]."<br />";
        echo "Nome  aluno: ".$linha["nome"]."<br />";
        echo "Email aluno: ".$linha["email"]."<br />";
        echo "Data de nascimento aluno: ".$linha["data_nascimento"]."<br />";
        echo "Sexo aluno: ".$linha["sexo"]."<br />";
        echo "<hr />";
    }
?>
    </body>
</html>