<?php include("../resources/header.php") ?>

<form method="POST" action="store_genre.php">
    <!-- Singer Name -->
    <div class="form-group">
        <label for="name_genre">Genre Name</label>
        <input type="text" class="form-control" name="name_genre" id="name_genre" required>
    </div>

    <button type="submit" class="btn btn-primary mt-3">Add</button>
</form>

<?php include("../resources/footer.php") ?>