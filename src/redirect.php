<?php
?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>WCS Chaussettes</title>

        <meta name="viewport" content="width=device-width, initial-scale=0.7">


        <!--  JQUERY -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="../css/style.css">

    </head>
    <body class="index">
    <div class="container" id="contest-form">
        <div class="row">
            <img src="../img/wcs-logo1.png" alt="Logo de l'école de développement web Wild Code School" id="logo-wcs"/>
            <h1><strong>Merci d'avoir participé !</strong></h1>
        </div>
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1">
                <a href="../login.php">
                    <button class="btn" id="contest-form-valid-red">Se connecter</button>
                </a>
            </div>
        </div>
        <div class="row" id="hashtags">
            <p><span>#WildCodeSchool</span></p>
        </div>
    </div>
    </body>
    </html>

<?php
if (session_status() === 2 ){
    session_destroy();
}
header('Refresh:2;../login.php');


