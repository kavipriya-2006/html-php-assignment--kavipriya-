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
Q3. 
