<?php 

function isDataExists($table, $select, $condition) {
    global $conn;
    $query = "SELECT " . $select . " FROM " . $table . " WHERE " . $condition;
    return ($conn->query($query)->num_rows > 0);
}