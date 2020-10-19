<?php

declare(strict_types=1);

require __DIR__ . "/data.php";

foreach ($articles as $article) {
    echo $article["title"];
}

// [$title, $img, [$_, $name], $pub_date, $likes, $content]