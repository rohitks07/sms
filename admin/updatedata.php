<?php
    session_start();
    if(isset($_SESSION['uid'])){
    }
    else{
        header('location: ../login.php');
    }
include('header.php');
include('../dbconn.php');
error_reporting(0);

    // for update information of database  
    $id  =$_POST['id'];
    $rollno   =$_POST['rollno'];
    $stuname  =$_POST['s_name'];
    $stucity  =$_POST['s_city'];
    $parantcontact =$_POST['p_contact'];
    $standard  =$_POST['stds'];
    $studentimg  = $_FILES['photo']['name'];
    $temp_name  = $_FILES['photo']['tmp_name'];

    move_uploaded_file($temp_name,"../dataimages/$studentimg");

    $query = "UPDATE `students` SET `rollno`='$rollno',`student_name`='$stuname',
            `student_city`='$stucity',`pcontact`='$parantcontact',`standard`='$standard',`images`='$studentimg' WHERE `id`='$id'";
    $run = mysqli_query($conn,$query);

    if($run == true){
?>
    <script>
        <?php header('location:updatestudent.php'); ?>
        alert('Student Update Sussessfully');
        
    </script>
<?php
    }
?>