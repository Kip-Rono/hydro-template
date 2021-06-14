@extends('layouts/layout')

@section('content')


<section class="banner_area">
<div class="container">
<div class="banner_inner_text">
<h2>Contact</h2>
<p>Get in touch</p>
</div>
</div>
</section>


<section class="get_in_touch_area p_100">
<div class="container">
<div class="row get_touch_inner">
<div class="col-lg-6">
<form class="contact_us_form row" action="contact_process.php" method="post" id="contactForm" novalidate="">
<div class="form-group col-lg-6">
<input type="text" class="form-control" id="name" name="name" placeholder="Name">
</div>
<div class="form-group col-lg-6">
<input type="email" class="form-control" id="email" name="email" placeholder="Email">
</div>
<div class="form-group col-lg-12">
<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject*">
</div>
<div class="form-group col-lg-12">
<textarea class="form-control" name="message" id="message" rows="1" placeholder="Message"></textarea>
</div>
<div class="form-group col-lg-12">
<button type="submit" value="submit" class="btn submit_btn form-control">Send</button>
</div>
</form>
</div>
<div class="col-lg-6">
<div class="touch_details">
<div class="l_title">
<img src="img/icon/title-icon.png" alt="">
<h6>Say hello</h6>
<h2>Get in touch, send me an e-mail or call me</h2>
</div>
<p>My communication lines are always open. No question is ever stupid. I'll respond as soon as possible.</p>
<a href="tel:+45237395593232"><h5>Call me now</h5></a>
<a href="tel:+45237395593232"><h4>0727804153</h4></a>
</div>
</div>
</div>
</div>
</section>


<section class="contact_map_area">
<div id="mapBox1" class="mapBox1 row m0" data-lat="40.701083" data-lon="-74.1522848" data-zoom="15" data-marker="" data-info="" data-mlat="" data-mlon="">
</div>
<div class="map_location_box">
<div class="container">
<div class="map_l_box_inner">
<div class="bd-callout">
<h3>Nairobi Office</h3>
<p>City Square, no253 <br>Nairobi, Kenya</p>
<h4><a href="#">+2547804153</a> <a href="#"><span class="__cf_email__" data-cfemail="abc8c4c5dfcac8dfebdfcec6dbc7cadfce85c8c4c6">ro@rogerobare.com</span></a></h4>
</div>
</div>
</div>
</div>
</section>


@endsection
