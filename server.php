<?php

require_once(__DIR__ . '/asynctaskphp.php');

$server = new TcpSocketServer();
$server->listen('127.0.0.1', 23, function() {
	echo 'accepted!';
});

$timer = new EventTimer();
setInterval(function() {
	echo '1 second';
}, 1000);

event_loop();
