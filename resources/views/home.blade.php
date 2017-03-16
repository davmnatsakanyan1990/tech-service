<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TechService</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('fonts/font.css') }}">
    <link rel="stylesheet" href="{{ asset('slick-1.6.0/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('slick-1.6.0/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/demolink.css') }}">
</head>
<body>
<main>
    <section>
        <header>
            <div class="container-fluid header-bg"><!-- header bg -->
                <div class="row">
                    <div class="div-1190">
                        <div class="inner-cont"><!-- Inner cont -->
                            <div class="header-top clearfix"><!-- header top -->
                                <div class="logo-div">
                                    <img class="img-responsive" src="{{ asset('images/logo.png') }}" alt="Logo">
                                </div>
                                <div>
                                    @if(Auth::guard('user')->check())
                                        <p class="text-center">
                                            <img src="{{ asset('images/account-ico.png') }}" alt="logout.png">
                                        <a href="{{ url('user/logout') }}" style="color: #fff; display: block;">Logout <i class="fa fa-sign-out"></i></a>

                                        </p>
                                    @else
                                        <a href="{{ url('user/auth') }}">
                                            <img src="{{ asset('images/logout.png') }}" alt="logout.png">
                                        </a>
                                    @endif
                                </div>
                            </div><!-- header top end-->
                            <h1 id="order">Request technical service</h1>
                            <form action="{{ url('user/order/new') }}" method="get">
                                {{--{{ csrf_field() }}--}}
                                <div class="information-main"><!-- information-main -->
                                    <div class="col-sm-4">
                                        <div class="inps-wrap">
                                            <div class="inp-all-divs">
                                                <p><label for="time">Date</label></p>
                                                <div class="inp-plus-span">
														<span class="inp-left-ico">
															<img src="{{ asset('images/icons/1.png') }}" alt="1.png">
														</span>
                                                    <input name="date" type="date" id="time" placeholder="00 : 00">
                                                </div>
                                            </div>

                                            <div class="inp-all-divs">
                                                <p><label for="name">User</label></p>
                                                <div class="inp-plus-span">
														<span class="inp-left-ico">
															<img src="{{ asset('images/icons/2.png') }}" alt="2.png">
														</span>
                                                    <input name="name" type="text" id="name" placeholder="Name">
                                                </div>
                                            </div>

                                            <div class="inp-all-divs">
                                                <p><label for="exp">Expected by</label></p>
                                                <div class="inp-plus-span">
														<span class="inp-left-ico">
															<img src="{{ asset('images/icons/3.png') }}" alt="3.png">
														</span>
                                                    <input name="expected" type="date" id="exp">
                                                </div>
                                            </div>

                                            <div class="inp-all-divs">
                                                <p><label for="name">Title</label></p>
                                                <div class="inp-plus-span">
														<span class="inp-left-ico">
															<img src="{{ asset('images/icons/4.png') }}" alt="4.png">
														</span>
                                                    <input name="title" type="text" id="title" placeholder="title of the problem">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 2 -->
                                    <div class="col-sm-4">
                                        <div class="inps-wrap">
                                            <div class="inp-all-divs">
                                                <p><label for="location">Location</label></p>
                                                <div class="inp-plus-span">
														<span class="inp-left-ico">
															<img src="{{ asset('images/icons/5.png') }}" alt="5.png">
														</span>
                                                    <input name="address" type="text" id="location" placeholder="Type address">
                                                </div>
                                            </div>

                                            <div class="inp-all-divs">
                                                <p><label for="mail">E-mail</label></p>
                                                <div class="inp-plus-span">
														<span class="inp-left-ico">
															<img src="{{ asset('images/icons/6.png') }}" alt="6.png">
														</span>
                                                    <input name="email" type="text" id="mail" placeholder="Your e-mail">
                                                </div>
                                            </div>

                                            <div class="inp-all-divs">
                                                <p><label for="ipact">Impact</label></p>
                                                <div class="inp-plus-span">
														<span class="inp-left-ico">
															<img src="{{ asset('images/icons/7.png') }}" alt="7.png">
														</span>
                                                    <input name="priority" type="text" id="impact" placeholder="Priority">
                                                </div>
                                            </div>

                                            <div class="inp-all-divs">
                                                <p><label for="categ">Category</label></p>
                                                <div class="inp-plus-span">
														<span class="inp-left-ico">
															<img src="{{ asset('images/icons/8.png') }}" alt="8.png">
														</span>
                                                    <input name="category" type="text" id="categ" placeholder="Hardware">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- 3 -->
                                    <div class="col-sm-4">
                                        <div class="inp-all-divs">
                                            <p><label for="desc">Description</label></p>
                                            <div class="inp-plus-span">
													<span class="inp-left-ico txt-area">
														<img src="{{ asset('images/icons/9.png') }}" alt="9.png">
													</span>
                                                <textarea name="description" id="desc" placeholder="Type..."></textarea>
                                            </div>
                                        </div>

                                        {{--<div class="inp-all-divs">--}}
                                            {{--<p><label for="attach">Attachments</label></p>--}}
                                            {{--<div class="inp-plus-span">--}}
													{{--<span class="inp-left-ico txt-area">--}}
														{{--<img src="{{ asset('images/icons/10.png') }}" alt="10.png">--}}
													{{--</span>--}}
                                                {{--<input name="file" type="file" id="attach" style="min-height: 137px; cursor: pointer;">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    </div><!-- 3 end -->
                                </div><!-- information-main -->
                                <div class="form-buttons">

                                    <div class="col-sm-6">
                                        <div class="inp-all-divs">
                                            <button type="button"><a href="{{ url('user/orders') }}"> Work orders</a></button>
                                            <button>Dashboard</button>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <div class="inp-all-divs">
                                            <button type="submit">Accept</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div><!-- Inner cont end-->
                    </div>
                </div><!-- header bg end-->

            </div><!-- fluid end -->
        </header>
    </section><!-- Header section end -->

    <section id="ww-do-section"><!-- Ww do -->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h2>What we do</h2>
                    <ul class="ww-do-list">
                        <li>
                            <p>Lorem ipsum</p>
                            <span>Lorem Ipsum er rett og slett dummytekst fra og for trykkeindustrien. </span>
                        </li>
                        <li>
                            <p>Lorem ipsum</p>
                            <span>Lorem Ipsum er rett og slett dummytekst fra og for trykkeindustrien. </span>
                        </li>
                        <li>
                            <p>Lorem Ipsum</p>
                            <span>Lorem Ipsum er rett og slett dummytekst fra og for trykkeindustrien. </span>
                        </li>
                    </ul>
                    <a href="#">more</a>
                </div>
                <div class="col-sm-6">
                    <div class="ww-do-bg">
                        <!-- Do not remove for bg -->
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Ww do end-->
    <section>
        <div class="container-fluid serv-we-provide">
            <div class="row">
                <h2>Striving to excellence in service we provide</h2>
                @if(Auth::guard('user')->check())
                <p><a href="#order">Make Order</a></p>
                @else
                <p><a href="{{ url('user/auth') }}">Sign up</a></p>
                @endif
            </div>
        </div>
    </section>

    <section>
        <div class="container testimon-cont">
            <h2>Testimonials</h2>
            <div class="row">
                <div class="col-sm-6">
                    <div class="testimon-slick">
                        <div>
                            <div class="testimon-img">
                                <img class="img-responsive" src="{{ asset('images/man.png') }}" alt="testimon">
                            </div>
                            <ul class="social-icons">
                                <li><a href="#"><img class="img-responsive" src="{{ asset('images/facebook.png') }}" alt=""></a></li>
                                <li><a href="#"><img class="img-responsive" src="{{ asset('images/twitter.png') }}" alt=""></a></li>
                                <li><a href="#"><img class="img-responsive" src="{{ asset('images/insta.png') }}" alt=""></a></li>
                            </ul>
                        </div>

                        <div>
                            <div class="testimon-img">
                                <img class="img-responsive" src="{{ asset('images/man.png') }}" alt="testimon">
                            </div>
                            <ul class="social-icons">
                                <li><a href="#"><img class="img-responsive" src="{{ asset('images/facebook.png') }}" alt=""></a></li>
                                <li><a href="#"><img class="img-responsive" src="{{ asset('images/twitter.png') }}" alt=""></a></li>
                                <li><a href="#"><img class="img-responsive" src="{{ asset('images/insta.png') }}" alt=""></a></li>
                            </ul>
                        </div>

                        <div>
                            <div class="testimon-img">
                                <img class="img-responsive" src="{{ asset('images/man.png') }}" alt="testimon">
                            </div>
                            <ul class="social-icons">
                                <li><a href="#"><img class="img-responsive" src="{{ asset('images/facebook.png') }}" alt=""></a></li>
                                <li><a href="#"><img class="img-responsive" src="{{ asset('images/twitter.png') }}" alt=""></a></li>
                                <li><a href="#"><img class="img-responsive" src="{{ asset('images/insta.png') }}" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="testimon-right">
                        <p>
                            Thank you very much for your rapid response. It's
                            no doubt that your company is worth admiring!
                            I have experienced the fastest support ever.
                        </p>
                        <h3>
                            <span>Jason Bryant</span>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="company-name">
                    <p>
                        Company <br>
                        name
                    </p>
                </div>
            </div>
            <div class="col-sm-6 text-right">
                <div class="copyright">
                    <p>
                        Company name co. © 2016 Privacy Policy
                    </p>
                    <ul class="social-icons">
                        <li><a href="#"><img src="{{ asset('images/facebook-sm.png') }}" alt=""></a></li>
                        <li><a href="#"><img src="{{ asset('images/twitter-sm.png') }}" alt=""></a></li>
                        <li><a href="#"><img src="{{ asset('images/insta-sm.png') }}" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="{{ asset('slick-1.6.0/slick/slick.min.js') }}"></script>

<script>
    $('.testimon-slick').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        responsive: [
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                }
            }
        ]
    });
</script>


</body>
</html>