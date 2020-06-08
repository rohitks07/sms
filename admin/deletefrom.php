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
    $id  = $_REQUEST['ids'];

    $query = "DELETE FROM `students` WHERE `id`='$id'"; 
    $run = mysqli_query($conn,$query);

    if($run == true){
?>
    <script>
        alert('Student delete Sussessfully');
        <?php header('location:deletestudent.php'); ?>
        
    </script>
<?php
    }
?>