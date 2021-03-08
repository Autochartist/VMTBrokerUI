<?php

#include_once dirname(__FILE__) . '/'. 'constants.php';


function resultToArray($result, &$data) {

    // the first column is set to the table name so that row can be identified correctly
    $n = pg_num_fields($result);
    while ($row = pg_fetch_row($result)) 
    {
        $i = 0;
        while ($i < $n)
        {
            $fieldName = pg_field_name($result, $i);
            $fieldValue = $row[$i];
            $item[$fieldName] = $fieldValue;
            $i = $i + 1;
        }    
        $data[] = $item;
    }
}

function dbConnect($server, $database, $port, $username, $password)
{
    return pg_connect(
        "host=" . $server . ' ' .
        "dbname=" . $database . ' ' .
        "port=" . $port . ' ' .
        "user=" . $username . ' ' .
        "password=" . $password
    );
}

function dbDisconnect($connection)
{
    if(!isset($connection)) {
        return false;
    }
    pg_close($connection);
}

function dbExecute($connection, $query) 
{
    if(!isset($connection)) {
        return false;
    }
    $result = pg_query($connection, $query);
    $n = pg_affected_rows($result);
    pg_free_result($result);
    return $n;
}

function dbQueryOneValue($connection, $query, $columnName, &$value) 
{
    $value = NULL;
    $row = NULL;
    dbQueryOneRow($connection, $query, $row);
    if(!empty($row)) {
        $value = $row[$columnName];
    }
}

function dbQueryOneRow($connection, $query, &$row) 
{
    $array = [];
    dbQuery($connection, $query, $array);
    if(!empty($array)) {
        $row = $array[0];
    }
}

function dbQuery($connection, $query, &$array) {

    if(!isset($connection)) {
        return false;
    }
    $result = pg_query($connection, $query);
    resultToArray($result, $array);
    pg_free_result($result);
}



?>
