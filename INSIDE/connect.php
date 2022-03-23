<?php
$connection = mysqli_connect('sql6.freemysqlhosting.net', 'sql6481074', 'hgyxckHE2d');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'sql6481074');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}
