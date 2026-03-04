<?php
// On charge les fichiers
require "config/autoload.php";

// On lance la machine
$router = new Router();
$router->handleRequest();