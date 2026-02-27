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


<div>
    <h3 class=" container mt-5">Disease-Symptom Mapping</h3>
    <form method="post">
        <label><b>Diseases</b></label>
        <select name="disease" class="form-control mb-3" required>
            <option value="">---Select Disease---</option>
            <?php
            // $conn = mysqli_connect("localhost", "root", "", "smart_health");
            include "../config/db.php";
            $conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);
            
            $qry = "select * from diseases";
            $result = mysqli_query($conn, $qry);

            while($row = mysqli_fetch_assoc($result)){
                echo "<option value='".$row['disease_id']."'>".$row['disease_name']."</option>";
            }
            mysqli_close($conn);
            ?>
            </select>
            <label><b>Symptoms</b></label><br><br>
            <?php
            $conn = mysqli_connect("localhost", "root", "", "smart_health");
            $qry = "select * from symptoms";
            $result = mysqli_query($conn, $qry);

            // echo "<table class='table table-bordered'>";
            $i = 0;

            echo "<div class='row g-2'>";
            while($row = mysqli_fetch_assoc($result)){
                
                if($i == 0)

                echo "<div class='row mb-2'>";
                echo "<div class='col-md-2 mb-2'>";
                
                // echo "<td>";
                echo "<div class='form-check'>";
                echo "<input type = 'checkbox' name = 'symptoms[]' value = '".$row['symptom_id']."'>";
                echo "<label class='form-check-label'>".$row['symptom_name']."</label><br>";
                echo "</div>";
                echo "</div>";
                // echo "</td>";

                $i++;
                if($i == 4){
                    // echo "</tr>";
                    echo "</div>";
                    $i = 0;
                }
            }

            // echo "</table>";

            mysqli_close($conn);
            ?>
            <button type="submit" name="btn_map" class="btn btn-primary mt-3">View Mapping</button>



            <?php
            if(isset($_POST['btn_map'])){
                $did = $_POST['disease'];
                $symptoms = $_POST['symptoms'];
                foreach($symptoms as $sid){
                    $qry = "INSERT INTO disease_symptom (disease_id, symptom_id) VALUES ('$did', '$sid')";
                    $conn = mysqli_connect("localhost", "root", "", "smart_health");
                    mysqli_query($conn, $qry);

                }
                if(mysqli_affected_rows($conn) > 0){
                    echo "<b class='text-success'>Mapping added successfully!!!</b>";
                } else {
                    echo "<b class='text-danger'>Error: in adding the mapping!!!</b>  ". mysqli_error($conn);
                }
                mysqli_close($conn);

            }

            ?>
    </form>
    <a href="../admin/dashboard.php" class="btn btn-secondary mb-4">Go to Dashboard</a>


</div>

   
<?php include "../includes/footer.php"; ?>
</body>
</html>
