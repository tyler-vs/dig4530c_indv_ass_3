<?php  

/**
 *  client.php
 *
 *  this is a demo for a users profile
 *  page and includes the users basic information
 *  such as name, address, and contact info.
 *
 *  allows users to see transactions.
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
$mysqli = mysqli_connect($db_servername, $db_username, $db_password, $db_name);

// conditional, output an error message if cannot connect to 
// database.
if (mysqli_connect_errno()) {
  // print error message using error css classes
  echo '<div class="alert alert-error">Failed to connect to mysql: ' . mysqli_connect_error() . '</div>';
  // exit out of php code.
  exit();
}


/**
 * local page variables
 */
$page_title = 'Client Page';

/**
 * grab header html part
 */
include ('includes/head.inc.php');

?>



  <!-- Customer Profile Template
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <section id="profile" class="section">
    <div class="container">
      
      <?php  

      // create a query for users and then output
      // a demo user for profile page.
      if ($result = mysqli_query($mysqli, "SELECT * FROM `customers_demo` LIMIT 1")) {

        while( $row = mysqli_fetch_assoc($result) ) {

          echo '<div class="row section-header">
          <h2 class="section-title">Hello <span class="text-muted">' . $row['UserName'] . '</span>.</h2>
        </div>
        <div class="row">
        <div class="five columns">
          <img src="img/avatars/' . $row['UserAvatar'] . '" alt="This is ' . $row['UserName'] . '\'s Avatar." class="u-full-width avatar-image" />
        </div>
        <div class="seven columns">
          <table class="u-full-width">
            <tbody>
              <tr>
                <td><strong>First Name</strong></td>
                <td>' . $row['FirstName'] . '</td>
              </tr>
              <tr>
                <td><strong>Last Name</strong></td>
                <td>' . $row['LastName'] . '</td>
              </tr>
              <tr>
                <td><strong>Customer ID</strong></td>
                <td>' . $row['Id'] . '</td>
              </tr>
              <tr>
                <td><strong>Status</strong></td>
                <td>' . $row['UserActive'] . '</td>
              </tr>
              <tr>
                <td><strong>Signed up on</strong></td>
                <td>' . $row['UserSignupDate'] . '</td>
              </tr>
              <tr>
                <td><strong>Email</strong></td>
                <td>' . $row['Email'] . '</td>
              </tr>
              <tr>
                <td><strong>Gamertag</strong></td>
                <td>' . $row['UserGamertag'] . '</td>
              </tr>
              <tr>
                <td><strong>Address</strong></td>
                <td>' . $row['Address'] . '</td>
              </tr>
              <tr>
                <td><strong>Payment Type</strong></td>
                <td>' . $row['PaymentType'] . '</td>
              </tr>
            </tbody>
          </table>
          <form>
            <button class="button">Edit Profile</button>
          </form>
        </div>
      </div>
          ';

        }
        // end while loop.

      } else {
        echo '<div class="alert alert-error">Sorry there was a query error, or no user existst.</div>';
        // exit();
      }


      ?>

      
    </div>
  </section>


<?php  

/**
 * close connection
 */
mysqli_close($mysqli);


/**
 * add footer html
 */
include ('includes/footer.inc.php');