<?php
require '../config/Database.php';
header('Content-Type: application/json');

$database = new Database();
$conn = $database->connect();
$data = json_decode(file_get_contents('php://input'), true);
$table = isset($_GET['table']) ? $_GET['table'] : '';

if ($table === 'Home') {
  if (isset($_FILES['image'], $_POST['title'])) {
    try {
      $uploadDir = 'uploads/';
      if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
      }

      $newUploadDir = 'C:\\xampp\\htdocs\\Restaurant Website Task 27(Part 1)\\veggie-master\\uploads\\';
      if (!is_dir($newUploadDir)) {
        mkdir($newUploadDir, 0777, true);
      }

      $image = $_FILES['image'];
      $imageName = uniqid() . '_' . basename($image['name']);
      $uploadFilePath = $uploadDir . $imageName;
      $newUploadFilePath = $newUploadDir . $imageName;

      $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
      $imageExtension = pathinfo($imageName, PATHINFO_EXTENSION);

      if (!in_array(strtolower($imageExtension), $allowedExtensions)) {
        echo json_encode(['error' => 'Invalid image format']);
        exit;
      }

      if (move_uploaded_file($image['tmp_name'], $uploadFilePath)) {
        if (!copy($uploadFilePath, $newUploadFilePath)) {
          echo json_encode(['error' => 'Failed to copy image to the new directory']);
          exit;
        }

        $stmt = $conn->prepare("INSERT INTO Home (imageurl, title) VALUES (:imageurl, :title)");
        $stmt->execute([
          ':imageurl' => $uploadFilePath,
          ':title' => $_POST['title']
        ]);
        echo json_encode(['message' => 'Home entry added successfully']);
      } else {
        echo json_encode(['error' => 'Failed to upload image']);
      }
    } catch (PDOException $e) {
      echo json_encode(['error' => $e->getMessage()]);
    }
  } else {
    echo json_encode(['error' => 'Invalid input']);
  }
} elseif ($table === 'Contact_email') {
  if ($table === 'Contact_email') {
    // استلام البيانات من الـ JSON
    $data = json_decode(file_get_contents('php://input'), true);

    if (isset($data['name'], $data['email'], $data['message'])) {
      try {
        // استلام البيانات من الـ JSON
        $name = $data['name'];
        $email = $data['email'];
        $message = $data['message'];

        // إعداد الاستعلام لإدخال البيانات في جدول Contact_email
        $stmt = $conn->prepare("INSERT INTO Contact_email (name, email, message) VALUES (:name, :email, :message)");

        // تنفيذ الاستعلام باستخدام البيانات المدخلة
        $stmt->execute([
          ':name' => $name,
          ':email' => $email,
          ':message' => $message
        ]);

        // الرد برسالة نجاح
        echo json_encode(['success' => true, 'message' => 'Message stored successfully']);
      } catch (PDOException $e) {
        // في حالة حدوث خطأ
        echo json_encode(['success' => false, 'error' => 'Failed to store message: ' . $e->getMessage()]);
      }
    } else {
      // في حالة غياب بعض المدخلات
      echo json_encode(['success' => false, 'error' => 'Invalid input']);
    }
  }
} elseif ($table === 'Starters' || $table === 'MainDishes' || $table === 'Desserts' || $table === 'Drinks') {
  if (isset($_POST['recipe_name'], $_POST['recipe_content'], $_POST['price'])) {
    try {
      $stmt = $conn->prepare("INSERT INTO $table (recipe_name, recipe_content, price) VALUES (:recipe_name, :recipe_content, :price)");
      $stmt->execute([
        ':recipe_name' => $_POST['recipe_name'],
        ':recipe_content' => $_POST['recipe_content'],
        ':price' => $_POST['price']
      ]);
      echo json_encode(['message' => 'Recipe entry added successfully']);
    } catch (PDOException $e) {
      echo json_encode(['error' => $e->getMessage()]);
    }
  } else {
    echo json_encode(['error' => 'Invalid input']);
  }
} else {
  echo json_encode(['error' => 'Invalid table']);
}
