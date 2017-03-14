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
        </div>  
    </div>  
    <div class="work-o-filter">
        <div class="container">
            <div class="row">
                <form action="#">
                    <ul class="clearfix">
                        <li><input type="date"></li>
                        <li><input type="text" placeholder="Priority"></li>
                        <li><select name="f-sel" id="">
                                <option value="1">option 1</option>
                                <option value="2">option 2</option>
                                <option value="3">option 3</option>
                            </select>
                        </li>
                        <li><input type="text" placeholder="Title"></li>
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
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title"> 
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span class="colap-date">
                                    March 13 <br> 
                                    2017
                                </span>   
                                <span class="work-order-collapse">
                                    Lorem ipsum
                                </span>
                            </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body work-ord-panel-body">
                                <ul class="list-inline cat-prior-ul">
                                    <li>
                                        <span class="f-span">Category:</span>
                                        <span class="g-span">Hardware</span>
                                    </li>
                                    <li>
                                        <span class="f-span">Priority:</span>
                                        <span class="g-span">Lorem ipsum</span>
                                    </li>
                                </ul>

                                <ul class="list-inline cat-prior-ul-2">
                                    <li>
                                        <span class="f-span">Description:</span>
                                    </li>
                                    <li>
                                        <span class="g-span">
                                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin
                                        </span>
                                    </li>
                                </ul>

                                <ul class="list-inline cat-prior-ul-3">
                                    <li><span class="f-span">Images:</span></li>
                                    <li>
                                        <ul class="list-inline">
                                            <li><img class="img-responsive" src="{{ asset('images/158.png') }}" alt="nk1"></li>
                                            <li><img class="img-responsive" src="{{ asset('images/158.png') }}" alt="nk1"></li>
                                            <li><img class="img-responsive" src="{{ asset('images/158.png') }}" alt="nk1"></li>
                                        </ul>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span class="colap-date">
                                    March 13 <br> 
                                    2017
                                </span>   
                                <span class="work-order-collapse">
                                    Lorem ipsum
                                </span>
                            </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                             <div class="panel-body work-ord-panel-body">
                                 <ul class="list-inline cat-prior-ul">
                                     <li>
                                         <span class="f-span">Category:</span>
                                         <span class="g-span">Hardware</span>
                                     </li>
                                     <li>
                                         <span class="f-span">Priority:</span>
                                         <span class="g-span">Lorem ipsum</span>
                                     </li>
                                 </ul>

                                 <ul class="list-inline cat-prior-ul-2">
                                     <li>
                                         <span class="f-span">Description:</span>
                                     </li>
                                     <li>
                                         <span class="g-span">
                                             Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin
                                         </span>
                                     </li>
                                 </ul>

                                 <ul class="list-inline cat-prior-ul-3">
                                     <li><span class="f-span">Images:</span></li>
                                     <li>
                                         <ul class="list-inline">
                                             <li><img class="img-responsive" src="{{ asset('images/158.png') }}" alt="nk1"></li>
                                             <li><img class="img-responsive" src="{{ asset('images/158.png') }}" alt="nk1"></li>
                                             <li><img class="img-responsive" src="{{ asset('images/158.png') }}" alt="nk1"></li>
                                         </ul>
                                     </li>
                                 </ul>

                             </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span class="colap-date">
                                    March 13 <br> 
                                    2017
                                </span>   
                                <span class="work-order-collapse">
                                    Lorem ipsum
                                </span>
                            </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body work-ord-panel-body">
                                <ul class="list-inline cat-prior-ul">
                                    <li>
                                        <span class="f-span">Category:</span>
                                        <span class="g-span">Hardware</span>
                                    </li>
                                    <li>
                                        <span class="f-span">Priority:</span>
                                        <span class="g-span">Lorem ipsum</span>
                                    </li>
                                </ul>

                                <ul class="list-inline cat-prior-ul-2">
                                    <li>
                                        <span class="f-span">Description:</span>
                                    </li>
                                    <li>
                                        <span class="g-span">
                                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin
                                        </span>
                                    </li>
                                </ul>

                                <ul class="list-inline cat-prior-ul-3">
                                    <li><span class="f-span">Images:</span></li>
                                    <li>
                                        <ul class="list-inline">
                                            <li><img class="img-responsive" src="{{ asset('images/158.png') }}" alt="nk1"></li>
                                            <li><img class="img-responsive" src="{{ asset('images/158.png') }}" alt="nk1"></li>
                                            <li><img class="img-responsive" src="{{ asset('images/158.png') }}" alt="nk1"></li>
                                        </ul>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 



<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>