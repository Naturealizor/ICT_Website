<?php
    // require_once('model/secure_connection.php');
?>
<html>

<head>
    <title>Create Your Account</title>
    <style>
        body {
            font-size: 100%;
            font-family: Arial, sans-serif;
            margin: auto;
            line-height: normal;
            text-align: center;
            }
        h2 {
            font-size: 2em;
            text-align: left;
            clear: left;
            text-align: center;
            }
        label {
            font-size: 1.5em;
            margin:auto;
            padding: 10px;
            }
            footer {
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                text-align: center;
                margin: auto;
                background-color: rgb(196, 189, 197);
            } 
            h1 {
                text-align: center;
                font-family: Charcoal, Impact, sans-serif;
                padding: 0px;
                font-size: 500%;
                background-color: lightgreen; 

            }
        
        </style>
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
