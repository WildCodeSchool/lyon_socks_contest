<?php
session_start();
require "../vendor/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;
define('CONSUMER_KEY', 'rpIJUMWFZPYMnezn7Xpq4srev');
define('CONSUMER_SECRET', 'UUVUs96ZlFesGBGrXHIayy6pXGs1LV6w70KVhjtYTQE9nfJj6k');
define('OAUTH_CALLBACK', 'http://127.0.0.1/Projets/lyon_hack_102016_wafa_aymen/src/callback.php');

if (isset($_POST['img-tweet'])){
    $_SESSION['img'] = $_POST['img-tweet'];
}
if (isset($_POST['msg-tweet'])){
    $_SESSION['msg'] = $_POST['msg-tweet'];
}

if (!isset($_SESSION['access_token'])) {
    $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET);
    $request_token = $connection->oauth('oauth/request_token', array('oauth_callback' => OAUTH_CALLBACK));
    $_SESSION['oauth_token'] = $request_token['oauth_token'];
    $_SESSION['oauth_token_secret'] = $request_token['oauth_token_secret'];
    $url = $connection->url('oauth/authorize', array('oauth_token' => $request_token['oauth_token']));

    header("Location:$url");
} else {
    $access_token = $_SESSION['access_token'];
    $connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);
    $connection->setTimeouts(10, 15);
    $user = $connection->get("account/verify_credentials");
    $msg = $_SESSION['msg'];
    $img = $_SESSION['img'];
    $tweetPic = $connection->upload('media/upload', ['media' =>  $img ]);
    $tweet = $connection->post('statuses/update' , ['media_ids' => $tweetPic->media_id, 'status' => $msg ]);
    unset($_SESSION['access_token']);
    header('Location:vote.php');

}