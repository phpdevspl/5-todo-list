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
