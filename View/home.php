<?php include("header.php"); ?>
        <header>
            
        
        <div id="logo">    
            <h1>IBakeICT</h1>
        </div>

        </header>
    <main>
            
        <!--Nav-->
        <nav id="navi">
        <h2>Links to each page</h2>
        <li> <a href="Index.php"><u>Home</u></a></li><br>
        <li> <a href="view/gallery_view.php"><u>Gallery</u></a></li><br>
        <li> <a href="view/cart_view.php"><u>Cart</u></a></li><br>
        
        </nav>

        <div id="mission">
            <h2>IBakeICT Mission</h2>
            <p>To provide the best damn cookies in all of Wichita. I've been baking custom cookies for quite a while now
                making anything your celebration needs. While you're here, take a look through the gallery to see some of the
                cookies I've made. </p>
                <p>There's also a link to the shop off to your left if you feel like grabbing a few. If you
                would like to join our mailing list or just create an account, you can login in or sign up over to the right!</p>
            </div>
            
            <div id="signup">
            <h3>Login or Sign up for an account here</h3>
            <form action="." method="post">
                <label for="userName"> Name:</label> 
                <input type="text" name="userName" value="" id="userName" required>
                <br>
                <br>
                <label for="password"> Password:</label> 
                <input type="password" name="password" value="" id="password" required>
                <br>
                <br>
                <input type="submit" name="login" value="Login">
                <input type="hidden" name="action" value="login">
                </form>
                
                <form action="view/signup_view.php" method="post">
                <input type="submit" name="registration_page" value="Sign up">
            </form>
                </div>
<?php include("footer.php"); 
?>