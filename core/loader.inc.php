<?php

// Reading environment variables
$ENV = require '../env.php';

// Reading config file
$app = [];
$app['config'] = [];
$app['config']['general'] = require PATH_CONFIG.'general.config.php';


echo 'Listo';