<?php 
include("../resources/header.php");
include('../resources/library/upload.php');

if ($uploadOk == 1) {

    $title          = $_POST['title'];
    $durasi         = $_POST['durasi'];
    $id_genre       = $_POST['id_genre'];
    $id_singer      = $_POST['id_singer'];
    $photo          = $_FILES['photo']["name"];
    $deskripsi      = $_POST['deskripsi'];

    $sql = "INSERT INTO music_tb (title, durasi, id_genre, id_singer, photo, deskripsi)
    VALUES ('$title', '$durasi', '$id_genre', '$id_singer', '$photo', '$deskripsi')";

    $result = mysqli_query($conn, $sql);
}

if(!$result){
    die("ERROR".mysqli_error($conn));
}else 
$conn->close();

include("../resources/footer.php");

header('Location: '.BASE_URL);
exit;
?>