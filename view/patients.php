<?php
include "includes/header.php";
 ?>


<div class="search-overlay">
<div class="d-table">
<div class="d-table-cell">
<div class="search-overlay-layer"></div>
<div class="search-overlay-layer"></div>
<div class="search-overlay-layer"></div>
<div class="search-overlay-close">
<span class="search-overlay-close-line"></span>
<span class="search-overlay-close-line"></span>
</div>
<div class="search-overlay-form">
<form>
<input type="text" class="input-search" placeholder="Search here...">
<button type="submit"><i class='bx bx-search-alt'></i></button>
</form>
 </div>
</div>
</div>
</div>


<div class="page-banner-area-two">
<div class="d-table">
<div class="d-table-cell">
<div class="container">
<div class="page-banner-content-two">
<h2>Patients</h2>
<ul>
<li>
<a href="index.php">Home</a>
</li>
<li>Patients</li>
</ul>
</div>
</div>
</div>
</div>
</div>


<section class="doctor-dashboard-area ptb-100">
<div class="container-fluid">
<div class="row">
<div class="col-lg-3 col-md-12">
<div class="dashboard-profile">
<div class="profile-box">
<img src="assets/img/profile.jpg" alt="image">
<div class="profile-designation">
<h3>Dr. Addison Smith</h3>
<p>MBBS, M.D of Medicine</p>
<span>BDS, FCPS (Hons), Ph.D. (USA)</span>
</div>
</div>
<div class="dashboard-profile-info">
<ul class="info-list">
<li>
<a href="doctors-dashboard.php">
<i class="flaticon-dashboard"></i>Dashboard
</a>
</li>
<li>
<a href="appointments.php">
<i class="flaticon-appointment"></i>Appointments
</a>
</li>
<li>
<a href="patients.php" class="active">
<i class="flaticon-medical"></i>Patients
</a>
</li>
<li>
<a href="schedule-time.php">
<i class="flaticon-calendar"></i>Schedule Time
</a>
</li>
<li>
<a href="invoices.php">
<i class="flaticon-invoice"></i>Invoices
</a>
</li>
<li>
<a href="reviews.php">
<i class="flaticon-review"></i>Reviews
</a>
</li>
<li>
<a href="change-password.php">
<i class="flaticon-padlock"></i>Change Password
</a>
</li>
<li>
<a href="login.php">
<i class="flaticon-enter"></i>Login
</a>
</li>
</ul>
</div>
 </div>
</div>
<div class="col-lg-9 col-md-12">
<div class="doctors-appointment">
<div class="title-box">
<div class="row align-items-center">
<div class="col-lg-6">
<h3>Patients List</h3>
</div>
<div class="col-lg-6">
<form class="search-form">
<label>
<span class="screen-reader-text">Search for:</span>
<input type="search" class="search-field" placeholder="Search...">
</label>
<button type="submit">
<i class='bx bx-search-alt'></i>
</button>
</form>
</div>
</div>
</div>
<table class="patients-table">
<thead class="table-header">
<tr>
<th>Patient Name</th>
<th>Sex</th>
<th>Address</th>
<th>Mobile</th>
<th>Age</th>
<th>Blood Group</th>
<th>Action</th>
<th></th>
</tr>
</thead>
<tbody>
<tr>
<td>
<div class="name-box">
<div class="image">
<img src="assets/img/dashboard/dashboard-9.jpg" alt="image">
</div>
<h5>Mary Astor</h5>
</div>
</td>
<td>
<p>Male</p>
</td>
<td>
<p>175 5th Ave Area, UK</p>
</td>
<td>
<p>(+882) 563 789 966</p>
</td>
<td>
<p>29 Years</p>
</td>
<td>
<p>O+</p>
</td>
<td class="right">
<span class="edit">Edit</span>
<span class="cancel">Cancel</span>
</td>
<td></td>
</tr>
<tr>
<td>
<div class="name-box">
<div class="image">
<img src="assets/img/dashboard/dashboard-10.jpg" alt="image">
</div>
 <h5>Paul Albert</h5>
</div>
</td>
<td>
<p>Male</p>
</td>
<td>
<p>175 5th Ave Area, UK</p>
</td>
<td>
<p>(+882) 563 789 965</p>
</td>
<td>
<p>16 Years</p>
</td>
<td>
<p>AB-</p>
</td>
<td class="right">
<span class="edit">Edit</span>
<span class="cancel">Cancel</span>
</td>
<td></td>
</tr>
<tr>
<td>
<div class="name-box">
<div class="image">
<img src="assets/img/dashboard/dashboard-5.jpg" alt="image">
</div>
<h5>Ellen Cranford</h5>
</div>
</td>
<td>
<p>Female</p>
</td>
<td>
<p>175 5th Ave Area, UK</p>
</td>
<td>
<p>(+882) 563 789 465</p>
</td>
<td>
<p>70 Years</p>
</td>
<td>
<p>B+</p>
</td>
<td class="right">
<span class="edit">Edit</span>
<span class="cancel">Cancel</span>
</td>
<td></td>
</tr>
<tr>
<td>
<div class="name-box">
<div class="image">
<img src="assets/img/dashboard/dashboard-3.jpg" alt="image">
</div>
<h5>Viki Hankins</h5>
</div>
</td>
<td>
<p>Female</p>
</td>
<td>
<p>175 5th Ave Area, UK</p>
</td>
<td>
<p>(+882) 563 789 568</p>
</td>
<td>
<p>55 Years</p>
 </td>
<td>
<p>A+</p>
</td>
<td class="right">
<span class="edit">Edit</span>
<span class="cancel">Cancel</span>
</td>
<td></td>
</tr>
<tr>
<td>
<div class="name-box">
<div class="image">
<img src="assets/img/dashboard/dashboard-11.jpg" alt="image">
</div>
<h5>Jame Kolar</h5>
</div>
</td>
<td>
<p>Male</p>
</td>
<td>
<p>175 5th Ave Area, UK</p>
</td>
<td>
<p>(+882) 563 789 966</p>
</td>
<td>
<p>29 Years</p>
</td>
<td>
<p>O+</p>
</td>
<td class="right">
<span class="edit">Edit</span>
<span class="cancel">Cancel</span>
</td>
<td></td>
</tr>
<tr>
<td>
<div class="name-box">
<div class="image">
<img src="assets/img/dashboard/dashboard-1.jpg" alt="image">
</div>
<h5>Mitsue Dove</h5>
</div>
</td>
<td>
<p>Male</p>
</td>
<td>
<p>175 5th Ave Area, UK</p>
</td>
<td>
<p>(+882) 563 789 965</p>
</td>
<td>
<p>16 Years</p>
</td>
<td>
<p>AB-</p>
</td>
<td class="right">
<span class="edit">Edit</span>
<span class="cancel">Cancel</span>
</td>
<td></td>
</tr>
<tr>
<td>
<div class="name-box">
<div class="image">
 <img src="assets/img/dashboard/dashboard-4.jpg" alt="image">
</div>
<h5>Ellen Cranford</h5>
</div>
</td>
<td>
<p>Female</p>
</td>
<td>
<p>175 5th Ave Area, UK</p>
</td>
<td>
<p>(+882) 563 789 465</p>
</td>
<td>
<p>55 Years</p>
</td>
<td>
<p>B+</p>
</td>
<td class="right">
<span class="edit">Edit</span>
<span class="cancel">Cancel</span>
</td>
<td></td>
</tr>
<tr>
<td>
<div class="name-box">
<div class="image">
<img src="assets/img/dashboard/dashboard-14.jpg" alt="image">
</div>
<h5>Damon Alvelo</h5>
</div>
</td>
<td>
<p>Female</p>
</td>
<td>
<p>175 5th Ave Area, UK</p>
</td>
<td>
<p>(+882) 563 789 568</p>
</td>
<td>
<p>98 Years</p>
</td>
<td>
<p>A+</p>
</td>
<td class="right">
<span class="edit">Edit</span>
<span class="cancel">Cancel</span>
</td>
<td></td>
</tr>
<tr>
<td>
<div class="name-box">
<div class="image">
<img src="assets/img/dashboard/dashboard-7.jpg" alt="image">
</div>
<h5>Bryan Adams</h5>
</div>
</td>
<td>
<p>Male</p>
</td>
<td>
<p>175 5th Ave Area, UK</p>
</td>
<td>
<p>(+882) 563 789 966</p>
 </td>
<td>
<p>29 Years</p>
</td>
<td>
<p>O+</p>
</td>
<td class="right">
<span class="edit">Edit</span>
<span class="cancel">Cancel</span>
</td>
<td></td>
</tr>
<tr>
<td>
<div class="name-box">
<div class="image">
<img src="assets/img/dashboard/dashboard-6.jpg" alt="image">
</div>
<h5>Paolo Dybala</h5>
</div>
</td>
<td>
<p>Male</p>
</td>
<td>
<p>175 5th Ave Area, UK</p>
</td>
<td>
<p>(+882) 563 789 965</p>
</td>
<td>
<p>16 Years</p>
</td>
<td>
<p>AB-</p>
</td>
<td class="right">
<span class="edit">Edit</span>
<span class="cancel">Cancel</span>
</td>
<td></td>
</tr>
<tr>
<td>
<div class="name-box">
<div class="image">
<img src="assets/img/dashboard/dashboard-5.jpg" alt="image">
</div>
<h5>Shery Corlett</h5>
</div>
</td>
<td>
<p>Female</p>
</td>
<td>
<p>175 5th Ave Area, UK</p>
</td>
<td>
<p>(+882) 563 789 465</p>
</td>
<td>
<p>20 Years</p>
</td>
<td>
<p>B+</p>
</td>
<td class="right">
<span class="edit">Edit</span>
<span class="cancel">Cancel</span>
</td>
<td></td>
</tr>
</tbody>
 </table>
</div>
</div>
</div>
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

<!-- Mirrored from templates.envytheme.com/mediva/default/patients.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Dec 2021 22:48:47 GMT -->
</html>
