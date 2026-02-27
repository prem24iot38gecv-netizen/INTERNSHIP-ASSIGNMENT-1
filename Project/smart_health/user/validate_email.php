<?php
$id = $_GET['eid'];
include '../config/db.php';
$conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);
$qry = " select * from users where email = '$id'";
$result = mysqli_query($conn, $qry);

if(mysqli_num_rows($result)>0)
    echo "<font color='red'>Already Exists !!! </font>";
else
    echo "<font color='green'>Available !!! </font>";

mysqli_close($conn);

?>