<?PHP
if(isset($_GET['keyword'])){
    include_once("connection.php");

    $keyword = $conn->real_escape_string(strtolower($_GET['keyword']));

    $myArray = array();

    $table = "tbl_news";
    $result_name = "results";

    if ($result = $conn->query("SELECT * FROM $table WHERE lower(title) LIKE '%$keyword%' OR lower(body) LIKE '%$keyword%'")) {
        while($row = $result->fetch_array(MYSQLI_ASSOC)) { 
            $myArray[] = $row;
        }
        echo json_encode(array($result_name=>$myArray));
    }

    $result->close();
    $conn->close();
}
else{
    echo "error_get_variables";
}


?>