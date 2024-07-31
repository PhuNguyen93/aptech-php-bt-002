<?php
include 'language.php';

echo "<hr>";
echo "<h1>Thêm 2 ngôn ngữ mới Golang và Ruby</h1>";

$languages["Golang"] = [
    "name" => "Golang",
    "year" => 2009,
    "frameworks" => ["Gin", "Beego", "Echo"]
];
$languages["Ruby"] = [
    "name" => "Ruby",
    "year" => 1995,
    "frameworks" => ["Rails", "Sinatra", "Hanami"]
];

usort($languages, function($a, $b) {
    return strcmp($a['name'], $b['name']);
});

foreach ($languages as $language) {
    echo "Name: " . $language['name'] . "<br>";
    echo "Year: " . $language['year'] . "<br>";
    echo "Frameworks: " . implode(", ", $language['frameworks']) . "<br><br>";
}
?>
