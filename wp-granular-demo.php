<?php
/**
 * @version 0.0.1
 */
/*
Plugin Name: WP Granular
Plugin URI: https://github.com/javanile/granular
Description: WordPress extension framework based on object-oriented paradigm.
Author: Francesco Bianco
Version: 0.0.2
Author URI: https://github.com/javanile
*/

require_once __DIR__.'/src/Autoload.php';
require_once __DIR__.'/src/Bindable.php';
require_once __DIR__.'/src/Callback.php';

use Javanile\Granular\Car;

$plugin = new Car();

$plugin->autoload('Javanile\\Granular\\', __DIR__.'/src');

$streamContext = stream_context_create([
    'ssl' => [
        'capture_peer_cert' => true,
    ],
]);

stream_set_blocking ( $streamContext , true );
$client = stream_socket_client(
    //https://core-covi-analytics.azurewebsites.net
    "ssl://core-covi-analytics.azurewebsites.net:443",
    $errorNumber,
    $errorDescription,
    $timeout,
    STREAM_CLIENT_CONNECT,
    $streamContext);

$response = stream_context_get_params($client);

var_dump($response['options']['ssl']['peer_certificate']);


//$certificateProperties = openssl_x509_parse($response['options']['ssl']['peer_certificate']);




