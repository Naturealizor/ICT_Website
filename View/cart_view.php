<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        h1 {
            text-align: center;
            font-family: Charcoal, Impact, sans-serif;
            padding: 0px;
            font-size: 500%;
            background-color: lightgreen; 
    
        }
        div.gallery {
            margin: 18px;
            border: 1px solid #ccc;
            float: left;
            width: 400px;
        }

        div.gallery:hover {
            border: 1px solid #777;
        }

        div.gallery img {
            width: 100%;
            height: auto;
        }

        div.desc {
            padding: 15px;
            text-align: center;
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

    </style>

</head>

<body>
    <h1>Gallery</h1>

    <div class="gallery">
        <a target="_blank" href="../images/big_foot.jpg">
            <img src="../images/big_foot.jpg" alt="Big Foot" width="300" height="200">
        </a>
        <div class="desc">Add a description of the image here</div>
    </div>

    <div class="gallery">
        <a target="_blank" href="../images/cookie_dress.jpg">
            <img src="../images/cookie_dress.jpg" alt="Dress" width="300" height="200">
        </a>
        <div class="desc">Add a description of the image here</div>
    </div>

    <div class="gallery">
        <a target="_blank" href="../images/dognut.jpg">
            <img src="../images/dognut.jpg" alt="Dognuts" width="300" height="200">
        </a>
        <div class="desc">Add a description of the image here</div>
    </div>

    <div class="gallery">
        <a target="_blank" href="../images/just_a_cookie.jpg">
            <img src="../images/just_a_cookie.jpg" alt="Just a cookie" width="300" height="200">
        </a>
        <div class="desc">Add a description of the image here</div>
    </div>
    
    <div class="gallery">
        <a target="_blank" href="../images/strawberry.jpg">
            <img src="../images/strawberry.jpg" alt="Strawberry" width="300" height="200">
        </a>
        <div class="desc">Add a description of the image here</div>
    </div>


</body>

</html>
<?php include ('footer.php') ?>
