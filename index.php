<?php

// This is the file where you can keep your HTML markup. We should always try to
// keep us much logic out of the HTML as possible. Put the PHP logic in the top
// of the files containing HTML or even better; in another PHP file altogether.
require __DIR__ . "/data.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <p>The Seagull - News for everyone</p>
                <li><a href="http://">Home</a></li>
                <li><a href="http://">Latest News</a></li>
                <li><a href="http://">About</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <php echo "Hellllo" ;>
            <h1>Latest News</h1>
            <?php foreach ($articles as $article) : ?>
                <div class="card">
                    <p>
                        <?php echo $article["title"]; ?>
                    </p>
                </div>
            <?php endforeach; ?>
    </main>
</body>

</html>