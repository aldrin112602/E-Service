<?php 
require_once '../config.php';
if(isset($_SESSION['login']) && $_SESSION['login']) {
    switch($_SESSION['user_type']) {
        case 'staff':
            header('location: ../staff');
            break;
        case 'client':
            header('location: ../client');
            break;
    }
} else header('location: ../');
?>