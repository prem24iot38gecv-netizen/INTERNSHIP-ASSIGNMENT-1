
<?php include "../includes/header.php"; ?>

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
    <title>Admin Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border-radius: 8px;
        }
    </style>
</head>
<body>
<!-- DASHBOARD -->
<div class="container mt-5 text-center">
    <h3 class="mb-4"><b>Admin Dashboard</b></h3>

    <!-- FIRST ROW -->
    <div class="row justify-content-center">
        <div class="col-md-3 mb-4">
            <div class="card shadow p-3">
                <h5>Manage Symptoms</h5>
                <p class="text-muted">Add, View, Edit, Delete Symptoms</p>
                <a href="#" class="btn btn-primary btn-sm m-1">Add</a>
                <a href="#" class="btn btn-outline-primary btn-sm">View</a>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card shadow p-3">
                <h5>Manage Diseases</h5>
                <p class="text-muted">Add, View, Edit, Delete Diseases</p>
                <a href="#" class="btn btn-success btn-sm m-1">Add</a>
                <a href="#" class="btn btn-outline-success btn-sm">View</a>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card shadow p-3">
                <h5>Manage Doctors</h5>
                <p class="text-muted">Add, View, Edit, Delete Doctors</p>
                <a href="#" class="btn btn-warning btn-sm m-1">Add</a>
                <a href="#" class="btn btn-outline-warning btn-sm">View</a>
            </div>
        </div>
    </div>

    <!-- SECOND ROW -->
    <div class="row justify-content-center">
        <div class="col-md-6 mb-4">
            <div class="card shadow p-3">
                <h5>Disease–Symptom Mapping</h5>
                <p class="text-muted">Map symptoms with diseases</p>
                <a href="#" class="btn btn-info btn-sm m-1">Map</a>
                <a href="#" class="btn btn-outline-info btn-sm">View Mapping</a>
            </div>
        </div>
    </div>

    <!-- LOGOUT -->
    <a href="logout.php" class="btn btn-danger mt-3">Logout</a>
</div>

<?php include "../includes/footer.php"; ?>
</body>
</html>