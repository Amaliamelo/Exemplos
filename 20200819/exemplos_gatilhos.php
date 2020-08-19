<!DOCTYPE html>
<html>
    <head>
    <script src="jquery-3.5.1min.js"></script>
        <script>
            $(document).ready(function(){
                $("#btn1").click(function() {
                    $("#mensagem").html("1 clique");   
                });

                $("#btn2").dblclick(function() {
                    $("#mensagem").html("duplo clique");   
                });

                $("#btn3").mouseenter(function(){
                    $("#mensagem").html("MouseEnter");   
                });

                $("#btn4").mouseleave(function() {
                    $("#mensagem").html("MouseLeave");   
                });

                $("#btn5").mousedown(function(){
                    $("#mensagem").html("MouseDown");   
                });

                $("#btn6").mouseup(function(){
                    $("#mensagem").html("MouseUP");   
                });

                $("#input1").focus(function(){
                    $("#mensagem").html("Focus");   
                });

                $("#input2").blur(function(){
                    $("#mensagem").html("Blur");   
                });

                $("a").focus(function(){
                    $("#mensagem").html("Focus no link");   
                });
            });
        </script>
    </head>
    <body>
        <div id="mensagem"></div>
        <hr />
        <button id="btn1"> Gatilho "click" </button>
        <hr />
        <button id="btn2"> Gatilho "double click" </button>
        <hr />
        <button id="btn3"> Gatilho "MouseEnter" </button>
        <hr />
        <button id="btn4"> Gatilho "MouseLeave" </button>
        <hr />
        <button id="btn5"> Gatilho MouseDown" </button>
        <hr />
        <button id="btn6"> Gatilho "MouseUP" </button>
        <hr />
        <input tyoe="text" id="input1" palceholder = 'Gatilho "Focus"'/>
        <hr />
        <input tyoe="text" id="input2" palceholder = 'Gatilho "Blur"'/>
        <input tyoe="text" id="teste" palceholder = 'Elemento para testar blur por tb...'/>
        <hr />
        <a href="#">Link para testar focus</a>
    </body>
</html>