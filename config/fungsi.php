<?php
function scanFile($dir, $namafile)
{
    $files = scandir($dir);
    $status = 0;

    foreach ($files as $file) {
        if (strstr($file, $namafile . ".php")) {
            $status = 1;
        }
    }
    return $status;
}
