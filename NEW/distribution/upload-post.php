<?php include 'templates/dbconnection.php';

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $category_id = $_POST['category'];

    $statusMsg = '';

    $targetDir = "upload/";
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    if (isset($_POST["submit"]) && !empty($_FILES["file"]["name"])) {
        $allowTypes = array('jpg', 'png', 'jpeg', 'PNG');
        if (in_array($fileType, $allowTypes)) {

            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {

                try {
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sqlstr = "INSERT INTO post (title, content, file_name, category_id) VALUES ( :title , :content, :file_name, :category_id)";
                    $savePost = $conn->prepare($sqlstr);
                    $savePost->bindparam(':title', $title);
                    $savePost->bindparam(':content', $content);
                    $savePost->bindparam(':file_name', $fileName);
                    $savePost->bindparam(':category_id', $category_id);
                    $savePost->execute();


                    if ($savePost) {
                        $statusMsg = "The file " . $fileName . " has been uploaded successfully.";
                    } else {
                        $statusMsg = "File upload failed, please try again.";
                    }
                } catch (PDOException $e) {
                    echo $e->getMessage();
                }
            }
        } else {
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    } else {
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
} else {
    $statusMsg = 'Please select a file to upload.';
}
echo $statusMsg;
