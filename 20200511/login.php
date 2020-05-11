<?php
// login.php

require 'vendor/autoload.php';
use Auth0\SDK\Auth0;

$auth0 = new Auth0([
  'domain' => 'ag2mati.auth0.com',
  'client_id' => 'NevZ3KsvtiAdlp2A8oB6XBoYDchM2cBc',
  'client_secret' => 'ftx-P2kTPf_haz7q9wNx9e-GjCO8UX_pd1Pj-cECVPFn4L4UtXezqOO2r-iZISy7',
//  'redirect_uri' => 'http://8655c545.ngrok.io/sa4/auth0test.php',
  'redirect_uri' => 'http://localhost/sa4/auth0test.php',
  'scope' => 'openid profile email',
]);

$auth0->login();
