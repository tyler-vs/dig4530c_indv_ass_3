<?php  

# =========================================
# 
# name:     admin_demo.php
# 
# =========================================
# 
# purpose:  this page is for an admin user, 
#           it allows various backend options
#           that update, view and
#           modify items/subscriptions in the 
#           database.
#           
#           
# 
# ========================================= #/

# php config file
include ('includes/config.inc.php');

# check to see if this manager / admin actually exists or not.



# local / page variables
$page_title = 'Admin Page';
$page_description = "This is the $page_title demo page.";

# head
include ('includes/head.inc.php');

// html5 nu checked

?>


<!-- Demo Section Template
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <section id="admin" class="section">
    <div class="container">
      <div class="row section-header">
        <h2 class="section-title">Admin Page</h2>
      </div>
      <div class="row">
        <p>
          <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga amet quae ducimus sed quasi itaque architecto recusandae aspernatur nihil excepturi, non id maiores officia repellat debitis tempore, velit sunt voluptatibus.</span>
          <span>Deleniti eum ut cupiditate vel autem itaque, quibusdam nam earum aliquam ipsum obcaecati dicta, mollitia doloremque pariatur dolore quisquam a molestias sed corporis nulla voluptatem quam debitis harum. Alias, odio.</span>
          <span>Aspernatur nesciunt maxime in expedita quod vitae officia quo, incidunt minima voluptatibus consequuntur at iure sit sunt, non veritatis quidem maiores dicta deserunt adipisci alias nobis! Sint similique ullam illo.</span>
          <span>Ducimus quaerat enim saepe blanditiis nulla asperiores, inventore vel laborum dolor, officia facere ut itaque explicabo. Soluta, quis maiores commodi sapiente voluptate, amet repudiandae. Libero voluptates neque ad ducimus porro!</span>
        </p>
      </div>
    </div>
  </section>

<?php  

include ('includes/footer.inc.php');