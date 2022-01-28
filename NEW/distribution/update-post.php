<?php include('templates/header.php');

if (isset($_GET['id'])) {
    $post_id = $_GET['id'];
} else {
    echo "<script>window.location.replace('posts.php');</script>";
}

$msg = "";

error_reporting(0);

// if (isset($_POST['submit'])) {
//     $title = $_POST['title'];
//     $content = $_POST['content'];
//     $category_id = $_POST['category'];

//     $img_name = rand() . $_FILES['img']['name'];
//     $img_tmp_name = $_FILES['img']['tmp_name'];
//     $img_size = $_FILES['img']['size'];
//     $old_img = $_POST['old_img'];

//     if ($img_size > 5242880) {
//         $msg = "<div class='alert alert-danger'>Image is too big. Maximum image uploading size is 5 MB.</div>";
//     } else {
//         $sql = "UPDATE posts SET title='$title', content='$content', img='$img_name', old_img='$old_img', category_id='$category_id' WHERE id='$post_id'";
//         $result = mysqli_query($conn, $sql);
//         if ($result) {
//             move_uploaded_file($img_tmp_name, "uploads/" . $img_name);
//             $msg = "<div class='alert alert-success'>Post updated successful.</div>";
//         } else {
//             $msg = "<div class='alert alert-danger'>Something wrong went. Please try again later.</div>";
//         }
//     }
// }
// if (isset($_POST['submit'])) {
//     $title = $_POST['title'];
//     $content = $_POST['content'];
//     $category_id = $_POST['category'];

//     $statusMsg = '';

//     $targetDir = "upload/";
//     $fileName = basename($_FILES["file"]["name"]);
//     $targetFilePath = $targetDir . $fileName;
//     $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

//     if (isset($_POST["submit"]) && !empty($_FILES["file"]["name"])) {
//         $allowTypes = array('jpg', 'png', 'jpeg', 'PNG');
//         if (in_array($fileType, $allowTypes)) {

//             if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {

//                 try {
//                     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//                     $sqlstr = "UPDATE post SET title = :title, content = :content, file_name = :file_name, category_id = :category_id";
//                     $savePost = $conn->prepare($sqlstr);
//                     $savePost->bindparam(':title', $title);
//                     $savePost->bindparam(':content', $content);
//                     $savePost->bindparam(':file_name', $fileName);
//                     $savePost->bindparam(':category_id', $category_id);
//                     $savePost->execute();


//                     if ($savePost) {
//                         $statusMsg = "The file " . $fileName . " has been uploaded successfully.";
//                     } else {
//                         $statusMsg = "File upload failed, please try again.";
//                     }
//                 } catch (PDOException $e) {
//                     echo $e->getMessage();
//                 }
//             }
//         } else {
//             $statusMsg = "Sorry, there was an error uploading your file.";
//         }
//     } else {
//         $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
//     }
// } else {
//     $statusMsg = 'Please select a file to upload.';
// }
// echo $statusMsg;

$showPostsSql = $conn->prepare("SELECT * FROM post WHERE post_id = $post_id");
$showPostsSql->execute();
$showPosts = $showPostsSql->fetchAll();

foreach ($showPosts as $post) :
?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-8 col-12 mx-auto bg-white p-4 shadow">
                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800">Add Post</h1>

                <form action="" method="post" enctype="multipart/form-data">
                    <?php echo $msg; ?>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" value="<?php echo $post['title']; ?>" name="title" id="title">
                    </div>
                    <div class="form-group">
                        <label for="content">content</label>
                        <textarea class=" form-control" name="content" rows="5" id="content"><?php echo $post['content']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="category">
                            <option value="" selected hidden disabled>Select Category</option>
                            <?php

                            $sql = $conn->prepare("SELECT * FROM category");


                            $sql->execute();
                            $sql = $sql->fetchAll();

                            foreach ($sql as $row) {

                            ?>
                                <option <?php if ($_POST['category'] == $row['cateogry_id']) {
                                            echo "selected";
                                        } ?> value="<?php echo $row['category_id']; ?>"><?php echo $row['name']; ?></option>
                            <?php }
                            // } 
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="img">Image</label>
                        Select Image File to Upload:
                        <input type="file" accept="image/*" class="form-control" name="file" id="img" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Add Post</button>
                </form>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

<?php


endforeach;
include('templates/footer.php');

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
                    $sqlstr = "UPDATE post SET title = :title, content = :content, file_name = :file_name, category_id = :category_id";
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
?>