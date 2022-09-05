<!DOCTYPE html>
<html lang="uk">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>Бронювання кампутерів</title>

        <?php
        
        ?> 

        <style>

            @font-face {
                font-family: "e-Ukraine";
                src: url(e-Ukraine/e-Ukraine-Bold.otf);
                src: url(e-Ukraine/e-Ukraine-Light.otf);
                src: url(e-Ukraine/e-Ukraine-Medium.otf);
                src: url(e-Ukraine/e-Ukraine-Regular.otf);
                src: url(e-Ukraine/e-Ukraine-Thin.otf);
                src: url(e-Ukraine/e-Ukraine-UltraLight.otf);
                src: url(e-Ukraine/e-UkraineHead-Bold.otf);
                src: url(e-Ukraine/e-UkraineHead-Light.otf);
                src: url(e-Ukraine/e-UkraineHead-LOGO.otf);
                src: url(e-Ukraine/e-UkraineHead-Medium.otf);
                src: url(e-Ukraine/e-UkraineHead-Regular.otf);
                src: url(e-Ukraine/e-UkraineHead-Thin.otf);
                src: url(e-Ukraine/e-UkraineHead-UltraLight.otf);
            }

            body {
                background-color: #2b2b2b;
            }

            .computer {
                margin-top: 6%;
            }

            #computerTable {
                margin: auto;
                border-spacing: 32px;
            }

            .title {
                background-image: linear-gradient(60deg,#ff6a3f,#df1238);
                height: 12%;
                width: 100%;
                font-family: 'e-Ukraine';
                font-weight: 700;
                font-size: 1.5rem;
                line-height: 1.3;
                letter-spacing: 0em;
                text-align: center;
                color: white;
                padding-top: 4rem;
                padding-bottom: 4rem;
                border-radius: 25px;
            }

            .showcase {
                margin: auto;
                width: 100%;
                margin-bottom: -6.6%;
                margin-top: -0.8%;
            }

            #showcaseTable {
                border-spacing: 32px;
                margin: auto;
                width: 100%;
                font-family: 'e-Ukraine';
                font-weight: 350;
                font-size: 0.9rem;
                line-height: 1;
                letter-spacing: 0em;
                text-align: center;
                color: white;
            }

            #takenComputer1 {
                opacity: 0.2;
            }

            #takenComputer2 {
                opacity: 0.2;
            }

            #takenComputer3 {
                opacity: 0.2;
            }

            #takenComputer4 {
                opacity: 0.2;
            }

            #takenComputer5 {
                opacity: 0.2;
            }

            #showcaseTaken {
                opacity: 0.2;
            }

            #freeComputer1 {
                animation: pulse 2s infinite;
                animation-play-state: running;
            }

            #freeComputer2 {
                animation: pulse 2s infinite;
                animation-play-state: running;
            }

            #freeComputer3 {
                animation: pulse 2s infinite;
                animation-play-state: running;
            }

            #freeComputer4 {
                animation: pulse 2s infinite;
                animation-play-state: running;
            }

            #freeComputer5 {
                animation: pulse 2s infinite;
                animation-play-state: running;
            }

            #showcaseActive {
                animation: pulse 2s infinite;
                animation-play-state: running;
            }

            @keyframes pulse {
                0% {
                    transform: scale(1);
                }
                50% {
                    transform: scale(1.2);
                }
                100% {
                    transform: scale(1);
                }
            }

            .customButton {
                background-image: linear-gradient(60deg,#ff6a3f,#df1238);
                border-radius: 25px;
                border-style: none;
                height: 64px;
                width: 128px;
                font-family: 'e-Ukraine';
                font-weight: 350;
                font-size: 0.9rem;
                line-height: 1;
                letter-spacing: 0em;
                text-align: center;
                color: white;
            }

            .customButton:hover {
                background-image: linear-gradient(60deg, #ff5324,#dd052d);
            }

            .customButton:active {
                transform: translateY(1px);
            }

            @media only screen and (max-width: 910px){
                
                .computer table, .computer thead, .computer tbody, .computer th, .computer td, .computer tr {
                    display: block;
                }

                #computerTable tr {
                    border: none;
                }

                #computerTable td {
                    border: none;
                    position: relative;
                    margin: auto;
                    width: 22%;
                }

                #computerTable td:before {
                    position: absolute;
                }

            }

        </style>

        <script>

            function animate1() {
                let x = document.getElementById("freeComputer1");
                if(x.style.animationPlayState == "paused") x.style.animationPlayState = "running";
                else x.style.animationPlayState = "paused";
            }

            function animate2() {
                let x = document.getElementById("freeComputer2");
                if(x.style.animationPlayState == "paused") x.style.animationPlayState = "running";
                else x.style.animationPlayState = "paused";
            }

            function animate3() {
                let x = document.getElementById("freeComputer3");
                if(x.style.animationPlayState == "paused") x.style.animationPlayState = "running";
                else x.style.animationPlayState = "paused";
            }

            function animate4() {
                let x = document.getElementById("freeComputer4");
                if(x.style.animationPlayState == "paused") x.style.animationPlayState = "running";
                else x.style.animationPlayState = "paused";
            }

            function animate5() {
                let x = document.getElementById("freeComputer5");
                if(x.style.animationPlayState == "paused") x.style.animationPlayState = "running";
                else x.style.animationPlayState = "paused";
            }

        </script>

      </head>

      <body>

        <header>

        <div class="title">
            <h1>Бронювання комп'ютерів бібліотеки</h1>
        </div>

      </header>

        <div class="showcase">
            <table id="showcaseTable">
                <tr>
                    <td><img src="computer.png", id = "showcaseFree", width="64", height="64"></td>
                    <td><img src="computer.png", id = "showcaseTaken", width="64", height="64"></td>
                    <td><img src="computer.png", id = "showcaseActive", width="64", height="64"></td>
                </tr>
                <tr>
                    <td>Вільний комп'ютер</td>
                    <td>Зайнятий комп'ютер</td>
                    <td>Вибраний комп'ютер</td>
                </tr>
            </table>
        </div>

        <div class="computer">

            <table id="computerTable">
                <tr>
                    <td><img src="computer.png", id = "freeComputer1", onclick="animate1()", width="128", height="128"></td>
                    <td><img src="computer.png", id = "takenComputer2", width="128", height="128"></td>
                    <td><img src="computer.png", id = "takenComputer3", width="128", height="128"></td>
                    <td><img src="computer.png", id = "freeComputer4", onclick="animate4()", width="128", height="128"></td>
                    <td><img src="computer.png", id = "freeComputer5", onclick="animate5()", width="128", height="128"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td class="customButtonTd"><button class="customButton">Забронювати</button></td>
                </tr>
                </table>

            </div>

        </body>

</html>