<?php
// config for Marcorombach/LaravelAafOIDC
return [
    'provider_url' => 'https://aaf.com/osp/a/TOP/auth/oauth2', //issuer URL of the auth provider -> https://<aaf-domainname>/osp/a/TOP/auth/oauth2
    'client_secret' => 'secret-xxxx', //Client secret
    'client_id' => 'id-xxxx', //Client ID
    'post-login-route' => 'dashboard', //Route to redirect after login - if not set you will be redirected to the base URL
    'error-route' => 'error', //Route to redirect to on login error
];
