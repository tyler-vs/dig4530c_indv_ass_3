<?php 

# ========================================= #\
# 
# name:     setup.inc.php
# 
# =========================================
# 
# purpose:  setup environment variables
#           for the e-commerce store.
#           
#           mysql db connect
#           
#           
#           written in procedural!
# 
# directory:
# 
#           - #site variables
#           - #mysql_connect variables
#           - #mysql connect
# 
# ========================================= #/

// baseDir variable helps make links absolute instead of relative
// works for static content not php files.
$baseDir = 'http://localhost:8888/individual_assignment_3_v.2/dig4530c_hexia_ecommerce/'; // improve this!!


// some general site variables
$site_title = 'Hexia Monthly';
$site_author = 'HexiaAdminBossGuy';
$site_description = 'this is hexia monthly services, we send you something every month!';