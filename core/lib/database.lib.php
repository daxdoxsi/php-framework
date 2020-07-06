<?php


function db_query($sql) {
    static $link;
    GLOBAL $ENV;
    if (!isset($link)) {
        $db = require PATH_CONF.'database.conf.php';
        $link = mysqli_connect($db['host'], $db['user'], $db['pass'], $db['name'], $db['port']);

        if (!$link) {
            echo "Error: Unable to connect to MySQL." . PHP_EOL;
            echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
            echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }
    }

    if ($result = mysqli_query($link, $sql)) {
        if (strtoupper(substr($sql, 0, 6)) == 'SELECT') {
            $rows = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $rows[] = $row;
            }
            mysqli_free_result($result);
            return $rows;
        }
        else {
            return mysqli_affected_rows();
        }
    }

    return false;

}