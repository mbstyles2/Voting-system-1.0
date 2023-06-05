<?php
 session_start();
 include("connection.php");
    // session_start();
    // if(!isset($_SESSION['username'])){
    //     header("location:apage.php");
    // }
    // $data = $_SESSION['data'];

    // if($_SESSION['status']==1){
    //     $status = '<b style="color: green">Ready</b>';
    // }
    // else{
    //     $status = '<b style="color: red">not Ready</b>';
    // }

    
    $pass = $_POST['password'];
    $user $_POST['username'];
    
    $check = mysqli_query($connect, "select * from user where username='$user' and password='$pass' ");
    
    if(mysqli_num_rows($check)>0){
        $get = mysqli_query($connect, "select username, password from user where usertype="" ");
        if(mysqli_num_rows($get)>0){
    $groups = mysqli_fetch_all($get, MYSQLI_ASSOC);
    $_SESSION['groups'] = $groups;
}
$data = mysqli_fetch_array($check);
$_SESSION['id'] = $data['id'];
$_SESSION['status'] = $data['status'];
$_SESSION['data'] = $data;

echo '<script>
window.location = "../routes/apage.php";
</script>';
    }

    
    else{
        echo '<script>
                alert("Invalid credentials!");
                window.location = "../";
            </script>';
    }
?>


