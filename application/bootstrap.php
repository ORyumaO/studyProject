<?php

require_once 'core/ClassLoader.php';

$loader = new ClassLoader();

$loader->addAutoLoadDir(__DIR__. '/core');
$loader->addAutoLoadDir(__DIR__. '/models');

$loader->registerAutoLoadDir();