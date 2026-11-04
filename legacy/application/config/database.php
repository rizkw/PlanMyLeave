<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| Database configuration is loaded from Azure App Service
| environment variables.
|
| Required Azure App Settings:
| DB_HOST
| DB_USER
| DB_PASSWORD
| DB_NAME
|
| -------------------------------------------------------------------
*/

$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
    'dsn'      => '',
    'hostname' => getenv('DB_HOST') ?: '',
    'username' => getenv('DB_USER') ?: '',
    'password' => getenv('DB_PASSWORD') ?: '',
    'database' => getenv('DB_NAME') ?: '',

    'dbdriver' => 'pdo',
    'subdriver' => 'mysql',

    'dbprefix' => '',
    'pconnect' => FALSE,

    'db_debug' => (ENVIRONMENT !== 'production'),

    'cache_on' => FALSE,
    'cachedir' => '',

    'char_set' => 'utf8mb4',
    'dbcollat' => 'utf8mb4_unicode_ci',

    'swap_pre' => '',

    'encrypt' => TRUE,

    'compress' => FALSE,
    'stricton' => FALSE,

    'failover' => array(),

    'save_queries' => FALSE
);
