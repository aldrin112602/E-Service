<?php 
require_once './config.php';
require_once './global.php';


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $post = validate_post_data($_POST);
    $email = $post['email'];
    $password = $post['password'];

    $condtion = "email = '$email' AND password = '$password'";
    if(isDataExists("user_accounts", "*", $condtion)) {
        foreach(getRows($condtion, "user_accounts") as $row) {
            $_SESSION['login'] = true;
            $_SESSION['user_type'] = $row['user_type'];
            $_SESSION['fullname'] = $row['fullname'];
            $_SESSION['email'] = $email;
        }

        echo '';

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