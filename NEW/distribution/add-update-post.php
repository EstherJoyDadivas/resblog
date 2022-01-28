<?php
include 'templates/dbconnection.php';
if (isset($_POST['submit'])) {

    $title = $_POST['title'];
    $content = $_POST['content'];
    $category_id = $_POST['category'];
    $statusMsg = '';

    $targetDir = "upload/";
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    $allowTypes = array('jpg', 'png', 'jpeg', 'PNG');
    if (in_array($fileType, $allowTypes)) {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {

            try {
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sqlstr = "UPDATE post SET title = :title, content = :content, file_name = :file_name, category_id = :category_id WHERE post_id = :post_id";
                $updatePost->bindparam(':post_id', $post_id);
                $updatePost = $conn->prepare($sqlstr);
                $updatePost->bindparam(':title', $title);
                $updatePost->bindparam(':content', $content);
                $updatePost->bindparam(':file_name', $fileName);
                $updatePost->bindparam(':category_id', $category_id);
                $updatePost->execute();


                if ($updatePost) {
                    $statusMsg = "	<script>
                        alert ('Update successful!');
                    </script>
                    ";
                } else {
                    $statusMsg =

                        "<script>
                            alert ('File upload failed, please try again.');
                        </script>
                        ";
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
                var_dump($e->getMessage());
            }
        }
    } else {
        $statusMsg =

            "
            <script>
                        alert ('Sorry, there was an error uploading your file..');
                    </script>
            ";
    }
} else {
    $statusMsg = 'Error';
}

echo $statusMsg;
echo $fileName . "<br>";
echo $title . "<br>";
echo $_POST['title']  . "<br>";
print_r($post)  . "<br>";
