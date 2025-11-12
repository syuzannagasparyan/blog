<!DOCTYPE html>
<html lang="hy">
<head>
<meta charset="UTF-8">
<title>PHP խնդիրներ</title>
</head>
<body>
<?php
echo "<h2>Խնդիր 1</h2>";
$price = 15.3386;
echo round($price, 2)."<br>";
echo ceil($price)."<br>";
echo floor($price)."<br>";

echo "<h2>խնդիր 2</h2>";
$number1 = rand(1, 100);
echo $number1."<br>";
$number2 = rand(0, 100) / 100;
echo $number2."<br>";
$numbers = [];
for($i=0;$i<5;$i++){ $numbers[$i]=rand(1,100);
echo ($numbers[$i])."<br>";}
echo max($numbers)."<br>";
echo min($numbers)."<br>";

echo "<h2>Խնդիր 3</h2>";
$num1=-15.7;
$num2=8.3;
echo abs($num1)."<br>".abs($num2)."<br>";
echo pow($num1,2)."<br>";
echo sqrt($num2)."<br>";
echo pow($num1,$num2)."<br>";

echo "<h2>Խնդիր 4</h2>";
$text=" integral ";
echo trim($text)."<br>";
echo strtoupper($text)."<br>";
echo strtolower($text)."<br>";
echo strlen($text)."<br>";
echo ucfirst(trim($text))."<br>";

echo "<h2>Խնդիր 5</h2>";
$sentence ="I love JavaScript, JavaScript is great";
echo str_replace("JavaScript","PHP",$sentence)."<br>";
$position = strpos($sentence, "JavaScript");
if ($position !== false) {
    echo "The word JavaScript was found at position: $position<br>";
} else {
    echo "The word JavaScript was NOT found in the sentence.<br>";
}
if (strpos($sentence, "love") !== false) {
    echo "The word love was found in the sentence.<br>";
} else {
    echo "The word love was NOT found in the sentence.<br>";
}
$count = substr_count($sentence, "JavaScript");
echo "The word JavaScript appears $count times.<br>";

echo "<h2>Խնդիր 6</h2>";
$email = "user@example.com";
$p = explode("@", $email);
print_r($p);
echo "<br>";
$text = implode("at",$p);
echo($text);
echo "<br>";
$substring = substr($email, -4);
echo $substring;

echo "<h2>Խնդիր 7</h2>";
function getInitials($fullName) {
    $parts = explode(" ", $fullName);
    $initials = "";
    foreach ($parts as $part) {
        $initials .= ucfirst(substr($part,0,1));
    }
    return $initials;
}
echo getInitials("Syuzanna")."<br>";

echo "<h2>Խնդիր 8</h2>";
$f=["apple","banana","cherry","orange","pear"];
echo $f[1]."<br>";
array_push($f,"mango");
array_unshift($f,"kiwi");
array_pop($f);
echo count($f)."<br>";
echo implode(", ",$f)."<br>";

echo "<h2>Խնդիր 9</h2>";
$student = [
    "name" => "Ani",
    "age" => 20,
    "grade" => "18"
];
foreach ($student as $x => $y) {
  echo "$x <br>";}
foreach ($student as $x => $y) {
  echo "$y <br>";}
if (array_key_exists('age', $student)) {
    echo "The key 'age' exists in the array.";
} else {
    echo "The key 'age' does not exist in the array.";
}
$student["city"] = "Ijevan";
print_r($student);

echo "<h2>Խնդիր 10</h2>";
$n=[5,12,8,130,44,3];
echo max($n)."<br>";
echo min($n)."<br>";
echo array_sum($n)."<br>";
$even = array_filter($n,function($number) {
    return $number % 2 == 0;
});
echo implode(", ", $even)."<br>";
if (in_array(44, $n)) {
    echo "44 found in array <br>";
} else {
    echo "44 wasn't found <br>";
}

echo "<h2>Խնդիր 11</h2>";
$fruits=["apple","banana"];
$veggies=["carrot","potato"];
sort($fruits);
$m=array_merge($fruits,$veggies);
print_r($m);
echo "<br>";
$r=array_reverse($m);
print_r($r);
echo "<br>";
echo implode(", ",$r)."<br>";

echo "<h2>Խնդիր 12</h2>";
$prices = [100, 200, 150, 300];
$with_vat = array_map(fn($p) => $p * 1.2, $prices);
$discounted = array_map(fn($p) => $p * 0.9, $with_vat);
$formatted = array_map(fn($p) => round($p) . " AMD", $discounted);
print_r($formatted);

echo "<h2>Խնդիր 13</h2>";
$students = [
    ["name" => "Anna", "grades" => [18, 19, 20]],
    ["name" => "David", "grades" => [17, 15, 19]],
    ["name" => "Lilit", "grades" => [13, 15, 16]]
];
$topStudent = "";
$highestAvg = 0;
foreach ($students as $student) {
    $avg = array_sum($student["grades"]) / count($student["grades"]);
    echo $student["name"]." - ".$avg."<br>";
    if ($avg > $highestAvg) {
        $highestAvg = $avg;
        $topStudent = $student["name"];
    }
}
echo $topStudent . " (" . $highestAvg . ")<br>";
foreach ($students as $student) {
    echo $student["name"] . "<br>";
}

echo "<h2>Խնդիր 14</h2>";
$k=["name","age","city"];
$v=["John",25,"Yerevan"];
$c=array_combine($k,$v);
$c["country"]="Armenia";
unset($c["age"]);
print_r($c);
?>
</body>
</html>