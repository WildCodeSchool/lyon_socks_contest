

<!DOCTYPE html>
<html>
<head>
    <title>Election des meilleures chaussettes</title>
    <meta charset="utf-8" lang="fr">

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
    <h1>Les plus belles chaussettes de la soirée!</h1>
    <?php
    require_once '../src/bdd.php';
    $sql = "select * from guests order by likes DESC limit 3";
    $req = executeSql(getConnection(),$sql);
    while ($row = $req->fetch_assoc()) {
        echo "<div class='winner'>" .$row['last_name']. "</div><div class='winner'>" .$row['first_name']. "</div><div class='winner'><img src=\"../src/" .$row['picture_url']. "\"/></div>" ;
    }
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-6 col-md-4">

            </div>
        </div>

    </div>


</body>

</html>


