<?php
require 'includes/init.php';
// IF USER MAKING LOGIN REQUEST
if (isset($_POST['email']) && isset($_POST['password'])) {
    $result = $user_obj->loginUser($_POST['email'], $_POST['password']);
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
    <title>Form-Login</title>
</head>

<body>
    <div class="main_container login_signup_container">
        <h1>Login</h1>
        <form action="" method="POST">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" spellcheck="false" placeholder="Enter your email address" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
            <input type="submit" value="Login">
            <a href="CreateAcc.php" class="form_link">Sign Up</a>
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
        </form>
    </div>
</body>

</html>