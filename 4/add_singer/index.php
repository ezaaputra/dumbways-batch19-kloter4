<?php include("../resources/header.php") ?>

<form method="POST" action="store_singer.php">
    <!-- Singer Name -->
    <div class="form-group">
        <label for="name">Singer Name</label>
        <input type="text" class="form-control" name="name" id="name" required>
    </div>

    <button type="submit" class="btn btn-primary mt-3">Add</button>
</form>

<?php include("../resources/footer.php") ?>