<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Health Prediction System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</head>

<body>
    <!-- HEADER -->
    <?php include "../includes/header.php" ?>

    <div class="container-fluid" style="min-height:550px;">
        <h3>Select Your Symptoms</h3>

        <form action="result.php" method="post">
            <?php
            include '../config/db.php';
            // $symptomid = $_POST['symptoms'];
            // $s = imploade(",", $symptomid);
            $conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);
            $qry = "select * from symptoms";
            $result = mysqli_query($conn, $qry);

            $i = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                if ($i % 6 == 0) {
                    echo "<div class='row mb-2'>";
                }
                echo "<div class=' form-check col-sm-2'>";
                echo "<input class='form-check-input' type='checkbox'  name='symptoms[]' value='" . $row["symptom_id"] . "'>";
                echo "<label class= 'form-check-label'>" . $row['symptom_name'] . "</label>";
                echo "</div>";

                $i++;
                if ($i % 6 == 0) {
                    echo "</div>";
                }
            }
            mysqli_close($conn);
            ?>
            <div class="text-center">
                <button class="btn btn-primary mt-3 w-20">Predict Disease</button>
            </div>
            
    </div> 
        </form>

    </div>

    <!-- FOOTER -->
    <?php include "../includes/footer.php" ?>
</body>

</html>