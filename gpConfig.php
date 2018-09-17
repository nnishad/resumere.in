<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '847236793221-jofati43ua6pmgplh8j96stf1jenj6jc.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'Am9POnsh8kCDuEQUEBmo_DBg'; //Google client secret
$redirectURL = 'https://resumere.in/'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>