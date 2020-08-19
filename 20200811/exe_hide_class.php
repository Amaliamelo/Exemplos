<!DOCTYPE html>
<html>
    <head>
        <script src="jquery-3.5.1min.js"></script>
        <script>
            $(document).ready(function(){
                $("button.btn_x").click(function(){
                    $(".testes_X").hide();
                });
                $("button.btn_y").click(function(){
                    $(".testes_y").hide();
                });
            });
        </script>
    </head>
    <body>
        <p class="testes_X">Paragrafo 1 - testes X</p>
        <p class="testes_X">Paragrafo 2 - testes X</p>
        <div class="testes_y">Div 1 Testes y</div>
        <div class="testes_y">Div 2 Testes y</div>
        <br/><span class="testes_y">Span 1 Testes y</span>
        <span class="testes_X">Span 2 Testes y</span>
        <br/>
        <img src="https://image.freepik.com/fotos-gratis/conceito-rural-do-destino-do-curso-da-estrada-de-contry-da-paisagem_53876-14122.jpg" class="testes_y"/><hr/>
        <button class="btn_x">Botao 1 X</button>
        <button class="btn_x">Botao 2 X</button>
        <button class="btn_y">Botao 3 Y</button>
    </body>
</html>