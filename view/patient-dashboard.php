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
<h2>Patient Dashboard</h2>
<ul>
<li>
<a href="index.php">Home</a>
</li>
<li>Patient Dashboard</li>
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
<a href="patient-dashboard.php" class="active">
<i class="flaticon-dashboard"></i>Dashboard
</a>
</li>
<li>
<a href="favorite-doctors.php">
<i class="flaticon-dashboard"></i>Favorite Doctors
</a>
</li>
<li>
<a href="appointments.php">
<i class="flaticon-appointment"></i>Appointments
</a>
</li>
<li>
<a href="patients.php">
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
<div class="row">
<div class="col-lg-3 col-md-6">
<div class="single-stats-box">
<div class="icon">
<i class="flaticon-like"></i>
</div>
<h3>783K</h3>
<p>Total Patient</p>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="single-stats-box bg-2">
<div class="icon">
<i class="flaticon-doctor-1"></i>
</div>
<h3>145</h3>
<p>Doctor</p>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="single-stats-box bg-3">
<div class="icon">
<i class="flaticon-appointment"></i>
</div>
<h3>120</h3>
<p>Appointments</p>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="single-stats-box bg-4">
<div class="icon">
<i class="flaticon-money"></i>
</div>
<h3>545$</h3>
<p>Doctor Earning</p>
</div>
</div>
</div>
<div class="doctors-appointment">
<div class="title-box">
<h3>Doctors Appointment</h3>
<div class="btn-box">
<a href="#" class="btn-one">Upcoming</a>
<a href="#" class="btn-two">Today</a>
</div>
</div>
<table class="doctors-table">
<thead class="table-header">
<tr>
<th>Doctor Name</th>
<th>Appt Date</th>
<th>Booking Date</th>
<th>Amount</th>
<th>Status</th>
<th></th>
</tr>
</thead>
<tbody>
<tr>
<td>
<div class="name-box">
<div class="image">
<img src="assets/img/dashboard/dashboard-1.jpg" alt="image">
</div>
<h5>Mitsue Dove</h5>
<span class="designation">Cardiologist</span>
 </div>
</td>
<td>
<p>20 Nov 2021</p>
<span>12:00PM</span>
</td>
<td>
<p>14 Oct 2021</p>
</td>
<td>
<p>$265.00</p>
</td>
<td>
<p>Confirm</p>
</td>
<td class="right">
<span class="view">View</span>
<span class="accept">Accept</span>
<span class="cancel">Cancel</span>
</td>
</tr>
<tr>
<td>
<div class="name-box">
<div class="image">
<img src="assets/img/dashboard/dashboard-2.jpg" alt="image">
</div>
<h5>Ellen Cranford</h5>
<span class="designation">Anesthesiologists</span>
</div>
</td>
<td>
<p>20 Nov 2021</p>
<span>12:00PM</span>
</td>
<td>
<p>14 Oct 2021</p>
</td>
<td>
<p>$265.00</p>
</td>
<td>
<p>Canceled</p>
</td>
<td class="right">
<span class="view">View</span>
<span class="accept">Accept</span>
<span class="cancel">Cancel</span>
</td>
</tr>
<tr>
<td>
<div class="name-box">
<div class="image">
<img src="assets/img/dashboard/dashboard-3.jpg" alt="image">
</div>
<h5>Shery Corlett</h5>
<span class="designation">Dermatologists</span>
</div>
</td>
<td>
<p>20 Nov 2021</p>
<span>12:00PM</span>
</td>
<td>
<p>14 Oct 2021</p>
</td>
<td>
<p>$265.00</p>
</td>
<td>
<p>Pending</p>
</td>
<td class="right">
<span class="view">View</span>
<span class="accept">Accept</span>
<span class="cancel">Cancel</span>
</td>
</tr>
<tr>
<td>
<div class="name-box">
<div class="image">
<img src="assets/img/dashboard/dashboard-4.jpg" alt="image">
</div>
<h5>Jame Kolar</h5>
<span class="designation">Endocrinologists</span>
</div>
</td>
<td>
<p>20 Nov 2021</p>
<span>12:00PM</span>
</td>
<td>
<p>14 Oct 2021</p>
</td>
<td>
<p>$265.00</p>
</td>
<td>
<p>Confirm</p>
</td>
<td class="right">
<span class="view">View</span>
<span class="accept">Accept</span>
<span class="cancel">Cancel</span>
</td>
</tr>
<tr>
<td>
<div class="name-box">
<div class="image">
<img src="assets/img/dashboard/dashboard-5.jpg" alt="image">
</div>
<h5>Damon Alvelo</h5>
<span class="designation">Family Physicians</span>
</div>
</td>
<td>
<p>20 Nov 2021</p>
<span>12:00PM</span>
</td>
<td>
<p>14 Oct 2021</p>
</td>
<td>
<p>$265.00</p>
</td>
<td>
<p>Pending</p>
</td>
<td class="right">
<span class="view">View</span>
<span class="accept">Accept</span>
<span class="cancel">Cancel</span>
</td>
</tr>
<tr>
<td>
<div class="name-box">
<div class="image">
 <img src="assets/img/dashboard/dashboard-6.jpg" alt="image">
</div>
<h5>Amelia Anna</h5>
<span class="designation">Gastroenterologists</span>
</div>
</td>
<td>
<p>20 Nov 2021</p>
<span>12:00PM</span>
</td>
<td>
<p>14 Oct 2021</p>
</td>
<td>
<p>$265.00</p>
</td>
<td>
<p>Confirm</p>
</td>
<td class="right">
<span class="view">View</span>
<span class="accept">Accept</span>
<span class="cancel">Cancel</span>
</td>
</tr>
<tr>
<td>
<div class="name-box">
<div class="image">
<img src="assets/img/dashboard/dashboard-7.jpg" alt="image">
</div>
<h5>Sasha Abele</h5>
<span class="designation">Geriatric Specialists</span>
</div>
</td>
<td>
<p>20 Nov 2021</p>
<span>12:00PM</span>
</td>
<td>
<p>14 Oct 2021</p>
</td>
<td>
<p>$265.00</p>
</td>
<td>
<p>Canceled</p>
</td>
<td class="right">
<span class="view">View</span>
<span class="accept">Accept</span>
<span class="cancel">Cancel</span>
</td>
</tr>
<tr>
<td>
<div class="name-box">
<div class="image">
<img src="assets/img/dashboard/dashboard-8.jpg" alt="image">
</div>
<h5>Mary Astor</h5>
<span class="designation">Medicine Specialists</span>
</div>
</td>
<td>
<p>20 Nov 2021</p>
<span>12:00PM</span>
</td>
 <td>
<p>24 Oct 2021</p>
</td>
<td>
<p>$265.00</p>
</td>
<td>
<p>Confirm</p>
</td>
<td class="right">
<span class="view">View</span>
<span class="accept">Accept</span>
<span class="cancel">Cancel</span>
</td>
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

<!-- Mirrored from templates.envytheme.com/mediva/default/patient-dashboard.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 Dec 2021 22:49:27 GMT -->
</html>
