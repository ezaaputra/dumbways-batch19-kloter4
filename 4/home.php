<?php include("resources/header.php") ?>

<div class="row my-3">
<?php 
if (isset($_GET['GenreID'])) {
    $GenreID = $_GET['GenreID'];
}
$sql = "SELECT * FROM genre_tb"; 
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
?>
<a class="nav-link" href="?GenreID=<?php echo $row["id"] ?>"><?php echo $row["name_genre"]; ?></a>
<?php } 
} 
?>
</div>

<div class="row row-cols-1 row-cols-md-4">

    <?php 
    if (isset($_GET['GenreID'])) {
        $sql = "SELECT music_tb.*, singers_tb.name, genre_tb.name_genre FROM music_tb 
        INNER JOIN singers_tb ON music_tb.id_singer=singers_tb.id 
        INNER JOIN genre_tb ON music_tb.id_genre=genre_tb.id 
        WHERE id_genre = '".$GenreID."'
        ORDER BY id DESC;"; 
    }else {
        $sql = "SELECT music_tb.*, singers_tb.name, genre_tb.name_genre FROM music_tb 
        INNER JOIN singers_tb ON music_tb.id_singer=singers_tb.id 
        INNER JOIN genre_tb ON music_tb.id_genre=genre_tb.id 
        ORDER BY id DESC;"; 
    }
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $id             = $row['id'];
            $title          = $row['title'];
            $durasi         = $row['durasi'];
            $id_genre       = $row['id_genre'];
            $id_singer      = $row['id_singer'];
            $photo          = $row['photo'];
            $deskripsi      = $row['deskripsi'];
            $singer_name    = $row['name'];
            $genre_name     = $row['name_genre'];

        ?>
        <div class="col mb-4">
        <div class="card">
            <img src="resources/uploads/<?php echo $photo ?>" height="250px" alt="<?php echo $title ?>">
            <div class="card-body row">
                <div class="w-50">
                    <p><b><?php echo $title ?></b></p>
                    <p><?php echo $singer_name ?></p>
                </div>
                <div class="text-right w-50">
                    <p><?php echo $genre_name ?></p>
                    <p><?php echo $durasi ?></p>
                </div>
            </div>
            <div class="card-footer text-center">
                <a class="stretched-link" href="detail/?ItemID=<?php echo $id ?>">Detail <i class="fa fa-play"></i></a>
            </div>
        </div>
        </div>
    <?php } 
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>

</div>

<?php include("resources/footer.php") ?>