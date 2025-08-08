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

