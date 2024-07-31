<?php
include 'language.php';

echo "<hr>";
echo "<h1>Xóa Ngôn Ngữ</h1>";

unset($languages["JavaScript"]);

foreach ($languages as $language) {
    echo "Name: " . $language['name'] . "<br>";
    echo "Year: " . $language['year'] . "<br>";
    echo "Frameworks: " . implode( $language['frameworks']) . "<br><br>";
}
?>
