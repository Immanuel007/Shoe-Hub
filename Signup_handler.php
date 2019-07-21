<?php
session_start();
#Declare / initialize empty variables to store the received data
$firstname=$lastname=$email=$password_1='';
include 'Config.php';
if (isset($_POST['signup'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];
    # Form validation
    if(empty($firstname)){
        header('location:Sign_up.php?f_error');
        exit();
    }else{
        $firstname = $firstname;
    };
    if(empty($lastname)){
        header('location:Sign_up.php?l_error');
        exit();
    }else{
        $lastname = $lastname;
    };
    if(empty($email)){
        header('location:Sign_up.php?e_error');
        exit();
    }else{
        $email = $email;
    };
    if(empty($password_1)){
        header('location:Sign_up.php?p1_error');
        exit();
    }else{
        $password_1 = $password_1;
    }
    if(empty($password_2)){
        header('location:Sign_up.php?p2_error');
        exit();
    }else{
        $password_2 = $password_2;
    }
    if($password_1 != $password_2){
        header('location:Sign_up.php?pm_error');
        exit();
    }else{
        $password_1 = md5($password_1); #Hashing the password
    }
    $sql = "SELECT * FROM `personal` WHERE firstname='$firstname' OR email='$email' LIMIT 1";
    $results = mysqli_query($connect,$sql);
    $user = mysqli_fetch_assoc($results);
    if($user){
        header('location:Sign_up.php?user_error');
        exit();
    }
    $sql = "INSERT INTO `personal`(`id`, `firstname`, `lastname`, `email`, `password`) VALUES (null,'$firstname','$lastname','$email','$password_1')";
    #save user into the database
    mysqli_query($connect,$sql);
    #go to home page
    $_SESSION['email'] = $email;
    header('location:Index.php');
}
?>