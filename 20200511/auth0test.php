<html><body>
<a href="logout.php">Logout</a><br /><br />

This is test!
<?php

$a = 1;
$a += 1;

echo $a."<br />\n";

require 'vendor/autoload.php';
use Auth0\SDK\Auth0;

$auth0 = new Auth0([
  'domain' => 'ag2mati.auth0.com',
  'client_id' => 'NevZ3KsvtiAdlp2A8oB6XBoYDchM2cBc',
  'client_secret' => 'ftx-P2kTPf_haz7q9wNx9e-GjCO8UX_pd1Pj-cECVPFn4L4UtXezqOO2r-iZISy7',
//  'redirect_uri' => 'http://8655c545.ngrok.io/',  // 項目なし、空文字、指定外URLは不可。
  'redirect_uri' => 'http://localhost/',  // 項目なし、空文字、指定外URLは不可。
  'scope' => 'openid profile email',
]);

$b = 2;
$c = $a + $b;

echo $c."<br />\n";

$userInfo = $auth0->getUser();

if (!$userInfo) {
  echo 'We have no user info'."<br />";
    // We have no user info
    // See below for how to add a login link
  print_r($userInfo);
} else {
  echo 'User is authenticated'."<br />";
    // User is authenticated
    // See below for how to display user information
  print_r($userInfo);
}

?>
</body></html>
