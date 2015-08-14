<?php
/**
 * Creating MySQL connection
 */

$db_server = "localhost";
$db_username = "root";
$db_password = "root";
$db_database = "dat310_lectures";

$mysqli = new mysqli($db_server, $db_username, $db_password, $db_database);