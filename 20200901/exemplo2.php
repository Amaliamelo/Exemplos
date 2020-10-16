<DOCTYPE html>
<html>
    <head>
        <title>Exemplo 2</title>
        <style>div{width:200px;height:200px; border:1px solid;}</style>
        <script src="jquery-3.5.1min.js"></script>
        <script>
            $(document).ready(function(){
                $("#btn").click(function(){
                    $.get("funcionarios.php",function(f){
                        texto = "";
                        $.each(f.funcionario, function(indice,valor){
                            texto += valor.sobrenome +", "+ valor.nome +".<br/>";
                        });
                        $("#div_receptora").html(texto);
                    });
                });
            });
        </script>
    </head>
    <body>
            <h2>Exemplo 2</h2>
            <hr />
            <button id="btn">Preenche Nomes de referencias no padrao ABNT</button>
            <hr />
            <div id="div_receptora"></div>
    </body>
</html