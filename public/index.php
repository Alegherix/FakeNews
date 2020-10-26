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
                <p>The Seagull <span> - News for everyone<span></p>
            </div>
            <ul>
                <li><a href="/">Home </a> </li>
                <li><a onClick="scrollToFeatured()">Latest News</a></li>
                <li><a onClick="scrollToTrending()">Trending</a></li>
            </ul>
        </nav>
    </header>
    <div class="separator"></div>
    <main>
        <h1>Breaking News</h1>
        <div class="featureCard">
            <?php foreach (getFeatured($articles) as $featured) : ?>
                <img src="<?php echo $featured["imgUrl"]; ?>" />
                <div class="featureContentContainer">
                    <div class="featureInfoContainer">
                        <div class="author">
                            <p>Written by - <?php echo $featured["author"]["name"]; ?></p>
                        </div>
                        <p class="pubDate">
                            <?php echo getDateAsString($featured["pubDate"]); ?>
                        </p>
                        <div class="likesContainer">
                            <img class="heart" src="/heart.svg" alt="Picture of a heart" />
                            <p class="likes"><?php echo $featured["likes"]; ?></p>
                        </div>
                    </div>

                    <p class="title">
                        <?php echo $featured["title"]; ?>
                    </p>

                    <div class="contentContainer">
                        <p class="summary"><?php echo summarizeContent($featured["content"]); ?></p>
                        <p class="extended"><?php echo $featured["content"]; ?></p>
                    </div>

                    <div class="readMore">
                        <button onClick="readMore()">Read more</button>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>

        <h1 class="trending">Trending</h1>
        <div class="cardContainer">
            <?php foreach (getNonFeatured($articles) as $article) : ?>
                <div class="card">
                    <img src="<?php echo $article["imgUrl"]; ?>" />
                    <div class="cardContent">
                        <div class="infoContainer">
                            <p class="title">
                                <?php echo $article["title"]; ?>
                            </p>
                            <p class="pubDate">
                                <?php echo getDateAsString($article["pubDate"]); ?>
                            </p>
                            <div class="likesContainer">
                                <img class="heart" src="/heart.svg" alt="Picture of a heart" />
                                <p class="likes"><?php echo $article["likes"]; ?></p>
                            </div>
                        </div>

                        <div class="contentContainer">
                            <p class="summary"><?php echo summarizeContent($article["content"]); ?></p>
                            <p class="extended"><?php echo $article["content"]; ?></p>
                        </div>

                        <div class="author">
                            <p>Written by - <?php echo $article["author"]["name"]; ?></p>
                        </div>

                        <div class="readMore">
                            <button class="readMoreButton">Read more</button>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
</body>
<script src="script.js"></script>

</html>