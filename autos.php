<?php 
require_once 'pdo.php';
if(isset($_POST['make']) && isset($_POST['year'])
    && isset($_POST['mileage'])) {
    $sql = "INSERT INTO users (make, year, mileage);
            VALUES (:m, :y, :mi)";
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array(
                ':m' => $_POST['make'],
                ':y' => $_POST['year'],
                ':mi' => $_POST['mileage']));
}
?>
<html>
<head>
    <title>Олег Колесніков 0c8983a6 Autos</title>
</head>
<body>
<p>Add New autos</p>
<form method='post'>
    <p>Make:<input type="text" name="make" size 40></p>
    <p>Year:<input type="text" name="year"></p>
    <p>Mileage:<input type="text" name="mileage"></p>
    <p><input type="submit" value="Add new"></p>
</form>
</body>
</html>