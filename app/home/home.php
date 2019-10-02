<?php require "homeconfig.php";?>

<html>
<head>
    <link rel="stylesheet" href="../frameworks/bootstrap.min.css">
    <script type="text/javascript" src="../frameworks/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="../frameworks/bootstrap.min.js"></script>
    <link rel="stylesheet" href="home.css">
</head>

<body>
    <div id="all">
        <?php require "header/header.php"; ?>

        <div class="mid-content">
            <div id="title">O que deseja fazer hoje?</div>
            <div id="mid-box1">
                <div class="actionboxes"></div>
                <div class="actionboxes"></div>
                <div class="actionboxes"></div>
            </div>
        
            <div id="box-mid-2">
                <div class="actionboxes"></div>
                <div class="actionboxes"></div>
                <div class="actionboxes"></div>
            </div>
        <?php require "footer/footer.php"; ?> 
    </div>

</body>
</html>