<?php require_once 'header.php'; ?>
<?php
echo "<a href='index.php'>Back</a>";
try {
    $conn = new PDO("mysql:host=" . HOST . ";dbname=" . DB, USER, PASS);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $conn->prepare("DELETE FROM students WHERE rollno =:rollno");
    $row = $stmt->execute(array("rollno" => $_GET['rollno']));
    header("Location: index.php");
    
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

?> 
