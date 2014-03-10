
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home Page</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link href="../stylesheets/offcanvas.css" rel="stylesheet">
  </head>

  <body>
    <div class="navbar navbar-fixed-top navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">TinySIS</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo site_url("home/logout"); ?>">
            Log Out
            </a></li>
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </div><!-- /.navbar -->

    <div class="container">
    <div class="row">
      <div class="col-lg-8 col-sm-8 col-md-8 hidden-xs lead">
        <?php
            $user_role = $this->session->userdata('role');
            $result_string = "You are logged in as ";

            switch ($user_role) {
                case 1:
                    $result_string .= "a <b>Student.</b>";
                    break;
                case 2:
                    $result_string .= "an <b>Instructor.</b>";
                    break;
                case 3:
                    $result_string .= "an <b>Administrator.</b>";
                    break;
                case 4:
                    $result_string .= "a<b> Super User.</b>";
                    break;
            }
            echo $result_string;
         ?>
      </div>
    </div>

    </div><!--/.container-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  </body>
</html>
