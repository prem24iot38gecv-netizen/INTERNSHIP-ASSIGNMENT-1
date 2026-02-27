<?php
session_start();
if(!isset($_SESSION['userid'])){ 
    header("Location: login.php"); 
    } 
?>

<?php
$msg = "";
if (isset($_POST['add_symptom'])) {
    $symptom_name = $_POST['symptom_name'];

    // $conn = mysqli_connect("localhost", "root", "", "smart_health");
    include "../config/db.php";
    $conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $qry = "INSERT INTO symptoms (symptom_name) VALUES ('$symptom_name')";
    
    mysqli_query($conn, $qry);

    if (mysqli_affected_rows($conn) > 0) {
        $msg = "<b class='text-success'>Symptom added successfully!!!</b>";
    } else {
        $msg = "<b class='text-danger'>Error: in adding the symptom!!!</b>  ". mysqli_error($conn);
    }

    mysqli_close($conn);
}
if (isset($_GET['sid'])) {
    $id =  $_GET['sid'];
    $conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);
    $qry = "select * from symptoms where symptom_id = $id";
    $result = mysqli_query($conn, $qry);
    $row = mysqli_fetch_assoc($result);
}
if(isset($_POST['update_symptom'])){
    $id = $_POST['id'];
    $symptom_name = $_POST['symptom_name'];
    $conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);
    $qry = "update symptoms set symptom_name = '$symptom_name' where symptom_id = $id";
    mysqli_query($conn, $qry);
    header("Location: view_symptoms.php");
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

<?php 
if(isset($_GET['sid'])){
    echo "<h3 class='mb-4'>Edit Symptom</h3>"; } 
    else { echo "<h3 class='mb-4'>Add Symptom</h3>";
}
?>
    <form method="post">
        <?php if(isset($_GET['sid'])){ 
            echo "<input type='hidden' name='id' value='" . $row['symptom_id'] . "'>"; } 
        ?>

            <div class="mb-3">
                <input type="text" value ="

                    <?php if(isset($_GET['sid'])){ 
                        echo $row['symptom_name']; } ?>"
                
                name="symptom_name" class="form-control" placeholder="Symptom Name" required>
            </div>
            
            <button type="submit" name="add_symptom" class="btn btn-primary">
            <?php 
            if(isset($_GET['sid']))
                echo "Update symptom"; 
                
            else 
                echo "Add symptom"; 
                 
            ?></button>

            <a href="../admin/dashboard.php" class="btn btn-secondary">Go to Dashboard</a>

    </form>

    <?php
    echo $msg;
    ?>


<?php include "../includes/footer.php"; ?>
</body>
</html>
