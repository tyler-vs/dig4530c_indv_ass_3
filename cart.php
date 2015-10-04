<?php  

# php config file
include ('includes/config.inc.php');

# local / page variables
$page_title = 'Shopping Cart';
$page_description = "This is the $page_title demo page. Yay shopping!";

include ('includes/head.inc.php');

// html5 checked

?>



  <!-- Shopping Cart Template
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <section id="shopping-cart" class="section">
    <div class="container">

      <div class="row section-header">
        <h2 class="section-title">Shopping Cart</h2>
      </div>
      
      <form>
        <div class="row">
          <div class="six columns">
            <button class="button-primary">Conintue shopping</button>
            <button class="button">Clear Cart</button>
          </div>
          
          <div class="six columns">
            <button class="button-primary">Recalculate</button> 
            <button class="button">Proceed to checkout &rarr;</button>
          </div>
        </div>
      </form>
      
      <div class="row">
        <table class="u-full-width">
          <thead>
            <tr>
              <th>Product</th>
              <th>Unit price</th>
              <th>Quantity</th>
              <th>Total price</th>
            </tr>
          </thead>
          <tbody>
              <tr>
                <td>
                  <div class="cart-item_info u-cf">
                    <a href="#" title="">
                      <img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/307033/10.jpg" alt="" class="" />
                    </a>
                    <div class="cart-item_details">
                      <h3><a href="">This product</a></h3>
                      <span>Code: #909090901</span>
                    </div>
                  </div>
                </td>
                <td>$26.00</td>
                <td>
                  <form>
                    <input type="number" name="quantity" min="0" max="5" value="1" />
                  </form>
                </td>
                <td>$499.99</td>
              </tr>
              <tr>
                <td>
                  <div class="cart-item_info u-cf">
                    <a href="#" title="">
                      <img src="//s3-us-west-2.amazonaws.com/s.cdpn.io/307033/10.jpg" alt="" class="" />
                    </a>
                    <div class="cart-item_details">
                      <h3><a href="">This product</a></h3>
                      <span>Code: #909090901</span>
                    </div>
                  </div>
                </td>
                <td>$26.00</td>
                <td>
                  <form>
                    <input type="number" name="quantity" min="0" max="5" value="1" />
                  </form>
                </td>
                <td>$499.99</td>
              </tr>
          </tbody>
        </table>
      </div>
      
      <div class="row">
        <table class="u-full-width cart-total">
          <tr>
            <td>Apply Coupon</td>
            <td>Subtotal</td>
            <td>$499.99</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>Shipping cost</td>
            <td><a href="#">Calculate</a></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>Total cost</td>
            <td><strong>$499.99</strong></td>
          </tr>
        </table>
      </div>
      
      <form>
        <div class="row">

          <div class="six columns">
            <button class="button-primary">Conintue shopping</button>
          </div>
          
          <div class="six columns">
            <button class="button-primary">Recalculate</button> 
            <button class="button">Proceed to checkout &rarr;</button>
          </div>
        </div>
      </form>

    </div>
  </section>


<?php  

include ('includes/footer.inc.php');