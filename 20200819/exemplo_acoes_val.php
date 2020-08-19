<!DOCTYPE html>
<html>
    <head>
    <script src="jquery-3.5.1min.js"></script>
        <script>
            //val(): elementos de entrada - INPUT, TEXTAREA
            $(document).ready(function(){
                
                $("input[name='testeVal']").keyup(function() {
                    var valor = $("input[name='testeVal']").val(); 
                    $("#mensagem").html(valor);
                });

                $("#limpar").click(function() {
                    $("input[name='testeVal']").val("");
                });

                
            });
        </script>
    </head>
    <body>
        <div id="mensagem"></div>
        <hr />
        <input type="text" name="testeVal" placeholder="digite aqui.."/>
        <hr />
        <button id="limpar">Limpar TestVal </button>
        <hr />
    </body>
</html>