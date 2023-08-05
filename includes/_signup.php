<?php
include 'database.php';
if(isset($_POST)) {
    $firstName = isset($_POST['firstName']) ? trim($_POST['firstName']): '';
    $lastName = isset($_POST['lastName']) ? trim($_POST['lastName']): '';
	$email = isset($_POST['email']) ? trim($_POST['email']): '';
	$password = isset($_POST['password']) ? trim($_POST['password']): '';

    if($firstName == "" || $lastName == "" || $email == "" || $password == ""){
        echo "ALL FILEDS ARE REQUIRED";
        return false;
    }else{
        $firstName = trimData($firstName);
        $lastName = trimData($lastName);
        $email = trimData($email);
        $password = trimData($password);
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "please enter a valid email address";
        return false;
    }

    if(true){
        $new_pass = myEncrypt($password);
        $check = "SELECT * FROM register WHERE email = '$email'";
        // its from ur connection
        $check_result = mysqli_query($conn, $check);
        if(mysqli_num_rows($check_result) == 1){
            echo "Email is already registered";
            return false;
        }else{
            $sql = "INSERT INTO register(firstname,lastname,email,password)VALUES( '$firstName', '$lastName', '$email', '$new_pass')";
            $result = mysqli_query($conn, $sql);
            if($result){
                echo "0000";
                return false;
            }else{
            echo "Registration Failed!";
            return false;
            }
        }
    }
}

function myEncrypt($password) {
	return (
		md5(substr((md5(md5(sha1($password)))), 0, 12))
	);
};

function trimData($data){
	$data = htmlspecialchars($data);
	$data = trim($data);
	$data = stripcslashes($data);
	return $data;
}

?>