// Connect to database and fetch data
$conn = new mysqli("localhost", "username", "password", "database");
$result = $conn->query("SELECT * FROM users");
while ($row = $result->fetch_assoc()) {
    echo $row['name'] . "<br>";
}
session_start();
$_SESSION['user_id'] = 123;
$_SESSION['username'] = "Merve";

// Later on another page
session_start();
echo "Welcome " . $_SESSION['username'];
// Write to a file
file_put_contents("data.txt", "Hello World!");

// Read from a file
$content = file_get_contents("data.txt");
echo $content;