<?php include("../resources/header.php") ?>

<form method="POST" action="store_music.php" enctype="multipart/form-data">
    <!-- Nama Lagu -->
    <div class="form-group">
        <label for="title">Judul Lagu</label>
        <input type="text" class="form-control" name="title" id="title" required>
    </div>

    <!-- Genre -->
    <div class="form-group">
        <label for="id_genre">Genre</label>
        <select class="form-control" name="id_genre" id="id_genre" required>
            <option selected disabled value="">Choose...</option>
            <?php 
            $sql = "SELECT * FROM genre_tb"; 
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
            ?>
            <option value="<?php echo $row["id"] ?>"><?php echo $row["name_genre"] ?></option>
            <?php } 
            } 
            ?>
        </select>
    </div>

    <!-- Penyanyi -->
    <div class="form-group">
        <label for="id_singer">Singer</label>
        <select class="form-control" name="id_singer" id="id_singer" required>
            <option selected disabled value="">Choose...</option>
            <?php 
            $sql = "SELECT * FROM singers_tb"; 
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
            ?>
            <option value="<?php echo $row["id"] ?>"><?php echo $row["name"] ?></option>
            <?php } 
            } 
            $conn->close();
            ?>
        </select>
    </div>

    <!-- Gambar -->
    <div class="form-group">
        <label for="photo">Foto</label>
        <div class="input-group mb-3">
            <div class="custom-file">
                <input type="file" class="form-control-file" name="photo" id="photo" accept="image/*" required>
            </div>
        </div>
    </div>

    <!-- Durasi -->
    <div class="form-group">
        <label for="durasi">Durasi</label>
        <div class="input-group">
            <input type="text" class="form-control" name="durasi" id="durasi" placeholder="00:05:12" pattern="[0-9][0-9]:[0-5][0-9]:[0-5][0-9]">
        </div>
    </div>

    <!-- Deskripsi -->
    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea class="form-control" name="deskripsi" id="deskripsi" rows="5" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary mt-3">Tambah</button>
</form>

<?php include("../resources/footer.php") ?>