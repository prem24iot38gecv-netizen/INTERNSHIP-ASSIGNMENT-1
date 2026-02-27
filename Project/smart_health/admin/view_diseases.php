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
    <h3 class="mb-4">View Diseases</h3>

    <?php
    // $conn = mysqli_connect("localhost", "root", "", "smart_health");
    include "../config/db.php";
    $conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);
    
    $qry = "SELECT * FROM diseases";
    $result = mysqli_query($conn, $qry);
    if(mysqli_num_rows($result) > 0){

        echo '<table class="table table-hover table-bordered" style="background-color: #de8200;">
                <thead>
                    <tr class="table-dark">
                        <th>ID</th>
                        <th>Disease Name</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>';
        while($row = mysqli_fetch_assoc($result)){
            echo '<tr>
                    <td>'.$row['disease_id'].'</td>
                    <td>'.$row['disease_name'].'</td>
                    <td>'.$row['description'].'</td>
                    <td>
                        <a href="edit_disease.php?id='.$row['disease_id'].'" class="btn btn-sm btn-primary">Edit</a>
                        <a href="delete_disease.php?id='.$row['disease_id'].'" class="btn btn-sm btn-danger" onclick="return confirm(\'Are you sure you want to delete this disease?\')">Delete</a>
                  </tr>';
        }
        echo '</tbody></table>';
    } else {
        echo '<p class="text-warning">No diseases found.</p>';
    }
    mysqli_close($conn);
    ?>


<a href="../admin/dashboard.php" class="btn btn-secondary mb-3">Go to Dashboard</a>

<?php include "../includes/footer.php"; ?>
</body>
</html>
