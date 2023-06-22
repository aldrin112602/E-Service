<?php

function sanitize_input( $input_text ) {
    $sanitized_text = preg_replace( "/[;\'\"\\\\ ]/", '', $input_text);
    return $sanitized_text;
}


function validate_post_data($post_data) {
    $sanitized_data = array();
    foreach ($post_data as $key => $value) {
        if ($key === 'password') {
            $sanitized_data[$key] = trim($value);
        } elseif (is_string($value)) {
            $sanitized_data[$key] = $value;
        } else {
            $sanitized_data[$key] = $value;
        }
    }
    return $sanitized_data;
}


function isDataExists($table, $select, $condition) {
    global $conn;
    $query = "SELECT " . $select . " FROM " . $table . " WHERE " . $condition;
    return ($conn->query($query)->num_rows > 0);
}

function getRows($condition, $tableName) {
    global $conn;
    $sql = "SELECT * FROM $tableName WHERE $condition";
    $result = $conn->query( $sql );
    $rows = [];
    if ( $result && $result->num_rows > 0 ) {
        while ( $row = $result->fetch_assoc() ) {
            $rows[] = $row;
        }
    }
    return $rows;
}