<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$array = array(
    1 => "Струнов", 
    2 => "Логунов", 
    3 => "Токарева", 
    4 => "Майлова",
    5 => "Дубаева", 
    6 => "Стучков", 
    7 => "Маизов", 
    8 => "Лучиков",
    9 => "Ойкин", 
    10 => "Мувкин");

    echo "<pre>"; // вывод списка массива
    print_r($array);
    echo "</pre>";

    $rand_keys = array_rand($array, 3); // сам код с тремя преступниками
    echo " Товарищ < ";
    echo $array[$rand_keys[0]] . "\n";
    echo " > является преступником посадить на пожизненное. "."<br>";
    echo "А этот товарищ < ";
    echo $array[$rand_keys[1]] . "\n";
    echo " > была поймана за угон автомобиля."."<br>";
    echo " Товарищ < ";
    echo $array[$rand_keys[2]] . "\n";
    echo " > был с ним за одно."."<br>";
?>


</body>
</html>