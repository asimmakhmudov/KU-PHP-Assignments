<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    @font-face {
        font-family: clock;
        src: url(digital-7.ttf);
    }

    body {
        background-color: #242424;
        color: #fff;
        font-family: clock;
        font-size: 50px;
        text-align: center;
        height: 100vh;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .container {
        width: 550px;
        height: 320px;
        border-radius: 30px 30px 0 0;
        display: flex;
        justify-content: center;
        align-items: center;
        background: blue;
        background: #c4c4c4;
    }

    .cont {
        background: #16191E;
        width: 800px;
        height: 100px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #clock {
        font-family: clock;
        font-size: 60px;
        width: 400px;
        height: 200px;
        border: 1px solid gray;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #1c1c1c;
    }

    .alarmcont {
        display: flex;
        justify-content: space-around;
        align-items: center;
        height: 100%;
        width: 60%;
    }

    #alarm {
        font-family: clock;
        font-size: 30px;
        width: 150px;
        height: 60px;
        border: 1px solid gray;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #1c1c1c;
        color: #fff;
    }

    #setAlarm {
        font-family: clock;
        font-size: 20px;
        width: 80px;
        height: 60px;
        border: 1px solid gray;
        display: flex;
        justify-content: center;
        align-items: center;
        background: green;
        color: #fff;
        cursor: pointer;
    }
</style>

<body>
    <script>
        $(document).ready(function() {
            setInterval(function() {
                $("#clock").load("time.php");
            }, 1000);
        });

        function setAlarm() {
            var audio = new Audio('./sound.mp3');
            setInterval(function() {
                var clock = $("#clock").text().split(":").slice(0, 2);
                var alarm = $("#alarm").val().split(":");
                if (clock[0] == alarm[0] && clock[1] == alarm[1]) {
                    $("#clock").css("background-color", "red");
                    audio.play();
                } else {
                    $("#clock").css("background-color", "black");
                    audio.pause();
                }
                console.log(clock);
                console.log(alarm);
            }, 1000);
        }
    </script>

    <div class="container">
        <div id="clock">
            00 : 00 : 00
        </div>
    </div>
    <div class="cont">
        <div class="alarmcont">
            <h4>Alarm</h4>
            <input type="time" name="alarm" id="alarm">
            <button id="setAlarm" onclick="setAlarm()">Set</button>
        </div>
    </div>

</body>

</html>