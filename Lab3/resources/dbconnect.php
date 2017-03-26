<?php

$db_host="************";
$db_username="***********";
$db_password="**************";
$db_name="**********";


$db_connect     = mysqli_connect($db_host, $db_username, $db_password, $db_name);
// Verificam conexiunea
if (mysqli_connect_error())
{
    echo "Nu sa putut face conexiune cu MySQL: " . mysqli_connect_error();
}
