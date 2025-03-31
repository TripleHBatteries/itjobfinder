<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage - ITJobFinder</title>
    <link href="styles/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Limelight&display=swap" rel="stylesheet">
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        form {
            width: 80%;
            margin: 20px auto;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type='text'], select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }
        input[type='submit'] {
            padding: 8px;
            margin-bottom: 10px;
            width: auto;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php include "header.inc"; ?>
    
    <main>
        <h1>Manage EOIs</h1>

        <?php
        // Start session and include settings at the very top
        session_start();
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

        // Initialize variables
        $action = $_POST['action'] ?? null;
        $errors = [];
        $success = '';

        if (!isset($_SESSION['admin_logged_in'])) {
            header('Location: admin.php');
            exit();
        }

        // Database connection and processing
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && $action) {
            try {
                $conn = mysqli_connect($servername, $username, $password, $dbname);
                if (!$conn) {
                    throw new Exception("Database connection failed: " . mysqli_connect_error());
                }

                switch ($action) {
                    case "list_all":
                        $query = "SELECT * FROM eoi";
                        $result = mysqli_query($conn, $query);
                        if (!$result) {
                            throw new Exception("Query failed: " . mysqli_error($conn));
                        }
                        break;
                        
                    case "list_by_pos":
                        $jobrefID = mysqli_real_escape_string($conn, $_POST["jobref"] ?? '');
                        if (empty($jobrefID)) {
                            throw new Exception("Job Reference Number is required");
                        }
                        $query = "SELECT * FROM eoi WHERE jobref_id = '$jobrefID'";
                        $result = mysqli_query($conn, $query);
                        if (!$result) {
                            throw new Exception("Query failed: " . mysqli_error($conn));
                        }
                        break;
                        
                    case "list_by_app":
                        $firstName = mysqli_real_escape_string($conn, $_POST["firstname"] ?? '');
                        $lastName = mysqli_real_escape_string($conn, $_POST["lastname"] ?? '');
                        if (empty($firstName) || empty($lastName)) {
                            throw new Exception("Both first and last names are required");
                        }
                        $query = "SELECT * FROM eoi WHERE firstname = '$firstName' AND lastname = '$lastName'";
                        $result = mysqli_query($conn, $query);
                        if (!$result) {
                            throw new Exception("Query failed: " . mysqli_error($conn));
                        }
                        break;
                        
                    case "delete":
                        $jobrefID = mysqli_real_escape_string($conn, $_POST["jobref"] ?? '');
                        if (empty($jobrefID)) {
                            throw new Exception("Job Reference Number is required");
                        }
                        $query = "DELETE FROM eoi WHERE jobref_id = '$jobrefID'";
                        if (mysqli_query($conn, $query)) {
                            $success = "EOIs for $jobrefID deleted successfully!";
                        } else {
                            throw new Exception("Error deleting EOIs: " . mysqli_error($conn));
                        }
                        break;
                        
                    case "change_status":
                        $eoi_id = (int)($_POST["eoi_id"] ?? 0);
                        $status = mysqli_real_escape_string($conn, $_POST["status"] ?? '');
                        if ($eoi_id <= 0) {
                            throw new Exception("Valid EOI ID is required");
                        }
                        if (empty($status)) {
                            throw new Exception("Status is required");
                        }
                        $query = "UPDATE eoi SET Status = '$status' WHERE eoi_number = $eoi_id";
                        if (mysqli_query($conn, $query)) {
                            $success = "EOI status updated successfully.";
                        } else {
                            throw new Exception("Error updating status: " . mysqli_error($conn));
                        }
                        break;
                        
                    default:
                        $errors[] = "Invalid action selected";
                }
            } catch (Exception $e) {
                $errors[] = $e->getMessage();
            } finally {
                if (isset($conn)) {
                    mysqli_close($conn);
                }
            }
        }
        ?>

        <!-- Display errors if any -->
        <?php if (!empty($errors)): ?>
            <div class="error">
                <?php foreach ($errors as $error): ?>
                    <p><?= htmlspecialchars($error) ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <!-- Display success message if any -->
        <?php if (!empty($success)): ?>
            <div class="success">
                <p><?= htmlspecialchars($success) ?></p>
            </div>
        <?php endif; ?>

        <form method="post">
            <label for="action">What Do You Want To Do?:</label>
            <select name="action" id="action" required>
                <option value="">-- Select Action --</option>
                <option value="list_all" <?= ($action == 'list_all') ? 'selected' : '' ?>>List All EOIs</option>
                <option value="list_by_pos" <?= ($action == 'list_by_pos') ? 'selected' : '' ?>>List EOIs by Position</option>
                <option value="list_by_app" <?= ($action == 'list_by_app') ? 'selected' : '' ?>>List EOIs by Applicant</option>
                <option value="delete" <?= ($action == 'delete') ? 'selected' : '' ?>>Delete EOIs by Position</option>
                <option value="change_status" <?= ($action == 'change_status') ? 'selected' : '' ?>>Change EOI Status</option>
            </select>

            <!-- Dynamic input fields -->
            <div id="position_input" class="dynamic-field" <?= (in_array($action, ['list_by_pos', 'delete'])) ? 'style="display:block;"' : '' ?>>
                <label for="jobref">Job Reference Number:</label>
                <input type="text" name="jobref" id="jobref" 
                       value="<?= htmlspecialchars($_POST['jobref'] ?? '') ?>" 
                       pattern="[A-Za-z0-9]{5}" title="5 alphanumeric characters">
            </div>

            <div id="name_input" class="dynamic-field" <?= ($action == 'list_by_app') ? 'style="display:block;"' : '' ?>>
                <label for="firstname">First Name:</label>
                <input type="text" name="firstname" id="firstname" 
                       value="<?= htmlspecialchars($_POST['firstname'] ?? '') ?>" 
                       pattern="[A-Za-z]{1,20}" title="Up to 20 letters">
                <label for="lastname">Last Name:</label>
                <input type="text" name="lastname" id="lastname" 
                       value="<?= htmlspecialchars($_POST['lastname'] ?? '') ?>" 
                       pattern="[A-Za-z]{1,20}" title="Up to 20 letters">
            </div>

            <div id="status_input" class="dynamic-field" <?= ($action == 'change_status') ? 'style="display:block;"' : '' ?>>
                <label for="eoi_id">EOI ID:</label>
                <input type="number" name="eoi_id" id="eoi_id" 
                       value="<?= htmlspecialchars($_POST['eoi_id'] ?? '') ?>" 
                       min="1">
                <label for="status">Status:</label>
                <select name="status" id="status">
                    <option value="New" <?= ($_POST['Status'] ?? '') == 'New' ? 'selected' : '' ?>>New</option>
                    <option value="Current" <?= ($_POST['Status'] ?? '') == 'Current' ? 'selected' : '' ?>>Current</option>
                    <option value="Final" <?= ($_POST['Status'] ?? '') == 'Final' ? 'selected' : '' ?>>Final</option>
                </select>
            </div>

            <button type="submit" class="submit-btn">Submit</button>
        </form>

        <?php
        // Display results if we have them
        if (isset($result) && $action != 'delete' && $action != 'change_status') {
            if (mysqli_num_rows($result) > 0) {
                echo "<table>";
                echo "<tr><th>EOI ID</th><th>Job Reference</th><th>First Name</th><th>Last Name</th><th>Status</th></tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                        <td>" . htmlspecialchars($row['eoi_number']) . "</td>
                        <td>" . htmlspecialchars($row['jobref_id']) . "</td>
                        <td>" . htmlspecialchars($row['firstname']) . "</td>
                        <td>" . htmlspecialchars($row['lastname']) . "</td>
                        <td>" . htmlspecialchars($row['Status']) . "</td>
                    </tr>";
                }
                echo "</table>";
            } elseif ($action && empty($errors)) {
                echo "<p>No results found.</p>";
            }
        }
        ?>
    </main>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const actionSelect = document.getElementById('action');
        const dynamicFields = document.querySelectorAll('.dynamic-field');
        
        // Function to show/hide fields based on selection
        function updateFields() {
            // Hide all fields first
            dynamicFields.forEach(field => field.style.display = 'none');
            
            // Show relevant fields based on selection
            const action = actionSelect.value;
            if (action === 'list_by_pos' || action === 'delete') {
                document.getElementById('position_input').style.display = 'block';
            } else if (action === 'list_by_app') {
                document.getElementById('name_input').style.display = 'block';
            } else if (action === 'change_status') {
                document.getElementById('status_input').style.display = 'block';
            }
        }
        
        // Initial update
        updateFields();
        
        // Update on change
        actionSelect.addEventListener('change', updateFields);
    });
    </script>

    <?php include "footer.inc"; ?>
</body>
</html>