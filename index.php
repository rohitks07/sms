<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student management system</title>
</head>
<body>
    <h3 align="right"><a href="login.php"> Admin Login</a><h3>
    <h1 align="center">Welcome to Student management System<h1>

    <form action="" method="">
        <table border="1" align="center" style="width:auto;">
            <thead>
                <tr> 
                    <td colspan="2" align="center">Student Information</td>
                </tr>
            </thead>
            <tbody>
                <tr> 
                    <td>Choose Standards</td>
                    <td align="center">
                        <select name="stds" id="">
                            <option value="1"> 1st </option>
                            <option value="2"> 2st </option>
                            <option value="3"> 3st </option>
                            <option value="4"> 4st </option>
                            <option value="5"> 5st </option>
                            <option value="6"> 6st </option>
                            <option value="7"> 7st </option>
                            <option value="8"> 8st </option>
                            <option value="9"> 9st </option>
                        </select>
                    </td>
                </tr>
                <tr> 
                    <td>Enter Roll No.</td>
                    <td><input type="text" name="rollno"> </td>
                </tr>
                <tr> 
                    <td colspan="2" align="center"><input type="submit" name="rollno" value="Show Details"> </td>
                </tr>
            </tbody>
        </table>
    </form>
</body>
</html>