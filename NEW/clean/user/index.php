<?php
$link = mysqli_connect("localhost", "root", "", "blogger");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$user= $_SESSION['user'];
if($user=="")
$sql=mysqli_query($conn,"select * from user where email='$user' ");
$users=mysqli_fetch_assoc($sql);
?>

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Juliette | Personal Blog</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Satisfy&amp;display=swap">
    <!-- gLightbox CSS-->
    <link rel="stylesheet" href="vendor/glightbox/css/glightbox.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.png">
  </head>
  <body>
    <!-- navbar-->
    <header class="header">                   
      <nav class="navbar navbar-expand-lg navbar-light py-4 index-forward bg-white">
        <div class="container d-flex justify-content-center justify-content-lg-between align-items-center">
          <ul class="list-inline small mb-0 text-dark d-none d-lg-block">
            <li class="list-inline-item"><a class="reset-anchor" href="#!"><i class="fab fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a class="reset-anchor" href="#!"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a class="reset-anchor" href="#!"><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a class="reset-anchor" href="#!"><i class="fab fa-linkedin"></i></a></li>
            <li class="list-inline-item"><a class="reset-anchor" href="#!"><i class="fab fa-youtube"></i></a></li>
          </ul><a class="navbar-brand" href="index.html"><img src="img/logo.svg" alt="..." width="150"></a><a class="reset-anchor text-sm mb-0 h6 d-none d-lg-block" href="mailto:Juliette@email.com"><i class="far fa-envelope me-2 text-primary"></i>Juliette@email.com</a>
        </div>
      </nav>
      <nav class="navbar navbar-expand-lg navbar-light border-top border-bottom border-light">
        <div class="container">
          <ul class="list-inline small mb-0 text-dark d-block d-lg-none">
            <li class="list-inline-item"><a class="reset-anchor" href="#!"><i class="fab fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a class="reset-anchor" href="#!"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a class="reset-anchor" href="#!"><i class="fab fa-instagram"></i></a></li>
            <li class="list-inline-item"><a class="reset-anchor" href="#!"><i class="fab fa-linkedin"></i></a></li>
            <li class="list-inline-item"><a class="reset-anchor" href="#!"><i class="fab fa-youtube"></i></a></li>
          </ul>
          <button class="navbar-toggler navbar-toggler-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span></span><span></span><span></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <!-- Navbar link--><a class="nav-link active" href="index.html">Home</a>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="listingVariants" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog Listing</a>
                <div class="dropdown-menu mt-2" aria-labelledby="listingVariants"><a class="dropdown-item" href="listing-1.html">Post column</a><a class="dropdown-item" href="listing-2.html">Post row</a></div>
              </li>
              <li class="nav-item">
                <!-- Navbar link--><a class="nav-link" href="post.html">Blogpost</a>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="pages" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                <div class="dropdown-menu mt-2" aria-labelledby="pages"><a class="dropdown-item" href="index.html">Home</a><a class="dropdown-item" href="listing-1.html">Listing</a><a class="dropdown-item" href="post.html">Post                </a></div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- Main post-->
<p>Hello there <?php echo $userId['name'];?></p>
    
   <!--end of main post-->
    <footer class="py-4" style="background: #111">
      <div class="container text-center">
        <div class="row align-items-center">
          <div class="col-md-4 text-lg-start"><img src="img/logo-footer.svg" alt="..." width="120"></div>
          <div class="col-md-4 text-center">
            <div class="d-flex align-items-center flex-wrap justify-content-center">
              <h6 class="text-muted mb-0 py-2 me-3">Follow me<span class="ms-3">-</span></h6>
              <ul class="list-inline small mb-0 text-white">
                <li class="list-inline-item"><a class="reset-anchor" href="#!"><i class="fab fa-facebook-f"></i></a></li>
                <li class="list-inline-item"><a class="reset-anchor" href="#!"><i class="fab fa-twitter"></i></a></li>
                <li class="list-inline-item"><a class="reset-anchor" href="#!"><i class="fab fa-instagram"></i></a></li>
                <li class="list-inline-item"><a class="reset-anchor" href="#!"><i class="fab fa-linkedin"></i></a></li>
                <li class="list-inline-item"><a class="reset-anchor" href="#!"><i class="fab fa-youtube"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 text-lg-end">
            <p class="mb-0 text-muted text-sm text-heading">Template designed by <a href="https://bootstrapious.com/p/juliette-bootstrap-feminine-blog-template" class="text-primary">Bootstrapious</a>. </p>
            <!-- If you want to remove the backlink, please purchase the Attribution-Free License. See details in readme.txt or license.txt. Thanks!-->
          </div>
        </div>
      </div>
    </footer>
    <!-- JavaScript files-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/glightbox/js/glightbox.min.js"></script>
    <script src="js/front.js"></script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </body>
</html>