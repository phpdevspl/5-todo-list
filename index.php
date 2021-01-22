<?php

define('FILENAME', 'data.txt');
require_once 'functions.php';

$data = array_fill(0, 3, null);
$argv = array_replace($data, $argv);
[$filename, $command, $content] = $argv;

switch ($command) {
    case 'add':
        if (!empty($content)) {
            $tasks = add($content);
            saveToFile($tasks);
        } else {
            echo '! Error: Task can\'t be empty.';
        }
        break;

    case 'remove':
        $tasks = remove($content);
        saveToFile($tasks);
        break;

    case null:
        $tasks = readFromFile();
        foreach ($tasks as $number => $task) {
            echo ($number + 1) . ' | ' . $task . PHP_EOL;
        }
        echo '-----' . PHP_EOL . 'All tasks: ' . count($tasks);
        break;

    default:
        echo 'Sorry, invalid command!';
        break;
}
echo PHP_EOL;

