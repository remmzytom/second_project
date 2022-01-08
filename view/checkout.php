<?php
include "includes/header.php";
 ?>


<div class="page-banner-area item-bg3">
<div class="d-table">
<div class="d-table-cell">
<div class="container">
<div class="page-banner-content">
<h2>Checkout</h2>
<ul>
<li>
<a href="index.php">Home</a>
</li>
<li>Checkout</li>
</ul>
</div>
</div>
</div>
</div>
</div>


<section class="checkout-area ptb-100">
<div class="container">
<div class="user-actions">
<i class='bx bx-log-in'></i>
<span>Returning customer? <a href="#">Click here to login</a></span>
</div>
<form>
<div class="row">
<div class="col-lg-6 col-md-12">
<div class="billing-details">
<h3 class="title">Billing Details</h3>
<div class="row">
<div class="col-lg-12 col-md-12">
<div class="form-group">
<label>Country <span class="required">*</span></label>
<div class="select-box">
<select class="form-control">
<option>United Arab Emirates</option>
<option>China</option>
<option>United Kingdom</option>
<option>Germany</option>
<option>France</option>
<option>Japan</option>
</select>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="form-group">
<label>First Name <span class="required">*</span></label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="form-group">
<label>Last Name <span class="required">*</span></label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-lg-12 col-md-12">
<div class="form-group">
<label>Company Name</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-lg-12 col-md-6">
<div class="form-group">
<label>Address <span class="required">*</span></label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-lg-12 col-md-6">
<div class="form-group">
<label>Town / City <span class="required">*</span></label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="form-group">
<label>State / County <span class="required">*</span></label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="form-group">
<label>Postcode / Zip <span class="required">*</span></label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="form-group">
<label>Email Address <span class="required">*</span></label>
<input type="email" class="form-control">
</div>
</div>
<div class="col-lg-6 col-md-6">
<div class="form-group">
<label>Phone <span class="required">*</span></label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-lg-12 col-md-12">
<div class="form-check">
<input type="checkbox" class="form-check-input" id="create-an-account">
<label class="form-check-label" for="create-an-account">Create an account?</label>
</div>
</div>
<div class="col-lg-12 col-md-12">
<div class="form-check">
<input type="checkbox" class="form-check-input" id="ship-different-address">
<label class="form-check-label" for="ship-different-address">Ship to a different address?</label>
</div>
</div>
<div class="col-lg-12 col-md-12">
<div class="form-group">
<textarea name="notes" id="notes" cols="30" rows="5" placeholder="Order Notes" class="form-control"></textarea>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12">
<div class="order-details">
<h3 class="title">Your Order</h3>
<div class="order-table table-responsive">
<table class="table table-bordered">
<thead>
<tr>
<th scope="col">Product Name</th>
<th scope="col">Total</th>
 </tr>
</thead>
<tbody>
<tr>
<td class="product-name">
<a href="#">Glass Ampule</a>
</td>
<td class="product-total">
<span class="subtotal-amount">$455.00</span>
</td>
</tr>
<tr>
<td class="product-name">
<a href="#">Collagen Ampoules</a>
</td>
<td class="product-total">
<span class="subtotal-amount">$541.50</span>
</td>
</tr>
<tr>
<td class="product-name">
<a href="#">Facial Cream</a>
</td>
<td class="product-total">
<span class="subtotal-amount">$140.50</span>
</td>
</tr>
<tr>
<td class="product-name">
<a href="#">Iodine Tincture</a>
</td>
<td class="product-total">
<span class="subtotal-amount">$547.00</span>
</td>
</tr>
<tr>
<td class="order-subtotal">
<span>Cart Subtotal</span>
</td>
<td class="order-subtotal-price">
<span class="order-subtotal-amount">$1683.50</span>
</td>
</tr>
<tr>
<td class="order-shipping">
<span>Shipping</span>
</td>
<td class="shipping-price">
<span>$30.00</span>
</td>
</tr>
<tr>
<td class="total-price">
<span>Order Total</span>
</td>
<td class="product-subtotal">
<span class="subtotal-amount">$1713.50</span>
</td>
</tr>
</tbody>
</table>
</div>
<div class="payment-box">
 <div class="payment-method">
<p>
<input type="radio" id="direct-bank-transfer" name="radio-group" checked>
<label for="direct-bank-transfer">Direct Bank Transfer</label>
Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
</p>
<p>
<input type="radio" id="paypal" name="radio-group">
<label for="paypal">PayPal</label>
</p>
<p>
<input type="radio" id="cash-on-delivery" name="radio-group">
<label for="cash-on-delivery">Cash on Delivery</label>
</p>
</div>
<a href="#" class="default-btn">Place Order</a>
</div>
</div>
</div>
</div>
</form>
</div>
</section>


<div class="newsletter-area ptb-100">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6">
<div class="newsletter-content">
<h2>Subscribe Your Email</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</div>
</div>
<div class="col-lg-6">
<form class="newsletter-form">
<input type="email" class="input-newsletter" placeholder="Enter your email" name="EMAIL" required autocomplete="off">
<button type="submit">Subscribe Now</button>
<div id="validator-newsletter" class="form-result"></div>
</form>
</div>
</div>
</div>
</div>



<?php
include "includes/footer.php";
 ?>

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>

<script src="assets/js/popper.min.js"></script>

<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/jquery.meanmenu.js"></script>

<script src="assets/js/jquery.appear.min.js"></script>

<script src="assets/js/odometer.min.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/jquery.magnific-popup.min.js"></script>

<script src="assets/js/jquery.nice-select.min.js"></script>

<script src="assets/js/datetimepicker.min.js"></script>

<script src="assets/js/month.min.js"></script>

<script src="assets/js/imagelightbox.min.js"></script>

<script src="assets/js/jquery.ajaxchimp.min.js"></script>

<script src="assets/js/form-validator.min.js"></script>

<script src="assets/js/contact-form-script.js"></script>

<script src="assets/js/wow.min.js"></script>

<script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from templates.envytheme.com/mediva/default/checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Dec 2021 22:49:20 GMT -->
</html>
