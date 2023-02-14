<?php

// Connect to the database
$dsn = 'mysql:host=localhost;dbname=my_rest';
$username = 'root';
$password = '';
$db = new PDO($dsn, $username, $password);

// Define the API endpoint
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  $stmt = $db->query('SELECT * FROM my_table');
  $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
  header('Content-Type: application/json');
  echo json_encode($data);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <h1>Terima Kasih pak Arief telah menjadi juri untuk LKS Cloud Computing Kota Malang Tahun 2023</h1>
</body>
</html>
