<?php
// config for Marcorombach/LaravelAafRadius
return [
    'server' => '0.0.0.0', //IP of the Radius Server
    'secret' => 'secret', //Radius secret
    'nasip' => '1.1.1.1', //IP of the webserver (Radius Client)
    'post-login-route' => 'dashboard',
    'error-route' => 'error',
];
