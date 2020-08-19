<!DOCTYPE html>
<html>
    <head>
    <script src="jquery-3.5.1min.js"></script>
        <script>
            //val(): elementos de entrada - INPUT, TEXTAREA
            $(document).ready(function(){
                
                $("#btnShow").click(function() {
                    $("#mensagem").show();
                });

                $("#btnHide").click(function() {
                    $("#mensagem").hide();
                });

                
            });
        </script>
    </head>
    <body>
        <div id="mensagem">Mansagem que sera ocutada / mostrada ao clicar nos botões abaixo</div>
        <hr />
        <button id="btnShow">Show</button>
        <button id="btnHide">Hide</button>

    </body>
</html>