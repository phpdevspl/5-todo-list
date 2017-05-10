<?php

define('FILENAME', 'data.txt');
require_once 'functions.php';

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
        $tasks = readFromFile();
        foreach ($tasks as $number => $task) {
            echo ($number + 1).' | '.$task.PHP_EOL;
        }
        echo '-----'.PHP_EOL.'All tasks: '.count($tasks);
        break;
    default:
        echo 'Sorry, invalid command!';
        break;
}
echo PHP_EOL;
