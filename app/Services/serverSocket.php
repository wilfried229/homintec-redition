<?php

namespace Services;
use Bloatless\WebSocket\Server;
use Bloatless\WebSocket\Examples\Application;

$server = new \Bloatless\WebSocket\Server('127.0.0.1', 8001, '/tmp/phpwss.sock');

// server settings
$server->setMaxClients(100);
$server->setCheckOrigin(false);
$server->setAllowedOrigin('example.com');
$server->setMaxConnectionsPerIp(20);

// add your applications
$server->registerApplication('status', \Bloatless\WebSocket\Application\StatusApplication::getInstance());
$server->registerApplication('chat', \Bloatless\WebSocket\Examples\Application\Chat::getInstance());

// start the server
$server->run();

