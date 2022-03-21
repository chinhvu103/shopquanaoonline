<?php
require 'includes/init.php';
// IF USER MAKING SIGNUP REQUEST
if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
    $result = $user_obj->singUpUser($_POST['username'], $_POST['email'], $_POST['password']);
}
// IF USER ALREADY LOGGED IN
if (isset($_SESSION['email'])) {
    header('Location: Home-user.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Login.css">
    <title>Form-Create Account</title>
</head>

<body>
    <div class="main_container login_signup_container">
        <h1>Sign Up</h1>
        <form action="" method="POST" novalidate>
            <label for="username">Name</label>
            <input type="text" id="username" name="username" spellcheck="false" placeholder="Enter your user name" required>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" spellcheck="false" placeholder="Enter your email address" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
            <input type="submit" value="Sign Up">
            <a href="Login.php" class="form_link">Login</a>
        </form>
        <div>
            <?php
            if (isset($result['errorMessage'])) {
                echo '<p class="errorMsg">' . $result['errorMessage'] . '</p>';
            }
            if (isset($result['successMessage'])) {
                echo '<p class="successMsg">' . $result['successMessage'] . '</p>';
            }
            ?>
        </div>
</body>

</html>