<!DOCTYPE html>
<html>
    <head>
        <script src="jquery-3.5.1min.js"></script>
        <script>
            $(document).ready(function(){
                $("button").click(function(){
                    $("p").hide();
                });
            });
        </script>
    </head>
    <body>
        <h2> Cabecalho(nao vai ser alterado)</h2>
            <p> Paragrafo 1 (vai sumir) </p>
            <p id="teste"> Paragrafo 2 (vai sumir tambem)</p>
            <button>Clique aqui para esconder os paragrafos</button> 
    </body>
</html>