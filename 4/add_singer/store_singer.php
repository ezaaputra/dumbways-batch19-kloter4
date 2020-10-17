<?php 
include("../resources/header.php");

$singer_name    = $_POST['name'];

$sql = "INSERT INTO singers_tb (name)
VALUES ('$singer_name')";

$result = mysqli_query($conn, $sql);

if(!$result){
    die("ERROR".mysqli_error($conn));
}
$conn->close();

include("../resources/footer.php");

header('Location: '.BASE_URL);
exit;
?>