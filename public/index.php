<?php
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>WCS Chaussettes</title>

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
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-offset-3 col-xs-6">
            <h2>Participez au concours des plus belles chaussettes !</h2>
        </div>
        <div class="col-xs-offset-4 col-xs-4">
            <form method="post" action="../src/recording.php">
                <div class="form-group">
                    <label for="Input">Votre Nom</label>
                    <input type="text" class="form-input-text" name="last_name">
                </div>
                <div class="form-group">
                    <label for="Input">Votre Prénom</label>
                    <input type="text" class="form-input-text" name="name">
                </div>
                <div class="form-group">
                    <label for="Input">Vos chaussettes !</label>
                    <input type="file"  accept="image/*" class="form-input-text" name="picture" capture="camera">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Valider</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
