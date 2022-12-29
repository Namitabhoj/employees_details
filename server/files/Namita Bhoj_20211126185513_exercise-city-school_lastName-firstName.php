<?php
const serverName = "localhost";
const port = 3307;
const database = "school";
const username = "root";
const connectionString = "mysql:host=" . serverName . ";dbname=" . database . ";port=" . port;

try {
    $connection = new PDO(connectionString, username);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "success <br />";
} catch (PDOException $exception) {
    echo "Connection Failed: {$exception->getMessage()}";
}
if(isset($_GET['city'])) {
    $selectedCity = $_GET['city'];
    echo $selectedCity;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <div>
        <form action="exercise-city-school_lastName-firstName.php" method="get">
             <label for="city">Select city</label>
            <select type="text" name="city" id="city">
            <?php
                if(isset($connection)){
                $query = "select DISTINCT City from teachers";
                $stmt = $connection->prepare($query);
                $stmt->execute();
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                foreach ($stmt->fetchAll() as  $array) {
                    foreach($array as $key => $value)
                    echo "<option value=$value>$value</option>" ;
                }
                }?>
                </select>
             <input type="submit" name="submit" id="submit">
            <?php
            if(isset( $selectedCity)){
                $query = "select Name from teachers where City='$selectedCity'";
                $stmt = $connection->prepare($query);
                $stmt->execute();
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                echo "<ul>" ;
                foreach ($stmt->fetchAll() as  $array) {
                    foreach($array as $key => $value)

                        echo "<li>" ;
                        echo $value;
                        echo "</li>" ;
                }
                echo "</ul>" ;
            }?>
        </form>
    </div>
</body>
</html>

