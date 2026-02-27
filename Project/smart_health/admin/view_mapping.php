<?php
session_start();
if(!isset($_SESSION['userid'])){ 
    header("Location: login.php"); 
    } 
?>

<?php include "../includes/header.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Smart Health</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h3 class="mb-4">View Disease-Symptom Mapping</h3>
        <?php
        // $conn = mysqli_connect("localhost", "root", "", "smart_health");
        include "../config/db.php";
        $conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $qry = "SELECT d.disease_name AS disease_name, s.symptom_name 
        FROM disease_symptom ds 
        JOIN diseases d ON ds.disease_id = d.disease_id 
        JOIN symptoms s ON ds.symptom_id = s.symptom_id";

        $result = mysqli_query($conn, $qry);
        if (mysqli_num_rows($result) > 0) {
            echo "<table class='table table-bordered'>";
            echo "<thead class='table-dark'>
                    <tr><th>Disease Name</th>
                    <th>Symptom Name</th></tr>
                </thead>";
            echo "<tbody>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['disease_name'] . "</td>";
                echo "<td>" . $row['symptom_name'] . "</td>";
                echo "</tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "<p>No disease-symptom mapping found.</p>";
        }
        mysqli_close($conn);
        ?>
        <a href="../admin/dashboard.php" class="btn btn-secondary mb-3">Go to Dashboard</a>
        </div>


<?php include "../includes/footer.php"; ?>
</body>
</html>
