<?php
include('../control/registrationcheck.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="../js/registration_validation.js"></script>
    <?php
    $msg = "";
    $validatename = "";
    $validateemail = "";
    $validatefname = "";
    $validatepass = "";
    $validatecpass = "";
    $validateradio = "";
    $birthday = "";
    $gender = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fname = $_REQUEST["fname"];
        $uname = $_REQUEST["uname"];
        $email = $_REQUEST["email"];
        $pass = $_REQUEST["pass"];
        $cpass = $_REQUEST["cpass"];

        $pattern1 = "/^[0-9a-zA-Z-_]/";


        if (empty($uname) || empty($email) || empty($fname) || empty($pass) || empty($cpass)) {
            $msg = "All fields are requied";
        } else if ((strlen($uname) < 5) || (!preg_match("/^[a-zA-Z0-9_]+((\.(-\.)*-?|-(\.-)*\.?)[a-zA-Z0-9_]+)*$/", $uname))) {
            $msg = "your user name name should be contain 5 characters and alpha numeric characters, period, dash or underscore";
        } else if ((strlen($pass) < 8) && (strlen($pass) < 8)) {
            $msg = "your password should be contain 8 characters";
        } else if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) {
            $msg = "Email address must contain @";
        } else if (!isset($_REQUEST["gender"])) {
            $msg = "you have to select gender";
        } else if ($pass != $cpass) {
            $msg = "you have to write both password correctly";
        } else if (!isset($_REQUEST["birthday"])) {
            $msg = "you have to select birthday";
        } else {
            echo "Output";
            $validatefname = "your full name is " . $fname;
            $validateemail = "your email is " . $email;
            $validatename = "your name is " . $uname;
            $validatepass = "your password is " . $pass;
            $validatecpass = "your password is " . $cpass;
            $gender = "your gender is " . $_REQUEST["gender"];
            $birthday = "your birthday is " . $_REQUEST["birthday"];
        }
    }

    ?>

    <title>Registration Page</title>
</head>

<body>

    <h1>Registration</h1>
    <p id="error">
    </p>
    <br>
    <br>
    <?php echo $msg; ?>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" onsubmit=" return validateForm()" method="post">
        <table>
            <tr>
                <td>
                    First Name:
                </td>
                <td>
                    <input type="text" id="fname" name="fname">
                </td>
            </tr>
            <tr>
                <td>
                    Email:
                </td>
                <td>
                    <input type="text" id="email" name="email">
                </td>
            </tr>
            <tr>
                <td>
                    User Name:
                </td>
                <td>
                    <input type="text" id="uname" name="uname">
                </td>
            </tr>
            <tr>
                <td>
                    Password:
                </td>
                <td>
                    <input type="password" id="pass" name="pass">
                </td>
            </tr>
            <tr>
                <td>
                    Confirm Password:
                </td>
                <td>
                    <input type="password" id="cpass" name="cpass">
                </td>
            </tr>
            <tr>
                <td>
                    Gender:
                </td>
                <td>
                    <input type="radio" id="male" name="gender" value="male"> Male
                    <input type="radio" id="female" name="gender" value="female">Female
                    <input type="radio" id="other" name="gender" value="other">Other
                </td>
            </tr>
            <tr>
                <td>
                    Date of Birth:
                </td>
                <td>
                    <input type="date" id="birthday" name="birthday">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </td>
            </tr>

        </table>
    </form>

    <?php echo $validatefname; ?> <br>
    <?php echo $validateemail; ?> <br>
    <?php echo $validatename; ?> <br>
    <?php echo $validatepass; ?><br>
    <?php echo $validatecpass; ?><br>
    <?php echo $gender; ?><br>
    <?php echo $birthday; ?><br>
</body>

</html>