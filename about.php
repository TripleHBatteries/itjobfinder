<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description"    content="About Page">
    <meta name="keywords"       content="HTML, CSS, PHP">
    <meta name="author"         content="Trong Hieu Huynh">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - ITJobFinder</title>
    <link href="styles/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Limelight&display=swap" rel="stylesheet">
</head>
<body>
<?php
    include "header.inc";
?>
<main>
    <h1>About Us!</h1>

    <div id="info">
        <p><h1>Trong Hieu Huynh</h1></p>
        <img src="images/personal profile.jpg" alt="Personal Avatar">
        <dl>
            <dt>Role</dt>
            <dd>Designer and Developer</dd>
            <dt>Tutor</dt>
            <dd>Mr. Tristan Nguyen</dd>
            <dt>Email</dt>
            <dd><a href="mailto:105551833@student.swin.edu.au">105551833@student.swin.edu.au</a></dd>
            <dt>Age</dt>
            <dd>19</dd>
            <dt>Birthday</dt>
            <dd>February 7th, 2006</dd>
            <dt>Homeplace</dt>
            <dd>Ho Chi Minh City</dd>
            <dt>Favorite Food</dt>
            <dd>Takoyaki, Kimchi</dd>
            <dt>Favorite Song</dt>
            <dd>visions - Charli xcx</dd>
        </dl>

        <h2>My Timetable</h2>
        <table>
            <tr>
                <th>Day</th>
                <th>Monday</th>
                <th>Tuesday</th>
                <th>Wednesday</th>
                <th>Thursday</th>
                <th>Friday</th>
                <th>Saturday</th>
                <th>Sunday</th>
            </tr>
            <tr>
                <td>Morning</td>
                <td>7am-11am <br> TNE10006 - Networks and Switching</td>
                <td></td>
                <td>7am-11am <br> COS20007 - Object Oriented Programming</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Noon</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>Afternoon</td>
                <td>1pm-5pm <br> COS10026 - Computing Technology Inquiry Project</td>
                <td></td>
                <td>1pm-4pm <br> VOV101 - Vovinam 1</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
        <br>
    </div>
</main>
<?php
    include "footer.inc";
?>
</body>
</html>