<?php

if (session_status() === 2){
    session_destroy();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Election des meilleures chaussettes</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!--  JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css">

</head>

<body class="index">
<div class="container" id="contest-form">
    <div class="row">
        <img src="../public/img/wcs-logo1.png" alt="Logo de l'école de développement web Wild Code School" id="logo-wcs" style="width: 100px; margin-top: -65px;"/>
        <h1 style="font-size: 25px; margin-top: -10px;"><strong>Votez pour les plus belles chaussettes!</strong></h1>
    </div>
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 home">
            <form method="post" action="../src/control-id.php">
                <p class="error">
                    <?php
                    if(isset($_GET['error'])) {
                        switch ($_GET['error']) {
                            case 1:
                                echo "Vous n'êtes pas enregistrés. Allez vite faire photographier vos superbes chaussettes auprès des wilders!";
                                break;
                            case 2:
                                echo "Vous avez oublié de remplir un champ. Recommencez!";
                                break;
                            case 3:
                                echo "Désolé , vous avez déja voté ! ";
                                break;
                            case 4:
                                echo "Il faut se connecter pour voter !";
                                break;
                        }
                    }
                    ?>
                </p>
                <input class="form-info" type="text" name="name" placeholder="Votre prénom"style="margin-top: 5px;">
                <input class="form-info" type="text" name="last_name" placeholder="Votre nom">
                <div>
                    <button type="submit" class="btn" id="contest-form-valid">Valider</button>
                </div>
            </form>
        </div>
        <div class="row">
            <a class="btn btn-default" href="index.php" role="button" style="width: 100%;">Participer</a>
        </div>
        <div class="row" id="hashtags">
            <p><span>#WildCodeSchool</span></p>
        </div>
    </div>
</div>

</body>
</html>
