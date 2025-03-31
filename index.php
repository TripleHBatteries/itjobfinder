<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description"    content="Home Page">
    <meta name="keywords"       content="HTML, CSS, PHP">
    <meta name="author"         content="Trong Hieu Huynh">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - ITJobFinder</title>
    <link href="styles/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Limelight&display=swap" rel="stylesheet">
</head>
<body>
<?php
    include "header.inc";
?>

<main>
    <div id="purpose">
        <h2>Fulfill Your Dreams with ITJobFinder!</h2>
        <p>Explore our available positions and apply today!</p>
    </div>

    <div>
        <h2>Get Started with These Jobs Below!</h2>
    </div>

    <div class="jobs-container">
        <div class="jobs">
            <img src="images/frontend.png" alt="Frontend Developer image">
            <h3>Frontend Developer</h3>
            <p><strong>Company: </strong>Spring Breakers Inc.</p>
            <p>Responsible for designing and implementing the user interface (UI) and user experience (UX) of websites and applications, ensuring they are visually appealing, responsive, and user-friendly.</p>
            <p><a href="jobs.html">More info here</a></p>
            <p id="apply"><a href="apply.php">Apply now!</a></p>
        </div>
        <div class="jobs">
            <img src="images/manager.png" alt="Project Manager image">
            <h3>Project Manager</h3>
            <p><strong>Company: </strong>Team Aquamarine</p>
            <p>Oversees the planning, execution, and delivery of projects, ensuring they are completed on time, within budget, and meet the desired objectives.</p>
            <p><a href="jobs.html">More info here</a></p>
            <p id="apply"><a href="apply.php">Apply now!</a></p>
        </div>
        <div class="jobs">
            <img src="images/backend.png" alt="Backend Developer image">
            <h3>Backend Developer</h3>
            <p><strong>Company: </strong>Thropp-Upland Studios</p>
            <p>Focuses on server-side logic, databases, and application architecture, ensuring the website or application functions seamlessly and securely.</p>
            <p><a href="jobs.html">More info here</a></p>
            <p id="apply"><a href="apply.php">Apply now!</a></p>
        </div>
    </div> <br>
    <div>
        <h2>Don't just hear from us! Hear from these people!</h2>
    </div>
    <div class="testimonial-container">
        <img src="images/profile1.png" alt="Avatar" style="width:90px">
        <p><span>Richard Colton,</span> Architect at Spring Breakers Inc.</p>
        <p>I used to struggle a lot when it comes to finding a job that I'm satisfied with. But with ITJobFinder, landing a suitable position became stress-free and straightfoward. You're a true game changer, ITJobFinder!</p>
    </div>
    <div class="testimonial-container">
        <img src="images/profile2.png" alt="Avatar" style="width:90px">
        <p><span>Elizabeth Diamanto,</span> Team Aquamarine Sales Representative</p>
        <p>This website sucked. I applied for a job at Pump It Up! and when I went up for an interview, I was greeted by some mutated monster. It was horrible! Would not recommend.</p>
    </div>
    <div class="testimonial-container">
        <img src="images/profile3.png" alt="Avatar" style="width:90px">
        <p><span>K.S.G.</span></p>
        <p>Can I use this for uh... Red Carpet?</p>
    </div>

    <h1> <a href="https://youtu.be/yjUmLTeWKo0">Website Showcase Video</a></h1>
</main>

<?php
    include "footer.inc";
?>
</body>
</html>