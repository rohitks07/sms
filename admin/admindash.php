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
        <h1>Welcome to Admin Dashboard</h1>
        <span><a href="../logout.php" style="float-right;">Logout</a></span>    
    </div>
    <div class="tablecolor">
        <table align="center" border='1'  style="width:20%">
            <thead>
                <tr><th colspan="2">Student Activity </tr>           
            </thead>
            <tbody>
                <tr>
                    <td>1.</td><td><a href="addstudent.php">Added Student Details</a></td>
                </tr>
                <tr>
                    <td>2.</td><td><a href="updatestudent.php">Update Student Details</a></td>
                </tr>
                <tr>
                    <td>3.</td><td><a href="deletestudent.php">Delete Student Details</a></td>
                </tr>
            </tbody>
        </table>
    </div>

</body>
</html>
