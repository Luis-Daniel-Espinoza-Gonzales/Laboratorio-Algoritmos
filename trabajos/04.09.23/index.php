<!DOCTYPE html>
<html>

<head>
    <title>Ejemplo</title>
</head>

<?php
$con = mysqli_connect("localhost", "root", "", "pruebas");

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

$sql = "SELECT * FROM alumnos";

$result = mysqli_query($con, $sql);

// // Numeric array
// $row = mysqli_fetch_array($result, MYSQLI_NUM);
// echo "<pre>";            
// print_r($row);
// echo "</pre>";

//printf ("%s (%s)\n", $row[0], $row[1]);

// Associative array




$arr = [];
while ($row = mysqli_fetch_assoc($result)) {
    $arr[] = $row;
}

// echo "<pre>";            
// print_r($arr);
// echo "</pre>";
// echo "<br>";
// for ($x = 0; $x <= 1; $x++) {
//     echo $arr[$x]['nombre'] . " " . $arr[$x]['apellido'] . "<br>";
// }



$str = "<table border='1'>";
for ($x = 0; $x <= 1; $x++) {
    $str .= "<tr>";
    $str .= "<td>" . $arr[$x]['id'] . "</td><td>" . $arr[$x]['nombre'] . "</td><td>" . $arr[$x]['apellido'] . "</td>";
    $str .= "</tr>";
}
$str .= "</table>";
echo $str;

//count()


// Free result set
mysqli_free_result($result);

mysqli_close($con);
?>

</body>

</html>
