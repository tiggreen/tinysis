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
            echo "Administrator";
          } else {
             echo "Super User";
          }
          ?></a>
          <a href="<?php echo site_url('home/profile'); ?>" class="list-group-item">Profile</a>
          <a href="<?php echo site_url('home/courses'); ?>"
           class="list-group-item">
           <? if ( $user_role == 1 ) {
                echo "Courses Enrolled";

            } else if ( $user_role == 2 ) {
                echo "Courses Teaching";
            } else {
                 echo "All Courses";
            }
             ?>
          </a>
          <a href="#" class="list-group-item">Link</a>
          <a href="#" class="list-group-item">Link</a>
          <a href="#" class="list-group-item">Link</a>
          <a href="#" class="list-group-item">Link</a>
          <a href="#" class="list-group-item">Link</a>
          <a href="#" class="list-group-item">Link</a>
          <a href="#" class="list-group-item">Link</a>
        </div>
      </div>
    </div>

    </div><!--/.container-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  </body>
</html>
