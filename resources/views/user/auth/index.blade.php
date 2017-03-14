<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN | REGISTER</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('fonts/font.css') }}">
    <link rel="stylesheet" href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('slick-1.6.0/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('slick-1.6.0/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('styles/demolink.css') }}">
</head>
<body>
<main id="login-main">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="header-top clearfix"><!-- header top -->
                    <div class="logo-div">
                        <img class="img-responsive" src="{{ asset('images/logo.png') }}" alt="Logo">
                    </div>
                    <div>

                    </div>
                </div><!-- header top end-->
            </div>
        </div>
        <div class="row login-row">
            @if(old('type') != 'register')
                @if(count($errors) > 0)
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                @endif
            @endif
            <form action="{{ url('user/login') }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="type" value="login">
                <div class="col-sm-6">
                    <div class="login-here">
                        <img src="{{ asset('images/login-signup.png') }}" alt="logins-up">
                        <div>
                            <h3>login here</h3>
                            <p>already have an account ?</p>
                        </div>
                    </div>
                    <div class="inputs-gr">
                        <div class="input-item">
                            <input name="email" type="email" id="login-email" placeholder="e-mail">
                            <label for="login-email"><img src="{{ asset('images/icons/user.png') }}" alt="user.png"></label>
                        </div>
                        <p class="fillin-err">Lorem ipsum dolor sit.</p>

                        <div class="input-item">
                            <input name="password" type="password" id="log-pass" placeholder="password">
                            <label for="log-pass"><img src="{{ asset('images/icons/key.png') }}" alt="key.png"></label>
                        </div>
                        <p class="fillin-err">Lorem ipsum dolor sit.</p>

                        <div class="log-in-button">
                            <button type="submit">Log in</button>
                        </div>

                        <div class="logedin">
                            <label for="logedin">
                                <input type="checkbox" id="logedin"> keep me logged in
                            </label>
                            <a href="#" title="click to reset your password">Forgot your password?</a>
                            <p>... Or login width :</p>
                        </div>



                        <div class="login-social">
                            <button><i class="fa fa-facebook" aria-hidden="true"></i>facebook</button>
                            <button><i class="fa fa-twitter"></i>twitter</button>
                            <button><i class="fa fa-instagram"></i>instagram</button>
                        </div>
                    </div>
                </div>
            </form>
                @if(old('type') && old('type') == 'register')
                    @if(count($errors) > 0)
                        @foreach($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    @endif
                @endif
            <form action="{{ url('user/register') }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="type" value="register">
                <div class="col-sm-6">
                    <div class="signup-here">
                        <img src="{{ asset('images/sign-up.png') }}" alt="s-up">
                        <div>
                            <h3>sign up now</h3>
                            <p class="fill-in-f-p">Fill in the form below to get instant access</p>
                        </div>
                        <div class="inputs-gr">
                            <div class="name-sername clearfix">

                                <div class="input-item">
                                    <input name="first_name" value="{{ old('first_name') }}" type="text" placeholder="first name">
                                </div>

                                <div class="input-item">
                                    <input name="last_name" value="{{ old('last_name') }}" type="text" placeholder="last name">
                                </div>
                                <p class="fillin-err">Lorem ipsum dolor sit.</p>
                            </div>
                        </div>
                        <div class="input-item">
                            <input name="email" value="{{ old('email') }}" type="email" placeholder="e-mail" id="y-mail">
                            <label for="y-mail"><img src="{{ asset('images/icons/letter.png') }}" alt="letter.png"></label>
                        </div>
                        <p class="fillin-err">Lorem ipsum dolor sit.</p>
                        <div class="input-item">
                            <input name="password" type="password" id="regpass1" placeholder="password">
                            <label for="regpass1"><img src="{{ asset('images/icons/key.png') }}" alt="key.png"></label>
                        </div>
                        <p class="fillin-err">Lorem ipsum dolor sit.</p>
                        <div class="input-item">
                            <input name="password_confirmation" type="password" id="regpass2" placeholder="confirm password">
                            <label for="regpass2"><img src="{{ asset('images/icons/key.png') }}" alt="key.png"></label>
                        </div>
                        <p class="fillin-err">Lorem ipsum dolor sit.</p>
                        <button>sign up</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>