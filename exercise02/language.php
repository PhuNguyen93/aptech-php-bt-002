<?php
$languages = [
    "Java" => [
        "name" => "Java",
        "year" => 1995,
        "frameworks" => ["Spring", "Hibernate", "Struts"]
    ],
    "C#" => [
        "name" => "C#",
        "year" => 2000,
        "frameworks" => [".NET", "Xamarin", "Unity"]
    ],
    "PHP" => [
        "name" => "PHP",
        "year" => 1995,
        "frameworks" => ["Laravel", "Symfony", "CodeIgniter"]
    ],
    "JavaScript" => [
        "name" => "JavaScript",
        "year" => 1995,
        "frameworks" => ["React", "Vue", "Angular"]
    ],
    "Python" => [
        "name" => "Python",
        "year" => 1991,
        "frameworks" => ["Django", "Flask", "Pyramid"]
    ]
];

foreach ($languages as $language) {
    echo "Name: " . $language['name'] . "<br>";
    echo "Year: " . $language['year'] . "<br>";
    echo "Frameworks: " . implode(", ", $language['frameworks']) . "<br><br>";
}
?>



