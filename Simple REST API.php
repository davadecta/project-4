<?php

// Connect to the database
$dsn = 'mysql:host=localhost;dbname=yourdbname';
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
