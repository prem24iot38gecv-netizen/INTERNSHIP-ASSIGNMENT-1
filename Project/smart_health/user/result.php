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

     <div class="container mt-5" style="min-height:550px;">
         <h3>Prediction Result</h3>
         <div class="alert alert-info">
             Based on selected symptoms, you may have: <strong>
                 <?php
                    include '../config/db.php';
                    $symptomid = $_POST['symptoms'];
                    $s = implode(",", $symptomid);
                    $conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);
                    $qry = "select d.disease_id, d.disease_name ,d.description ,count(ds.symptom_id) as match_count from disease_symptom ds join diseases d on ds.disease_id=d.disease_id where ds.symptom_id in ($s) group by d.disease_id order by match_count desc limit 3";
                    $result = mysqli_query($conn, $qry);
                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        // echo $row['disease_name'];
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<br>".$row['disease_name'].":".$row['description'];
                        }
                    } else {
                        echo "No result found !!!";
                    }
                    ?>
             </strong>
         </div>
         <a href="select_symptoms.php" class="btn btn-secondary">Check again</a>
        </div>

     <!-- FOOTER -->
     <?php include "../includes/footer.php" ?>
 </body>

 </html>