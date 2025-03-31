<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description"    content="Apply Form Page">
    <meta name="keywords"       content="HTML, CSS, PHP">
    <meta name="author"         content="Trong Hieu Huynh">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply - ITJobFinder</title>
    <link href="styles/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Limelight&display=swap" rel="stylesheet">
</head>
<body>
<?php
    include "header.inc";
?>
<main>
    <h1>Application Form</h1>
    <form id="application-form" method="post" action="process_eoi.php" novalidate="novalidate">
        <fieldset>
            <legend>Personal Details</legend>
            <fieldset>
                <legend>Name</legend>
                <p>
                    <label for="firstname">First Name:</label>
                    <input type="text" name="firstname" id="firstname" required="required" pattern="[A-Za-z]{,20}" placeholder="Given name (max 20)">
                    <label for="familyname">Family Name:</label>
                    <input type="text" name="familyname" id="familyname" required="required" pattern="[A-Za-z]{,20}" placeholder="Surname (max 20)">
                </p>
            </fieldset>
            <fieldset>
                <legend>Age</legend>
                <p>
                    <label for="age">Age:</label>
                    <input type="number" name="age" id="age" required="required" placeholder="Enter age...">
                    <label for="dob">D.O.B. (Date of Birth): </label>
                    <input type="date" name="dob" id="dob" required="required">
                </p>
            </fieldset>
            <fieldset>
                <legend>Gender</legend>
                <p>
                    <label>Gender: </label>
                    <label><input type="radio" name="gender" value="male" required="required">Male</label>
                    <label><input type="radio" name="gender" value="female" >Female</label>
                    <label><input type="radio" name="gender" value="nb">Nonbinary</label>
                </p>
            </fieldset>
            <fieldset>
                <legend>Home Address</legend>
                <p>
                    <label for="street">Street Address: </label>
                    <input type="text" name="street" id="street" required="required" maxlength="40" placeholder="max 40">
                    <label for="town">Suburb/Town: </label>
                    <input type="text" name="town" id="town" required="required" maxlength="40" placeholder="max 40">
                    <label for="state">State: </label>
                    <select name="state" id="state">
                        <option value="" selected="selected">--Please Select--</option>
                        <option value="VIC">VIC</option>
                        <option value="NSW">NSW</option>
                        <option value="QLD">QLD</option>
                        <option value="NT">NT</option>
                        <option value="WA">WA</option>
                        <option value="SA">SA</option>
                        <option value="TAS">TAS</option>
                        <option value="ACT">ACT</option>
                    </select>
                    <label for="postcode">Postcode: </label>
                    <input type="text" name="postcode" id="postcode" required="required" pattern="[\d]{,4}">
                </p>
            </fieldset>
            <fieldset>
                <legend>Contact Info</legend>
                <p>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" required="required" placeholder="charlixcx@email.com">
                    <label for="phone">Phone:</label>
                    <input type="text" id="phone" name="phone" pattern="[\d\s]{8,12}" required="required" placeholder="1234567890">
                </p>
            </fieldset>
        </fieldset>
        <fieldset>
            <legend>Job Details</legend>
            <p>
                <label for="jobref">Job Reference Number: </label>
                <input type="text" name="jobref" id="jobref" required="" pattern="[A-Za-z0-9]{5}" placeholder="5 alpha chars..."></p>
            <p><label for="job">You are applying for: </label>
                <select name="job" id="job">
                    <option value="" selected="selected">--Please Select--</option>
                    <option value="FE001">[FE001] Frontend Developer - Spring Breakers Inc.</option>
                    <option value="BE002">[BE002] Backend Developer - Thropp-Upland Studios</option>
                    <option value="WD003">[WD003] Web Developer - Pump It Up!</option>
                    <option value="PM004">[PM004] Project Manager - Team Aquamarine</option>
                    <option value="DOE05">[DOE05] DevOps Engineer - Tick-Tack Industries</option>
                    <option value="DS006">[DS006] Data Scientist - Gellaitry and Pantheress</option>
                    <option value="QCE07">[QCE07] Quality Control Engineer - Headlock Constructions</option>
                    <option value="SR008">[SR008] Sales Representative - Friday Night Solutions</option>
                    <option value="NA009">[NA009] Network Architect - Abracadabra Networks</option>
                </select>
            </p>
            <p><label>Skills: </label>
                <label>HTML</label>
                <input type="checkbox" name="skills[]" value="html" checked="checked">
                <label>CSS</label>
                <input type="checkbox" name="skills[]" value="css">
                <label>PHP</label>
                <input type="checkbox" name="skills[]" value="php">
                <label>JavaScript</label>
                <input type="checkbox" name="skills[]" value="java">
                <label>MySQL</label>
                <input type="checkbox" name="skills[]" value="mysql">
                <label>Python</label>
                <input type="checkbox" name="skills[]" value="python">
                <label>C#</label>
                <input type="checkbox" name="skills[]" value="csharp">
                <label>C++</label>
                <input type="checkbox" name="skills[]" value="c2plus">
                <label>Ruby</label>
                <input type="checkbox" name="skills[]" value="ruby">
                <label>Other Skills</label>
                <input type="checkbox" name="skills[]" id="other_skills_checkbox" value="other">
            </p>
            <p>
                <label for="other_skills">Other:</label>
                <textarea id="other_skills" name="other_skills" rows="5" placeholder="List if chosen 'Other Skills'..."></textarea>
            </p>
        </fieldset>
            <p>
                <button type="submit">Apply</button>
                <button type="reset">Reset Form</button>
            </p>
    </form>
</main>
<script>
    const jobRefInput = document.getElementById('jobref');
    const jobSelect = document.getElementById('job');

    jobRefInput.addEventListener('input', function () {
        const inputValue = jobRefInput.value.trim().toUpperCase();
        let MatchFound = false;

        for (let option of jobSelect.options) {
            if (option.value.toUpperCase() === inputValue) {
                jobSelect.value = option.value;
                MatchFound = true;
                break;
            }
        }

        if (MatchFound) {
            jobRefInput.style.borderColor = "green";
            jobSelect.style.borderColor = "green"
        } else {
            jobRefInput.style.borderColor = "red";
            jobSelect.style.borderColor = "red"
            jobSelect.value = "";
        }
    });
    jobSelect.addEventListener('change', function() {
        const selectedValue = jobSelect.value;
        if (selectedValue === "") {
            jobRefInput.value = ""; 
        } else {
            jobRefInput.value = selectedValue; 
        }
    });
</script>
<?php
    include "footer.inc";
?>
</body>
</html>