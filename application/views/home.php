<div class="container">
    <div class="row">
      <div class="col-lg-8 col-sm-8 col-md-8 col-xs-8  lead">
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
      <div class="col-lg-3  col-md-3 col-xs-3 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
        <div class="list-group">
          <a href="<?php echo site_url('home/profile'); ?>" class="list-group-item active">
          <?php
          if ($user_role == 1 ) {
           echo $this->session->userdata('fname').' '
                .$this->session->userdata('lname') . ' ( Student ) '; 
          } else if ($user_role == 2) {
            echo $this->session->userdata('fname').' '
                 .$this->session->userdata('lname') . ' ( Instructor ) '; 
          }
           else if ($user_role == 3) {
            echo $this->session->userdata('email'). ' ( Admin ) ';
          } else {
             echo "Super User";
          }
          ?></a>
          <?php if ( $user_role == 1 || $user_role == 2 ) { ?>
          <a href="<?php echo site_url('home/profile'); ?>" class="list-group-item">Profile</a>
         <?php } ?>

          <a href="<?php echo site_url('home/courses'); ?>" class="list-group-item">
           <? if ( $user_role == 1 ) {
                echo "Courses enrolled";

            } else if ( $user_role == 2 ) {
                echo "Courses teaching";
            } else  {
                 echo "All courses";
            }
             ?>
          </a>
          <?php if ( $user_role == 2 ) { ?>
          <a href="<?php echo site_url('home/classlist'); ?>" class="list-group-item">Classlist</a> 
           <? } ?>
           <?php if ( $user_role == 3 || $user_role == 4) { ?>
           <a href="<?php echo site_url('home/classlist'); ?>" class="list-group-item">All students</a>
           <a href="<?php echo site_url('home/add_course_view'); ?>" class="list-group-item">Add a course</a>
            <? }
            if ($user_role == 4) { ?> 
            
             <? }
             ?>
        </div>
      </div>
    </div>

    </div><!--/.container-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  </body>
</html>
