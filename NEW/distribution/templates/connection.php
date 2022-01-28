<?php foreach ($showPosts as $post) {

    $string = $post['content'];
    $string = strip_tags($string);
    if (strlen($string) > 100) {

        // truncate string
        $stringCut = substr($string, 0, 100);
        $endPoint = strrpos($stringCut, ' ');

        $string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
        $string .= '... <a href="#">Read More</a>';
    }
    $showCategorySQL = $conn->prepare("SELECT name FROM category where category_id = '$post[category_id]'");
    $showCategorySQL->execute();
    $showCategory = $showCategorySQL->fetchAll();

    foreach ($showCategory as $category) {

?>
        <!-- Post-->
        <div class="row d-flex align-items-stretch">
            <div class="text col-lg-7">
                <div class="text-inner d-flex align-items-center">
                    <div class="content">
                        <header class="post-header">
                            <a href="post.php?id=<?php $post["post_id"] ?>">
                                <div class="category"><a href="#"></a></div>
                                <a href="post.php">
                    </div>
                <?php

            }

            $showUserSQL = $conn->prepare("SELECT full_name FROM user where user_id = '$post[user_id]'");
            $showUserSQL->execute();
            $showUser = $showUserSQL->fetchAll();

            foreach ($showUser as $user) {
                ?>
                    <h2 class="h4"><?php echo $post['title']; ?></h2>
                    </a>
                    </header>

                    <p>content</p>

                    <footer class=" post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                            <div class="avatar"><img src="img/avatar-1.jpg" alt="..." class="img-fluid"></div>
                            <div class="title"><span>Name</span></div>

                        </a>
                        <div class="date"><i class="icon-clock"></i> <?php echo $post['date']; ?></div>
                        <div class="comments"><i class="icon-comment"></i>12</div>
                    </footer>
                </div>
            </div>
        </div>
        <div class="image col-lg-5"><img src="upload/<?php echo $post['file_name'] ?>" alt="..."></div>
        </div>
<?php

            }
        } ?>
</div>