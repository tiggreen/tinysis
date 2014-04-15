<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
<div class="container">
    <div class="row lead">
      <div class="col-lg-2 col-sm-2 col-md-2 col-xs-2">
      <?php echo "<b>First Name:</b>"; ?>
      </div>
      <div class="col-lg-5 col-sm-5 col-md-5 col-xs-5">
      <?php echo $data['fname']; ?>
      </div>
    </div> 
    <div class="row lead">
      <div class="col-lg-2 col-sm-2 col-md-2 col-xs-2">
      <?php echo "<b>Last Name:</b>"; ?>
      </div>
      <div class="col-lg-5 col-sm-5 col-md-5 col-xs-5">
      <?php echo $data['lname']; ?>
      </div>
    </div> 
    <div class="row lead">
      <div class="col-lg-2 col-sm-2 col-md-2 col-xs-2">
      <?php echo "<b>Phone:</b>"; ?>
      </div>
      <div class="col-lg-5 col-sm-5 col-md-5 col-xs-5">
      <a href="#" id="phone" data-type="text" data-pk="<?php echo $data['id']; ?>" 
        data-url="<?php echo site_url("/home/set_phone"); ?>"
       data-title="Enter a new address"><?php echo $data['phone']; ?></a>
      </div>
    </div> 
</div><!--/.container-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
<script type="text/javascript">
  //turn to inline mode
  $.fn.editable.defaults.mode = 'popup';
  $(document).ready(function() {
      $('#phone').editable( {
        
        success: function(response, newValue) {
                if(response.status == 'error') return response.msg; //msg will be shown in editable form
            }
      });
  });

</script>
</body>
</html>
