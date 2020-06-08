<?php
    session_start();
    if(isset($_SESSION['uid'])){
        header('location:admin/admindash.php');   
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
        <h2 align="center">Admin Login</h2>
    <form action="login.php" method="post" autocomplete="off">
        <table align="center">
            <tr>
                <td>User Name:</td><td><input type="text" name="name" autofocus></td>
            </tr>
            <tr>
                <td>Password:</td><td><input type="password" name="pass"></td>
            </tr>
            <tr>
                <td><input type="button" name="remember" value="Remember Me"></td>
                <td align="center"><input type="submit" name="submit" value="Login"></td>
            </tr>
        </table>
    </form>    
</body>

<?php
include('dbconn.php');
    if(isset($_POST['submit'])){
        $username =$_POST['name'];
        $password =$_POST['pass'];

        $query = "SELECT * FROM `admin` WHERE `username`='$username' and `password`='$password'";
        $run = mysqli_query($conn,$query);
        $check = mysqli_num_rows($run);

        if($check < 1){
            ?>
            <script>alert('User name and password not matched');
                window.open('login.php','_self');
            </script>
            <?php
        }
        else{
            $data = mysqli_fetch_assoc($run);
            $id= $data['id'];
            $_SESSION['uid']=$id;
            header('location:admin/admindash.php');           
        }

    }
?>
</html>