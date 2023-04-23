<?php
require_once 'vendor/autoload.php';
  
$config = [
    'callback' => 'http://localhost/plant/index2.php',
    'keys'     => [
                    'id' => '638694439481-6cgk1fsmt6120iquiu449bapsc6uinnu.apps.googleusercontent.com',
                    'secret' => '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'
                ],
    'scope'    => 'https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email',
    'authorize_url_parameters' => [
            'approval_prompt' => 'force', // to pass only when you need to acquire a new refresh token.
            'access_type' => 'offline'
    ]
];
  
$adapter = new Hybridauth\Provider\Google( $config );