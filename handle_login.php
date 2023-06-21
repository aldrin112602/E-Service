<?php 
require_once './config.php';
require_once './global.php';


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $post = validate_post_data($_POST);
    $email = $post['email'];
    $password = $post['password'];

    

}