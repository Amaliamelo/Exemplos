<!DOCTYPE html>
<html>
    <head>
    <script src="jquery-3.5.1min.js"></script>
        <script>
        // html() elementos que não são de entrada - DIV, TABLE
            $(document).ready(function(){
                $("#btn1").click(function() {
                    var texto = $("#mensagem").html(); 
                    alert(texto);  
                });

                $("#btn2").click(function() {
                    var texto ="<b> Mudando o texto da div e aplicando negrito</b>";
                    $("#mensagem").html(texto);   
                });

                
            });
        </script>
    </head>
    <body>
        <div id="mensagem">Texto da Div</div>
        <hr />
        <button id="btn1"> Acionar acao HMT sem Parametro </button>
        <hr />
        <button id="btn2"> Acionar acao HTML com Parametro String </button>
        <hr />
    </body>
</html>