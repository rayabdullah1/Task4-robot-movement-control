<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Movement Control</title>


</head>

<body>

    <div class="container">

        <span class="col">
            <img id="leftImg" src="images/left.png" alt="left">
        </span>

        <span class="col">
            <div>
                <img id="upImg" src="images/up.png" alt="forward">
                <img id="stopImg" src="images/stop.png" alt="stop">
                <img id="downImg" src="images/down.png" alt="backward">
            </div>
        </span>

        <span class="col">
            <img id="rightImg" src="images/right.png" alt="right">
        </span>


    </div>


    <script>

        var leftImage = document.getElementById("leftImg");
        var upImage = document.getElementById("upImg");
        var downImage = document.getElementById("downImg");
        var rightImage = document.getElementById("rightImg");
        var stopImage = document.getElementById("stopImg");
        var clickStarted;



        
        leftImage.addEventListener("mousedown", function (evt) {
            clickStarted = new Date();
            sendMovement("left");
        });




        upImage.addEventListener("mousedown", function (evt) {
            clickStarted = new Date();
            sendMovement("forward");
        });

    


        downImage.addEventListener("mousedown", function (evt) {
            clickStarted = new Date();
            sendMovement("backward");
        });




        rightImage.addEventListener("mousedown", function (evt) { 
            clickStarted = new Date();
            sendMovement("right");
        });




        stopImage.addEventListener("mousedown", function (evt) { 
            clickStarted = new Date();
            sendMovement("stop");
        });




        function sendMovement(direction) { 
            xmlhttp = new XMLHttpRequest();
            xmlhttp.open("POST", "sendmov.php", true);
            xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xmlhttp.send("direction=" + direction);
        }
        


    </script>
       
</body>

</html>