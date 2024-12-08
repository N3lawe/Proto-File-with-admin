<?php
require '../config/Database.php';
header('Content-Type: application/json');

$database = new Database();
$conn = $database->connect();
$data = json_decode(file_get_contents('php://input'), true);
$table = isset($_GET['table']) ? $_GET['table'] : '';

if ($table === 'Home') {
	if (isset($data['id'])) {
		try {
			$checkStmt = $conn->prepare("SELECT * FROM Home WHERE id = :id");
			$checkStmt->execute([':id' => $data['id']]);
			if ($checkStmt->rowCount() === 0) {
				echo json_encode(['error' => 'Home entry not found']);
				exit;
			}

			$stmt = $conn->prepare("DELETE FROM Home WHERE id = :id");
			$stmt->execute([':id' => $data['id']]);

			echo json_encode(['message' => 'Home entry deleted successfully']);
		} catch (PDOException $e) {
			echo json_encode(['error' => $e->getMessage()]);
		}
	} else {
		echo json_encode(['error' => 'Invalid input']);
	}
} elseif ($table === 'Starters') {
	if (isset($data['id'])) {
		try {
			$checkStmt = $conn->prepare("SELECT * FROM Starters WHERE id = :id");
			$checkStmt->execute([':id' => $data['id']]);
			if ($checkStmt->rowCount() === 0) {
				echo json_encode(['error' => 'Starter not found']);
				exit;
			}

			$stmt = $conn->prepare("DELETE FROM Starters WHERE id = :id");
			$stmt->execute([':id' => $data['id']]);

			echo json_encode(['message' => 'Starter deleted successfully']);
		} catch (PDOException $e) {
			echo json_encode(['error' => $e->getMessage()]);
		}
	} else {
		echo json_encode(['error' => 'Invalid input']);
	}
} elseif ($table === 'Contact_email') {
	if (isset($data['id'])) {
		try {
			// التحقق إذا كانت الرسالة موجودة في الجدول
			$checkStmt = $conn->prepare("SELECT * FROM Contact_email WHERE id = :id");
			$checkStmt->execute([':id' => $data['id']]);
			if ($checkStmt->rowCount() === 0) {
				echo json_encode(['error' => 'Message not found']);
				exit;
			}

			// حذف الرسالة
			$stmt = $conn->prepare("DELETE FROM Contact_email WHERE id = :id");
			$stmt->execute([':id' => $data['id']]);

			echo json_encode(['message' => 'Message deleted successfully']);
		} catch (PDOException $e) {
			echo json_encode(['error' => $e->getMessage()]);
		}
	} else {
		echo json_encode(['error' => 'Invalid input']);
	}
} elseif ($table === 'MainDishes') {
	if (isset($data['id'])) {
		try {
			$checkStmt = $conn->prepare("SELECT * FROM MainDishes WHERE id = :id");
			$checkStmt->execute([':id' => $data['id']]);
			if ($checkStmt->rowCount() === 0) {
				echo json_encode(['error' => 'Main Dish not found']);
				exit;
			}

			$stmt = $conn->prepare("DELETE FROM MainDishes WHERE id = :id");
			$stmt->execute([':id' => $data['id']]);

			echo json_encode(['message' => 'Main Dish deleted successfully']);
		} catch (PDOException $e) {
			echo json_encode(['error' => $e->getMessage()]);
		}
	} else {
		echo json_encode(['error' => 'Invalid input']);
	}
} elseif ($table === 'Desserts') {
	if (isset($data['id'])) {
		try {
			$checkStmt = $conn->prepare("SELECT * FROM Desserts WHERE id = :id");
			$checkStmt->execute([':id' => $data['id']]);
			if ($checkStmt->rowCount() === 0) {
				echo json_encode(['error' => 'Dessert not found']);
				exit;
			}

			$stmt = $conn->prepare("DELETE FROM Desserts WHERE id = :id");
			$stmt->execute([':id' => $data['id']]);

			echo json_encode(['message' => 'Dessert deleted successfully']);
		} catch (PDOException $e) {
			echo json_encode(['error' => $e->getMessage()]);
		}
	} else {
		echo json_encode(['error' => 'Invalid input']);
	}
} elseif ($table === 'Drinks') {
	if (isset($data['id'])) {
		try {
			$checkStmt = $conn->prepare("SELECT * FROM Drinks WHERE id = :id");
			$checkStmt->execute([':id' => $data['id']]);
			if ($checkStmt->rowCount() === 0) {
				echo json_encode(['error' => 'Drink not found']);
				exit;
			}

			$stmt = $conn->prepare("DELETE FROM Drinks WHERE id = :id");
			$stmt->execute([':id' => $data['id']]);

			echo json_encode(['message' => 'Drink deleted successfully']);
		} catch (PDOException $e) {
			echo json_encode(['error' => $e->getMessage()]);
		}
	} else {
		echo json_encode(['error' => 'Invalid input']);
	}
} else {
	echo json_encode(['error' => 'Invalid table']);
}
