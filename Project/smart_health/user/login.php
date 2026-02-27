<?php
$msg = "";
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    include '../config/db.php';
    $conn = mysqli_connect("localhost", "root", "", "smart_health");
    $qry = "SELECT * FROM users WHERE email='$username' AND password='$password'";
    $result = mysqli_query($conn, $qry);
    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['userid'] = $row['uid'];
        $_SESSION['username'] = $row['email'];

        header("Location: dashboard.php");

    }
    else{
        $msg = "<b class='text-danger m-5'>Invalid username or password!!!</b>";
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
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card p-4 shadow">
                <h4 class="text-center">User Login</h4>

                <form method="post">
                    <input type="email" class="form-control mb-3" placeholder="Email" required>
                    <input type="password" class="form-control mb-3" placeholder="Password" required>
                    <button class="btn btn-success w-100">Login</button>
                </form>

                <?php 
                    echo $msg; 
                ?>
                
            </div>
        </div>
    </div>
</div>

<?php include "../includes/footer.php"; ?>
</body>
</html>
