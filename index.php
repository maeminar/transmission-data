<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" href="index.css" rel="stylesheet">
</head>

<body>
    <?php
    include("./navbar.php");
    ?>
    <h3>Méthode GET</h3>
    <form class=p-5 method="GET" action="get.php">
        <div class="mb-3">
            <label for="form_name" class="form-label">Name :</label>
            <input name="name" type="text" class="form-control">
            <input class="btn btn-outline-success" type="submit">
        </div>
    </form>

    <h3>Méthode POST</h3>
    <form class=p-5 method="POST" action="post.php">
        <div class="mb-3">
            <label for="form_name" class="form-label">Name :</label>
            <input name="name" type="text" class="form-control">
            <input class="btn btn-outline-success" type="submit">
        </div>
    </form>

    <a href="test_session/cookie.php">Mes cookies</a>

</body>

</html>