<?php

// database connection
$db_con = mysqli_connect("localhost", "root", "", "php_ajax");
if (!$db_con) {
    die("database not connected");
}
