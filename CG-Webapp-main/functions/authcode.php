<?php
session_start();
include('../config/dbcon.php');
include('myfunctions.php');

if(isset($_POST['register_btn'])){
    $first_name = mysqli_real_escape_string($con,$_POST['first_name']);
    $last_name = mysqli_real_escape_string($con,$_POST['last_name']);
    $contact_number = mysqli_real_escape_string($con,$_POST['contact_number']);
    $address = mysqli_real_escape_string($con,$_POST['address']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $confirm_password = mysqli_real_escape_string($con,$_POST['confirm_password']);

    //Check if email already registered
    $check_email_query = "SELECT email FROM customer WHERE email='$email'";
    $check_email_query_run = mysqli_query($con, $check_email_query);

    if(mysqli_num_rows($check_email_query_run) > 0){
        $_SESSION['message'] = "Email already registered";
        header('Location: ../register.php');
    }
    else{
        if($password == $confirm_password){
            //Insert user data
            $insert_query = "INSERT INTO customer (first_name,last_name,phone,address,email,password) VALUES ('$first_name','$last_name','$contact_number','$address','$email','$password')";
            $insert_query_run = mysqli_query($con,$insert_query);
    
            if($insert_query_run){
                $_SESSION['message'] = "Registered Successfully";
                header('Location: ../login.php');
            }
            else{
                $_SESSION['message'] = "Something went wrong";
                header('Location: ../register.php');
            }
        }
        else{
            $_SESSION['message'] = "Password do not match";
            header('Location: ../register.php');
        }
    }

   
}
else if(isset($_POST['login_btn'])){
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $login_query = "SELECT * FROM customer WHERE email='$email' AND password='$password'";
    $login_query_run = mysqli_query($con, $login_query);

    if(mysqli_num_rows($login_query_run) > 0){
        $_SESSION['auth'] = true;

        $userdata = mysqli_fetch_array($login_query_run);
        $userid = $userdata['id'];
        $username = $userdata['first_name'];
        $useremail = $userdata['email'];
        $role_as = $userdata['role_as'];

        $_SESSION['auth_user'] = [
            'user_id' => $userid,
            'first_name' => $username,
            'email' => $useremail
        ];

        $_SESSION['role_as'] = $role_as;

        if($role_as == 1){
            redirect("../admin/index.php", "Welcome to Dashboard");
        }
        else{
            redirect("../index.php", "Logged In Successfully");
        }
    }
    else{
        redirect("../login.php", "Invalid Credentials");
    }
}
?>