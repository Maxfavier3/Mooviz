<?php 
    include 'array_movie.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="pictures/favicon_mooviz.svg" />
        <link rel="stylesheet" href="style.css">
        <title>Mooviz</title>
    </head>
    <body>
        <header>
            <img src="pictures/hamburger.svg" alt="hamburger icon">
            <img id = "logo" src="pictures/logo_mooviz.svg" alt="logo mooviz">
            <!--<img id="filter_btn"  src="pictures/filter.svg" alt="filter button">-->
            <form action="" method="post">
                <select name="select" id="filter_select" onchange="this.form.submit()">
                    <option value=""> -- Filtrer -- </option>
                    <option value="date">Date</option>
                </select>
            </form>
            <?php 
                if (isset($_POST['select']) && $_POST['select'] === 'date') {
                        usort($arrayMovies, function ($a, $b) {
                        return $a['release_year'] - $b['release_year'];
                    });
                };
            ?>
        </header>
        <main id="container">
            <?php foreach($arrayMovies as $card): ?>
                <div class="card">
                    <div class="pics">
                        <img class="cover"  src="<?= $card["thumbnail_url"]; ?>" alt="<?= $card["title"]; ?>">
                        <div class="play_btn">
                            <a href="<?= $card["teaser_url"]; ?>">
                                <img mouseo class="play"  src="pictures/play_button.svg" alt="play button">
                            </a>
                        </div>
                    </div>
                    <div class="content">
                        <h1><?= $card["title"] ." (". $card["release_year"] .")";?></h1>
                        <p>Categories: 
                            <?php foreach($card["categories"] as $category): ?>
                                <span class="bold"><?= $category; ?></span>
                            <?php endforeach; ?>
                        </p>
                        <div class = "info">
                            <p>Productors: 
                                <?php foreach($card["productors"] as $productor): ?>
                                    <span class="bold"><?= $productor; ?></span>
                                <?php endforeach; ?>
                            </p>
                            <p>Directors:
                                <?php foreach($card["directors"] as $director):?>
                                    <span class="bold"><?= $director; ?></span>
                                <?php endforeach; ?>
                            </p>
                            <p>Revenue:
                            <span class="bold"><?= $card["revenues"]; ?> M$</span>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </main>
        <script src="app.js"></script>
    </body>
</html>