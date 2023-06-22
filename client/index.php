<?php 
require_once '../config.php';
if(isset($_SESSION['login']) && $_SSION['login']) {
    switch($_SESSION['user_type']) {
        case 'staff':
            header('location: ../staff');
            break;
        case 'admin':
            header('location: ../admin');
            break;
    }
} else header('location: ../');
?>