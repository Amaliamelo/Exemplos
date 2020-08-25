<DOCTYPE html>
<html>
    <head>
        <title>Exemplo 1</title>
        <style>
            div{
                width:200px;
                height:200px;
                border:1px solid;
            }
        </style>
        <script src="jquery-3.5.1min.js"></script>
        <script>
            $(document).ready(function(){
                $("#btn").click(function(){
                    $.get("texto.txt", function(m){
                        $("#div_receptora").html(m);
                    });
                });
            });
        </script>
    </head>
    <body>
            <h2>Exemplo 1</h2>
            <hr />
            <button id="btn">Botão de rquisição Assincrona</button>
            <hr />
            <div id="div_receptora"></div>
    </body>
</html