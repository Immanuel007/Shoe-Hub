
<?php
session_start();
#Declare/initialize empty variables to store the received data
$email=$password='';
include "Config.php";
if(isset($_POST['signin'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(empty($email)){
        header('location:Login.php?e_error');
        exit();
    }else{
        $email = $email;
    }
    if(empty($password)){
        header('location:Login.php?p_error');
        exit();
    }else{
        $password = $password;
    }
    $sql = "SELECT * FROM `personal` WHERE email='$email' LIMIT 1";
    $results = mysqli_query($conn,$sql);
    $user = mysqli_fetch_assoc($results);
    if($user){
        if($email == $email){
            $_SESSION['loggedin'] = true;
            header('location:Login.php?success_msg');
            $_SESSION['email'] = $email;
            header('location:Login.php');
        }
    }else{
        header('location:Index.php?user_msg');
        exit();
    }
}
?>