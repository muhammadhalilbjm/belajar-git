<?php

function connect() {
    return mysqli_connect("localhost", "root", "", "latihan_db");
}

function query( string $query ) {
    $result = mysqli_query( connect(), $query );

    if( mysqli_num_rows($result) === 1 ) {
        return mysqli_fetch_assoc($result);
    }

    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        array_push( $rows, $row );
    }
    return $rows;
}