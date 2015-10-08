<?php  
/**
 *  login.php
 *
 *  login page allows you to access db 
 *  functionalities depending on user type.
 *
 */

/** 
 * contains general variables and baseURL variables
 * to help ease site navigation linking.
 */
include 'includes/setup.inc.php';


/* 
*   variables to connect to sulley servers
*   to grab database items.
*/
include 'includes/config.inc.php';


/**
 * after database connect we can run a query for the page
 */

// mysql db connection
// $mysqli = mysqli_connect($db_servername, $db_username, $db_password, $db_name);

// conditional, output an error message if cannot connect to 
// database.
// if (mysqli_connect_errno()) {
//   // print error message using error css classes
//   echo '<div class="alert alert-error">Failed to connect to mysql: ' . mysqli_connect_error() . '</div>';
//   // exit out of php code.
//   exit();
// } 
// else {
//   echo '<div class="alert alert-info">Connected to sulley db!</div>';
// }



/**
 * local page variables
 */
$page_title = 'Sign in';

/**
 * grab header html part
 */
include ('includes/head.inc.php');



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

/**
 * close connection
 */
// mysqli_close($mysqli);

/**
 * add footer html
 */
include ('includes/footer.inc.php');