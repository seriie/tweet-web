<?php

function create_file($path, $filename = null) {
    if ($filename === null) {
        $filename = $path;
        $fullPath = __DIR__ . '/../' . $filename;
    } else {
        $folderPath = __DIR__ . '/../' . $path;
        
        if (!is_dir($folderPath)) {
            mkdir($folderPath, 0777, true); // recursive true
        }

        $fullPath = $folderPath . '/' . $filename;
    }

    if (!file_exists($fullPath)) {
        file_put_contents($fullPath, '');
    }
}
