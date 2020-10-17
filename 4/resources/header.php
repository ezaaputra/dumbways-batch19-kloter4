<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 5</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<?php include("config.php"); ?>
<?php include("library/slugify.php") ?>

<nav class="navbar navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="<?php echo BASE_URL; ?>"><b>Dumb</b> Music Info</a> 
    <div>
        <a class="btn btn-outline-warning my-2 my-sm-0" href="<?php echo BASE_URL; ?>/add_music">Add Music</a>
        <a class="btn btn-outline-warning my-2 my-sm-0" href="<?php echo BASE_URL; ?>/add_singer">Add Singer</a>
        <a class="btn btn-outline-warning my-2 my-sm-0" href="<?php echo BASE_URL; ?>/add_genre">Add Genre</a>
    </div>
</nav>
<br><br><br>
<div class="container my-5">

