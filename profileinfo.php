
<?php session_start(); ?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

  <title>Carousel Template for Bootstrap</title>

   <!-- Bootstrap core CSS -->
  <link href="bower_components/bootstrap-jasny/dist/css/bootstrap.css" rel="stylesheet">

          <!-- Custom styles for this template -->

      <link href="stylesheets/signin.css" rel="stylesheet">
            <link href="stylesheets/background.css" rel="stylesheet">

    </head>
<!-- NAVBAR
  ================================================== -->
  <body> <br /> <br />
	<?php include "db.php"; ?>
        <!--signin-->
        <div class="container">
<div class="progress progress-striped active">
  <div class="progress-bar"  role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 33%"> <br />
    <span class="sr-only">33% Complete</span>
  </div>
</div>
          <form class="form-signin" role="form" action="profileform.php" method="post" onSubmit='validate(); return false;'>


            <h2 class="form-signin-heading">Please enter the required details</h2>
	          Name : <input type="text" name="name" id="name" class="form-control" placeholder="Name" required autofocus>
            Password : <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
            Re-Enter Password : <input type="password" name="repassword" id="repassword" class="form-control" placeholder="Re-Enter Password" required>
            Email Address : <input type="text" name="email" id="email" class="form-control" placeholder="Email Address" required autofocus> <br />
	    <button class="btn btn-lg btn-primary btn-block" type="submit">Save</button>
          </form>


        </div> <!-- /container -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->


    <!-- /END THE FEATURETTES -->

    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <!-- FOOTER -->
    <footer>
      <p class="pull-right"><a href="#">Back to top</a></p>
      <p>&copy; 2014 TUMBLE Inc. All Rights Reserved &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>

  </div><!-- /.container -->


    
  </body>
  </html>
