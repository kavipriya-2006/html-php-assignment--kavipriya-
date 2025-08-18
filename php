Q1. <?php
$capital = 67;
print("Variable capital is $capital");
print("Variable CaPiTaL is $CaPiTaL");
?>
OUTPUT:
Variable capital is 67
Warning: Undefined variable $CaPiTaL in /tmp/SunO26vvE8/main.php on line 4
Variable CaPiTaL is 

=== Code Execution Successful ===
Q2. <?php
echo "<table border='1'>";
for ($i = 1; $i <= 3; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 3; $j++) {
        $result = round($i / $j, 2);
        echo "<td>$result</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
OUTPUT:
1    0.5  0.33
2    1    0.66
3    1.5  1
Q4. $animal = "antelope";
$animal_heads = 1;
$animal_legs = 4;
echo "The $animal has $animal_heads head(s).";
echo "The $animal has $animal_legs leg(s).";
OUTPUT:
The antelope has 1 head(s).The antelope has 4 leg(s).
Q5. <?php
$price1 = 100;
$qty1 = 2;

$price2 = 50;
$qty2 = 1;

$price3 = 30;
$qty3 = 3;

$subtotal = ($price1 * $qty1) + ($price2 * $qty2) + ($price3 * $qty3);
$tax = $subtotal * 0.10;
$total = $subtotal + $tax;

echo "Subtotal: $subtotal<br>";
echo "Tax (10%): $tax<br>";
echo "Total: $total";
?>
OUTPUT:
Subtotal: 340
Tax (10%): 34
Total: 374
Q8. <?php
function deal($cost, $size) {
    return $cost / $size;
}

$a_cost = deal(25, 11);
$b_cost = deal(23, 9);

if ($a_cost < $b_cost) {
    echo "Choose Drink A to save money.";
} else {
    echo "Choose Drink B to save money.";
}
?>
OUTPUT:
Choose Drink A to save money.
Q9. <?php
$this = "this";
$that = "that";
$the_other = 2.2000000000;
print("$this,$not_set,$that,$the_other");
?>
OUTPUT:
this,,that,2.2
10)
<?php
$num_students = (int)readline("Enter the number of students: ");
for ($i = 1; $i <= $num_students; $i++) {
    $marks = (float)readline("Enter marks for student $i: ");
    if ($marks >= 90) {
        $grade = 'A';
    } elseif ($marks >= 80) {
        $grade = 'B';
    } elseif ($marks >= 70) {
        $grade = 'C';
    } elseif ($marks >= 60) {
        $grade = 'D';
    } else {
        $grade = 'F';
    }
    echo "Student $i Grade: $grade\n";
}
?>
OUTPUT:
Enter the number of students: 80
Enter marks for student 1: 99
Student 1 Grade: A
Enter marks for student 2: 90
Student 2 Grade: A
Enter marks for student 3: 

11)<?php
$day_number = (int)readline("Enter a number (1 to 7) to get the day of the week: ");
switch ($day_number) {
    case 1:
        echo "Sunday\n";
        break;
    case 2:
        echo "Monday\n";
        break;
    case 3:
        echo "Tuesday\n";
        break;
    case 4:
        echo "Wednesday\n";
        break;
    case 5:
        echo "Thursday\n";
        break;
    case 6:
        echo "Friday\n";
        break;
    case 7:
        echo "Saturday\n";
        break;
    default:
        echo "Invalid input! Please enter a number between 1 and 7.\n";
}
?>
OUTPUT:
Enter a number (1 to 7) to get the day of the week: 4
Wednesday

12)
<?php
$marks = (float)readline("Enter the student's marks (%): ");
if ($marks >= 75) {
    echo "Grade: First Class\n";
} elseif ($marks >= 60 && $marks <= 74) {
    echo "Grade: Second Class\n";
} elseif ($marks >= 40 && $marks <= 59) {
    echo "Grade: Third Class\n";
} else {
    echo "Grade: Fail\n";
}
?>
OUTPUT:
Enter the student's marks (%): 90
Grade: First Class

13)
$sub = substr(12345, 2, 2);
echo “sub is $sub”;
OUTPUT:
sub is 34

15)
<?php
$number = (int)readline("Enter a number: ");
$sum = 0;
$temp = $number;
while ($temp > 0) {
    $digit = $temp % 10;
    $sum += $digit;
    $temp = (int)($temp / 10);
}
echo "Sum of the digits of $number is: $sum\n";
?>

OUTPUT:
Enter a number: 24
Sum of the digits of 24 is: 6

17)
<?php
$balance = 1000;

while (true) {
    echo "\n1. Check Balance\n2. Deposit\n3. Withdraw\n4. Exit\nChoose: ";
    $choice = (int)readline();

    switch ($choice) {
        case 1:
            echo "Balance: ₹$balance\n";
            break;
        case 2:
            $deposit = (float)readline("Enter deposit amount: ");
            if ($deposit > 0) {
                $balance += $deposit;
                echo "Deposited. New Balance: ₹$balance\n";
            } else {
                echo "Invalid amount!\n";
            }
            break;
        case 3:
            $withdraw = (float)readline("Enter withdraw amount: ");
            if ($withdraw > 0 && $withdraw <= $balance) {
                $balance -= $withdraw;
                echo "Withdrawn. New Balance: ₹$balance\n";
            } else {
                echo "Invalid or insufficient balance!\n";
            }
            break;
        case 4:
            echo "Thank you!\n";
            exit;
        default:
            echo "Invalid option.\n";
    }
}
?>
OUTPUT:
1. Check Balance
2. Deposit
3. Withdraw
4. Exit
Choose: 3
Enter withdraw amount: 5000
Invalid or insufficient balance!

1. Check Balance
2. Deposit
3. Withdraw
4. Exit
Choose: 

18)
<?php
$name = "Miruthulasri";
if (isset($name)) {
    echo "Variable is set.";
} else {
    echo "Variable is not set.";
}
?>
OUTPUT:
Variable is set.

19)
<!DOCTYPE html>
<html>
<head>
    <title>Highest and Lowest Finder</title>
</head>
<body>

<?php
function findHighLow($arr) {
    $max = max($arr);
    $min = min($arr);
    return ["highest" => $max, "lowest" => $min];
}
$numbers = [12, 45, 3, 78, 23, 9];
$result = findHighLow($numbers);
echo "<h3>Array: " . implode(", ", $numbers) . "</h3>";
echo "<p>Highest Value: " . $result['highest'] . "</p>";
echo "<p>Lowest Value: " . $result['lowest'] . "</p>";
?>

</body>
</html>

OUTPUT:
<!DOCTYPE html>
<html>
<head>
    <title>Highest and Lowest Finder</title>
</head>
<body>

<h3>Array: 12, 45, 3, 78, 23, 9</h3><p>Highest Value: 78</p><p>Lowest Value: 3</p>
</body>
</html>

21)
<?php
function isLeapYear($year) {
    return ($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0);
}
$year = 2024;
echo isLeapYear($year) ? "$year is a leap year." : "$year is not a leap year.";
?>
OUTPUT:
2024 is a leap year.

22)
<?php
$text = "PHP is great. PHP is powerful.";
$word = "PHP";
echo substr_count($text, $word);
?>
OUTPUT:
2

24)
<?php
$str = "  Hello World from PHP!  ";

echo trim($str) . "\n";
echo strlen($str) . "\n";
echo str_word_count($str) . "\n";
echo strrev($str) . "\n";
echo strtoupper($str) . "\n";
echo strtolower($str) . "\n";
echo str_replace("PHP", "Code", $str) . "\n";
echo substr($str, 6, 5) . "\n";
echo strpos($str, "World") . "\n";
?>
OUTPUT:
Hello World from PHP!
25
4
  !PHP morf dlroW olleH  
  HELLO WORLD FROM PHP!  
  hello world from php!  
  Hello World from Code!  
o Wor
8

25)
<?php
$text = "The Thing will come to you soon";
$result = preg_replace('/\bthe\b/i', 'best', $text, 1);
echo $result;
?>
OUTPUT:
best Thing will come to you soon

27)
<?php
$a = 10;
$b = 3;

echo "Addition: " . ($a + $b) . "\n";        
echo "Subtraction: " . ($a - $b) . "\n";    
echo "Multiplication: " . ($a * $b) . "\n";   
echo "Division: " . ($a / $b) . "\n";         
echo "Modulus: " . ($a % $b) . "\n";       
echo "Exponent: " . ($a ** $b) . "\n";       
?>
OUTPUT:
Addition: 13
Subtraction: 7
Multiplication: 30
Division: 3.3333333333333
Modulus: 1
Exponent: 1000

28)
<?php
$a = 10;
$b = "10";
$c = 20;

var_dump($a == $b);   
var_dump($a === $b);  
var_dump($a == $c);  
var_dump($a === $c);  
?>

OUTPUT:
bool(true)
bool(false)
bool(false)
bool(false)

29)
<?php
echo "Random number (1-100): " . rand(1, 100) . "\n";
echo "Absolute of -15: " . abs(-15) . "\n";
echo "String Replace: " . str_replace("world", "PHP", "Hello world") . "\n";
echo "Value of Pi: " . pi() . "\n";
echo "Ceil of 4.3: " . ceil(4.3) . "\n";
?>
OUTPUT:
Random number (1-100): 96
Absolute of -15: 15
String Replace: Hello PHP
Value of Pi: 3.1415926535898
Ceil of 4.3: 5

30)
<?php
function generatePassword($length = 10) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+=-';
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $chars[rand(0, strlen($chars) - 1)];
    }
    return $password;
}

echo "Generated Password: " . generatePassword(12);
?>
OUTPUT:
Generated Password: YM5bu1i9fRHb

31)
<?php
$fruits = ["apple", "banana", "cherry", "date"];

$fruits = array_slice($fruits, 1); // Skip the first element

print_r($fruits);
?>

OUTPUT:
Array
(
    [0] => banana
    [1] => cherry
    [2] => date
)

32)
<?php
$mail = "admin@example.com";
$mail = str_replace("a","@",$mail);
echo "Contact me at $mail.";
?>

OUTPUT:
Contact me at @dmin@ex@mple.com.

32) b)
<?php
$names = array("alex", "jean", "emily", "jane");
$name = preg_grep("/^e/", $names);
print_r($name);
?>

OUTPUT:
Array
(
    [2] => emily
)

33)
<?php
// Create a 3x3 matrix (multidimensional array)
$matrix = array(
    array(1, 2, 3),       // Row 0
    array(4, 5, 6),       // Row 1
    array(7, 8, 9)        // Row 2
);

// Access and display the value in the second row (index 1) and third column (index 2)
echo "Value at second row, third column: " . $matrix[1][2];
?>
OUTPUT:
Value at second row, third column: 6

34)
<?php
$text = "PHP is powerful. PHP is popular. I love PHP!";
$search = "/\bPHP\b/";
$replace = "Python";
$result = preg_replace($search, $replace, $text);
echo $result;
?>
 
OUTPUT:
Python is powerful. Python is popular. I love Python!

35)
<?php
$sentences = [
    "I like learning PHP.",
    "JavaScript is fun too."
];
$search = "PHP";
foreach ($sentences as $sentence) {
    if (strpos($sentence, $search) !== false) {
        echo "Found '$search' in: $sentence<br>";
    } else {
        echo "'$search' not found in: $sentence<br>";
    }
}
?>

OUTPUT:
Found 'PHP' in: I like learning PHP.
'PHP' not found in: JavaScript is fun too.

36)
<?php
$fruits = ["Apple", "Banana", "Mango", "Orange"];
echo "The third fruit is: " . $fruits[2];
?>

OUTPUT:
The third fruit is: Mango

37)
i) POP()

<?php
$fruits = ["Apple", "Banana", "Mango"];
array_pop($fruits);
print_r($fruits);
?>

OUTPUT:
Array
(
    [0] => Apple
    [1] => Banana
)
 
ii) PUSH()

<?php
$fruits = ["Apple", "Banana"];
array_push($fruits, "Mango", "Orange");
print_r($fruits);
?>

OUTPUT:
Array
(
    [0] => Apple
    [1] => Banana
    [2] => Mango
    [3] => Orange
)

38)
<?php
$fruits = ["Apple", "Banana", "Mango", "Orange"];
$i = 0;
$length = count($fruits);
while ($i < $length) {
    echo $fruits[$i] . "<br>";
    $i++;
}
?>

OUTPUT:
Apple
Banana
Mango
Orange

39)
<?php
$students = [
    ["name" => "Alice", "score" => 85],
    ["name" => "Bob", "score" => 72],
    ["name" => "Charlie", "score" => 60],
];
function calculateGrade($score) {
    if ($score >= 90) return 'A';
    elseif ($score >= 80) return 'B';
    elseif ($score >= 70) return 'C';
    elseif ($score >= 60) return 'D';
    else return 'F';
}
foreach ($students as &$student) {
    $student['grade'] = calculateGrade($student['score']);
}
unset($student);
foreach ($students as $student) {
    echo "Name: {$student['name']}, Score: {$student['score']}, Grade: {$student['grade']}<br>";
}
?>

OUTPUT:
Name: Alice, Score: 85, Grade: B
Name: Bob, Score: 72, Grade: C
Name: Charlie, Score: 60, Grade: D

40)
<?php
$str = "Hello! Welcome to PHP #2025.";
$allowed = array_merge(range('a','z'), range('A','Z'), range('0','9'), [' ']);            // ' ' space
$result = '';
foreach (str_split($str) as $char) {
    if (in_array($char, $allowed)) {
        $result .= $char;
    }
}
echo $result; 
?>

OUTPUT:
Hello Welcome to PHP 2025

41)
<?php
$text = "Email me at alice@example.com or bob123@test.com.";

preg_match_all('/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}/i', $text, $matches);

print_r($matches[0]);
?>

OUTPUT:
Array
(
    [0] => alice@example.com
    [1] => bob123@test.com
)

42)
<?php
$marks1 = array(360,310,310,330,313,375,456,111,256);
$marks2 = array(350,340,356,330,321);
$marks3 = array(630,340,570,635,434,255,298);
$allMarks = array_merge($marks1, $marks2, $marks3);
$maxMark = max($allMarks);
$minMark = min($allMarks);
echo "Maximum mark is: " . $maxMark . "\n";
echo "Minimum mark is: " . $minMark . "\n";
?>

OUTPUT:
Maximum mark is: 635
Minimum mark is: 111

43)
<?php
$password = "Passw0rd!";

$pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/';

if (preg_match($pattern, $password)) {
    echo "Valid password.";
} else {
    echo "Invalid password.";
}
?>

OUTPUT:
Valid password.

44)
<?php
// Songs and Playlists
$songs = [
    ['id' => 1, 'title' => 'Imagine', 'artist' => 'John Lennon'],
    ['id' => 2, 'title' => 'Hey Jude', 'artist' => 'The Beatles']
];
$playlists = [];

// Create Playlist
function createPlaylist(&$playlists, $name) {
    $playlists[] = ['id' => time(), 'name' => $name, 'songs' => []];
}

// Add Song
function addSong(&$playlists, $pid, $sid) {
    foreach ($playlists as &$p) if ($p['id'] === $pid && !in_array($sid, $p['songs'])) $p['songs'][] = $sid;
}

// Remove Song
function removeSong(&$playlists, $pid, $sid) {
    foreach ($playlists as &$p) if ($p['id'] === $pid)
        $p['songs'] = array_filter($p['songs'], fn($id) => $id !== $sid);
}

// View Playlist
function viewPlaylist($playlists, $songs, $pid) {
    foreach ($playlists as $p) if ($p['id'] === $pid) {
        return array_map(fn($id) => array_values(array_filter($songs, fn($s) => $s['id'] === $id))[0], $p['songs']);
    }
    return [];
}

// Swap Songs
function swapSongs(&$playlists, $pid, $i, $j) {
    foreach ($playlists as &$p)
        if ($p['id'] === $pid) [$p['songs'][$i], $p['songs'][$j]] = [$p['songs'][$j], $p['songs'][$i]];
}

// Delete Playlist
function deletePlaylist(&$playlists, $pid) {
    foreach ($playlists as $i => $p) if ($p['id'] === $pid) unset($playlists[$i]);
}

// Search Songs
function searchSongs($songs, $key) {
    return array_filter($songs, fn($s) =>
        stripos($s['title'], $key) !== false || stripos($s['artist'], $key) !== false);
}
?>

45)
<?php
function arrayDiffRecursive($a1, $a2) {
    $diff = [];
    foreach ($a1 as $k => $v) {
        if (!isset($a2[$k])) $diff[$k] = $v;
        elseif (is_array($v)) {
            $d = arrayDiffRecursive($v, $a2[$k]);
            if ($d) $diff[$k] = $d;
        } elseif ($v !== $a2[$k]) $diff[$k] = $v;
    }
    return $diff;
}

$a1 = ['name' => 'John', 'info' => ['age' => 30, 'city' => 'NY']];
$a2 = ['name' => 'John', 'info' => ['age' => 25, 'city' => 'NY']];

print_r(arrayDiffRecursive($a1, $a2));
?>
OUTPUT:
Array
(
    [info] => Array
        (
            [age] => 30
        )

)

46)
<?php
$array = ['apple', 'banana', 'cherry'];
$value = 'banana';

$index = array_search($value, $array);

if ($index !== false) {
    echo "Index of $value is $index";
} else {
    echo "$value not found in the array";
}
?>

OUTPUT:
Index of banana is 1

47)
<?php
$x = array(1, 2, 3, 4, 5);
// Delete element with value 3
$key = array_search(3, $x);
if ($key !== false) {
    unset($x[$key]);
}
print_r($x);
?>

OUTPUT:
Array
(
    [0] => 1
    [1] => 2
    [3] => 4
    [4] => 5
)

48)
1. Serial Number in a Loop (Array Records)
<?php
$names = ['Alice', 'Bob', 'Charlie'];

$record_no = 1;
foreach ($names as $name) {
    echo "Record #$record_no: $name<br>";
    $record_no++;
}
?>


Output:

Record #1: Alice
Record #2: Bob
Record #3: Charlie

2. Record Number with Pagination Calculation
<?php
$page = 3;      // current page
$limit = 5;     // records per page
$start = ($page - 1) * $limit + 1;

for ($i = 0; $i < $limit; $i++) {
    echo "Record #" . ($start + $i) . "<br>";
}
?>


Output:

Record #11
Record #12
Record #13
Record #14
Record #15

49)
<?php

// Player stats (using numerical values)
$players = [
    ['name' => 'Alice Johnson', 'points' => 22, 'assists' => 6, 'rebounds' => 9],
    ['name' => 'Bob Williams', 'points' => 18, 'assists' => 8, 'rebounds' => 7],
];

// Calculate Performance Index (PI)
foreach ($players as &$p) {
    $p['pi'] = $p['points'] + ($p['assists'] * 1.5) + ($p['rebounds'] * 1.2);
}

// Rank players by PI
usort($players, fn($a, $b) => $b['pi'] <=> $a['pi']);
// Display Rankings
echo "🏅 Player Rankings:\n";
foreach ($players as $i => $p) {
    echo "#" . ($i+1) . " {$p['name']} - PI: {$p['pi']}\n";
}

// Calculate and show Averages
$total = ['points' => 0, 'assists' => 0, 'rebounds' => 0];
foreach ($players as $p) {
    foreach ($total as $key => &$val) $val += $p[$key];
}

$count = count($players);
echo "\n📊 Average Stats:\n";
foreach ($total as $k => $v) {
    echo ucfirst($k) . ": " . round($v / $count, 2) . "\n";
}
?>

OUTPUT:
🏅 Player Rankings:
#1 Alice Johnson - PI: 41.8
#2 Alice Johnson - PI: 41.8

📊 Average Stats:
Points: 22
Assists: 6
Rebounds: 9

50)
?>
<?php
$arr = ['Apple', 'Banana', 'Cherry'];
$lower = array_map('strtolower', $arr);
$upper = array_map('strtoupper', $arr);
print_r($lower);
print_r($upper);
?>
OUTPUT:
Array
(
    [0] => apple
    [1] => banana
    [2] => cherry
)
Array
(
    [0] => APPLE
    [1] => BANANA
    [2] => CHERRY
)

51)
<?php
$arr = ['a', 'b', 'c'];

$first = array_shift($arr);  

array_unshift($arr, 'x', 'y');
print_r($arr);
?>

Summary:
array_shift() → remove first element
array_unshift() → add elements at the start

OUTPUT:
Array
(
    [0] => x
    [1] => y
    [2] => b
    [3] => c
)

52)
<?php

// Stack (LIFO)(push + pop)

$stack = [];
array_push($stack, 'A'); 
array_push($stack, 'B'); 
$itemStack = array_pop($stack);
echo "Popped from stack: $itemStack\n"; 

// Queue (FIFO)(enqueue + dequeue)

$queue = [];
array_push($queue, 'A'); 
array_push($queue, 'B'); 
$itemQueue = array_shift($queue); 
echo "Dequeued from queue: $itemQueue\n"; 
?>

OUTPUT:
Popped from stack: B
Dequeued from queue: A

53)
<?php
$arr = [10, 20, 30];

echo array_pop($arr) . "\n";   // Removes last: 30
print_r($arr);

echo array_shift($arr) . "\n"; // Removes first: 10
print_r($arr);
?>

OUTPUT:
30
Array
(
    [0] => 10
    [1] => 20
)
10
Array
(
    [0] => 20
)

54)
<?php
$queue = [];

// Add to queue
array_push($queue, 'Alice');
array_push($queue, 'Bob');
array_push($queue, 'Charlie');

// Process queue
echo array_shift($queue) . " booked\n"; // Alice
echo array_shift($queue) . " booked\n"; // Bob

print_r($queue); // Remaining: Charlie
?>

OUTPUT:
Alice booked
Bob booked
Array
(
    [0] => Charlie
)

55)
<?php
$str = "Hello";
$stack = [];

// Step 1: Put each character into the stack (array)
for ($i = 0; $i < strlen($str); $i++) {
    array_push($stack, $str[$i]);
}

// Step 2: Take characters out of the stack one by one
$reversed = "";
while (!empty($stack)) {
    $reversed .= array_pop($stack);
}
echo $reversed; 
?>

OUTPUT:
olleH

56)
list of PHP array sorting functions:

sort() — sort values ascending, keys reset
rsort() — sort values descending, keys reset
asort() — sort values ascending, keep keys
arsort() — sort values descending, keep keys
ksort() — sort by keys ascending
krsort() — sort by keys descending
usort() — custom sort values with callback
uksort() — custom sort keys with callback
uasort() — custom sort values with callback, keep keys
57)
What is a Regular Expression?
A pattern used to match character combinations in strings.

Pattern	    Meaning	                        Example
.	     Any character	                a.b matches acb
\d	     Digit (0-9)	                \d+ matches 123
\w	     Word character	                \w+ matches hello
^	     Start of string	            ^Hi matches Hi there
$	     End of string	                end$ matches the end
*	     0 or more repeats	            a* matches ``, a, aaa
+	     1 or more repeats	            a+ matches a, aa

<?php
if (preg_match("/Hello\d+/", "Hello123")) {
    echo "Match!";
} else {
    echo "No match";
}
?>
OUTPUT:
Match!

58)
<?php
$text = "Email me at alice@example.com or bob123@test.com.";

preg_match_all('/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}/i', $text, $matches);

print_r($matches[0]);
?>

OUTPUT:
Array
(
    [0] => alice@example.com
    [1] => bob123@test.com
)

59)
<?php
function calculateAverage($numbers) {
    if (empty($numbers)) {
        return 0;
    }

    $sum = array_sum($numbers);
    $count = count($numbers);
    return $sum / $count;
}

$values = [10, 20, 30, 40, 50];
$average = calculateAverage($values);
echo "Average: " . $average;
?>

OUTPUT:
Average: 30

60)
<?php
function searchValue($array, $value) {
    return in_array($value, $array);
}

$assocArray = [
    "name" => "Alice",
    "email" => "alice@example.com",
    "city" => "New York"
];

if (searchValue($assocArray, "Alice")) {
    echo "Value found!";
} else {
    echo "Value not found.";
}
?>

OUTPUT:
Value found!
61)
steps to delete an element from a PHP array:

Find the element’s key/index you want to delete.

Use unset() to remove the element by key.

(Optional) Use array_values() if you want to reindex numeric keys.

Example:
<?php
$arr = ['a', 'b', 'c', 'd'];

// Step 1 & 2: Remove element at index 1 ('b')
unset($arr[1]);

// Optional Step 3: Reindex the array
$arr = array_values($arr);

print_r($arr);
?>

Output:
Array
(
    [0] => a
    [1] => c
    [2] => d
)

62)
<?php
foreach ([1.65, 1.65, -1.54] as $v)
    echo "Original: $v => Rounded: " . round($v, 1) . "\n";
?>

<?php
$values = [1.65, 1.65, -1.54];

foreach ($values as $value) {
    $rounded = round($value, 1); // Round to 1 decimal place
    echo "Original: $value => Rounded: $rounded\n";
}
?>

OUTPUT:
Original: 1.65 => Rounded: 1.7
Original: 1.65 => Rounded: 1.7
Original: -1.54 => Rounded: -1.5

63)
<?php
$nums = [1, 2, 3, 4, 5, 6];
$sum = 0;
foreach ($nums as $n) {
    if ($n % 2 === 0) {
        $sum += $n;
    }
}

echo $sum;
?>

OUTPUT:
12

64)
<?php
$sales = [1000, 1100, 1210, 1331, 1464, 1610];
$growth = [];

for ($i = 1; $i < count($sales); $i++)
    $growth[] = ($sales[$i] - $sales[$i - 1]) / $sales[$i - 1];

$avg = array_sum($growth) / count($growth);
$next = end($sales);
$forecast = [];

for ($i = 0; $i < 3; $i++) {
    $next *= (1 + $avg);
    $forecast[] = round($next, 2);
}

print_r($forecast);
?>

OUTPUT:
Array
(
    [0] => 1770.89
    [1] => 1947.85
    [2] => 2142.5
)

65) SAME AS (35)

66)
<?php
$arr = [10, 20, 30, 40];

echo count($arr) . "\n";
echo sizeof($arr) . "\n";
?>

OUTPUT:
4
4

67)
<?php
$sentence = "This is a test. This test is simple, simple and clear!";
preg_match_all('/\b\w+\b/', strtolower($sentence), $m);
$counts = [];
foreach ($m[0] as $w) $counts[$w] = ($counts[$w] ?? 0) + 1;
foreach ($counts as $word => $count) echo "$word : $count\n";
?>

OUTPUT:
this : 2
is : 2
a : 1
test : 2
simple : 2
and : 1
clear : 1

68)
<?php
try {
    $result = 10 / 0;
    echo $result;
} catch (DivisionByZeroError $e) {
    echo "Error: " . $e->getMessage();
}
?>

OUTPUT:
ERROR!

Error: Division by zero

69)
<?php
function changeCaseValues($arr, $mode) {
    if ($mode === 'upper') {
        return array_map('strtoupper', $arr);
    } else {
        return array_map('strtolower', $arr);
    }
}

$Color = ['A' => 'Blue', 'B' => 'Green', 'c' => 'Red'];

echo "Values are in lower case.\n";
print_r(changeCaseValues($Color, 'lower'));

echo "Values are in upper case.\n";
print_r(changeCaseValues($Color, 'upper'));
?>

OUTPUT:
Values are in lower case.
Array
(
    [A] => blue
    [B] => green
    [c] => red
)
Values are in upper case.
Array
(
    [A] => BLUE
    [B] => GREEN
    [c] => RED
)

70)
<?php
if (isset($_POST['numbers'])) {
    $numbers = explode(',', $_POST['numbers']);
    echo "Input numbers as array:\n";
    print_r($numbers);
}
?>

<form method="post">
    Enter numbers (comma separated): 
    <input type="text" name="numbers" required>
    <input type="submit" value="Submit">
</form>

OUTPUT:
Input numbers as array: 10,20,30,40

Array
(
    [0] => 10
    [1] => 20
    [2] => 30
    [3] => 40
)


71)
Operation	              PHP Function	                  One-line Example

Open file	                   fopen()	                                 $f = fopen("file.txt", "r");
Read file	                   fread()	                                 echo fread($f, filesize("file.txt"));
Write to file	   fwrite()	                                  fwrite($f, "Hello");
Close file	                   fclose()	                                 fclose($f);
Delete file	                   unlink()	                                 unlink("file.txt");

<?php
$filename = "demo.txt";

// Write to file
$f = fopen($filename, "w");
fwrite($f, "Hello, World!");
fclose($f);

// Read from file
$f = fopen($filename, "r");
echo fread($f, filesize($filename)) . "\n";
fclose($f);

// Delete the file
unlink($filename);
echo "File deleted.\n";
?>

OUTPUT:
Hello, World!
File deleted.

72)
<?php
session_start(); // Start session

// Set session variable
$_SESSION["username"] = "admin";

// Display session data
echo "Session username: " . $_SESSION["username"] . "<br>";

// Unset all session variables
session_unset();
echo "Session variables are unset.<br>";

// Destroy the session
session_destroy();
echo "Session destroyed.";
?>

OUTPUT:
Session username: admin
Session variables are unset.
Session destroyed.

73)
<!DOCTYPE html>
<html>
<body>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
    if (in_array($ext, ['jpg', 'jpeg', 'png'])) {
        echo "✅ File accepted.";
    } else {
        echo "❌ Error: Only JPG and PNG files are allowed.";
    }
}
?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="image" required>
    <button type="submit">Upload</button>
</form>

</body>
</html>

OUTPUT:
File accepted.

74)
i)Writing to file:

$file = fopen("example.txt", "w");
fwrite($file, "Hello, PHP File Handling!");
fclose($file);

Explanation:

fopen() opens or creates the file.

fwrite() writes the given text to it.

fclose() closes the file.

ii)Reading to file:

$file = fopen("example.txt", "r");
$content = fread($file, filesize("example.txt"));
fclose($file);
echo $content;

Explanation:

Reads the entire file content into $content.

75)
<?php
function appendLineToFile($filename, $newLineContent) {
    file_put_contents($filename, rtrim($newLineContent, "\r\n") . PHP_EOL, FILE_APPEND);
}

try {
    appendLineToFile("example.txt", "This is a new line.");
    echo "Line appended successfully.";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>

76)
<?php
$birthday = "10-25"; // MM-DD
$today = new DateTime();
$next = new DateTime(date("Y") . "-$birthday");
if ($today > $next) $next->modify('+1 year');
echo "Birthday in " . $today->diff($next)->days . " days!";
?>

OUTPUT:
Birthday in 70 days!

77)
1. Network Control Functions

Handle data routing and traffic flow.

Examples: Routing, Forwarding, Traffic Engineering.

2. Network Management Functions

Monitor, configure, and maintain the network.

Examples: Fault Management, Performance Monitoring, Configuration.

3. Network Service Functions

Provide essential services to users/devices.

Examples: DNS, DHCP, Authentication, Load Balancing.

4. Network Information Functions

Gather and share network status or structure.

Examples: Topology Discovery, Network Monitoring, Reporting.

5. Security Functions

Protect network from threats and unauthorized access.

Examples: Firewall, VPN, IDS/IPS, Encryption.

6. Access and Mobility Functions

Manage user access and movement across the network.

Examples: Access Control, Mobility Management, Handover.

78)
To Read Cookies:

Press F12 to open Developer Tools.

Go to Application (Chrome) or Storage (Firefox) tab.

Click on Cookies > Select your site.

View cookies: name, value, expiry, etc.

🗑️ To Delete Cookies:

Method 1:

In Developer Tools > Cookies, right-click cookie → Delete.

Method 2:

Click 🔒 icon in address bar → Cookies → Remove.

Method 3:

Go to Settings → Privacy → Clear browsing data → Select Cookies → Clear.

79)
<?php
$file1 = "file1.txt";
$file2 = "file2.txt";
$outputFile = "output.txt";

$content1 = file_get_contents($file1);
$content2 = file_get_contents($file2);

file_put_contents($outputFile, $content1 . "\n" . $content2, FILE_APPEND);

echo "Files appended.";
?>

OUTPUT:
Files appended.

80)
<?php
setcookie("TestCookie", "HelloCookie", time() + 3600, "/");

if(isset($_COOKIE["TestCookie"])) {
    echo "Cookie value: " . $_COOKIE["TestCookie"];
} else {
    echo "Cookie not set yet. Reload the page.";
}
?>

OUTPUT:
Cookie value: HelloCookie

81)
<?php
session_start();
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}

if (isset($_POST['login'])) {
    if ($_POST['username'] == 'admin' && $_POST['password'] == 'admin123') {
        $_SESSION['admin'] = true;
    } else {
        echo "Invalid login!";
    }
}

if (isset($_SESSION['admin'])) {
    echo "Welcome Admin! <a href='?logout'>Logout</a>";
} else {
?>
<form method="POST">
    Username: <input name="username" required><br>
    Password: <input type="password" name="password" required><br>
    <button name="login">Login</button>
</form>
<?php } ?>

OUTPUT:
(Before Login)
Username: [          ]
Password: [          ]
[Login]

(After correct Login)
Welcome Admin! Logout

(After clicking Logout)
Username: [          ]
Password: [          ]
[Login]

82)
<?php
setcookie("User", "JohnDoe", time() + 3600, "/", "", isset($_SERVER['HTTPS']), true);

if (isset($_COOKIE["User"])) {
    echo "Cookie value: " . $_COOKIE["User"];
} else {
    echo "Cookie not set yet. Reload the page.";
}
?>

OUTPUT:
Cookie not set yet. Reload the page.

83)
<?php
if ($_POST) {
    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Valid Email<br>Domain: " . explode("@", $email)[1];
    } else {
        echo "Invalid Email";
    }
}
?>
<form method="POST">
  Email: <input name="email" required>
  <button>Submit</button>
</form>

OUTPUT:
Valid Email
Domain: example.com

84)
<?php
session_start();
$_SESSION['user'] = "John";
print_r($_SESSION);

unset($_SESSION['user']);
print_r($_SESSION);

session_destroy();
?>

OUTPUT:
Array
(
    [user] => John
)
Array
(
)

85)
Steps to get file name from a path in PHP:

1)Store the full file path in a variable.

2)Use the basename() function with the path variable as argument.

3)basename() returns the file name with extension.

4)(Optional) Use pathinfo() with PATHINFO_FILENAME to get file name without extension.

EXAMPLE:
$path = "/folder/subfolder/file.txt";
$fileName = basename($path);  // "file.txt"
$fileNameNoExt = pathinfo($path, PATHINFO_FILENAME);  // "file"

86)
Common PHP File Functions:

1)fopen() — open file

2)fwrite() — write to file

3)fread() — read from file

4)fclose() — close file

5)file_get_contents() — read whole file

6)file_put_contents() — write whole file

7)unlink() — delete file

8)file_exists() — check if file exists

EXAMPLE:
<?php
file_put_contents("test.txt", "Hello PHP!");
echo file_get_contents("test.txt");
unlink("test.txt");
?>

87) SAME AS 81)

88) SAME AS 76)

89)
<?php
$file = fopen("example.txt", "r");
$content = fread($file, filesize("example.txt"));
echo $content;
fclose($file);
?>

OUTPUT:
Hello, this is a sample file.
Welcome to PHP file handling!

90)
<?php
$file = fopen("data.txt", "r");
while (!feof($file)) {
    echo fgets($file) . "<br>";
}
fclose($file);
?>

OUTPUT:
Hello World
Welcome to PHP

91)
How PHP sessions are stored :

1)PHP generates a unique session ID.

2)The session ID is sent to the browser as a cookie (PHPSESSID).

3)Session data is saved on the server in files named after the session ID.

4)On each request, PHP reads the session file using the session ID to retrieve data.

92)
Steps to get a cookie value using server-side scripting (PHP):

1)Set the cookie in the client’s browser using setcookie() (done earlier).

2)Access the cookie value in PHP using the $_COOKIE superglobal array.

3)Check if the cookie exists using isset($_COOKIE['cookie_name']).

4)Retrieve and use the cookie value with $_COOKIE['cookie_name'].

Example:

<?php
// Set a cookie named "User" with value "John"
setcookie("User", "John");

// Display the cookie value if it is set
if (isset($_COOKIE["User"])) {
    echo "Cookie value: " . $_COOKIE["User"];
} else {
    echo "Cookie not set. Please refresh the page.";
}
?>

OUTPUT:
Cookie value: John

93)
<?php

if (isset($_COOKIE['visit_count'])) {
    $count = $_COOKIE['visit_count'] + 1;
} else {
    $count = 1;
}

// Set or update the cookie (expires in 1 day)
setcookie('visit_count', $count, time() + 86400);

echo "You have visited this page $count times.";
?>

OUTPUT:

First visit:
You have visited this page 1 times.

Next visit (after reload):
You have visited this page 2 times.

94) SAME AS 71)

95)
1) Purpose:

PHP sessions are used to store and manage user data across multiple pages during a single visit (session) to a website.

2) Functionality:

session_start() begins a new or resumes an existing session.

PHP assigns a unique session ID to each user.

Data is stored on the server in the $_SESSION superglobal.

Session data persists across pages until the session ends or is destroyed

3) Application: Maintaining a Shopping Cart

Start session: session_start();

Add item: $_SESSION['cart'][] = "Product A";

Access cart: $_SESSION['cart']

Cart stays available across all pages during the session.

EXAMPLE:
session_start();
$_SESSION['cart'][] = "Product A";  // Add item

// Display cart
foreach ($_SESSION['cart'] as $item) {
    echo $item . "<br>";
}

96)
Step-by-Step:

Start the session using session_start().

Assign value to a session variable using $_SESSION['key'] = value;.

EXAMPLE:
<?php
session_start();
$_SESSION['user'] = "John";
echo $_SESSION['user'];
?>
OUTPUT:
 John

97)
PHP Session Functions and behaviour:

1)session_start(): Starts or resumes a session.

2)session_destroy(): Deletes all session data.

3)session_unset(): Removes all session variables.

4)session_id(): Gets or sets the session ID.

5)session_regenerate_id(): Creates a new session ID (improves security).

6)session_write_close(): Saves session data and ends session.

98) SAME AS 87)

99)
<?php
// (a) Initiate or resume session
session_start();

// (b) Check for existing session variable
if(isset($_SESSION['count'])) {
    // (c) Increment counter if exists
    $_SESSION['count']++;
} else {
    // New session
    $_SESSION['count'] = 1;
}

// (d) Counter stored automatically in $_SESSION

// (e) Provide reload link with session ID
$link = $_SERVER['PHP_SELF'] . '?PHPSESSID=' . session_id();

echo "Visits: " . $_SESSION['count'];
echo "<br><a href='$link'>Reload</a>";

// (f) File upload with duplicate check
$dir = "uploads/";
if (!is_dir($dir)) mkdir($dir, 0777);

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_FILES['file'])) {
    $file = $dir . basename($_FILES['file']['name']);
    if (file_exists($file)) {
        echo "<br>File already exists!";  // Show error if duplicate
    } else {
        if (move_uploaded_file($_FILES['file']['tmp_name'], $file)) {
            echo "<br>File uploaded.";
        } else {
            echo "<br>Upload error.";
        }
    }
}
?>

<!-- HTML form for uploading file -->
<form method="post" enctype="multipart/form-data">
    <input type="file" name="file" required>
    <input type="submit" value="Upload">
</form>

100)
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $file = "uploads/" . basename($_FILES['file']['name']);
    if (file_exists($file)) {
        echo "File already exists!";
    } else {
        if (move_uploaded_file($_FILES['file']['tmp_name'], $file)) {
            echo "File uploaded.";
        } else {
            echo "Upload failed.";
        }
    }
}
?>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="file" required>
    <input type="submit" value="Upload">
</form>

101)
A cookie’s value can be retrieved in a web application by accessing the cookie stored in the client’s browser.
<?php
setcookie('cookie_name', 'TestValue', time() + 3600);

if (isset($_COOKIE['cookie_name'])) {
    echo "Cookie value: " . $_COOKIE['cookie_name'];
} else {
    echo "Cookie not set.";
}
?>
OUTPUT:
Cookie not set.

102)
<?php
session_start();           // Start the session
$_SESSION['username'] = "John";  // Set a session variable

echo "Hello, " . $_SESSION['username'];  // Access and display session variable
?>

OUTPUT:
Hello, John

103)
<?php
session_start();

if (isset($_SESSION['pageview'])) {
    $_SESSION['pageview']++;
} else {
    $_SESSION['pageview'] = 1;
}

echo "Page views: " . $_SESSION['pageview'];
?>
OUTPUT:
Page views: 1

104)
<?php
$file = "file.txt";
$n = 3;

$lines = file($file);

if (isset($lines[$n-1])) {
    echo $lines[$n-1];
} else {
    echo "no data";
}
?>
OUTPUT:
no data

105)
<?php
function getWeekDates($week, $year) {
    $date = new DateTime();
    $date->setISODate($year, $week);
    $start = $date->format('Y-m-d');
    $date->modify('+6 days');
    $end = $date->format('Y-m-d');
    return [$start, $end];
}

list($start, $end) = getWeekDates(12, 2014);
echo "Start: $start, End: $end";
?>

OUTPUT:
Start: 2014-03-17, End: 2014-03-23

