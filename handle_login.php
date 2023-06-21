<?php 
require_once './config.php';
require_once './global.php';


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $post = validate_post_data($_POST);
    $email = $post['email'];
    $password = $post['password'];

    // check if admin
    if(isDataExists("user_accounts", "*", "email = '$email' AND password = '$password'")) {
        
    } else {
        // no records found
        // Invalid email or password
        echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                Invalid email or password! please try again.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    }

}