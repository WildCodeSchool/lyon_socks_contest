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
    <body class="back-image">
        <div class="container-fluid">
            <div class="row" id="login-form">
                <div class="col-xs-offset-3 col-xs-6">
                    <h2>Merci d'avoir participé !</h2>
                </div>

            </div>
        </div>
        </body>
    </html>

    <?php
    if (session_status() === PHP_SESSION_ACTIVE){
        session_destroy();
    }
    header('Refresh: 2; ../public/login.php');
