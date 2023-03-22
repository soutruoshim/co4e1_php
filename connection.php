<?PHP

$username = "root";
$password = "root"; //for XAMPP, WAMPP => $password = "";
$database = "co4e1";

$conn = new mysqli('localhost',$username, $password, $database);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error); 
}
?>