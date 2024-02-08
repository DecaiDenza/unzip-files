<?php

foreach(glob("*.zip") as $file_name) {
    $file_name_without_extension = (explode('.', $file_name))[0];
    $zip = new ZipArchive();

    $zip_file = $zip->open(__DIR__ . '/' . $file_name);
    if ($zip_file === true) {
        $zip->extractTo(__DIR__ . '/' . $file_name_without_extension);
    }
}