<?php

function analytics($sg = false)
{
    $file = './log/log.html';
    $ip = $_SERVER['REMOTE_ADDR'];

    if ($ip == "127.0.0.1") {
        return;
    }

    $time = gmdate("Y-m-d H:i:s");

    if ($sg != false) {
        $content = "$ip,$time,$sg\n";
    } else {
        $content = "$ip,$time,~\n";
    }

    file_put_contents($file, htmlspecialchars($content), FILE_APPEND | LOCK_EX);
}
