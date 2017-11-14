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

    <link rel="stylesheet" href="css/style.css">

</head>
<body class="index">
<div class="container" id="contest-form">
    <div class="row">
        <img src="img/wcs-logo1.png" alt="Logo de l'école de développement web Wild Code School" id="logo-wcs"/>
        <h1><strong>Participez au concours des plus belles chaussettes!</strong></h1>
    </div>
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 home">
            <form method="post" action="src/recording.php" enctype="multipart/form-data">
                <input class="form-info" type="text" name="name" placeholder="Votre prénom" style="margin-top: 5px;">
                <input class="form-info" type="text" name="last_name" placeholder="Votre nom">
                <input class="form-info"  type="text" name="email" placeholder="Votre email">

                <div>
                    <label for="Input" id="sock-upload">Envoyez la photo de vos chaussettes</label>
                    <input type="file"  accept="image/*" class="form-input-text" name="picture" capture="camera" id="upload">
                </div>
                <button type="submit" class="btn" id="contest-form-valid" style="margin-top: 15px;">Valider</button>
            </form>
            <?php if (isset($_GET['error'])) {
                if ($_GET['error'] = 1){ echo "Il y a eu une erreur, réessayez."; }
            } ?>
        </div>
    </div>

    <div class="row">
        <a class="btn btn-default" href="login.php" role="button" style="width: 100%;">Voter</a>
    </div>

    <div class="row" id="hashtags">
        <p><span>#WildCodeSchool</span></p>
    </div>
</div>
</body>
</html>
