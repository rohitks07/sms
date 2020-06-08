<?php
    session_start();
    if(isset($_SESSION['uid'])){
    }
    else{
        header('location: ../login.php');
    }
include('header.php');
include('../dbconn.php');
?>
    <div class="admintitle" align="center">
        <h1><u>Delete Student Details</u></h1>
        <form method="post" action="deletefrom.php" autocomplete="off">
            <table align="center" border="0.5px"  style="width:80%; margin-top:10px;">
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
                        $query ="SELECT * FROM `students`";
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
                                <tr align="center">    
                                    <td><?php echo $count ?></td>
                                    <td><?php echo $row['rollno'] ?></td>
                                    <td><?php echo $row['standard'] ?></td>
                                    <td><img src="../dataimages/<?php echo $row['images'] ?>" style="max-width:50px;"> </td>
                                    <td><?php echo $row['student_name'] ?></td>
                                    <td><?php echo $row['student_city'] ?></td>
                                    <td><a href="deletefrom.php?ids=<?php echo $row['id'] ?>" >Delete</a></td> 
                                </tr>                               
                                <?php
                            }
                        }
                                ?>
            </table>
        </form> 
    </div>


    

