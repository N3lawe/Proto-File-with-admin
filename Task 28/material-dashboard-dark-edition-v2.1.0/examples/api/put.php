<?php
require '../config/Database.php';
header('Content-Type: application/json');

$database = new Database();
$conn = $database->connect();
$data = json_decode(file_get_contents('php://input'), true);

$table = isset($_GET['table']) ? $_GET['table'] : '';

if ($table === 'WebsiteLogo') {

	if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'PUT') {
		$data = $_POST;
		if (isset($data['id'])) {
			try {
				$stmt = $conn->prepare("SELECT ImageURL FROM WebsiteLogo WHERE ID = :id");
				$stmt->execute([':id' => $data['id']]);
				$existingImagePath = $stmt->fetchColumn();

				if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
					if ($_FILES['image']['size'] > 10 * 1024 * 1024) {
						echo json_encode(['error' => 'Image size exceeds 10MB']);
						exit;
					}

					$uploadDir = 'uploads/';
					if (!is_dir($uploadDir)) {
						mkdir($uploadDir, 0777, true);
					}

					$image = $_FILES['image'];
					$imageName = uniqid() . '_' . basename($image['name']);
					$uploadFilePath = $uploadDir . $imageName;

					$allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
					$imageExtension = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));

					if (!in_array($imageExtension, $allowedExtensions)) {
						echo json_encode(['error' => 'Invalid image format']);
						exit;
					}

					if (move_uploaded_file($image['tmp_name'], $uploadFilePath)) {
						$imagePath = $uploadFilePath;
					} else {
						echo json_encode(['error' => 'Failed to upload image']);
						exit;
					}
				} else {
					$imagePath = $existingImagePath;
				}

				$stmt = $conn->prepare("UPDATE WebsiteLogo SET ImageURL = :imageurl WHERE ID = :id");
				$stmt->execute([
					':id' => $data['id'],
					':imageurl' => $imagePath
				]);

				echo json_encode(['message' => 'Website logo updated successfully']);
			} catch (PDOException $e) {
				echo json_encode(['error' => $e->getMessage()]);
			}
		} else {
			echo json_encode(['error' => 'Invalid input']);
		}
	} else {
		echo json_encode(['error' => 'Invalid request method']);
	}
} elseif ($table === 'home') {
	if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'PUT') {
		$data = $_POST;
		if (isset($data['id'])) {
			try {
				$stmt = $conn->prepare("SELECT ImageURL, PDF_URL FROM home WHERE ID = :id");
				$stmt->execute([':id' => $data['id']]);
				$existingData = $stmt->fetch(PDO::FETCH_ASSOC);
				$existingImagePath = $existingData['ImageURL'];
				$existingPDFPath = $existingData['PDF_URL'];

				if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
					if ($_FILES['image']['size'] > 10 * 1024 * 1024) {
						echo json_encode(['error' => 'Image size exceeds 10MB']);
						exit;
					}

					$uploadDir = 'uploads/';
					if (!is_dir($uploadDir)) {
						mkdir($uploadDir, 0777, true);
					}

					$image = $_FILES['image'];
					$imageName = uniqid() . '_' . basename($image['name']);
					$uploadFilePath = $uploadDir . $imageName;

					$allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
					$imageExtension = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));

					if (!in_array($imageExtension, $allowedExtensions)) {
						echo json_encode(['error' => 'Invalid image format']);
						exit;
					}

					if (move_uploaded_file($image['tmp_name'], $uploadFilePath)) {
						$imagePath = $uploadFilePath;
					} else {
						echo json_encode(['error' => 'Failed to upload image']);
						exit;
					}
				} else {
					$imagePath = $existingImagePath;
				}

				if (isset($_FILES['pdf']) && $_FILES['pdf']['error'] === 0) {
					if ($_FILES['pdf']['size'] > 5 * 1024 * 1024) {
						echo json_encode(['error' => 'PDF size exceeds 5MB']);
						exit;
					}

					$pdfUploadDir = 'uploads/pdf/';
					if (!is_dir($pdfUploadDir)) {
						mkdir($pdfUploadDir, 0777, true);
					}

					$pdf = $_FILES['pdf'];
					$pdfName = uniqid() . '_' . basename($pdf['name']);
					$uploadPDFPath = $pdfUploadDir . $pdfName;

					if (move_uploaded_file($pdf['tmp_name'], $uploadPDFPath)) {
						$pdfPath = $uploadPDFPath;
					} else {
						echo json_encode(['error' => 'Failed to upload PDF']);
						exit;
					}
				} else {
					$pdfPath = $existingPDFPath;
				}

				$stmt = $conn->prepare("UPDATE home SET Title = :title, SubTitle = :subtitle, Description = :description, PDF_URL = :pdf_url, ImageURL = :imageurl WHERE ID = :id");
				$stmt->execute([
					':id' => $data['id'],
					':title' => $data['title'],
					':subtitle' => $data['subtitle'],
					':description' => $data['description'],
					':pdf_url' => $pdfPath,
					':imageurl' => $imagePath
				]);

				echo json_encode(['message' => 'Home entry updated successfully']);
			} catch (PDOException $e) {
				echo json_encode(['error' => 'Database error: ' . $e->getMessage()]);
			}
		} else {
			echo json_encode(['error' => 'Invalid input']);
		}
	} else {
		echo json_encode(['error' => 'Invalid request method']);
	}
} elseif ($table === 'About') {

	if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'PUT') {

		$data = $_POST;
		if (isset($data['id'])) {
			try {
				$stmt = $conn->prepare("SELECT ImageURL, PDF_URL FROM About WHERE ID = :id");
				$stmt->execute([':id' => $data['id']]);
				$existingData = $stmt->fetch(PDO::FETCH_ASSOC);
				$existingImagePath = $existingData['ImageURL'];
				$existingPDFPath = $existingData['PDF_URL'];

				if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
					if ($_FILES['image']['size'] > 10 * 1024 * 1024) {
						echo json_encode(['error' => 'Image size exceeds 10MB']);
						exit;
					}

					$uploadDir = 'uploads/';
					if (!is_dir($uploadDir)) {
						mkdir($uploadDir, 0777, true);
					}

					$image = $_FILES['image'];
					$imageName = uniqid() . '_' . basename($image['name']);
					$uploadFilePath = $uploadDir . $imageName;

					$allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
					$imageExtension = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));

					if (!in_array($imageExtension, $allowedExtensions)) {
						echo json_encode(['error' => 'Invalid image format']);
						exit;
					}

					if (move_uploaded_file($image['tmp_name'], $uploadFilePath)) {
						$imagePath = $uploadFilePath;
					} else {
						echo json_encode(['error' => 'Failed to upload image']);
						exit;
					}
				} else {
					$imagePath = $existingImagePath;
				}

				if (isset($_FILES['pdf']) && $_FILES['pdf']['error'] === 0) {
					if ($_FILES['pdf']['size'] > 5 * 1024 * 1024) {
						echo json_encode(['error' => 'PDF size exceeds 5MB']);
						exit;
					}

					$pdfUploadDir = 'uploads/pdf/';
					if (!is_dir($pdfUploadDir)) {
						mkdir($pdfUploadDir, 0777, true);
					}

					$pdf = $_FILES['pdf'];
					$pdfName = uniqid() . '_' . basename($pdf['name']);
					$uploadPDFPath = $pdfUploadDir . $pdfName;

					if (move_uploaded_file($pdf['tmp_name'], $uploadPDFPath)) {
						$pdfPath = $uploadPDFPath;
					} else {
						echo json_encode(['error' => 'Failed to upload PDF']);
						exit;
					}
				} else {
					$pdfPath = $existingPDFPath;
				}

				$stmt = $conn->prepare("UPDATE About SET Title = :title, Description = :description, PDF_URL = :pdf_url, ImageURL = :imageurl WHERE ID = :id");
				$stmt->execute([
					':id' => $data['id'],
					':title' => $data['title'],
					':description' => $data['description'],
					':pdf_url' => $pdfPath,
					':imageurl' => $imagePath
				]);

				echo json_encode(['message' => 'About entry updated successfully']);
			} catch (PDOException $e) {
				echo json_encode(['error' => $e->getMessage()]);
			}
		} else {
			echo json_encode(['error' => 'Invalid input']);
		}
	} else {
		echo json_encode(['error' => 'Invalid request method']);
	}
} elseif ($table === 'Experience') {

	if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['_method']) && $_POST['_method'] === 'PUT') {
		$data = $_POST;
		if (isset($data['id'])) {
			try {
				$stmt = $conn->prepare("SELECT YearsOfExperience, PhoneNumber FROM Experience WHERE ID = :id");
				$stmt->execute([':id' => $data['id']]);
				$existingData = $stmt->fetch(PDO::FETCH_ASSOC);
				$existingYearsOfExperience = $existingData['YearsOfExperience'];
				$existingPhoneNumber = $existingData['PhoneNumber'];

				if (isset($data['YearsOfExperience']) && is_numeric($data['YearsOfExperience'])) {
					$yearsOfExperience = $data['YearsOfExperience'];
				} else {
					$yearsOfExperience = $existingYearsOfExperience;
				}

				if (isset($data['PhoneNumber']) && preg_match('/^\+?[0-9]{10,15}$/', $data['PhoneNumber'])) {
					$phoneNumber = $data['PhoneNumber'];
				} else {
					$phoneNumber = $existingPhoneNumber;
				}

				$stmt = $conn->prepare("UPDATE Experience SET YearsOfExperience = :YearsOfExperience, PhoneNumber = :PhoneNumber WHERE ID = :id");
				$stmt->execute([
					':id' => $data['id'],
					':YearsOfExperience' => $yearsOfExperience,
					':PhoneNumber' => $phoneNumber
				]);

				echo json_encode(['message' => 'Experience entry updated successfully']);
			} catch (PDOException $e) {
				echo json_encode(['error' => $e->getMessage()]);
			}
		} else {
			echo json_encode(['error' => 'Invalid input']);
		}
	} else {
		echo json_encode(['error' => 'Invalid request method']);
	}
} elseif ($table === 'Portfolio') {

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$data = $_POST;
		if (isset($data['id'])) {
			try {
				$stmt = $conn->prepare("SELECT ImageURL FROM Portfolio WHERE ID = :id");
				$stmt->execute([':id' => $data['id']]);
				$existingData = $stmt->fetch(PDO::FETCH_ASSOC);
				$existingImagePath = $existingData['ImageURL'];

				if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
					if ($_FILES['image']['size'] > 10 * 1024 * 1024) {
						echo json_encode(['error' => 'Image size exceeds 10MB']);
						exit;
					}

					$uploadDir = 'uploads/';
					if (!is_dir($uploadDir)) {
						mkdir($uploadDir, 0777, true);
					}

					$image = $_FILES['image'];
					$imageName = uniqid() . '_' . basename($image['name']);
					$uploadFilePath = $uploadDir . $imageName;

					$allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
					$imageExtension = strtolower(pathinfo($imageName, PATHINFO_EXTENSION));

					if (!in_array($imageExtension, $allowedExtensions)) {
						echo json_encode(['error' => 'Invalid image format']);
						exit;
					}

					if (move_uploaded_file($image['tmp_name'], $uploadFilePath)) {
						$imagePath = $uploadFilePath;
					} else {
						echo json_encode(['error' => 'Failed to upload image']);
						exit;
					}
				} else {
					$imagePath = $existingImagePath;
				}

				if (!isset($data['category']) || !in_array($data['category'], ['popular', 'latest', 'following', 'upcoming'])) {
					echo json_encode(['error' => 'Invalid category']);
					exit;
				}

				$stmt = $conn->prepare("UPDATE Portfolio SET Category = :category, Title = :title, ImageURL = :imageurl WHERE ID = :id");
				$stmt->execute([
					':id' => $data['id'],
					':category' => $data['category'],
					':title' => $data['title'],
					':imageurl' => $imagePath
				]);

				echo json_encode(['message' => 'Portfolio entry updated successfully']);
			} catch (PDOException $e) {
				echo json_encode(['error' => $e->getMessage()]);
			}
		} else {
			echo json_encode(['error' => 'Invalid input']);
		}
	} else {
		echo json_encode(['error' => 'Invalid request method']);
	}
} elseif ($table === 'Contact') {

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$data = $_POST;
		if (isset($data['id'])) {
			try {
				$stmt = $conn->prepare("SELECT FacebookURL, InstagramURL, LinkedInURL FROM Contact WHERE ID = :id");
				$stmt->execute([':id' => $data['id']]);
				$existingData = $stmt->fetch(PDO::FETCH_ASSOC);
				$existingFacebookURL = $existingData['FacebookURL'];
				$existingInstagramURL = $existingData['InstagramURL'];
				$existingLinkedInURL = $existingData['LinkedInURL'];

				$facebookURL = isset($data['facebookURL']) ? $data['facebookURL'] : $existingFacebookURL;
				$instagramURL = isset($data['instagramURL']) ? $data['instagramURL'] : $existingInstagramURL;
				$linkedInURL = isset($data['linkedInURL']) ? $data['linkedInURL'] : $existingLinkedInURL;

				if (!filter_var($facebookURL, FILTER_VALIDATE_URL) && $facebookURL !== $existingFacebookURL) {
					echo json_encode(['error' => 'Invalid Facebook URL']);
					exit;
				}
				if (!filter_var($instagramURL, FILTER_VALIDATE_URL) && $instagramURL !== $existingInstagramURL) {
					echo json_encode(['error' => 'Invalid Instagram URL']);
					exit;
				}
				if (!filter_var($linkedInURL, FILTER_VALIDATE_URL) && $linkedInURL !== $existingLinkedInURL) {
					echo json_encode(['error' => 'Invalid LinkedIn URL']);
					exit;
				}

				$stmt = $conn->prepare("UPDATE Contact SET FacebookURL = :facebookURL, InstagramURL = :instagramURL, LinkedInURL = :linkedInURL WHERE ID = :id");
				$stmt->execute([
					':id' => $data['id'],
					':facebookURL' => $facebookURL,
					':instagramURL' => $instagramURL,
					':linkedInURL' => $linkedInURL
				]);

				echo json_encode(['message' => 'Contact information updated successfully']);
			} catch (PDOException $e) {
				echo json_encode(['error' => $e->getMessage()]);
			}
		} else {
			echo json_encode(['error' => 'Invalid input']);
		}
	} else {
		echo json_encode(['error' => 'Invalid request method']);
	}
} else {
	echo json_encode(['error' => 'Invalid table']);
}
