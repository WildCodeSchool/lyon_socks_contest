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

    <link rel="stylesheet" href="../public/css/style.css">

</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-offset-3 col-xs-6">
            <h2>Participez au concours des plus belles chaussettes !</h2>
        </div>
    </div>


            <div class="row imgsockss">
            <form method="post" action="../src/control-vote.php">

<?php
$id = $_GET['id'];
require_once "bdd.php";

                $sql= "select * from guests where id != $id ";
                $query = executeSql(getConnection(),$sql);
                while ($row = $query->fetch_assoc()) {

                   // echo "<div class='col-lg-3 col-md-4 col-xs-6 imgsocks'><a class='thumbnail'><img class='img-responsive' src=\"".( $row['picture_url'])."\"/></a></div>";
                    echo "<div class='col-lg-3 col-md-4 col-xs-6 imgsocks' style='background-image:url(\"".( $row['picture_url'])."\")'></div>";
                }
?>
            </form>
            </div>
        </div>
</body>
</html>