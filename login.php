<?php  


# =========================================
# 
# name:     login.php
# 
# =========================================
# 
# purpose:  login page for basic user, Not admin.
# 
# 
# how it works:
# 
#   - grab `session` file which should be included first
#   on the page the grab $_SESSION variables like admin 
#   authentication.
#   
#   - grab `configure` file that sets up global variable
#   names. 
#   
#   - grab the header html file that contains login links
#   and search functionality.
#           
#           
# 
# =========================================

// useful variables and functions
include 'includes/setup.inc.php';
// session functions
include 'includes/session.inc.php';
// conenct to db variables
include 'includes/config.inc.php';

// page variables
$page_title = 'Sign in';

// head html
include 'includes/head.inc.php';


// this login page will redirect to itself when
// validating.


?>



  <!-- Sign In Template
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <section id="signin" class="section">
    <div class="container">

      <div class="row section-header">
        <h2 class="section-title"><?php echo $page_title; ?></h2>
      </div>

      <form method="post" action="login.php">

        <!-- basic use login -->
        <div class="row">
          <div class="six columns offset-by-three panel">

            <!-- user name -->
            <div>
              <label for="user_name">Username</label>
              <input class="u-full-width" type="text" placeholder="Your user name" name="user_name" id="user_email">
            </div>

            <!-- user password -->
            <div>
              <label for="user_pass">User Password</label>
              <input class="u-full-width" type="password" name="user_name" id="user_pass">
            </div>

            <!-- submit -->
            <div>
              <input class="u-full-width button-primary" type="submit" name="submit_form">
            </div>

            <!-- reset -->
            <div>
              <input class="u-full-width" type="reset" name="reset_form">
            </div>

            <!-- links to other pages -->
            <p>
              <!-- <a href="#">Forgot</a> your password? Want to <a href="#">Register</a>? --><br> 
              If you are an admin user please login <a href="<?php echo $baseDir; ?>admin/admin_login.php">here</a>.
            </p>
          </div>
        </div>
      </form>
    </div>
  </section>





<?php

include 'includes/footer.inc.php';