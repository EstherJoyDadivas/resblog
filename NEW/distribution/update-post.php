<?php include('templates/header.php');

if (isset($_GET['id'])) {
    $post_id = $_GET['id'];
} else {
    echo "<script>window.location.replace('posts.php');</script>";
}

$msg = "";

error_reporting(0);

$showPostsSql = $conn->prepare("SELECT * FROM post WHERE post_id = $post_id");
$showPostsSql->execute();
$showPosts = $showPostsSql->fetchAll();



// if (isset($_POST['submit'])) {

//     $title = $_POST['title'];
//     $content = $_POST['content'];
//     $category_id = $_POST['category'];
//     $statusMsg = '';

//     $targetDir = "upload/";
//     $fileName = basename($_FILES["file"]["name"]);
//     $targetFilePath = $targetDir . $fileName;
//     $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

//     $allowTypes = array('jpg', 'png', 'jpeg', 'PNG');
//     if (in_array($fileType, $allowTypes)) {
//         if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {

//             try {
//                 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//                 $sqlstr = "UPDATE post SET title = :title, content = :content, file_name = :file_name, category_id = :category_id WHERE post_id = :post_id";
//                 $updatePost->bindparam(':post_id', $post_id);
//                 $updatePost = $conn->prepare($sqlstr);
//                 $updatePost->bindparam(':title', $title);
//                 $updatePost->bindparam(':content', $content);
//                 $updatePost->bindparam(':file_name', $fileName);
//                 $updatePost->bindparam(':category_id', $category_id);
//                 $updatePost->execute();


//                 if ($updatePost) {
//                     $statusMsg = "	<script>
//                         alert ('Update successful!');
//                     </script>
//                     ";
//                 } else {
//                     $statusMsg =

//                         "<script>
//                             alert ('File upload failed, please try again.');
//                         </script>
//                         ";
//                 }
//             } catch (PDOException $e) {
//                 echo $e->getMessage();
//                 var_dump($e->getMessage());
//             }
//         }
//     } else {
//         $statusMsg =

//             "
//             <script>
//                         alert ('Sorry, there was an error uploading your file..');
//                     </script>
//             ";
//     }
// } else {
//     $statusMsg = 'Error';
// }

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
                        <input type="file" accept="image/*" class="form-control" name="file" id="img">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
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



?>

<?php

echo $statusMsg;
echo $fileName . "<br>";
echo $title . "<br>";
echo $_POST['title']  . "<br>";
print_r($post)  . "<br>";
?>