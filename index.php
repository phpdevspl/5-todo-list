<?php

require_once 'file.php';

$data = array_fill(0, 3, null);
$argv = array_replace($data, $argv);
list($filename, $command, $content) = $argv;

switch ($command) {
    case 'add':
        echo 'Add TODO';
        break;
    case 'remove':
        echo 'Remove TODO';
        break;
    case null:
        echo 'List';
        break;
    default:
        echo 'Sorry, invalid command!';
        break;
}
echo PHP_EOL;
