<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Calculator</title>

    <!--Custom CSS-->
    <link href="styles/calculator.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="dist/html5shiv.js"></script>
    <![endif]-->

    <!--Icon-->
    <link rel="shortcut icon" href="images/KatlaTeamIcon.ico">
</head>

<body>
    <div id="header-wrapper"></div><!---Header Wrapper-->
    <div class="push-content"></div>
    <audio autoplay="autoplay" id="sound">
        <source src="sounds/ше-пием.mp3" type="audio/mp3" id="music"/>
    </audio>
    <div class="buttons">
        <img src="images/Play.png" alt="play" id="play"/>
        <img src="images/Stop.png" alt="stop" id="stop"/>
    </div>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-12">
                    <div class="well shadow">
                        <h2>Изчисли своята лечебна доза</h2>
						<form method="post" action="calculator.php">
                            <img src="images/no-water.jpg" alt="image" id="image" class="img-circle small-size"/>
							<div>
                                <label  for="bug" class="col-xs-8 col-xs-offset-2">Колко бъга имаше днес?</label>
                                <input type="text" name="number1" id="bug">
							</div>
                            <div>
                                <label  for="hour" class="col-xs-8 col-xs-offset-2">Колко часа коди</label>
                                <input type="text" name="number2" id="hour">
                            </div>
							<div>
                                <label  for="opt" class="margin-bottom">Избери си лекарство</label>
							</div>

								<select name="number3" id="opt" onchange="setImg(this)">
                                    <option value=""></option>
									<option value="2">
                                        Бира
                                    </option>
									<option value="1">
                                        Ракия
                                    </option>
								</select>
							</p>
							<input type="submit" value="Judge">
				        </form>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </main>
    <footer class="site-footer">
        <div class="col-xs-12 visible-xs xs-menu">
            <span><a href="#header-wrapper">Към началото</a></span>
        </div>
        <div class="col-lg-5 footer-menu">
            <div class="
                        col-lg-8 col-lg-offset-1
                        col-md-7 col-sm-6 col-xs-7">
                <span><a href="index.html">Начало</a></span>
            </div>
            <div class="col-lg-8 col-lg-offset-1
                        col-md-7 col-sm-6 col-xs-7">
                <span><a href="">Минутки за реклама</a></span>
            </div>
            <div class="col-lg-8 col-lg-offset-1
                        col-md-7 col-sm-6 col-xs-7">
                <span><a href="i-like-you.html">I лайк you</a></span>
            </div>
            <div class="col-lg-8 col-lg-offset-1
                        col-md-7 col-sm-6 col-xs-7">
                <span><a href="validation.html">Валидация</a></span>
            </div>
            <div class="col-lg-8 col-lg-offset-1
                        col-md-7 col-sm-6 col-xs-7">
                <span><a href="#">За всеки по нещо</a></span>
            </div>
        </div>
    </footer>

    <!--Scripts-->
    <script src="scripts/jquery-1.11.1.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#header-wrapper').load('header-template.html');
        });
    </script>
    <script type="text/javascript">
        function setImg(select){
            var imageBox = document.getElementById("image");
            var music = document.getElementById("music");
            var sound = document.getElementById("sound");
            if(select.value == "2"){
                imageBox.removeAttribute("src");
                imageBox.setAttribute("src", "images/beer-smile.jpg");
                music.src = "sounds/бира.mp3";
                sound.load();
            } else{
                imageBox.removeAttribute("src");
                imageBox.setAttribute("src", "images/ракия.png");
                music.src = "sounds/ракийчице.mp3";
                sound.load();
            }
        }
    </script>
    <script type="text/javascript">
        window.onload = function(){
            var stop = document.getElementById('stop');
            var play = document.getElementById('play');
            var sound = document.getElementById('sound');
            stop.addEventListener('click', function() {
                sound.pause();}, false);
            play.addEventListener('click', function(){
                sound.play();}, false)
        };
    </script>
</body>

</html>
<?php
$num1 = $_POST['number1'];
$num2 = $_POST['number2'];
$num3 = $_POST['number3'];
$rakiq = $num1 + $num2;
if ($num1 == 0 && $num2 == 0 ) {
    echo '<div>'.'Не се нуждаете от лекарство'.'</div>';
} else if ($num1 > 0  && $num2 > 0){
    if ($num3 == "1") {
        echo '<div>'.'Нуждаете се от '.$rakiq.' '."ракии на екс".'</div>';
    }
    if ($num3 == "2") {
        echo '<div>'.'Нуждаете се от '.$num1*$num2.' '."Бирички".'</div>';
    }
    
}
?>
