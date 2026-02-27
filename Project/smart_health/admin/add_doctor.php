<?php
session_start();
if(!isset($_SESSION['userid'])){ 
    header("Location: login.php"); 
    } 
?>

<?php
$msg = "";
if (isset($_POST['add_doctor'])) {
    $doctor_name = $_POST['doctor_name'];
    $specialization = $_POST['specialization'];
    $doctor_contact = $_POST['doctor_contact'];

    // $conn = mysqli_connect("localhost", "root", "", "smart_health");
    include "../config/db.php";
    $conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $qry = "INSERT INTO doctors (name, specialization, contact) VALUES ('$doctor_name', '$specialization', '$doctor_contact')";
    mysqli_query($conn, $qry);
    $msg = "<b class='alert alert-success'>Doctor added successfully!</b>";
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
    <h4 class="mb-4">Add Doctors</h4>
    <form method="post">
        <div class="mb-3">
            <input type="text" name="doctor_name" class="form-control" placeholder="Doctor Name" required>
        </div>

        <div class="mb-3">
            <input type="text" name="specialization" class="form-control" placeholder="Specialization" required>
        </div>

        <div class="mb-3 mt-3">
            <textarea name="doctor_contact" class="form-control" placeholder="Doctor Contact" required></textarea>
        </div>
        
        <button type="submit" name="add_doctor" class="btn btn-primary">Add Doctor</button>
    </form>

    <?php
    echo $msg;
    ?>


<?php include "../includes/footer.php"; ?>
</body>
<html>
