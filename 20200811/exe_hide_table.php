<!DOCTYPE html>
<html>
    <head>
        <script src="jquery-3.5.1min.js"></script>
        <script>
            $(document).ready(function(){
                $("button").click(function(){
                    $("table").hide();
                });
            });
        </script>
    </head>
    <body>
        <button>Ocultar Tabela</button> <br/><br/>
        <table border="1">
            <tr><th>Coluna 1</th><th>Coluna 2</th></tr>
            <tr><td>Valor 1</td><td>Valor 2</td></tr>
        </table>
    </body>
</html>