@extends('layouts/layout')

@section('content')
    <section class="banner_area">
        <div class="container">
            <div class="banner_inner_text">
                <h2>Charity</h2>
                <p>Aspire to always help where you can.</p>
            </div>
        </div>
    </section>


    <section class="service_feature">
        <div class="container">
            <div class="row feature_inner">
                <div class="col-lg-4 col-sm-6">
                    <div class="feature_item">
                        <div class="f_icon">
                            <img src="img/icon/f-icon-1.png" alt="">
                        </div>
                        <h4>Personal Value</h4>
                        <p>In my research, Why we give, a feeling of social conscience was the most widely-given reason
                            to give to charity.</p>
                        <a class="more_btn" href="#">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="feature_item">
                        <div class="f_icon">
                            <img src="img/icon/f-icon-2.png" alt="">
                        </div>
                        <h4>Impact</h4>
                        <p>Many people are concerned that their donations to charity may be reduced by tax or
                            administrative costs, preventing the full amount from reaching the people or causes they
                            really want to help. Thankfully there are ways to make the most of every donation to
                            charity.</p>
                        <a class="more_btn" href="#">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="feature_item">
                        <div class="f_icon">
                            <img src="img/icon/f-icon-3.png" alt="">
                        </div>
                        <h4>Introduce others</h4>
                        <p>Sharing the experience of donating to charity with your children shows them from a young age
                            that they can make positive changes in the world. </p>
                        <a class="more_btn" href="#">Read More</a>
                    </div>
                </div>
{{--                uncomment this later--}}
{{--                <div class="col-lg-4 col-sm-6">--}}
{{--                    <div class="feature_item">--}}
{{--                        <div class="f_icon">--}}
{{--                            <img src="img/icon/f-icon-4.png" alt="">--}}
{{--                        </div>--}}
{{--                        <h4>Video Support</h4>--}}
{{--                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus--}}
{{--                            blandit. Etiam nec odio vestibul. </p>--}}
{{--                        <a class="more_btn" href="#">Read More</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-sm-6">--}}
{{--                    <div class="feature_item">--}}
{{--                        <div class="f_icon">--}}
{{--                            <img src="img/icon/f-icon-5.png" alt="">--}}
{{--                        </div>--}}
{{--                        <h4>Fast Support</h4>--}}
{{--                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus--}}
{{--                            blandit. Etiam nec odio vestibul. </p>--}}
{{--                        <a class="more_btn" href="#">Read More</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 col-sm-6">--}}
{{--                    <div class="feature_item">--}}
{{--                        <div class="f_icon">--}}
{{--                            <img src="img/icon/f-icon-6.png" alt="">--}}
{{--                        </div>--}}
{{--                        <h4>Download test</h4>--}}
{{--                        <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus--}}
{{--                            blandit. Etiam nec odio vestibul. </p>--}}
{{--                        <a class="more_btn" href="#">Read More</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>


    <section class="circle_chart_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="circle_progress circular style-polygon" data-percentage="75" data-thickness="3"
                         data-reverse="true" data-empty-fill="transparent" data-start-color="#987dff"
                         data-end-color="#7acaff">
                        <div class="circle_progress_inner">
                            <strong></strong>
                            <span class="percentage"></span>
                            <h4>Benevolence</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="circle_progress circular style-polygon" data-percentage="83" data-thickness="3"
                         data-reverse="true" data-empty-fill="transparent" data-start-color="#987dff"
                         data-end-color="#7acaff">
                        <div class="circle_progress_inner">
                            <strong></strong>
                            <span class="percentage"></span>
                            <h4>Philanthropy</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="circle_progress circular style-polygon" data-percentage="25" data-thickness="3"
                         data-reverse="true" data-empty-fill="transparent" data-start-color="#987dff"
                         data-end-color="#7acaff">
                        <div class="circle_progress_inner">
                            <strong></strong>
                            <span class="percentage"></span>
                            <h4>Kindness</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="circle_progress circular style-polygon" data-percentage="95" data-thickness="3"
                         data-reverse="true" data-empty-fill="transparent" data-start-color="#987dff"
                         data-end-color="#7acaff">
                        <div class="circle_progress_inner">
                            <strong></strong>
                            <span class="percentage"></span>
                            <h4>Generosity</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="service_solution_area p_100">
        <div class="container">
            <div class="row s_solution_inner">
                <div class="col-lg-6">
                    <div class="s_solution_item">
                        <div class="l_title">
                            <img src="img/icon/title-icon.png" alt="">
                            <h6 style="color: whitesmoke;">Discover the richness of giving</h6>
                            <h2>Changing the world, one life at a time</h2>
                        </div>
                        <p style="color: whitesmoke;">Helping others is not only good for them and a good thing to do, it also makes us happier and
                            healthier too. Giving also connects us to others, creating stronger communities and helping
                            to build a happier society for everyone.
                            And it's not all about money - we can also give our time, ideas and energy. </p>
                        <div id="accordion" role="tablist" class="solution_collaps">
                            <div class="card">
                                <div class="card-header" role="tab" id="headingOne">
                                    <h5 class="mb-0">
                                        <a data-toggle="collapse" href="#collapseOne" aria-expanded="true"
                                           aria-controls="collapseOne">
                                            Giving helps others
                                            <i class="minus">-</i>
                                            <i class="plus">+</i>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        <p>If you're blessed with the means to live a reasonably comfortable way of life
                                            (meaning, if you're able to read this), you have the ability to give. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingTwo">
                                    <h5 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseTwo"
                                           aria-expanded="false" aria-controls="collapseTwo">
                                            Giving inspires giving
                                            <i class="minus">-</i>
                                            <i class="plus">+</i>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        <p>People who have been on the receiving end of kindness to pay it forward and
                                            give to others even when they have hardly anything to give.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" role="tab" id="headingThree">
                                    <h5 class="mb-0">
                                        <a class="collapsed" data-toggle="collapse" href="#collapseThree"
                                           aria-expanded="false" aria-controls="collapseThree">
                                            Giving teaches responsibility
                                            <i class="minus">-</i>
                                            <i class="plus">+</i>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree"
                                     data-parent="#accordion">
                                    <div class="card-body">
                                        <p>When you give, you may have to make sacrifices.
                                            If you feel the urge to donate to a desperate cause regardless of your own
                                            financial standing, you learn how to do without certain things so that you
                                            can make the donation.. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
