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
<div class="container home" style="margin-top: 50px; padding: 45px 20px;">
    <div class="row">
        <h1><strong>Les plus belles chaussettes !</strong></h1>
    </div>

    <div class="row">
        <?php
        require_once 'src/bdd.php';
        $sql = "select * from guests order by RAND() DESC limit 12";
        $req = executeSql(getConnection(),$sql);
        while ($row = $req->fetch_assoc()) {
            echo
                "<div class='col-md-2' style='margin-top: 20px;'>".
                "<span class='name'>" . $row['first_name']. " " .$row['last_name']. "</span>".
                /*" </br> Twitter :".$row['twitter'].*/
                "   </br>" .$row['likes'].
                "   </br><img class='winner' src='src/" .$row['picture_url']. "'/>".
                "</div>" ;
        }

        ?>
    </div>

    <div class="row" style="margin-top: 30px;">
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

    <div class="row" id="hashtags">
        <p><span>#WildCodeSchool</span></p>
    </div>
</div>

<script type="text/javascript">
    setTimeout(" window.location.reload(true);", 30*1000);

</script>

</body>
</html>
