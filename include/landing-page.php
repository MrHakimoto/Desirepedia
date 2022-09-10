<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Desirepedia</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <style>
            .land-1{
                position: absolute;
                width: 656px;
                height: 637px;
                left: 236px;
                top: 220px;
            }

            body{
                background-color: #5A2BB0;
            }

            .myText{
                color: white;
                font-style: normal;
                font-weight: 500;
                font-size: 66px;
                line-height: 75px;
            }

            .myText-tt{
                color: white;
                font-style: bold;
                font-weight: 900;
                font-size: 76px;
                line-height: 75px;
            }

            .myButton{
                height: 70px;
                width: 200px;
                color: #5A2BB0;
                border-style: solid;
                border-color: white;
                background-color: white;
                border-radius: 15px;
            }

            .myButton:hover{
                background-color: rgba(255, 255, 255, 0.5);
                color: white;
            }

            .land-2{
                position: absolute;
                width: 706px;
                height: 640px;
                left: 1081px;
                top: 200px;
            }
        </style>
    </head>
    <body>
        <div class="land-1 font-sans">
            <span class="myText-tt">Desirepedia,</span><br>
            <span class="myText">a melhor plataforma para estudar para o enem 2022. Se inscreva e comece já!</span>
            <div>
                <button class="myButton text-xl" style="margin-top: 25px;"><a href="auth">Logar</a></button>
                <button class="myButton text-xl" style="margin-top: 25px; margin-left: 15px;"><a href="auth">Registrar</a></button>
            </div>
        </div>

        <div class="land-2">
            <img src="include/img/gato-desire-alt.png" width="600px" height="600px" style="box-shadow: 10px;">
        </div>
    </body>
</html>