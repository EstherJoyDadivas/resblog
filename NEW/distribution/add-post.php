<?php include('templates/header.php');
$msg = "";

error_reporting(0);
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row">
        <div class="col-lg-8 col-12 mx-auto bg-white p-4 shadow">
            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800">Add Post</h1>

            <form action="upload-post.php" method="post" enctype="multipart/form-data">
                <?php echo $msg; ?>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" value="<?php echo $_POST['title']; ?>" name="title" id="title">
                </div>
                <div class="form-group">
                    <label for="content">content</label>
                    <textarea class="form-control" name="content" rows="5" id="content"><?php echo $_POST['content']; ?></textarea>
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

<?php include('templates/footer.php'); ?>