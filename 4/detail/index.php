<?php include("../resources/header.php") ?>

<?php 

$ItemID = $_GET['ItemID'];
$sql = "SELECT *, singers_tb.name, genre_tb.name_genre FROM music_tb 
INNER JOIN singers_tb ON music_tb.id_singer=singers_tb.id 
INNER JOIN genre_tb ON music_tb.id_genre=genre_tb.id 
WHERE music_tb.id = '".$ItemID."'";

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

        <div>
            <div class="card">
                <div class="card-header text-center">
                    <h4 class="card-title"><?php echo $title ?></h4>
                </div>
                <div class="card-body text-center">
                    <img src="../resources/uploads/<?php echo $photo ?>" alt="<?php echo $title ?>" width="250px">
                    <div>
                        <b>Singer: <?php echo $singer_name ?></b>
                        <p>Genre : <?php echo $genre_name ?></p>
                        <p>Durasi: <?php echo $durasi ?></p>
                        <p class="text-left">Deskripsi: <br><?php echo $deskripsi ?></p>
                    </div>
                </div>
            </div>
            <a href="<?php echo BASE_URL ?>" class="btn btn-primary float-right my-3">Kembali</a>
        </div>

    <?php } 
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>

<?php include("../resources/footer.php") ?>