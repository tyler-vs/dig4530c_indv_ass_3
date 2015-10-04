<?php  

# php config file
include ('includes/config.inc.php');

# local / page variables
$page_title = 'Profile Page';
$page_description = "This is the $page_title demo page. For a prsons profile.";

include ('includes/head.inc.php');

// html5 nu checked

?>



  <!-- Customer Profile Template
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <section id="profile" class="section">
    <div class="container">
      <div class="row section-header">
        <!-- js randomize noun -->
        <h2 class="section-title">Hello <span class="text-muted">Customer</span>.</h2>
      </div>

      <div class="row">
        <div class="five columns">
          <pre>Your Order Status</pre>
          <meter class="u-full-width" min="0" max="100" value="80"></meter>
        </div>
        <div class="seven columns">
          <h3>Your Information</h3>
          <!--<img src="//placeholdit.imgix.net/~text?txtsize=47&txt=image&w=250&h=250" alt="" class="u-full-width avatar-image" />
          <p>
            <a href="#">Edit Avatar.</a>
          </p>-->
          <table class="u-full-width">
            <tbody>
              <tr>
                <td><strong>First Name</strong></td>
                <td>Lorem</td>
              </tr>
              <tr>
                <td><strong>Last Name</strong></td>
                <td>Lorain</td>
              </tr>
              <tr>
                <td><strong>Customer ID</strong></td>
                <td>Cust#90102389</td>
              </tr>
              <tr>
                <td><strong>Status</strong></td>
                <td><span class="text-success">Active <i class="fa fa-check-circle"></i></span></td>
              </tr>
              <tr>
                <td><strong>Last Seen</strong></td>
                <td>
                  12:45:07 PM EST
                </td>
              </tr>
              <tr>
                <td><strong>Description</strong></td>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis soluta, error cumque? Ut eos mollitia natus dignissimos nisi cumque ducimus veritatis, eveniet laborum facilis. Officia eveniet, sit voluptas cumque voluptatum.</td>
              </tr>
            </tbody>
          </table>
          <form>
            <button class="button">Edit Profile</button>
          </form>
        </div>
      </div>
    </div>
  </section>


<?php  

include ('includes/footer.inc.php');