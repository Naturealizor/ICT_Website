<?php
    // require_once('model/secure_connection.php');
?>
<html>
    <head>
    <title>Create Your Account</title>
        <link rel="stylesheet" type="text/css" href="../CSS/style.css">
    </head>
    <body>
        <h1>IBakeICT</h1>
        <h2>Register Your Account!</h2>

        <form method="post" action="register.php">
            <!-- <?php include('errors.php'); ?> -->
            <div class="input_group">
            <label>Username:</label>
            <input type="username" name="username" value="<?php echo $username; ?>">
            </div>
            <br>
            <div class="input_group">
            <label>Email:</label>
            <input type="email" name="email" value="<?php echo $email; ?>">
            </div>
            <br>
            <div class="input_group">
            <label>Password:</label>
            <input type="password" name="password_1">
            </div>
            <br>
            <div class="input_group">
            <label>Confirm Password:</label>
            <input type="password" name="password_2">
            </div>
            <br>
            <div class="input_group">
            <button type="submit" class="btw" name="reg_user">Register</button>
            </div>
        </form>
    </body>
    <footer>
        <?php include("../view/footer.php"); ?>
    </footer>   
</html>