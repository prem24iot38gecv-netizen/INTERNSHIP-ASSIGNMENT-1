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

<div>
    <h3 class=" container mt-5">View Doctors</h3>
    <table class="table table-bordered">
        <thead>
            <tr class="table-dark">
                <th>Name</th>
                <th>Specialization</th>
                <th>Contact</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // $conn = mysqli_connect("localhost", "root", "", "smart_health");
            include "../config/db.php";
            $conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);
            $qry = "SELECT * FROM doctors";
            $result = mysqli_query($conn, $qry);

            while($row = mysqli_fetch_assoc($result)){
                echo "<tr'>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['specialization']."</td>";
                echo "<td>".$row['contact']."</td>";
                echo "</tr>";
            }
            mysqli_close($conn);
            ?>
        </tbody>
    </table>


<?php include "../includes/footer.php"; ?>
</body>
</html>
