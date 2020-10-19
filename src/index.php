<?php

// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.
require __DIR__ . "/data.php";
require __DIR__ . "/functions.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Seagull</title>
    <link href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Spartan:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav>
            <div class="logoContainer">
                <img src="seagull.svg" alt="Logo Icon of a seagull" />
                <p>The Seagull - News for everyone</p>
            </div>
            <ul>
                <li><a href=" http://">Home </a> </li>
                <li><a href="http://">Latest News</a></li>
                <li><a href="http://">About</a></li>
            </ul>
        </nav>
    </header>
    <div class="separator"></div>
    <main>
        <h1>Latest News</h1>
        <?php foreach ($articles as $article) : ?>
            <div class="card">
                <img src="<?php echo $article["imgUrl"]; ?>" />

                <div class="infoContainer">
                    <p class="title">
                        <?php echo $article["title"]; ?>
                    </p>
                    <p class="pubDate">
                        <?php echo getDateAsString($article["pubDate"]); ?>
                    </p>
                    <div class="likesContainer">
                        <img src="/heart.svg" alt="Picture of a heart">
                        <p class="likes"><?php echo $article["likes"]; ?></p>
                    </div>
                </div>

                <div class="contentContainer">
                    <p><?php echo $article["content"]; ?></p>
                </div>


            </div>
        <?php endforeach; ?>
    </main>
</body>

</html>