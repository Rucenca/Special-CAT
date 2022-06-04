<?php
// Start session
if (!session_id())
{
    session_start();
}

// Include Github client library
require_once 'Github_OAuth_Client.php';

/*
 * Configuration and setup GitHub API
*/
$clientID = '2275b30141a282e17b53';
$clientSecret = '20c039b6fe714707aed43620929cbdd9d2a5e556';
$redirectURL = 'http://localhost/specialcat/github-login';
// $redirectURL     = 'https://www.codexworld.com/github-login/';
$gitClient = new Github_OAuth_Client(array(
    'client_id' => $clientID,
    'client_secret' => $clientSecret,
    'redirect_uri' => $redirectURL,
));

// Try to get the access token
if (isset($_SESSION['access_token']))
{
    $accessToken = $_SESSION['access_token'];
}

