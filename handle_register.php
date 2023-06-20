
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


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $post = validate_post_data($_POST);

    $fullname = $post['fullname'];
    $email = $post['email'];
    $password = $post['password'];
    $contact_no = $post['contact_no'];
    $address = $post['address'];
    $birthday = $post['birthday'];
    $gender = $post['gender'];
    $age = $post['age'];
    $status = $post['status'];

    if(strlen($password) < 6) {
        echo '
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                Password must atleast have 6 characters!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        ';
    }

}