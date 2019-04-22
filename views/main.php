<html>
<head>
	<title>Shareboard</title>
	<link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
  <div>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <!-- Brand/logo -->
            <a class="navbar-brand" href="#">Shareboard</a>
            
            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="<?php echo ROOT_URL; ?>">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo ROOT_URL; ?>shares">Shares</a>
                </li>
            </ul>

    
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
      <?php if(isset($_SESSION['is_logged_in'])) : ?>
    <li class="nav-item">
        <a href="<?php echo ROOT_URL; ?>">Welcome <?php echo $_SESSION['user_data']['name']; ?></a>
        </li>
    <li class="nav-item">
        <a href="<?php echo ROOT_URL; ?>users/logout">Logout</a>
        </li>
    <?php else : ?>
        <li class="nav-item">
        <a class="nav-link" href="<?php echo ROOT_URL; ?>users/login">Login</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="<?php echo ROOT_URL; ?>users/register">Register</a>
        </li>
    <?php endif; ?>
        </ul>
    </div>
            <!--<ul class="nav navbar-nav navbar-right">
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo ROOT_URL; ?>users/login">Login</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo ROOT_URL; ?>users/register">Register</a>
                    </li>
            </ul>-->
    </nav>
            
      <!--      <div class="container-fluid">
            <h3>Brand / Logo</h3>
            <p>The .navbar-brand class is used to highlight the brand/logo/project name of your page.</p>
            </div>
    old code-->
	<!--<nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Shareboard</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo ROOT_URL; ?>">Home</a></li>
            <li><a href="<?php echo ROOT_URL; ?>shares">Shares</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo ROOT_URL; ?>users/login">Login</a></li>
            <li><a href="<?php echo ROOT_URL; ?>users/register">Register</a></li>
          </ul>
        </div>  
      </div>
    </nav>-->

</div>
    <div class="container">

     <div class="row">
      <?php Messages::display(); ?>
     	<?php require($view); ?>
     </div>

    </div><!-- /.container -->
</body>
</html>