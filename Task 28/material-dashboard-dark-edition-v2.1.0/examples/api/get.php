<?php
require '../config/Database.php';

header('Content-Type: application/json');

$table = isset($_GET['table']) ? $_GET['table'] : '';

if (empty($table)) {
    echo json_encode(['error' => 'Table name is required']);
    exit;
}

$database = new Database();
$conn = $database->connect();

try {
    $stmt = $conn->query("SELECT * FROM " . $table);
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($data);
} catch (PDOException $e) {
    echo json_encode(['error' => $e->getMessage()]);
}
