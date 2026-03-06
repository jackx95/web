<!DOCTYPE html>
<html>
<body>
    <form method="post">
        <h2>Employee Statement</h2>
        <input type="text" placeholder="Name" name="n"><br>
        <input type="text" placeholder="Designation" name="d"><br>
        <input type="text" placeholder="Organisation" name="o"><br>
        <input type="text" placeholder="Basic Salary" name="b"><br>
        <input type="submit" value="Submit" name="s"><br>
    </form>

<?php
if (isset($_POST['s'])) {
    $na = $_POST['n'];
    $de = $_POST['d'];
    $org = $_POST['o'];
    $ba = $_POST['b'];

    // Calculations
    $da = 0.3 * $ba;             // 30% DA
    $hra = 0.1 * $ba;            // 10% HRA
    $gs = $ba + $da + $hra;      // Gross Salary
    $it = 0.05 * $gs;            // 5% Income Tax
    $ns = $gs - $it;             // Net Salary

    // Prepare string for storage
    $qn11 = "name:$na\ndesignation:$de\norganisation:$org\nbasic_salary:$ba\nDA:$da\nHRA:$hra\ngross_salary:$gs\nincometax:$it\nnet salary:$ns\n";

    // Write to file
    $file = fopen("qn11.txt", "a"); // "a" for append mode
    fwrite($file, $qn11);
    fclose($file);

    // Display on screen
    echo "<h3>Employee Details</h3>";
    echo "<p>Name: $na</p>";
    echo "<p>Designation: $de</p>";
    echo "<p>Organisation: $org</p>";
    echo "<p>Basic Salary: $ba</p>";
    echo "<p>DA: $da</p>";
    echo "<p>HRA: $hra</p>";
    echo "<p>Gross Salary: $gs</p>";
    echo "<p>Income Tax Deduction: $it</p>";
    echo "<p>Net Salary: $ns</p>";
}
?>
</body>
</html>
