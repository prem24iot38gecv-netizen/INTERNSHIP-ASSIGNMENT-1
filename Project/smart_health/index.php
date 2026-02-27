<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Smart Health</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
          crossorigin="anonymous">
</head>
<body>

<?php include "includes/header.php"; ?>

<div class="container-fluid">
    <div class="row">
        <div id="d1" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                
            </div>

            <!-- Left & Right Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#d1" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#d1" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>

        </div>
    </div>
</div>


<div class="container mt-5 text-center">
    <h2><b>Smart Health Prediction System</b></h2>
    <p>Select symptoms and get instant health guidance.</p>
    <a href="/class_work/smart_health/user/login.php" class="btn btn-primary">Get Started</a>


    <div class="row mt-5">
        <h4>How It Works</h4>
        <div class="col-md-4 mt-3">
            <div class="card p-3">Step 1<br><b>Register & Login</b></div>
        </div>
        <div class="col-md-4 mt-3">
            <div class="card p-3">Step 2<br><b>Select Symptoms</b></div>
        </div>
        <div class="col-md-4 mt-3">
            <div class="card p-3">Step 3<br><b>View Result</b></div>
        </div>
    </div>
</div>

<?php include "includes/footer.php"; ?>

<!-- Bootstrap JS (Place before closing body) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>

</body>
</html>
