<?php  

# php config file
include ('includes/config.inc.php');





# local / page variables
$page_title = 'User login';
$page_description = "This is the admin logiin page which may grant access to the admin backend, if you know the right formula.";

include ('includes/head.inc.php');


?>



  <!-- Admin Sign In Template
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <section id="admin-signin" class="section">
    <div class="container">
      <div class="row section-header">
        <h2 class="section-title">User Sign In</h2>
      </div>

      <form>
        <div class="row">
          <div class="six columns offset-by-three panel">

            <div>
              <label for="user_email">Your Email</label>
              <input class="u-full-width" type="email" placeholder="test@mailbox.com" id="user_email">
            </div>
            <div>
              <label for="user_pass">Your Password</label>
              <input class="u-full-width" type="password" id="user_pass">
            </div>
            <div>
              <input class="u-full-width button-primary" type="submit" name="submit_form">
            </div>
            <div>
              <input class="u-full-width" type="reset" name="reset_form">
            </div>
            <p>
              <a href="#">Forgot</a> your password? Want to <a href="#">Register</a>?
            </p>
          </div>
        </div>
      </form>
    </div>
  </section>





<?php  

# close connection
mysqli_close($mysqli);

include ('includes/footer.inc.php');