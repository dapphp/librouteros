<?php

/**
 * Example script demonstrating the basic functions of Lib_RouterOS.
 * This example connects to the router, logs in, and issues a command
 * to retrieve some select system information.
 *
 */

// define required values
$router   = '192.168.88.1:8728';
$username = 'admin';
$password = '';

// basic informational command to send
$command = '/system/resource/print';
$args    = array('.proplist' => 'version,cpu,cpu-frequency,cpu-load,uptime');

// begin script

require_once 'RouterOS.php';

$mikrotik = new Lib_RouterOS();
$mikrotik->setDebug(true);

try {
    // establish connection to router; throws exception if connection fails
    $mikrotik->connect($router);

    // send login sequence; throws exception on invalid username/password
    $mikrotik->login($username, $password);

    // encodes and send command to router; throws exception if connection lost
    $mikrotik->send($command, $args);

    // read response to command; throws exception if command was invalid (!trap,
    // !fatal etc), connection terminated, or recv'd unexpected data
    $response = $mikrotik->read();

    // show the structure of the parsed response
    print_r($response);

} catch (Exception $ex) {
    echo "Caught exception from router: " . $ex->getMessage() . "\n";
}
