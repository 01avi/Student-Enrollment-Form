 <?php
$servername = "localhost";
$username = "root";  // replace with your DB username
$password = "";      // replace with your DB password
$dbname = "SCHOOL-DB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['action'])) {
    $rollno = $_POST['rollno'];
    $fullname = $_POST['fullname'];
    $class = $_POST['class'];
    $birthdate = $_POST['birthdate'];
    $address = $_POST['address'];
    $enrollmentdate = $_POST['enrollmentdate'];

    if ($_POST['action'] == 'save') {
        $sql = "INSERT INTO `STUDENT-TABLE` (`Roll-No`, `Full-Name`, `Class`, `Birth-Date`, `Address`, `Enrollment-Date`) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss", $rollno, $fullname, $class, $birthdate, $address, $enrollmentdate);
        $stmt->execute();
    } elseif ($_POST['action'] == 'update') {
        $sql = "UPDATE `STUDENT-TABLE` SET `Full-Name` = ?, `Class` = ?, `Birth-Date` = ?, `Address` = ?, `Enrollment-Date` = ? WHERE `Roll-No` = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss", $fullname, $class, $birthdate, $address, $enrollmentdate, $rollno);
        $stmt->execute();
    }

    $stmt->close();
}

$conn->close();
header("Location: index.html");
?>
