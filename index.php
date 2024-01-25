<?php
    require_once __DIR__ . '/db/init.php';
    // var_dump($movies);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>

    <!-- Boostrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="header mb-5">
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Movies</a>
            </div>
        </nav>
    </div>

    <main>
        <div class="container">
            <div class="row">
                <?php foreach($movies as $movie) { ?>
                <div class="col-4">
                    <div class="card">
                        <img src="<?php echo $movie->imgUrl; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fs-5"><?php echo $movie->title; ?></h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Categories:</strong> <?php foreach($movie->categories as $category) { echo $category->name . ' '; }; ?></li>
                            <li class="list-group-item"><strong>Language:</strong> <?php echo $movie->original_language; ?></li>
                            <li class="list-group-item"><strong>Release date:</strong> <?php echo $movie->release_date; ?></li>
                            <li class="list-group-item"><strong>Average Vote:</strong> <?php echo $movie->average_vote; ?></li>
                        </ul>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>
</html>