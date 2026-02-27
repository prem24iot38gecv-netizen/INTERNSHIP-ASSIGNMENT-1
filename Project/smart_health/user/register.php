<?php
$msg = "";
if(isset($_POST['btn_reg'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $gender = $_POST['gender'];
    $mobile = $_POST['mobile'];
    include "../config/db.php";
    $conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);

     if(!$conn){
        die("Connection Failed");
    }

    if($password != $confirm_password){
    $msg = "<b class='text-danger'>Password does not match</b>";
}
    else{

        $qry = "insert into users(name, email, password, gender, mobile_no) values('$name', '$email', '$password', '$gender', '$mobile')";
        mysqli_query($conn, $qry);
        if(mysqli_affected_rows($conn) > 0){
            $msg = "<b class='text-success'>Registration Successful</b>";
        }else{
            $msg = "<b class='text-danger'>Error in Registration . Try Again</b>";
        }
        mysqli_close($conn);
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Smart Health</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script>
    function validate(){
        let email = document.getElementById("t2").value;
        let obj = new XMLHttpRequest();
        obj.open("get", "validate_email.php?eid="+email, true);
        obj.send();
        obj.onreadystatechange=function(){
            if(obj.readyState == 4 && obj.status == 200){
                document.getElementById("l1").innerHTML = obj.responseText;

            }
        }

    }
</script>
</head>
<body>
<?php include "../includes/header.php"; ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card p-4 shadow">
                <h4 class="text-center">User Registration</h4>

                <form method="post">
                    <input type="text" name="name" class="form-control mb-2" placeholder="Full Name" required>
                    <input type="email" id="t2" name="email" onchange="validate()" class="form-control mb-2" placeholder="Email" required>
                    <label id="l1"></label>
                    <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
                    <input type="password" name="confirm_password" class="form-control mb-2" placeholder="Confirm Password" required>

                    <select class="form-control mb-2" name="gender" required>
                        <option value="">Choose Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>

                    <input type="text" name="mobile" class="form-control mb-3" placeholder="Mobile Number" required>
                    <button type="submit" name="btn_reg" class="btn btn-primary w-100">Register</button>
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
