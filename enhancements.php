<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description"    content="Enhancements Page">
    <meta name="keywords"       content="HTML, CSS, PHP">
    <meta name="author"         content="Trong Hieu Huynh">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enhancements - ITJobFinder</title>
    <link href="styles/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Limelight&display=swap" rel="stylesheet">
</head>
<body>
<?php
    include "header.inc";
?>
<main>
    <h1>Enhancements</h1>

    <div id="enhancements">
        <dl>
            <dt>Enhancements</dt>
            <dd>Animations, JavaScript, Validate Login</dd>
            <dt>Purpose</dt>
            <dd>Animations: Smoother transition and more interactive interface <br>
                JavaScript: Automatically chooses job when put in correct job reference number and vice versa <br>
                Validate Login: Allows access to manage EOIs page when put in correct username and password
            </dd>
            <dt>Can be found on</dt>
            <dd>Animations: <a href="index.php">Index</a>, <a href="jobs.php">Jobs</a>, 
                <a href="apply.php">Apply</a>, <a href="about.php">About, 
                    <a href="enhancements.php">Enhancements</a></a> <br>
                JavaScript: <a href="apply.php">Apply (Job Details Section)</a> <br>
                Validate Login: <a href="admin.php">Admin</a>
            </dd>
            <dt>Where I learned it from</dt>
            <dd><a href="https://youtu.be/NXe-Xe7VGAw?si=uKTaq-sja527KK4r">Sleek Fade-Down Animation with CSS - ByteGrad</a></dd>
        </dl>
    </div>
</main>
<?php
    include "footer.inc";
?>
</body>
</html>