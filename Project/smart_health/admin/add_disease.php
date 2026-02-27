<?php
session_start();
if(!isset($_SESSION['userid'])){ 
    header("Location: login.php"); 
    } 
?>

<?php
$msg = "";
if (isset($_POST['add_disease'])) {
    $disease_name = $_POST['disease_name'];
    $disease_description = $_POST['disease_description'];

    // $conn = mysqli_connect("localhost", "root", "", "smart_health");
    include "../config/db.php";
    $conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $qry = "INSERT INTO diseases (disease_name, description) VALUES ('$disease_name', '$disease_description')";
    
    mysqli_query($conn, $qry);

    if (mysqli_affected_rows($conn) > 0) {
        $msg = "<b class='text-success'>Disease added successfully!!!</b>";
    } else {
        $msg = "<b class='text-danger'>Error: in adding the disease!!!</b>  ". mysqli_error($conn);
    }

    mysqli_close($conn);
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
    <h4 class="mb-4">Add New Disease</h4>
    <form method="post">
        <div class="mb-3">
            <input type="text" name="disease_name" class="form-control" placeholder="Disease Name" required>
        </div>
        
 
        <div class="mb-3 mt-3">
            <textarea name="disease_description" class="form-control" placeholder="Disease Description" required></textarea>
        </div>    

        <button type="submit" name="add_disease" class="btn btn-primary">Add Disease</button>


        <a href="../admin/dashboard.php" class="btn btn-secondary">Go to Dashboard</a>

    </form>


    <?php
    echo $msg;
    ?>


<?php include "../includes/footer.php"; ?>
</body>
</html>
