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

    //this is for fateching recored of db
    $id= $_GET['id'];
    // echo $id;

    $quary="SELECT * FROM `students` WHERE `id`= '$id'";
    $run = mysqli_query($conn,$quary);
    $info_for_update = mysqli_fetch_assoc($run);
?>
    <div class="admintitle" align="center">
        <h1><u>Update Student Details</u></h1>
        <form method="post" action="updatedata.php" enctype="multipart/form-data" autocomplete="off">
            <table>
                <tr>
                    <td>RollNO.</td>
                    <td><input type="text" name="rollno" value="<?php echo $info_for_update['rollno'];?>" required ></td>
                </tr>
                <tr>
                    <td>Student Name</td>
                    <td><input type="text" name="s_name" value="<?php echo $info_for_update['student_name'];?>" required></td>
                </tr>
                <tr>
                    <td>Student City</td>
                    <td><input type="text" name="s_city" value="<?php echo $info_for_update['student_city'];?>" required autocomplete="off"></td>
                </tr>
                <tr>
                    <td>Parant Contact</td>
                    <td><input type="text" name="p_contact" value="<?php echo $info_for_update['pcontact'];?>" required></td>
                </tr>
                <tr>
                    <td>Standard</td>
                    <td><input type="text" name="stds" value="<?php echo $info_for_update['standard'];?>" required></td>
                </tr>
                <tr>
                    <td>Photo</td>
                    <td><input type="file" name="photo" required></td>
                </tr>
                <tr>
                    <input type="hidden" name="id" value="<?php echo $info_for_update['id'];?>">
                    <td><a href="admindash.php"><input type="button" value="Back"></a></td>
                    <td><input type="submit" name="submit" value="Update Student"></td>
                </tr>
            </table>
        </form> 
    </div>
</body>
