<?php 
require_once './config.php';
require_once './global.php';

function validateFullName($fullName) {
    $fullName = trim($fullName);
    $words = explode(' ', $fullName);
    $numWords = count($words);
    if ($numWords < 2) {
        return false;
    }
    foreach ($words as $word) {
        if (strlen($word) <= 1) {
            return false;
        }
    }
    return true;
}


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $post = validate_post_data($_POST);
    $fullname = ucwords(strtolower($post['fullname']));
    $email = $post['email'];
    $password = $post['password'];
    $contact_no = $post['contact_no'];
    $address = ucwords(strtolower($post['address']));
    $birthday = $post['birthday'];
    $gender = $post['gender'];
    $age = $post['age'];
    $status = $post['status'];


    if(!validateFullName($fullname)) {
        echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                Fullname is not valid!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    } elseif(isDataExists("user_accounts", "email", "email = '$email'")) {
        echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                Email already exist!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    } elseif(strlen($password) < 6) {
        echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                Password must atleast have 6 characters!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        ';
    } else {
        // insert data
        $sql = "INSERT INTO user_accounts(fullname, user_type, email, password, contact_no, address, birthday, gender, age, status) VALUES('$fullname','client','$email','$password','$contact_no','$address','$birthday','$gender','$age','$status')";
        if(mysqli_query($conn, $sql)) {
            $_SESSION['login'] = true;
            $_SESSION['user_type'] = 'client';
            $_SESSION['fullname'] = $fullname;
            $_SESSION['email'] = $email;
            echo '';
        } else {
             echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                Failed to insert data, please check database connection!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        ';
        }
    }

}