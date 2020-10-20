<?php

declare(strict_types=1);

require __DIR__ . "/data.php";

// foreach ($articles as ["title" => $title, "author" => [$_, $name], "imgUrl" => $imgUrl, "pubDate" => $pubDate, "likes" => $likes, "content" => $content]) {
//     echo $title;
// }

// Format the date to a string for showing under card picture
function getDateAsString(DateTime $time): string
{
    return (date_format($time, "j/n-Y"));
}

// Cap the content to the first 50 words, 
function summarizeContent(string $content): string
{
    $strArray = explode(" ", $content);
    $sliced = array_slice($strArray, 0, 50);
    return implode(" ", $sliced) . "...";
}

// Used to sort the input array by it's pubdate property,
// Could also pass parameter of what to sort on, to make more generic
function sortByDates(array $arrayToSort): array
{
    usort($arrayToSort, function ($d1, $d2) {
        return $d2["pubDate"] <=> $d1["pubDate"];
    });
    return $arrayToSort;
}

// Ie get the latest written article and use it as Breaking News
function getFeatured(array $array): array
{
    $sorted = sortByDates($array);
    return array(array_shift($sorted));
}

// Returns all the non features articles after they've been sorted
function getNonFeatured(array $array): array
{
    $sorted = sortByDates($array);
    return array_slice($sorted, 1);
}

foreach (getFeatured($articles) as $featured) {
    print_r($featured["title"]);
}
