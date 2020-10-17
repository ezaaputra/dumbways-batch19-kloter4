<?php 
include("../resources/header.php");

$genre_name    = $_POST['name_genre'];

$sql = "INSERT INTO genre_tb (name_genre)
VALUES ('$genre_name')";

$result = mysqli_query($conn, $sql);

if(!$result){
    die("ERROR".mysqli_error($conn));
}
$conn->close();

include("../resources/footer.php");

header('Location: '.BASE_URL);
exit;
?>