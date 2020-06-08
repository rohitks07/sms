<?php
    session_start();
    if(isset($_SESSION['uid'])){
    }
    else{
        header('location: ../login.php');
    }
include('header.php');
error_reporting(0);
?>
    <div class="admintitle" align="center">
        <h1><u>Add Student Details</u></h1>
        <form method="post" action="addstudent.php" enctype="multipart/form-data" autocomplete="off">
            <table>
                <tr>
                    <td>RollNO.</td>
                    <td><input type="text" name="rollno" placeholder="Roll No." required ></td>
                </tr>
                <tr>
                    <td>Student Name</td>
                    <td><input type="text" name="s_name" placeholder="Student Name" required></td>
                </tr>
                <tr>
                    <td>Student City</td>
                    <td><input type="text" name="s_city"  placeholder="Student City" required autocomplete="off"></td>
                </tr>
                <tr>
                    <td>Parant Contact</td>
                    <td><input type="text" name="p_contact"  maxlength="10" placeholder="Parant Contact" required></td>
                </tr>
                <tr>
                    <td>Standard</td>
                    <td><input type="text" name="stds" placeholder="Standard" required></td>
                </tr>
                <tr>
                    <td>Photo</td>
                    <td><input type="file" name="photo" required></td>
                </tr>
                <tr>
                    <td><a href="admindash.php"><input type="button" value="Back"></a></td>
                    <td><input type="submit" name="submit" value="Add Student"></td>
                </tr>
            </table>
        </form> 
    </div>
</body>

<?php
include('../dbconn.php');
    if(isset($_POST['submit'])){
        
        $rollno   =$_POST['rollno'];
        $stuname  =$_POST['s_name'];
        $stucity  =$_POST['s_city'];
        $parantcontact =$_POST['p_contact'];
        $standard  =$_POST['stds'];
        $studentimg  = $_FILES['photo']['name'];
        $temp_name  = $_FILES['photo']['tmp_name'];
        
        // echo $temp_name;
        // die;
        move_uploaded_file($temp_name,"../dataimages/$studentimg");

    $query = "INSERT INTO  students (rollno, student_name, student_city, pcontact,standard,images) VALUES 
    ('$rollno', '$stuname','$stucity','$parantcontact','$standard','$studentimg')";
    // echo $query;
    $run = mysqli_query($conn,$query);

    if($run == true){
?>
        <script>
            alert('Student Added Sussessfully');
        </script>
    <?php
    }
}
    
    ?>
</html>