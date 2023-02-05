<?php

include __DIR__.'/init.php';

$action = $_GET['action'] ?? null;

switch ($action) {
    case 'example1':
        require __DIR__.'/controller/cn_example1.php';
        break;

    case 'example2':
        require __DIR__.'/controller/cn_example2.php';
        break;
}
