

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

    <link rel="stylesheet" href="css/guests.css">
</head>

<body>
<div class="container-fluid">

    <div class="row">
        <h1>Les plus belles chaussettes !</h1>
    </div>

    <div class="row">

        <?php
        require_once 'src/bdd.php';
        $sql = "select * from guests order by likes DESC limit 3";
        $req = executeSql(getConnection(),$sql);
        while ($row = $req->fetch_assoc()) {
            echo
                "<div class='col-md-4'>".
                $row['first_name']. " " .$row['last_name'].
                /*" </br> Twitter :".$row['twitter'].*/
                "   </br>" .$row['likes'].
                "   </br><img class='winner' src='src/" .$row['picture_url']. "'/>".
                "</div>" ;
        }

        ?>
    </div>

    <div class="row">
        <div class="col-xs-offset-1 col-xs-3">
            <p>Nombre de participants :
                <?php
                require_once 'src/bdd.php';
                $sql ="SELECT COUNT(*) as nb_player FROM guests";
                $req = executeSql(getConnection(),$sql);
                $data = $req->fetch_assoc();
                echo $data['nb_player'];
                ?>
        </div>

        <div class="col-xs-offset-2 col-xs-4">
            <p>Nombre de votants :
                <?php
                require_once 'src/bdd.php';
                $sql ="SELECT COUNT(vote)as nb_vote FROM guests WHERE vote = 1";
                $req = executeSql(getConnection(),$sql);
                $data = $req->fetch_assoc();
                echo $data['nb_vote'];
                ?>
            </p>
        </div>
    </div>
</div>

</body>

</html>


