<?php include('templates/header.php');

if (isset($_GET['id'])) {
  $post_id = $_GET['id'];
} else {
  echo "<script>window.location.replace('posts.php');</script>";
}

$showPostsSql = $conn->prepare("SELECT * FROM post where post_id = $post_id");
$showPostsSql->execute();
$showPosts = $showPostsSql->fetchAll();
foreach ($showPosts as $post) {

?>
  <div class="container">
    <div class="row">
      <!-- Latest Posts -->
      <main class="post blog-post col-lg-8">
        <div class="container">
          <div class="post-single">
            <div class="post-thumbnail"><img src="upload/<?php echo $post['file_name'] ?>" alt="..." class="img-fluid"></div>
            <div class="post-details">
              <div class="post-meta d-flex justify-content-between">
                <div class="category"><a href="#">Category</a></div>
              </div>
              <h1><?php echo $post['title'] ?><a href="#"><i class="fa fa-bookmark-o"></i></a></h1>
              <div class="post-footer d-flex align-items-center flex-column flex-sm-row"><a href="#" class="author d-flex align-items-center flex-wrap">
                  <div class="avatar"><img src="img/avatar-1.jpg" alt="..." class="img-fluid"></div>
                  <div class="title"><span>John Doe</span></div>
                </a>
                <div class="d-flex align-items-center flex-wrap">
                  <div class="date"><i class="icon-clock"></i> <?php echo $post['date'] ?></div>
                  <div class="views"><i class="icon-eye"></i> 500</div>
                  <div class="comments meta-last"><i class="icon-comment"></i>12</div>
                </div>
              </div>
              <div class="post-body">
                <p class="lead">
                  <?php echo $post['content'] ?>
                </p>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p> <img src="img/featured-pic-3.jpeg" alt="..." class="img-fluid"></p>
                <h3>Lorem Ipsum Dolor</h3>
                <p>div Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda temporibus iusto voluptates deleniti similique rerum ducimus sint ex odio saepe. Sapiente quae pariatur ratione quis perspiciatis deleniti accusantium</p>
                <blockquote class="blockquote">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                  <footer class="blockquote-footer">Someone famous in
                    <cite title="Source Title">Source Title</cite>
                  </footer>
                </blockquote>
                <p>quasi nam. Libero dicta eum recusandae, commodi, ad, autem at ea iusto numquam veritatis, officiis. Accusantium optio minus, voluptatem? Quia reprehenderit, veniam quibusdam provident, fugit iusto ullam voluptas neque soluta adipisci ad.</p> -->
              </div>

              <!-- other posts -->
              <div class="post-tags"><a href="#" class="tag">#Business</a><a href="#" class="tag">#Tricks</a><a href="#" class="tag">#Financial</a><a href="#" class="tag">#Economy</a></div>
              <div class="posts-nav d-flex justify-content-between align-items-stretch flex-column flex-md-row"><a href="#" class="prev-post text-left d-flex align-items-center">
                  <div class="icon prev"><i class="fa fa-angle-left"></i></div>
                  <div class="text"><strong class="text-primary">Previous Post </strong>
                    <h6>I Bought a Wedding Dress.</h6>
                  </div>
                </a><a href="#" class="next-post text-right d-flex align-items-center justify-content-end">
                  <div class="text"><strong class="text-primary">Next Post </strong>
                    <h6>I Bought a Wedding Dress.</h6>
                  </div>
                  <div class="icon next"><i class="fa fa-angle-right"> </i></div>
                </a></div>
              <!-- comments -->
              <div class="post-comments">
                <header>
                  <h3 class="h6">Post Comments<span class="no-of-comments">(3)</span></h3>
                </header>
                <div class="comment">
                  <div class="comment-header d-flex justify-content-between">
                    <div class="user d-flex align-items-center">
                      <div class="image"><img src="img/user.svg" alt="..." class="img-fluid rounded-circle"></div>
                      <div class="title"><strong>Jabi Hernandiz</strong><span class="date">May 2016</span></div>
                    </div>
                  </div>
                  <div class="comment-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                  </div>
                </div>
                <div class="comment">
                  <div class="comment-header d-flex justify-content-between">
                    <div class="user d-flex align-items-center">
                      <div class="image"><img src="img/user.svg" alt="..." class="img-fluid rounded-circle"></div>
                      <div class="title"><strong>Nikolas</strong><span class="date">May 2016</span></div>
                    </div>
                  </div>
                  <div class="comment-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                  </div>
                </div>
                <div class="comment">
                  <div class="comment-header d-flex justify-content-between">
                    <div class="user d-flex align-items-center">
                      <div class="image"><img src="img/user.svg" alt="..." class="img-fluid rounded-circle"></div>
                      <div class="title"><strong>John Doe</strong><span class="date">May 2016</span></div>
                    </div>
                  </div>
                  <div class="comment-body">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                  </div>
                </div>
              </div>
              <div class="add-comment">
                <header>
                  <h3 class="h6">Leave a reply</h3>
                </header>
                <form action="#" class="commenting-form">
                  <div class="row">
                    <div class="form-group col-md-6">
                      <input type="text" name="username" id="username" placeholder="Name" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                      <input type="email" name="username" id="useremail" placeholder="Email Address (will not be published)" class="form-control">
                    </div>
                    <div class="form-group col-md-12">
                      <textarea name="usercomment" id="usercomment" placeholder="Type your comment" class="form-control"></textarea>
                    </div>
                    <div class="form-group col-md-12">
                      <button type="submit" class="btn btn-secondary">Submit Comment</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </main>
      <aside class="col-lg-4">
        <!-- Widget [Search Bar Widget]-->
        <div class="widget search">
          <header>
            <h3 class="h6">Search the blog</h3>
          </header>
          <form action="#" class="search-form">
            <div class="form-group">
              <input type="search" placeholder="What are you looking for?">
              <button type="submit" class="submit"><i class="icon-search"></i></button>
            </div>
          </form>
        </div>
        <!-- Widget [Latest Posts Widget]        -->
        <div class="widget latest-posts">
          <header>
            <h3 class="h6">Latest Posts</h3>
          </header>
          <div class="blog-posts"><a href="#">
              <div class="item d-flex align-items-center">
                <div class="image"><img src="img/small-thumbnail-1.jpg" alt="..." class="img-fluid"></div>
                <div class="title"><strong>Alberto Savoia Can Teach You About</strong>
                  <div class="d-flex align-items-center">
                    <div class="views"><i class="icon-eye"></i> 500</div>
                    <div class="comments"><i class="icon-comment"></i>12</div>
                  </div>
                </div>
              </div>
            </a><a href="#">
              <div class="item d-flex align-items-center">
                <div class="image"><img src="img/small-thumbnail-2.jpg" alt="..." class="img-fluid"></div>
                <div class="title"><strong>Alberto Savoia Can Teach You About</strong>
                  <div class="d-flex align-items-center">
                    <div class="views"><i class="icon-eye"></i> 500</div>
                    <div class="comments"><i class="icon-comment"></i>12</div>
                  </div>
                </div>
              </div>
            </a><a href="#">
              <div class="item d-flex align-items-center">
                <div class="image"><img src="img/small-thumbnail-3.jpg" alt="..." class="img-fluid"></div>
                <div class="title"><strong>Alberto Savoia Can Teach You About</strong>
                  <div class="d-flex align-items-center">
                    <div class="views"><i class="icon-eye"></i> 500</div>
                    <div class="comments"><i class="icon-comment"></i>12</div>
                  </div>
                </div>
              </div>
            </a></div>
        </div>
        <!-- Widget [Categories Widget]-->
        <div class="widget categories">
          <header>
            <h3 class="h6">Categories</h3>
          </header>
          <div class="item d-flex justify-content-between"><a href="#">Growth</a><span></span></div>
          <div class="item d-flex justify-content-between"><a href="#">Local</a><span></span></div>
          <div class="item d-flex justify-content-between"><a href="#">Sales</a><span></span></div>
          <div class="item d-flex justify-content-between"><a href="#">Tips</a><span></span></div>
          <div class="item d-flex justify-content-between"><a href="#">Local</a><span></span></div>
        </div>
        <!-- Widget [Tags Cloud Widget]-->
        <div class="widget tags">
          <header>
            <h3 class="h6">Tags</h3>
          </header>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="#" class="tag">#Business</a></li>
            <li class="list-inline-item"><a href="#" class="tag">#Technology</a></li>
            <li class="list-inline-item"><a href="#" class="tag">#Fashion</a></li>
            <li class="list-inline-item"><a href="#" class="tag">#Sports</a></li>
            <li class="list-inline-item"><a href="#" class="tag">#Economy</a></li>
          </ul>
        </div>
      </aside>
    </div>
  </div>
<?php
}
include('templates/footer.php'); ?>