<?php

declare(strict_types=1);

require __DIR__ . "/data.php";

// foreach ($articles as ["title" => $title, "author" => [$_, $name], "imgUrl" => $imgUrl, "pubDate" => $pubDate, "likes" => $likes, "content" => $content]) {
//     echo $title;
// }

// foreach ($articles as $article) {
//     echo getDateAsString(($article["pubDate"]));
// }

function getDateAsString(DateTime $time): string
{
    return (date_format($time, "j/n-Y"));
}
