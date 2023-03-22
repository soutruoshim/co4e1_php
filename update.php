<?PHP
if(isset($_POST['aid']) && isset($_POST['title']) && isset($_POST['body']) && isset($_POST['image'])){
    
    include_once("connection.php");

    $aid = $_POST['aid'];
    $title = $conn->real_escape_string($_POST['title']);
    $body = $conn->real_escape_string($_POST['body']);
    $image = $conn->real_escape_string($_POST['image']);

    
    $table = "tbl_article";
    
    $sql = "UPDATE $table SET title = '$title', body = '$body', image = '$image' WHERE aid = $aid";
    if ($conn->query($sql) === TRUE) {
        echo "update_success";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
else{
    echo "error_post_variables";
}

?>