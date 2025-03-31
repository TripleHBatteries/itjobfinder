<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description"    content="About Page">
    <meta name="keywords"       content="HTML, CSS, PHP">
    <meta name="author"         content="Trong Hieu Huynh">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - ITJobFinder</title>
    <link href="styles/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Limelight&display=swap" rel="stylesheet">

    <style>
        main {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 70vh;
        }
        .loginbox {
            width: 850px;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }

        .loginbox input[type="text"], .loginbox input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            box-sizing: border-box;
            border: 1px solid #124559;
            border-radius: 5px;
        }
        .loginbox button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #124559;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        .loginbox button:hover {
            background-color:rgb(12, 40, 51);
        }
    </style>
</head>
<body>
<?php
    include "header.inc";
?>
<main>
    <div class="loginbox">
        <h1>Login</h1>
        <form id="login" method='post' action='authenticate.php'>
            <input type="text" id="username" name="username" placeholder="Username" required> <br>
            <input type="password" id="password" name="password" placeholder="Password" required> <br>
            <button type="submit">Login</button>
        </form>
    </div>
</main>
<?php
    include "footer.inc";
?>
</body>
</html>