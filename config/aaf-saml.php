<?php
// config for Marcorombach/LaravelAafSAML
return [
    'idpmetadataurl' => 'https://aaf.com/osp/a/TOP/auth/saml2/metadata',
    'service_name' => 'Test',
    'service_description' => 'Test',
    'post-login-route' => 'dashboard', //Route to redirect after login - if not set you will be redirected to the base URL
    'error-route' => 'error', //Route to redirect to on login error
];
