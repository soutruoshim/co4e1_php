<?PHP
include_once("connection.php");

$myArray = array();

$table = "tbl_article";
$result_name = "results";

if ($result = $conn->query("SELECT * FROM $table")) {
    while($row = $result->fetch_array(MYSQLI_ASSOC)) { 
        $myArray[] = $row;
    }
    echo json_encode(array($result_name=>$myArray));
}

$result->close();
$conn->close();

?>