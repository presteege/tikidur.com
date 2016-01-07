<?php

if($_SERVER['REMOTE_ADDR'] !== '80.14.233.235')
{
    include_once 'sqli.php';

    $sql = 'INSERT INTO count_user_agent
            SET date = NOW(),
            ip = "'.$_SERVER['REMOTE_ADDR'].'",
            user_agent = "'.$_SERVER['HTTP_USER_AGENT'].'",
            domain = "'.$_SERVER['HTTP_HOST'].'"';

    if(!@mysqli_query($sqli, $sql))
    {
        //do something
    }
}