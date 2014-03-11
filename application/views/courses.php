<div class="container">
    <div class="row">
      <div class="col-lg-8 col-sm-8 col-md-8 col-xs-8  lead">
      <?php
       foreach ($data as $course) {
       	?>
       	<div class="panel-group" id="accordion<?php echo $course['id']; ?>">
       	  <div class="panel panel-default">
       	    <div class="panel-heading">
       	      <h4 class="panel-title">
       	        <a data-toggle="collapse" data-parent="#accordion<?php echo $course['id']; ?>" 
       	        href="#collapse<?php echo $course['id']; ?>">
       	          <?php echo $course['name'];?>
       	        </a>
       	      </h4>
       	    </div>
       	    <div id="collapse<?php echo $course['id']; ?>" class="panel-collapse collapse">
       	      <div class="panel-body">
       	      <div class="container">
       	      	<div class="row">
       	      		<div class="col-lg-5 col-sm-5 col-md-5 col-xs-5  lead">
       	      			<?php echo "Description: ". $course['description']; ?>
       	      		</div>
       	      		<div class="col-lg-3 col-sm-3 col-md-3 col-xs-3  lead">
       	      			<?php echo "Course #: ". $course['number']; ?>
       	      		</div>
       	      	</div>
       	      </div>
       	      </div>
       	    </div>
       	  </div>
       	</div>
       	<?php }; ?>

      </div>
    </div> 
</div><!--/.container-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  </body>
</html>
