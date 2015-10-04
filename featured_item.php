<?php  


# =========================================
# 
# name:     FEATURED ITEM.php
# 
# =========================================
# 
# purpose: 
# 
#   this acts as the homepage to website
#   it will connect to the db for a test
#           
# 
# =========================================

// useful variables and functions
include 'includes/setup.inc.php';
// session functions
include 'includes/session.inc.php';
// conenct to db variables
include 'includes/config.inc.php';

// local / page variables
$page_title = 'Featured Item';

include 'includes/head.inc.php';

?>

  <!-- Featured Item Template
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <section id="featured" class="section">
    <div class="container">
      <div class="row section-header">
        <h1 class="section-title"><?php echo $page_title; ?></h1>
      </div>

      <?php  

      $db = new Database($DBusername, $DBpassword, $dbname);

      echo "made db connection\n";

      // make sql query
      $sql = "SELECT * FROM `products` LIMIT 1"; //LIMIT 1

      echo "made sql string query\n";

      $result = $db->query($sql); /// hmmm $db was originally $myDB???



      // first check to see if the is NOT a result,
      // then populate the result.
      if (!$result) {
        // output a stylized error message
        echo '<div class="alert alert-error">sql query returned no result.</div>';
        echo mysql_error();
      } else {
        // else if there WAS a result to output
        if (mysqli_num_rows($result) == 0) {
          echo '<div class="alert alert-error">sql went through but no result.</div>';
          echo mysql_error();
        } else {
          while($row = mysql_fetch_assoc($result)) {
            echo '
            <div class="row">
              <div class="seven columns featured-item">
                <h2 class="featured-item_title">' . $row['Name'] . ' <span class="text-muted">100% Headshots.</span></h2>
                <p>' . $row['Description'] . ' <a href="product.php?' . $row['Id'] . '">See Product Specs</a>.
                </p>
                <p>
                  <span class="old-price"> $' . $row['MSRP'] . '</span> <strong class="new-price"> $' . $row['Sale'] . '</strong>
                </p>
              </div>
              <div class="five columns">
                <a href="product.php?' . $row['Id'] . '">
                  <img src="' . $row['Image'] . '" alt="an image of a cool product." class="u-max-full-width" />
                </a>
              </div>
            </div>';  
          }


          // close db connection
          $db->close();
        }
      }

      // SELECT * FROM `products` WHERE Featured=1 LIMIT 1
      
      // if ( $result = mysqli_query($mysqli, "SELECT * FROM `products` WHERE Featured=1 LIMIT 1")) { 

      //   if ( $row = mysqli_fetch_assoc($result) ) {
      //     echo '
      //       <div class="row">
      //         <div class="seven columns featured-item">
      //           <h2 class="featured-item_title">' . $row['Name'] . ' <span class="text-muted">100% Headshots.</span></h2>
      //           <p>' . $row['Description'] . ' <a href="product.php?' . $row['Id'] . '">See Product Specs</a>.
      //           </p>
      //           <p>
      //             <span class="old-price"> $' . $row['MSRP'] . '</span> <strong class="new-price"> $' . $row['Sale'] . '</strong>
      //           </p>
      //         </div>
      //         <div class="five columns">
      //           <a href="product.php?' . $row['Id'] . '">
      //             <img src="' . $row['Image'] . '" alt="an image of a cool product." class="u-max-full-width" />
      //           </a>
      //         </div>
      //       </div>';

            
      //   } else {
      //     echo '<div class="alert alert-error">No Featured Items.</div>';
      //   }
      // }


      ?>
      
      <!-- <div class="row">
        <div class="seven columns featured-item">
          <h2 class="featured-item_title">The Autobot Gearbox. <span class="text-muted">100% Headshots.</span></h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil praesentium dignissimos cupiditate ad suscipit aut tempora repellat quis animi eos, eius corporis illo cumque, corrupti mollitia libero maiores modi quam.</p>
          <p>
            <span class="old-price">$549.99</span> <strong class="new-price text-muted">Now $449.99</strong>
          </p>
          <p><button class="button-primary">See specs</button></p>
        </div>
        <div class="five columns">
          <a href="#">
            <img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/307033/10.jpg" alt="an image of a cool product." class="u-max-full-width" />
          </a>
        </div>

      </div> -->
    </div>
  </section>




<?php

include 'includes/footer.inc.php';