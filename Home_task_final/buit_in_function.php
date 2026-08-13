<?php

$text = "Campus Cafe";
echo "1. strlen(): " . strlen($text);
echo "<br><br>";

$text = "Welcome to Campus Cafe";
echo "2. str_word_count(): " . str_word_count($text);
echo "<br><br>";

$text = "I love PHP";
if (str_contains($text, "PHP")) {
    echo "3. str_contains(): PHP is found";
} else {
    echo "3. str_contains(): PHP is not found";
}
echo "<br><br>";

$text = "Hello PHP";
echo "4. strpos(): " . strpos($text, "PHP");
echo "<br><br>";

$text = "hello world";
echo "5. strtoupper(): " . strtoupper($text);
echo "<br><br>";

$text = "HELLO WORLD";
echo "6. strtolower(): " . strtolower($text);
echo "<br><br>";

$text = "I like Java";
echo "7. str_replace(): " . str_replace("Java", "PHP", $text);
echo "<br><br>";

$text = "Hello";
echo "8. strrev(): " . strrev($text);
echo "<br><br>";

$text = "   Hello PHP   ";
echo "9. trim(): [" . trim($text) . "]";
echo "<br><br>";

$text = "Apple,Banana,Mango";
$fruits = explode(",", $text);
echo "10. explode(): ";
print_r($fruits);
echo "<br><br>";

$fruits = array("Apple", "Banana", "Mango");
echo "11. implode(): " . implode(", ", $fruits);
echo "<br><br>";

$text = "Hello World";
echo "12. substr(): " . substr($text, 0, 5);
echo "<br><br>";

$num = 25;
if (is_int($num)) {
    echo "13. is_int(): The value is an integer";
} else {
    echo "13. is_int(): The value is not an integer";
}
echo "<br><br>";

$num = 10.5;
if (is_float($num)) {
    echo "14. is_float(): The value is a float";
} else {
    echo "14. is_float(): The value is not a float";
}
echo "<br><br>";

$num = acos(2);
if (is_nan($num)) {
    echo "15. is_nan(): The value is NaN";
} else {
    echo "15. is_nan(): The value is not NaN";
}
echo "<br><br>";

$num = "12345";
if (is_numeric($num)) {
    echo "16. is_numeric(): The value is numeric";
} else {
    echo "16. is_numeric(): The value is not numeric";
}
echo "<br><br>";

$num = 10.56;
echo "17. round(): " . round($num);
echo "<br><br>";

define("COLLEGE", "AIUB");
echo "18. define(): " . COLLEGE;
echo "<br><br>";

echo "19. date(): " . date("Y-m-d");
echo "<br><br>";

$date = strtotime("2026-12-25");
echo "20. strtotime(): " . $date;
echo "<br>";
echo "Formatted date: " . date("Y-m-d", $date);
echo "<br><br>";

echo "21. time(): " . time();
echo "<br><br>";

date_default_timezone_set("Asia/Dhaka");
echo "22. date_default_timezone_set(): ";
echo date("Y-m-d H:i:s");
echo "<br><br>";

echo "23. date_default_timezone_get(): ";
echo date_default_timezone_get();
echo "<br><br>";

echo "24. include: Used to include another PHP file.";
echo "<br><br>";

echo "25. require: Used to include a required PHP file.";
echo "<br><br>";

$student = array(
    "name" => "Tousif",
    "department" => "CSE",
    "semester" => "Fall"
);

$jsonData = json_encode($student);

echo "26. json_encode(): ";
echo $jsonData;
echo "<br><br>";

$json = '{"name":"Tousif","age":23}';

$data = json_decode($json);

echo "27. json_decode(): ";
echo $data->name;
echo " - Age: " . $data->age;
echo "<br><br>";

$foods = array("Burger", "Pizza", "Pasta");

echo "28. array(): ";
print_r($foods);
echo "<br><br>";

$student = array(
    "name" => "Tousif",
    "age" => 23,
    "department" => "CSE"
);

echo "29. array_keys(): ";
print_r(array_keys($student));
echo "<br><br>";

$array1 = array("Apple", "Banana");
$array2 = array("Mango", "Orange");

$merged = array_merge($array1, $array2);

echo "30. array_merge(): ";
print_r($merged);
echo "<br><br>";

$foods = array("Burger", "Pizza");

array_push($foods, "Pasta");

echo "31. array_push(): ";
print_r($foods);
echo "<br><br>";

$numbers = array(10, 20, 30, 40);

$reversed = array_reverse($numbers);

echo "32. array_reverse(): ";
print_r($reversed);
echo "<br><br>";

$foods = array("Burger", "Pizza", "Pasta");

echo "33. sizeof(): " . sizeof($foods);
echo "<br><br>";

$foods = array("Burger", "Pizza", "Pasta", "Sandwich");

echo "34. count(): " . count($foods);
echo "<br><br>";

$numbers = array(50, 10, 40, 20, 30);

sort($numbers);

echo "35. sort(): ";
print_r($numbers);
echo "<br><br>";

?>