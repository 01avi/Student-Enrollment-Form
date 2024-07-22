 <?php
$servername = "localhost";
$username = "root";  // replace with your DB username
$password = "";      // replace with your DB password
$dbname = "SCHOOL-DB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['rollno'])) {
    $rollno = $_POST['rollno'];
    $sql = "SELECT * FROM `STUDENT-TABLE` WHERE `Roll-No` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $rollno);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo json_encode($row);
    } else {
        echo "not found";
    }

    $stmt->close();
}

$conn->close();
?>
