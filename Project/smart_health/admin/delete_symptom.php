<?php
$id = $_GET['sid'];
include "../config/db.php";
$conn = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DBNAME);
$qry = "DELETE FROM symptoms WHERE symptom_id = $id";
mysqli_query($conn, $qry);
if (mysqli_affected_rows($conn) > 0) {
    header("Location: view_symptoms.php");
} else {
    echo "<b class='text-danger'>Error: in deleting the symptom!!!</b>  ". mysqli_error($conn);
}
mysqli_close($conn);
?>