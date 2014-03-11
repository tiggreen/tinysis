<div class="container">
    <div class="row">
      <div class="col-lg-8 col-sm-8 col-md-8 col-xs-8  lead">
      <?php
       foreach ($data as $course) {
       		echo $course['name'].'<BR>';
       }
       	?>
      </div>
    </div> 
</div><!--/.container-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  </body>
</html>
