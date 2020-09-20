<?php

if(isset($_POST['signup-submit'])) {
    require 'dbhandler.php';

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['con-password'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    if($password != $confirmPassword) {
        header("Location: ../signup.php?error=diffPasswords&fname=".$fname."&lname=".$lname."&username=".$username);
        exit();
    } else {
        $sql = "SELECT username FROM users WHERE username=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../signup.php?error=SqlInjection");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s");
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);

            $check = mysqli_stmt_num_rows($stmt);
            if($check > 0) {
                header("Location: ../signup.php?error=UsernameTaken");
                exit();
            } else {
                $sql = "INSERT INTO users(lname, fname, email, username, password) VALUES(?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../signup.php?error=SqlInjection");
                    exit();
                } else {
                    $hashedPass = password_hash($password, PASSWORD_BCRYPT);

                    mysqli_stmt_bind_param($stmt, "sssss", $lname, $fname, $email, $username, $hashedPass);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);

                    header("Location: ../login.html?signup=Success");
                    exit();
                }
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }

} else {
    header("Location: ../signup.php");
    exit();
}