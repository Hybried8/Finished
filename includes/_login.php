<?php
include 'database.php';

if (isset($_POST)) {
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';


    if ($email == "" || $password == "") {
        echo "please fill all input fields";
        return false;
    } else {
        $email = trimData($email);
        $password = trimData($password);
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "please enter a valid email address";
        return false;
    }
    if (true) {
        $new_pass = myEncrypt($password);
        $check = "SELECT * FROM register WHERE email = '$email'";
        $check_result = mysqli_query($conn, $check);
        if (mysqli_num_rows($check_result) > 0) {
            $check = "SELECT * FROM register WHERE email = '$email' AND password = '$new_pass'";
            $check_result = mysqli_query($conn, $check);
            if (mysqli_num_rows($check_result) > 0) {
                $row = mysqli_fetch_assoc($check_result);
                $uid = $row['id'];
                session_start();
                $_SESSION['uid'] = $uid;
                echo "true";
                return false;
            } else {
                echo "email or password is incorrect";
                return false;
            }
        } else {
            echo "You do not have an account";
            return false;
        }
    }
} else {
    echo "you must log in first";
    return false;
}


function myEncrypt($password)
{
    return (md5(substr((md5(md5(sha1($password)))), 0, 12))
    );
};

function trimData($data)
{
    $data = htmlspecialchars($data);
    $data = trim($data);
    $data = stripcslashes($data);
    return $data;
}
