<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="animations.css">  
    <link rel="stylesheet" href="main.css">  
    <link rel="stylesheet" href="login.css">
    <title>Personal Information</title>
    <style>
        body {
            background-image: url('Wallpaper.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-color: rgba(255, 255, 255, 0.3); 
            background-blend-mode: overlay;
        }
    </style>
</head>
<body>
<?php
session_start();

if ($_POST) {
    $_SESSION['personal'] = [
        'fname' => $_POST['fname'],
        'lname' => $_POST['lname'],
        'address' => $_POST['address'],
        'nic' => $_POST['nic'],
        'dob' => $_POST['dob'],
    ];

    // Redirect to the account creation page
    header('Location: createAccount.php');
    exit();
}
?>
    <center>
    <div class="container">
        <table border="0" style="width: 69%;">
            <tr>
                <td colspan="2">
                    <p class="header-text">Personal Information</p>
                </td>
            </tr>
            <tr>
                <form action="" method="POST">
                    <td class="label-td" colspan="2">
                        <label for="fname" class="form-label">First Name:</label><input type="text" name="fname" class="input-text" placeholder="First name" required>
                    </td>
            </tr>
            <tr>
                    <td class="label-td" colspan="2">
                        <label for="lname" class="form-label">Last Name:</label><input type="text" name="lname" class="input-text" placeholder="Last name" required>
                    </td>
            </tr>
            <tr>
                    <td class="label-td" colspan="2">
                        <label for="address" class="form-label">Address:</label><input type="text" name="address" class="input-text" placeholder="Address" required>
                    </td>
            </tr>
            <tr>
                    <td class="label-td" colspan="2">
                        <label for="nic" class="form-label">Aadhar Number:</label><input type="text" name="nic" class="input-text" placeholder="Ex:0000000000" required>
                    </td>
            </tr>
            <tr>
                    <td class="label-td" colspan="2">
                        <label for="dob" class="form-label">Date of Birth</label><input type="date" name="dob" class="input-text" placeholder="ex:yyyy-mm-dd" required>
                    </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Next" class="login-btn btn-primary btn">
                </td>
            </tr>
            </form>
        </table>
    </div>
    </center>
</body>
</html>
