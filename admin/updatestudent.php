<?php
    session_start();
    if(isset($_SESSION['uid'])){
    }
    else{
        header('location: ../login.php');
    }
include('header.php');
?>
    <div class="admintitle" align="center">
        <h1><u>Search Student Details</u></h1>
        <form method="post" action="updatestudent.php" autocomplete="off">
            <table>
                <tr>
                    <td>Standard</td>
                    <td><input type="number" name="stds" min="1" max="12" placeholder="Std" required></td>
                </tr>
                <tr>
                    <td>Student Name</td>
                    <td><input type="text" name="s_name" placeholder="Student Name" required></td>
                </tr>
                <tr>
                    <td><a href="admindash.php"><input type="button" value="Back"></a></td>
                    <td><input type="submit" name="submit" value="Get Details"></td>
                </tr>
            </table>
        </form> 
    </div>
    

<table align="center" border="1" style="width:80%; margin-top:10px;">
        <tr style="background-color: aqua;">
            <th>SR No.</th>
            <th>Roll No.</th>
            <th>Standard</th>
            <th>Images</th>
            <th>Student Name</th>
            <th>City </th>
            <th>Edit</th>
        </tr>
        
<?php
    include('../dbconn.php');
    if(isset($_POST['submit'])){
        $stu_stds = $_POST['stds'];
        $stu_name = $_POST['s_name'];
        
        $query ="SELECT * FROM `students` WHERE `standard` = '$stu_stds' AND  `student_name` LIKE '%$stu_name%'";
        $execute = mysqli_query($conn,$query);
        
        
        if(mysqli_num_rows($execute)< 1){
            echo "<tr><td colspan='7' align='center'>No recored found</td></tr>";
        }
        else{
            $count = 0;
            while($row = mysqli_fetch_assoc($execute)) 
            {
                $count++;
?>          
            <tr style="background-color:rgb(181, 211, 211);">    
                <td><?php echo $count ?></td>
                <td><?php echo $row['rollno'] ?></td>
                <td><?php echo $row['standard'] ?></td>
                <td><img src="../dataimages/<?php echo $row['images'] ?>" style="max-width:50px;"> </td>
                <td><?php echo $row['student_name'] ?></td>
                <td><?php echo $row['student_city'] ?></td>
                <td><a href="info_student.php?id=<?php echo $row['id'] ?>" >Edit</a></td> 
            </tr>

                <?php
            }
        }
            
    }
?>
</table>