<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$processes = [];
exec("ps aux | grep python", $processes);

foreach ($processes as $process) {
    if (strpos($process, 'data_ccesspy.py') !== false) {
        echo "Your Python script is running!";
        break;
    }
}
?>