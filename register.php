<?php
    include("connection.php");

    $first = $_POST['name'];
    $middle = $_POST['mid'];
    $last = $_POST['last'];
    $age = $_POST['age'];
    $mobile = $_POST['mob'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $add = $_POST['add'];
    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $role = $_POST['role'];

    if($cpass!=$pass){
        echo '<script>
                alert("Passwords do not match!");
                window.location = "../routes/register.php";
            </script>';
    }
    else{
        move_uploaded_file($tmp_name,"../uploads/$image");
        $insert = mysqli_query($connect, "insert into user (name, middle, last, age, mobile, password, address, photo, status, votes, role) values('$first', '$middle', '$last', '$age','$mobile', '$pass', '$add', '$image', 0, 0, '$role') ");
        if($insert){
            echo '<script>
                    alert("Registration successfull!");
                    window.location = "../routes/contest.php";
                </script>';
        }
    }

if($role= '1'){
    move_uploaded_file($tmp_name,"../uploads/$image");
    $insert = mysqli_query($connect, "insert into user (name, middle, last, age, mobile, password, address, state, photo, status, votes, role) values('$first', '$middle', '$last','$age', '$mobile', '$pass', '$add' , '$image', 0, 0, '$role') ");
    if($insert){
        echo '<script>
                alert("Registration successfull!");
                window.location = "../routes/contest.php";
            </script>';
    }
}
    
?>