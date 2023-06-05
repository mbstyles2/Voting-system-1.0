<?php
    session_start();
    include("connection.php");

    $mobile = $_POST['mob'];
    $pass = $_POST['pass'];
    $role = $_POST['role'];
    
    $check = mysqli_query($connect, "select * from user where mobile='$mobile' and password='$pass' and role='$role'");

    if(mysqli_num_rows($check)>0){
        $get = mysqli_query($connect, "select name, photo, votes, id from user where role=1 ");
        if(mysqli_num_rows($get)>0){
            $groups = mysqli_fetch_all($get, MYSQLI_ASSOC);
            $_SESSION['groups'] = $groups;
        }
        $data = mysqli_fetch_array($check);
        $_SESSION['id'] = $data['id'];
        $_SESSION['status'] = $data['status'];
        $_SESSION['data'] = $data;

        echo '<script>
                window.location = "../routes/contest.php";
            </script>';
    
    }


    else{
        echo '<script>
                alert("Invalid credentials!");
                window.location = "../";
            </script>';
    }
    


    
?>