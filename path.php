<?php
error_reporting(E_ERROR | E_PARSE);
ini_set('display_errors', 1);

// $http_host  = "https://$_SERVER[HTTP_HOST]";
// $php_self   = explode(".", $_SERVER['PHP_SELF'])[0];
// $http_model = "https://$_SERVER[HTTP_HOST]/model/update/create?action=";
// $http_delete = "https://$_SERVER[HTTP_HOST]/model/delete/index?";

// define('admin_uri', $http_host."/dashboard");
// define('admin_url', $http_host."/dashboard/");
// define('model_url', $http_model);
// define('base_uri', "https://psychx.io/");
// define('base_url', "https://psychx.io");
// define('manager_url', "https://psychx.io/manager/");
// define('consult_url', "https://psychx.io/consult/");
// define('manager_uri', "https://psychx.io/manager");
// define('creator_uri', "https://vesencomputing.com/");
// define('delete_url', "$http_delete");

// define('therapist_url', "https://psychx.io/therapist/");
// define('therapist_uri', "https://psychx.io/therapist");

// define('client_url', "https://psychx.io/client/");
// define('client_uri', "https://psychx.io/client");


// define('cookie_domain', "$_SERVER[HTTP_HOST]");

// define('ROOT_PATH', realpath(dirname(__FILE__)) . '/');
// define('MODEL_PATH', realpath(dirname(__FILE__)) . '/model/');

// define('file_url', 'https://uploads.psychx.io/images/');


// define('TARGET_DIR', '/home/psychx/uploads.psychx.io/');


// define('LOG_DIR', '/home/psychx/log.psychx.io/');

// LOCAL
$http_host  = "https://$_SERVER[HTTP_HOST]/psychx";
$php_self   = explode(".", $_SERVER['PHP_SELF'])[0];
$http_model = "https://$_SERVER[HTTP_HOST]/psychx/model/update/create?action=";
$http_delete = "https://$_SERVER[HTTP_HOST]/psychx/model/delete/index?";

define('admin_uri', $http_host."/dashboard");
define('admin_url', $http_host."/dashboard/");
define('model_url', $http_model);
define('base_uri', "https://localhost/psychx/");
define('base_url', "https://localhost/psychx");
define('manager_url', "https://localhost/psychx/manager/");
define('consult_url', "https://localhost/psychx/consult/");
define('manager_uri', "https://localhost/psychx/manager");
define('creator_uri', "https://vesencomputing.com/");
define('delete_url', "$http_delete");

define('therapist_url', "https://localhost/psychx/therapist/");
define('therapist_uri', "https://localhost/psychx/therapist");

define('client_url', "https://localhost/psychx/client/");
define('client_uri', "https://localhost/psychx/client");

define('corporate_url', "https://localhost/psychx/corporate/");
define('corporate_uri', "https://localhost/psychx/corporate");


define('cookie_domain', "$_SERVER[HTTP_HOST]");

define('ROOT_PATH', realpath(dirname(__FILE__)) . '/');
define('MODEL_PATH', realpath(dirname(__FILE__)) . '/model/');
define('LOG_DIR', realpath(dirname(__FILE__)) . '/log/');
define('TARGET_DIR', "$http_host/uploads/");

define('file_url', "$http_host/uploads/images/");