<?PHP
if(isset($_POST['aid'])){
    include_once("connection.php");

    $aid = $_POST['aid'];
    
    $table = "tbl_article";
    
    $sql = "DELETE FROM $table WHERE aid = $aid";
    if ($conn->query($sql) === TRUE) {
        echo "delete_success";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
else{
    echo "error_post_variables";
}

?>