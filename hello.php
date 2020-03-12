<?php

$files = array_filter(scandir('./'), function ($file) {
    return pathinfo($file, PATHINFO_EXTENSION) === 'php';
});

print_r($files);
?>
