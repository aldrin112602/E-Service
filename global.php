<?php 



function sanitize_input($input_text) {
    $sanitized_text = preg_replace("/[;\'\"\\\\]/", '', $input_text);
    return $sanitized_text;
}


function validate_post_data($post_data) {
    $sanitized_data = array();
    foreach ($post_data as $key => $value) {
        if ($key === 'password') {
            $sanitized_data[$key] = trim($value);
        } elseif (is_string($value)) {
            $sanitized_data[$key] = trim(sanitize_input($value));
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