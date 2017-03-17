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
<!--         <link rel="stylesheet" href="{{ asset('slick-1.6.0/slick/slick-theme.css') }}">
<link rel="stylesheet" href="{{ asset('slick-1.6.0/slick/slick.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/demolink.css') }}">
</head>
<body>
<div class="work-order">
    <div class="container"><!-- header bg -->
        <div class="row">
            <div class="logo-div">
                <img class="img-responsive" src="{{ asset('images/logo.png') }}" alt="Logo">
            </div>
            <div class="for-user-icon">
                @if(Auth::guard('user')->check())
                    
                @else
                    <a href="{{ url('user/auth') }}">
                        <img src="{{ asset('images/account-ico.png') }}" alt="logout.png">
                    </a>
                @endif
            </div>
        </div>
        <div class="work-header-itile">
            <h1>Work orders</h1>
        </div>
    </div>
</div>
<div class="work-o-filter">
    <div class="container">
        <div class="row">
            <form action="#">
                <ul class="clearfix">
                    <li><input type="date" name="from"></li>
                    <li><input type="date" name="to"></li>
                    {{--<li><input type="text" placeholder="Priority"></li>--}}
                    {{--<li><select name="f-sel" id="">--}}
                            {{--<option value="1">option 1</option>--}}
                            {{--<option value="2">option 2</option>--}}
                            {{--<option value="3">option 3</option>--}}
                        {{--</select>--}}
                    {{--</li>--}}
                    {{--<li><input type="text" placeholder="Title"></li>--}}
                    <li><input type="submit" value="Search"></li>
                </ul>
            </form>
        </div>
    </div>
</div>
<div class="container filt-collaps">
    <div class="row">
        <div class="fancy-collapse-panel">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                @foreach($orders as $index => $order)
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="heading{{ $index }}">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" class="{{ $index == 0 ? '' : 'collapsed' }}" href="#collapse{{ $index }}" aria-expanded="{{ $index == 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $index }}">
                                <span class="colap-date">
                                    {{ date('F j', strtotime($order->created_at)) }} <br>
                                    {{ date('Y', strtotime($order->created_at)) }}
                                </span>
                                <span class="work-order-collapse">
                                    {{ $order->title }}
                                </span>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse{{ $index }}" class="panel-collapse collapse {{ $index == 0 ? 'in' : '' }}" role="tabpanel" aria-labelledby="heading{{ $index }}">
                        <div class="panel-body work-ord-panel-body">
                            <ul class="list-inline cat-prior-ul">
                                <li>
                                    <span class="f-span">Category:</span>
                                    <span class="g-span">{{ $order->category }}</span>
                                </li>
                                <li>
                                    <span class="f-span">Priority:</span>
                                    <span class="g-span">{{ $order->priority }}</span>
                                </li>
                            </ul>

                            <ul class="list-inline cat-prior-ul-2">
                                <li>
                                    <span class="f-span">Description:</span>
                                </li>
                                <li>
                                        <span class="g-span">
                                        {{ $order->description }}
                                        </span>
                                </li>
                            </ul>

                            {{--<ul class="list-inline cat-prior-ul-3">--}}
                                {{--<li><span class="f-span">Images:</span></li>--}}
                                {{--<li class="li-for-ul">--}}
                                    {{--<ul class="list-inline">--}}
                                        {{--<li><img class="img-responsive" src="{{ asset('images/158.png') }}" alt="nk1"></li>--}}
                                        {{--<li><img class="img-responsive" src="{{ asset('images/158.png') }}" alt="nk1"></li>--}}
                                        {{--<li><img class="img-responsive" src="{{ asset('images/158.png') }}" alt="nk1"></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                            {{--</ul>--}}

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    {{--<ul class="list-inline collaps-pagination">--}}
        {{--<li><a href="#" class="active">1</a></li>--}}
        {{--<li><a href="#">2</a></li>--}}
        {{--<li><a href="#">3</a></li>--}}
        {{--<li><a href="#">4</a></li>--}}
        {{--<li><a href="#">5</a></li>--}}
    {{--</ul>--}}
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="company-name">
                    <p>
                        <img src="{{ asset('images/logo.png') }}" class="img-responsive" alt="fe">
                    </p>
                </div>
            </div>
            <div class="col-sm-6 text-right">
                <div class="copyright">
                    <p>
                        Company name co. © 2016 Privacy Policy
                    </p>
                    <ul class="social-icons">
                        <li><a href="#"><img src="{{ asset('images/facebook-sm.png') }}" alt="df"></a></li>
                        <li><a href="#"><img src="{{ asset('images/twitter-sm.png') }}" alt="df"></a></li>
                        <li><a href="#"><img src="{{ asset('images/insta-sm.png') }}" alt="df"></a></li>
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
</body>
</html>