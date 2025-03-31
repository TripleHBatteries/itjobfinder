<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form Processed - ITJobFinder</title>
    <link href="styles/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Limelight&display=swap" rel="stylesheet">
    <style>
        .error { color: red; }
        .success { color: green; }

        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        ul.error-list {
            list-style-type: none;
            padding: 0;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #124559;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }

        .button:hover {
            background-color:rgb(12, 40, 51);
        }
    </style>
</head>
<body>
    <?php
    include "header.inc";
    ?>

    <main>
    <?php
    // Start the session for error handling
    session_start();

    // Include database connection settings
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "eoi";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Function to sanitize input data
    function sanitise_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Initialize variables
    $errors = [];
    $dobFormatted = null;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Sanitize form inputs
        $jobRefID = sanitise_input($_POST["jobref"] ?? '');
        $firstName = sanitise_input($_POST["firstname"] ?? '');
        $lastName = sanitise_input($_POST["familyname"] ?? '');
        $dateofbirth = sanitise_input($_POST["dob"] ?? '');
        $street = sanitise_input($_POST["street"] ?? '');
        $suburbTown = sanitise_input($_POST["town"] ?? '');
        $state = sanitise_input($_POST["state"] ?? '');
        $postcode = sanitise_input($_POST["postcode"] ?? '');
        $email = sanitise_input($_POST["email"] ?? '');
        $phone = sanitise_input($_POST["phone"] ?? '');
        $skills = isset($_POST['skills']) ? $_POST['skills'] : [];
        $otherSkills = sanitise_input($_POST['other_skills'] ?? '');

        // Validate inputs
        if (empty($jobRefID)) {
            $errors[] = "Job Reference Number is Required!";
        } else if (!preg_match('/^[A-Za-z0-9]{5}$/', $jobRefID)) {
            $errors[] = "Job Reference Number must have exactly 5 alphanumeric characters.";
        }

        if (empty($firstName)) {
            $errors[] = "First Name is Required!";
        } else if (!preg_match('/^[A-Za-z]{1,20}$/', $firstName)) {
            $errors[] = "First Name must be up to 20 alphabetic characters.";
        }

        if (empty($lastName)) {
            $errors[] = "Last Name is Required!";
        } else if (!preg_match('/^[A-Za-z]{1,20}$/', $lastName)) {
            $errors[] = "Last Name must be up to 20 alphabetic characters.";
        }

        if (empty($dateofbirth)) {
            $errors[] = "Date of Birth is Required!";
        } else {
            // Try different date formats
            $dob = DateTime::createFromFormat('d/m/Y', $dateofbirth);
            if (!$dob) {
                $dob = DateTime::createFromFormat('Y-m-d', $dateofbirth);
            }
            
            if (!$dob) {
                $errors[] = "Invalid Date of Birth Format! Please use dd/mm/yyyy!";
            } else {
                $dobFormatted = $dob->format('Y-m-d');
                $today = new DateTime();
                $age = $today->diff($dob)->y;
                if ($age < 15 || $age > 80) {
                    $errors[] = "Age must be between 15 and 80 years.";
                }
            }
        }

        if (empty($street)) {
            $errors[] = "Street Name is Required!";
        } else if (strlen($street) > 40) {
            $errors[] = "Street Name must be up to 40 characters.";
        }

        if (empty($suburbTown)) {
            $errors[] = "Suburb/Town Name is Required!";
        } else if (strlen($suburbTown) > 40) {
            $errors[] = "Suburb/Town must be up to 40 characters.";
        }

        if (empty($state)) {
            $errors[] = "State is Required!";
        } else if (!in_array($state, ['VIC', 'NSW', 'QLD', 'NT', 'WA', 'SA', 'TAS', 'ACT'])) {
            $errors[] = "Invalid State selected.";
        }

        if (empty($postcode)) {
            $errors[] = "Postcode is Required!";
        } else if (!preg_match('/^\d{4}$/', $postcode)) {
            $errors[] = "Postcode must have exactly 4 digits.";
        }

        if (empty($email)) {
            $errors[] = "Email is Required!";
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid Email Format.";
        }

        if (empty($phone)) {
            $errors[] = "Phone Number is Required!";
        } else if (!preg_match('/^[\d\s]{8,12}$/', $phone)) {
            $errors[] = "Phone Number must be 8 to 12 digits (spaces allowed).";
        }

        if (isset($_POST['other_skills_checkbox']) && empty($otherSkills)) {
            $errors[] = "Other Skills Description is required when 'Other' is selected.";
        }

        // Display errors if any
        if (!empty($errors)) {
            echo "<h1>Error in Application</h1>";
            echo "<ul class='error'>";
            foreach ($errors as $error) {
                echo "<li>$error</li>";
            }
            echo "</ul>";
            echo "<a href='apply.php' class='button'>Go Back and Correct Errors</a>";
        } else if ($conn) {
            // Handle skills
            $skill1 = mysqli_real_escape_string($conn, $skills[0] ?? '');
            $skill2 = mysqli_real_escape_string($conn, $skills[1] ?? '');
            $skill3 = mysqli_real_escape_string($conn, $skills[2] ?? '');
            $skill4 = mysqli_real_escape_string($conn, $skills[3] ?? '');
            $skill5 = mysqli_real_escape_string($conn, $skills[4] ?? '');
            $skill6 = mysqli_real_escape_string($conn, $skills[5] ?? '');
            $skill7 = mysqli_real_escape_string($conn, $skills[6] ?? '');
            $skill8 = mysqli_real_escape_string($conn, $skills[7] ?? '');
            $skill9 = mysqli_real_escape_string($conn, $skills[8] ?? '');

            // Create an EOI table if it doesn't exist
            $createTableSQL = "CREATE TABLE IF NOT EXISTS eoi (
                `eoi_number` int AUTO_INCREMENT PRIMARY KEY,
                `jobref_id` varchar(5) NOT NULL,
                `firstname` varchar(20) NOT NULL,
                `lastname` varchar(20) NOT NULL,
                `dob` date NOT NULL,
                `street` varchar(40) NOT NULL,
                `suburb_town` varchar(40) NOT NULL,
                `state` varchar(3) NOT NULL,
                `postcode` int(4) NOT NULL,
                `email` varchar(50) NOT NULL,
                `phone` varchar(12) NOT NULL,
                `skill1` varchar(20),
                `skill2` varchar(20),
                `skill3` varchar(20),
                `skill4` varchar(20),
                `skill5` varchar(20),
                `skill6` varchar(20),
                `skill7` varchar(20),
                `skill8` varchar(20),
                `skill9` varchar(20),
                `other_skills` text,
                `Status` enum('New','Current','Final') NOT NULL DEFAULT 'New'
            );";

            mysqli_query($conn, $createTableSQL);

            // Prepare the SQL query
            $query = "INSERT INTO eoi (jobref_id, firstname, lastname, dob, street, suburb_town, 
                      state, postcode, email, phone, skill1, skill2, skill3, skill4, skill5, skill6, skill7, 
                      skill8, skill9, other_skills) 
                      VALUES ('$jobRefID', '$firstName', '$lastName', '$dobFormatted', '$street', 
                      '$suburbTown', '$state', '$postcode', '$email', '$phone', 
                      '$skill1', '$skill2', '$skill3', '$skill4', '$skill5', '$skill6', '$skill7', 
                      '$skill8', '$skill9', '$otherSkills')";

            // Execute the query
            $result = mysqli_query($conn, $query);

            if ($result) {
                // Retrieve the auto-generated EOInumber
                $eoiNumber = mysqli_insert_id($conn);

                // Display success message with EOInumber
                echo "<h1 class='success'>Application Submitted Successfully!</h1>";
                echo "<p>Your Expression of Interest (EOI) number is: <strong>$eoiNumber</strong></p>";
                echo "<p>Thank you for applying!</p>";
                echo "<a href='apply.php' class='button'>Return to Application Form</a>";
            } else {
                // Display error message if the query fails
                echo "<p class='error'>Something went wrong with the application: " . mysqli_error($conn) . "</p>";
                echo "<a href='apply.php' class='button'>Try Again</a>";
            }

            // Close the database connection
            mysqli_close($conn);
        } else {
            echo "<p class='error'>Unable to connect to the database...</p>";
            echo "<a href='apply.php' class='button'>Return to Application Form</a>";
        }
    } else {
        echo "<p class='error'>Invalid request method.</p>";
        echo "<a href='apply.php' class='button'>Return to Application Form</a>";
    }
    ?>
    </main>

    <?php
    include "footer.inc";
    ?>
</body>
</html>