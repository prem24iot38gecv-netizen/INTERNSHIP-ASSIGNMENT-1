<?php
session_start();
if(!isset($_SESSION['userid'])){ 
    header("Location: login.php"); 
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Smart Health</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php include "../includes/header.php"; ?>

<div class="container mt-5">
    <h3 class="mb-4">View Symptoms</h3>

    <?php
    // $conn = mysqli_connect("localhost", "root", "", "smart_health");
        include "../config/db.php";
        $conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $qry = "SELECT * FROM symptoms";
    $result = mysqli_query($conn, $qry);

    if (mysqli_num_rows($result) > 0) {
        echo "<table class='table table-bordered'>";
        echo "<thead><tr><th>Symptom Name</th><th>Action</th></tr></thead>";
        echo "<tbody>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" .($row['symptom_name']) . "</td>";
            echo "<td><a href='add_symptom.php?id=" . $row['symptom_id'] . "' class='btn btn-primary btn-sm'>Edit</a><a href='delete_symptom.php?id=" . $row['symptom_id'] . "' class='btn btn-danger btn-sm ms-2'>Delete</a></td>";
            echo "</tr>";
        }
        echo "</tbody></table>";
    } else {
        echo "<p>No symptoms found.</p>";
    }

    mysqli_close($conn);
    ?>

<?php include "../includes/footer.php"; ?>
</body>
</html>
