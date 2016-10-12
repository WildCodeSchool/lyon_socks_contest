<?php
// LAZY LOADING
$id = $_GET['id'];
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
    <script src="../public/js/lazyload.js"></script>
    <script src="../public/js/main.js" type="text/javascript">
    </script>
    <link rel="stylesheet" href="../public/css/vote.css">

</head>
<body>
<div class="container-fluid">
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="row">
            <div class="col-xs-offset-2 col-xs-6">
                <h2>Participez au concours des plus belles chaussettes !</h2>
                <h3>Votez pour vos 3 paires de chaussettes préférées.</h3>
                <h3>Vous avez votez pour <strong id="vote-number">0</strong> paires.</h3>
            </div>
            <div class="col-xs-3">
                <form method="post" action="addvote.php?id=<?php echo $id; ?>">
                <input type="hidden" name="vote1" id="vote1" value="">
                <input type="hidden" name="vote2" id="vote2" value="">
                <input type="hidden" name="vote3" id="vote3" value="">
                <input type="submit" class="btn btn-primary" id="go-vote" value="Voter"></input>
            </div>
        </div>
    </div>
</div>



<div class="container-fluid">
    <div class="row imgsockss">

<?php
    require_once "bdd.php";

                    $sql= "select * from guests where id != $id ";
                    $query = executeSql(getConnection(),$sql);
                    while ($row = $query->fetch_assoc()) {

                        echo "<div class='col-xs-offset-1 col-xs-2 imgsocks'><img alt=\"" .$row['id']. "\" class=\"lazy media-object padding2\" data-original=\"" .$row['picture_url']. "\"></div>";
                    } ?>
            </form>

    </div>
</div>
<script>
    $(function() {
        $("img.lazy").lazyload({
            effect : "slideDown"
        });
    });
</script>
</body>
</html>