<div class="container">
    <div class="row">
      <div class="page-header">
        <h1> <small>Here you can add a new course into the system.</small></h1>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-8 col-sm-8 col-md-8 col-xs-8  lead">
        <?php     
        if( isset($message)) { echo $message; }
            $attributes = array('id' => 'addForm', 
              'class' => 'form-horizontal', 'role' => 'form' );
            echo form_open('home/add_course', $attributes); 
        ?>
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" name="name" required >
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Number</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" name="number" required >
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label">Description</label>
          <div class="col-sm-5">
            <textarea class="form-control" name ="desc" rows="3"></textarea>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Add</button>
          </div>
        </div>
        <?php echo form_close(); ?>
      </div>
    </div> 
</div><!--/.container-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  </body>
</html>
