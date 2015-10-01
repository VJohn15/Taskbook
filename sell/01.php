<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=zencart", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $product = $conn->prepare("SELECT * FROM `products` LIMIT 30 offset 20");
    $product->execute();

    // set the resulting array to associative
    $result = $product->setFetchMode(PDO::FETCH_ASSOC);
//    var_dump($product->);
//    var_dump($product->rowCount());
//    var_dump($product->fetchAll());
    $prod = $product->fetchAll();
    echo "<table border=2>";
    foreach ($prod as $item){
        foreach ($item as $key=> $element) {
            echo "<tr>"."<td>". $key."</td> "."<td>". $element. "</td>"."</tr>";
       }

    }
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
?>