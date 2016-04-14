<?php
if (!$loader = @include __DIR__. '/../vendor/autoload.php') {
    die('Project dependencies missing');
}
$loader->add('Phip\\src\\', __DIR__);