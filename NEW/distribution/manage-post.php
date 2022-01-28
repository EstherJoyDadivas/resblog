<?php include('templates/header.php'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Posts</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Posts</h6>
        </div>
        <div class="card-body">
            <?php

            if (isset($_GET['remove_success'])) {
                if ($_GET['remove_success'] == "true") {
                    echo "<div class='alert alert-success'>Record deleted successful.</div>";
                } else {
                    echo "<div class='alert alert-danger'>Record can't deleted.</div>";
                }
            }

            ?>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php


                        $showPostsSql = $conn->prepare("SELECT * FROM post");
                        $showPostsSql->execute();
                        $showPosts = $showPostsSql->fetchAll();

                        foreach ($showPosts as $post) :

                            // $sql = "SELECT * FROM post";
                            // $result = mysqli_query($conn, $sql);
                            // if (mysqli_num_rows($result) > 0) {
                            //     $id = 1;
                            //     while ($row = mysqli_fetch_assoc($result)) {

                        ?>
                            <tr>
                                <td><?php echo $post['post_id']; ?></td>
                                <td><?php echo $post['title']; ?></td>
                                <td><?php

                                    // $show_category = mysqli_query($conn, "SELECT * FROM category WHERE id='{$post['category_id']}'");
                                    // if (mysqli_num_rows($show_category) > 0) {
                                    //     $category_data = mysqli_fetch_assoc($show_category);
                                    //     echo $category_data['cat_name'];

                                    $showCategorySQL = $conn->prepare("SELECT name FROM category where category_id = '$post[category_id]'");
                                    $showCategorySQL->execute();
                                    $showCategory = $showCategorySQL->fetchAll();

                                    foreach ($showCategory as $category) :
                                        echo $category['name'];
                                    endforeach;
                                    // }

                                    ?></td>
                                <td>
                                    <a href="update-post.php?id=<?php echo $post['post_id']; ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                    <a href="delete-post.php?id=<?php echo $post['post_id'];  ?>" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        <?php


                        endforeach;

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php include('templates/footer.php'); ?>