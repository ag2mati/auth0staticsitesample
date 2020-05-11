<?php

require 'vendor/autoload.php';
use Auth0\SDK\Auth0;

$auth0 = new Auth0([
  'domain' => 'ag2mati.auth0.com',
  'client_id' => 'NevZ3KsvtiAdlp2A8oB6XBoYDchM2cBc',
  'client_secret' => 'ftx-P2kTPf_haz7q9wNx9e-GjCO8UX_pd1Pj-cECVPFn4L4UtXezqOO2r-iZISy7',
//  'redirect_uri' => 'http://8655c545.ngrok.io/sa4/auth0test.php',
//  'redirect_uri' => 'http://localhost/sa4/auth0test.php',
  'redirect_uri' => 'http://localhost/',
  'scope' => 'openid profile email',
]);

$auth0->logout();
//$return_to = 'http://' . $_SERVER['HTTP_HOST'] . '/sa4/enter.php';
//$logout_url = sprintf('https://%s/v2/logout?client_id=%s&returnTo=%s', 'ag2mati.auth0.com', 'NevZ3KsvtiAdlp2A8oB6XBoYDchM2cBc', $return_to);
//header('Location: ' . $logout_url);
header('Location: https://ag2mati.auth0.com/v2/logout?client_id=NevZ3KsvtiAdlp2A8oB6XBoYDchM2cBc&returnTo=http://localhost/sa4/enter.php');
die();

