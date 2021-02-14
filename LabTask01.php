<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>
<body>





<h3>Registration</h3>
<table>
    <tr>
   <td>First Name:</td>
<td><input type="text" id="name" name="Name"><br></td>
    </tr>
<hr>
    <tr>
   <td>Email:</td>
<td><input type="email" id="email" name="email"><br></td>
    </tr>

    <tr>
   <td>User Name:</td>
<td><input type="text" id="uname" name="uname"><br></td>
    </tr>

    <tr>
   <td>Password:</td>
<td><input type="password" id="password" name="password"><br></td>
    </tr>

    <tr>
   <td>Confirm Password:</td>
<td><input type="Cpassword" id="password" name="Cpassword"><br></td>
    </tr>

    <tr> 
    <td><br>
        Gender <br>
    <input type="radio" id="male" name="Gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="Gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="Gender" value="other">
        <label for="other">Other</label>
    </td>
    </tr>
<tr>
    <td>
       <br> <label for="Date Of Birth">Date Of Birth</label>
        <input type="date" id="Date Of Birth"> 
    </td>
</tr> <br>
    
    <tr> 
            <td> <br>
            <input type="submit" value="Submit">
            <input type="reset">
            </td>
        </tr>
        
</table>

</body>
</html>