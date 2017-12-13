<?php
require_once __DIR__ . '/vendor/autoload.php'; // change path as needed

$fb = new \Facebook\Facebook([
  'app_id' => '137141713588589',
  'app_secret' => 'f5ce3ab55b5fca1f62ecb080fbe40a4}',
  'default_graph_version' => 'v2.11',

]);

try {
  $response = $fb->get('/search?q=roof&type=page&fields=id,name,email,link,likes,folowerscount', '137141713588589|OaWh6aVYYN_9KHCWyeXdFa1FK58');
}
  catch(\Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;

} catch(\Facebook\Exceptions\FacebookSDKException $e) {

  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

print_r($response);

















































/*
require_once __DIR__ . '/vendor/autoload.php';
$fb = new \Facebook\Facebook([
  'app_id' => '137141713588589',
  'app_secret' => 'f5ce3ab55b5fca1f62ecb080fbe40a45',
  'default_graph_version' => 'v2.10',

  //'default_access_token' => '{access-token}', // optional
]);

$helper = $fb->getCanvasHelper();
$helper = $fb->getRedirectLoginHelper();



try {
  // Returns a `FacebookFacebookResponse` object
  $response = $fb->get(
    '/search?q=roof&type=page&fields=id,name,mail,link,likes,folowerscount',
    'EAACEdEose0cBAD3XXVddZAI50ZALWvn3KyWkj3DR03SZBEK5ngxtMl4i5CZAC275JbgIDY2wiCIwQC5f8ur2TA7i2OGWbOcFW69sA7FoNHGjMBczUjBB5IlOnZBXGvLDPAJd6dM4ynt6VDhQTlRqZCtFJlOWCZBBPm5BZCOR7tZCvNhsnFeFUZCVXXePCXgKLTpScQxZAZBT2rZBK6gZDZD'
  );
} catch(FacebookExceptionsFacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(FacebookExceptionsFacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}
$graphNode = $response->getGraphNode();


try {
  $accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {

  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {

  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

if (! isset($accessToken)) {
  echo 'No OAuth data could be obtained from the signed request. User has not authorized your app yet.';
  exit;
}
else
  echo (string)$accessToken;


//https://graph.facebook.com/search?q=allstate&type=page&limit=100&access_token=[your access token here]
?>
<!--
{
    status: 'connected',
    authResponse: {
        accessToken: '...',
        expiresIn:'...',
        signedRequest:'...',
        userID:'...'
    }
}
-->
