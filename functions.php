<?php

function readFromFile(): array
{
    if (file_exists(FILENAME)) {
        $data = file_get_contents(FILENAME);
        if ($data) {
            return json_decode($data, true);
        }
    }
    return [];
}

function saveToFile(array $tasks)
{
    $data = json_encode($tasks);
    if (file_put_contents(FILENAME, $data) !== false) {
        echo 'OK!';
    } else {
        echo '! Error writing file.';
    }
}

function add(string $text): array
{
    $tasks = readFromFile();
    $tasks[] = $text;
    return $tasks;
}

function remove(int $number): array
{
    $tasks = readFromFile();
    unset($tasks[$number - 1]);
    return $tasks;
}
