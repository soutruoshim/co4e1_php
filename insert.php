<?PHP
if(isset($_POST['title']) && isset($_POST['body']) && isset($_POST['image']) && isset($_POST['date'])){
    
    include_once("connection.php");

    $title = $conn->real_escape_string($_POST['title']);
    $body = $conn->real_escape_string($_POST['body']);
    $image = $conn->real_escape_string($_POST['image']);
    $date = $conn->real_escape_string($_POST['date']);
    
    $table = "tbl_article";
    
    $sql = "INSERT INTO $table (title, body, image, date) VALUES ('$title','$body', '$image', '$date')";
    if ($conn->query($sql) === TRUE) {
        echo "insert_success";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
else{
    echo "error_post_variables";
}

?>