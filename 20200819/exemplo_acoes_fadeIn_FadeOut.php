<!DOCTYPE html>
<html>
    <head>
    <script src="jquery-3.5.1min.js"></script>
        <script>
            $(document).ready(function(){
                
                $("#btnFadeIn").click(function() {
                    $("#mensagem").fadeIn();
                });

                $("#btnFadeOut").click(function() {
                    $("#mensagem").fadeOut();
                });

                
            });
        </script>
    </head>
    <body>
        <div id="mensagem">Mansagem que sera ocutada / mostrada ao clicar nos botões abaixo</div>
        <hr />
        <button id="btnFadeIn">FadeIn</button>
        <button id="btnFadeOut">FadeOut</button>

    </body>
</html>