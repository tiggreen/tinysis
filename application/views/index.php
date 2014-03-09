<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">

    <title>SDM</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link href="stylesheets/index.css" rel="stylesheet">
  </head>

  <body>
  <?php 
  if( $this->session->flashdata('incorrect_data_input') != NULL ) {
          echo "
          <div class='container'>
          <div class='alert alert-danger'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                ".$this->session->flashdata('incorrect_data_input')."
                </div>
          </div>";
        } 
  ?>

    <div class="container">
    <?php
      $attributes = array('class' => 'form-signin', 'role' => 'form'); 
        echo form_open('login/process', $attributes); ?>
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="email" name ="email" class="form-control" placeholder="Email address" required autofocus>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-success btn-block" type="submit">Sign in</button>
      <?php //echo form_close(); ?>
    </div> <!-- /container -->

  </body>
  <!-- Latest compiled and minified JavaScript -->
  <script src="//code.jquery.com/jquery-latest.min.js "></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
</html>
