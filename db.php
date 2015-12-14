<?php
//Code written by: Robert c. Soriano
//sorianorobertc@gmail.com
//https://www.facebook.com/ThatixSC2
try
{
    $dbc = new PDO('mysql:host=localhost; dbname=wall', 'root', '');
    $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e)
{
    echo "Error: " . $e->getMessage();
}
