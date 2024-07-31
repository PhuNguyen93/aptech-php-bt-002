<?php
include 'language.php';

echo "<hr>";
echo "<h1>Sap xep theo thu tu</h1></p>";

usort($languages, function($a, $b) {
    return strcmp($a['name'], $b['name']);
});

foreach ($languages as $language) {
    echo "Name: " . $language['name'] . "<br>";
    echo "Year: " . $language['year'] . "<br>";
    echo "Frameworks: " . implode(", ", $language['frameworks']) . "<br><br>";
}
?>
