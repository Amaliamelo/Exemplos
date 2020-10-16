<DOCTYPE html>
<html>
    <head>
        <title>Exemplo 1</title>
        <style>div{width:200px;height:200px; border:1px solid;}</style>
        <script src="jquery-3.5.1min.js"></script>
        <script src="funcionarios.js"></script>
        <script>
            $(document).ready(function(){
                $("#btn").click(function(){
                    var f = {
                        "funcionarios":
                        [
                            {"nome":"Ana", "sobrenome":"Silva"},
                            {"nome":"Maria", "sobrenome":"Ribeiro"},
                            {"nome":"José", "sobrenome":"Sanches"},
                        ]
                    };
                    texto = "";
                    $.each(f.funcionarios, function(indice,valor){
                        texto += valor.sobrenome +", "+ valor.nome +".<br/>";
                    });
                    $("#div_receptora").html(texto);
                });
            });
        </script>
    </head>
    <body>
            <h2>Exemplo 1</h2>
            <hr />
            <button id="btn">Preenche Nomes de referencias no padrao ABNT</button>
            <hr />
            <div id="div_receptora"></div>
    </body>
</html