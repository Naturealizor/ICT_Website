<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    
</head>  
    <body>
                
        <!--Header-->
        <header>
        

        <!--Logo-->
        <div id="logo">    
        <h1>IBakeICT</h1>
        </div>

        <!--Nav-->

        <!-- <nav id="nav"> -->
        <!-- <li> <a href="Social_Media/Ashley%20(@ashesthehuman)%20%E2%80%A2%20Instagram%20photos%20and%20videos.html"><u>Instagram</u></a></li>  -->
        <!-- This is Ashley's, delete before turning int -->
        <!-- <li> <a href="Social_Media/Ashley%20Vieux%20(@ashesvieux)%20_%20Twitter.html"><u>Twitter</u></a></li>  -->
        <!-- This is Ashley's, delete before turning int -->

        <nav id="navi">
        <h2>Links to each page</h2>
        <li> <a href="index.php"><u>Home</u></a></li><br>
        <li> <a href="gallery/gallery_home.php"><u>Gallery</u></a></li><br>
        <li> <a href="ordering_screen/index.php"><u>Shop</u></a></li><br>
        <li> <a href="shopping_cart/index.php"><u>Cart</u></a></li><br>
        <li> <a href=><u>Shop</u></a></li>

        </nav>

        </div>
        </header>
        <main>
            
            <div class="info" id="mission">
            <h2>IBakeICT Mission</h2>
            <p>To provide the best damn cookies in all of Wichita.</p>
            </div>
            
            <div class="login" id="signup">
            <h3>Login or Sign up for an account here</h3>
            <form action="../index.php" method="post">
                <label for="userName"> Name:</label> 
                <input type="text" name="userName" value="test@test.com" id="userName">
                <br><br>
                <label for="password"> Password:</label> 
                <input type="password" name="password" value="test" id="password">
                
                <br>
                <br>
                <input type="submit" name="login" value="Login">
                <input type="hidden" name="action" value="login">
                <input type="submit" name="signup" value="Sign up">
            </form>
                
            
                </div>
        </main>


