<?php 


define('URL_SITIO', 'http://localhost/procoders/');

require 'paypal/autoload.php';

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
     'AeKgqYtrL_C4CPzhFtKNlws4DQCSi0MzTs3QgmIbwMFSmb2tmqKgzdjiWQTuw2s2bgwmQ3DRd9pBY5LU',// ClientID
        'ENOMgxGd3PQOUPBjNwXoDTSQbDpaV0J-ogdI5kqKTFiBF4lMf_wY9gs2ewclpydL-0jaorBeqBWGnQwi'      // ClientSecret
    )
);

