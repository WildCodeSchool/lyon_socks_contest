<?php
session_start();
if (!isset($_SESSION['id'])) {
    header('Location:../public/login.php?error=4');
}
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
            <div class="col-xs-offset-1 col-xs-7">
                <h2>Participez au concours des plus belles chaussettes !</h2>
                <h3>Votez pour vos 3 paires de chaussettes préférées.</h3>
                <h3>Vote : <strong id="vote-number">0</strong></h3>
            </div>
            <div class="col-xs-3">
                <form method="post" action="addvote.php?id=<?php echo $_SESSION['id']; ?>">
                    <input type="hidden" name="vote1" id="vote1" value="">
                    <input type="hidden" name="vote2" id="vote2" value="">
                    <input type="hidden" name="vote3" id="vote3" value="">
                    <input type="submit" class="btn btn-primary" id="go-vote" value="Voter">
                </form>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row imgsockss">

<?php
    require_once "bdd.php";
$id = $_SESSION['id'];

                    $sql= "select * from guests where id != $id ";
                    $query = executeSql(getConnection(),$sql);
                    while ($row = $query->fetch_assoc()) {

                        echo "<div class='col-xs-offset-1 col-xs-10 col-md-offset-1 col-md-2 imgsocks'><img alt=\"" .$row['id']. "\" class=\"lazy media-object padding2\" data-original=\"" .$row['picture_url']. "\"><a data-toggle=\"modal\" data-target=\"#exampleModal\" data-whatever=\"@getbootstrap\" class=\"twitter-button\" >Tweet</a></div>";
                    } ?>


    </div>
</div>
<div class="bd-example">
    <a data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Tweet</a>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <div class="modal-body">
                    <form method="post" action="twitter.php" >
                        <div class="form-group">
                            <input id="img-tweet" type="hidden" name="img-tweet" value="">
                            <label for="recipient-name" class="form-control-label">Votre Tweet :</label>
                            <input type="text-area" class="form-control" id="recipient-name" name="msg-tweet"
                                   value="#LyonIsWild .. j'ai voté pour cette magnifique paire de chaussette.">
                            <input type="submit" class="btn btn-primary" value="Tweeter">

                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>


                </div>
            </div>
        </div>
    </div>
</div>
<!--<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>-->
<script>
    $(function() {
        $("img.lazy").lazyload({
            effect : "slideDown"
        });
    });
</script>
</body>
</html>


