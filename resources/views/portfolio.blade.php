@extends('layouts/layout')

@section('content')

<section class="banner_area">
<div class="container">
<div class="banner_inner_text">
<h2>Portfolio</h2>
<p>See our best work</p>
</div>
</div>
</section>


<section class="portfolio_area">
<div class="container">
<div class="portfolio_filter">
<ul>
<li class="active" data-filter="*"><a href="#">All</a></li>
<li data-filter=".brand"><a href="#">Brand identity</a></li>
<li data-filter=".design"><a href="#">Design</a></li>
<li data-filter=".arc"><a href="#">Architecture</a></li>
<li data-filter=".photo"><a href="#">Photography</a></li>
</ul>
</div>
</div>
<div class="ms_portfolio_inner">
<div class="ms_p_item wd_25 brand arc photo">
<img src="img/portfolio/ms-portfolio/xms-p-1.jpg.pagespeed.ic.jz_DgY-2fk.jpg" alt="">
</div>
<div class="ms_p_item wd_25 brand arc photo">
<img src="img/portfolio/ms-portfolio/xms-p-2.jpg.pagespeed.ic.292Io0kq1W.jpg" alt="">
</div>
<div class="ms_p_item wd_50 brand">
<img src="img/portfolio/ms-portfolio/ms-p-3.jpg" alt="">
</div>
<div class="ms_p_item wd_25 brand arc photo">
<img src="img/portfolio/ms-portfolio/ms-p-4.jpg" alt="">
</div>
<div class="ms_p_item wd_25 brand arc photo">
<img src="img/portfolio/ms-portfolio/ms-p-5.jpg" alt="">
</div>
<div class="ms_p_item wd_50">
<img src="img/portfolio/ms-portfolio/ms-p-6.jpg" alt="">
</div>
<div class="ms_p_item wd_25 design arc">
<img src="img/portfolio/ms-portfolio/ms-p-7.jpg" alt="">
</div>
<div class="ms_p_item wd_25 design arc">
<img src="img/portfolio/ms-portfolio/ms-p-8.jpg" alt="">
</div>
<div class="ms_p_item wd_25 design arc">
<img src="img/portfolio/ms-portfolio/ms-p-9.jpg" alt="">
</div>
<div class="ms_p_item wd_25 design arc">
<img src="img/portfolio/ms-portfolio/ms-p-10.jpg" alt="">
</div>
</div>
</section>



@endsection
