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

     <div class="container-fluid" style="height:86vh;">
         <div class="row">
             <div class="col-sm-4"></div>
             <div class="col-sm-4">
                 <div class="card mt-5 mb-5 shadow">
                     <div class="card-body shadow">
                         <h4 class="text-center">Admin Login</h4>
                         <form method="post">
                             <input type="text" name="username" class="form-control mb-3" value="<?php
                                                                                                    if (isset($_COOKIE['uname']))
                                                                                                        echo $_COOKIE['uname'];
                                                                                                    ?>" placeholder="Username" required>
                             <input type="password" name="password" class="form-control mb-3" value="if (isset($_COOKIE['ppwd']))
                                                                                                echo $_COOKIE['ppwd'];
                                                                                            ?>" placeholder="Password" required>
                             <input type="checkbox" name="rrem" value="yes"><label>Remember me!!! </label><br>
                             <button type="submit" name="btn_login" class="btn btn-success btn-outline-info btn-block text-light w-100">Login</button>
                         </form>
                         <?php
                            $msg = "";
                            if (isset($_POST['btn_login'])) {
                                $username = $_POST['username'];
                                $password = $_POST['password'];
                                include '../config/db.php';
                                $conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);
                                $qry = "select * from admin where username = '$username' and password='$password'";
                                $result = mysqli_query($conn, $qry);
                                if (mysqli_num_rows($result) > 0) {
                                    $row = mysqli_fetch_array($result);
                                    session_start();
                                    $_SESSION['userid'] = $row[0];
                                    header("location:dashboard.php");
                                } else {
                                    echo "<b class='text-danger mt-5'>Invalid Username & Password</b>";
                                }
                                mysqli_close($conn);
                            }


                            if (isset($_POST['btn_login'])) {
                                $em = $_POST['username'];
                                $pass = $_POST['password'];
                                if (isset($_POST['rrem'])) {
                                    setcookie("uname", $em, time() + 60 * 60 * 24);
                                    setcookie("ppwd", $pass, time() + 60 * 60 * 24);
                                }
                            }
                            ?>
                     </div>
                 </div>
             </div>
         </div>
     </div>

     <!-- FOOTER -->
     <?php include "../includes/footer.php" ?>
 </body>

 </html>