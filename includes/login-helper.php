<?php

if(isset($_POST['login-submit'])) {
    require 'dbhandler.php';
    $uname_email = $_POST['uname'];
    $password = $_POST['pwd'];

    if(empty($uname_email) || empty($password)) {
        header("Location: ../login.php?error=EmptyField");
        exit();
    }

    $sql = "SELECT * FROM users WHERE username=? OR email=?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../login.php?error=SqlInjection");
        exit();

    } else {

        mysqli_stmt_bind_param($stmt, "ss", $uname_email, $password);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);
        $data = mysqli_fetch_assoc($result);
        if(empty($data)) {
            header("Location: ../login.php?error=UserDNE");
            exit();

        } else {

            $pass_check = password_verify($password, $data['password']);

            if($pass_check) {
                session_start();
                $_SESSSION['uid'] = $data['uid'];
                $_SESSSION['fname'] = $data['fname'];
                $_SESSSION['username'] = $data['username'];

                header("Location: ../profile.php?login=Success");
                exit();

            } else {

                header("Location: ../login.php?error=InvalidPassword");
                exit();
            }
        }
    }

} else {

    header("Location: ../login.php");
    exit();
}
