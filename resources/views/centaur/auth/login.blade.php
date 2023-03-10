<!DOCTYPE html>
<html class="no-js" lang="en">

    

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
        <title>Bitcoin System</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
        <meta name="viewport" content="user-scalable=no, width=device-width, height=device-height, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui" />

        <meta name="theme-color" content="#3F6EBF" />
        <meta name="msapplication-navbutton-color" content="#3F6EBF" />
        <meta name="apple-mobile-web-app-status-bar-style" content="#3F6EBF" />

        <!-- Favicons
        ================================================== -->
        <link rel="shortcut icon" href="images/favicon.png">
        
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="img/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <!-- CSS
        ================================================== -->
        <link rel="stylesheet" href="css/style.min.css" type="text/css">

        <!-- Load google font
        ================================================== -->
        <script type="text/javascript">
            WebFontConfig = {
                google: { families: [ 'Open+Sans:300,400,500','Lato:900', 'Poppins:400', 'Catamaran:300,400,500,600,700'] }
            };
            (function() {
                var wf = document.createElement('script');
                wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + 
                '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
                wf.type = 'text/javascript';
                wf.async = 'true';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(wf, s);
            })();
        </script>

        <!-- Load other scripts
        ================================================== -->
        <script type="text/javascript">
            var _html = document.documentElement,
                isTouch = (('ontouchstart' in _html) || (navigator.msMaxTouchPoints > 0) || (navigator.maxTouchPoints));

            _html.className = _html.className.replace("no-js","js");

            isTouch ? _html.classList.add("touch") : _html.classList.add("no-touch");
        </script>
        <script type="text/javascript" src="js/device.min.js"></script>
    </head>

    <body>
        <!-- start main -->
        <main role="main">
            <!-- start section -->
            <section class="section section--no-pt section--no-pb section--light-bg">
                @include('Centaur::notifications')
                <div class="grid grid--container">
                    <div class="authorization authorization--login">
                        <a class="site-logo" href="/">
                            <img class="img-responsive" width="500" height="500"  src="styles/assets/images/logo.png" alt="">
                        </a>

                        <form class="authorization__form" accept-charset="UTF-8" role="form" method="post" action="{{ route('auth.login.attempt') }}">
                            <h3 class="__title">Sign In</h3>

                            <div class="input-wrp  {{ ($errors->has('email')) ? 'has-error' : '' }}">
                                <input name="email" class="textfield" type="text" value="{{ old('email') }}" placeholder="Email" />
                                {!! ($errors->has('email') ? $errors->first('email', '<p class="text-danger">:message</p>') : '') !!}
                            </div>

                            <div class="input-wrp   {{ ($errors->has('password')) ? 'has-error' : '' }}">
                                <i class="textfield-ico fontello-eye"></i>
                                <input class="textfield" name="password" type="password" value="" placeholder="Password" />
                                {!! ($errors->has('password') ? $errors->first('password', '<p class="text-danger">:message</p>') : '') !!}
                            </div>
                            <input name="_token" value="{{ csrf_token() }}" type="hidden"><br>
                            <label class="checkbox">
                                                <input name="remember" type="checkbox" value="true" {{ old('remember') == 'true' ? 'checked' : ''}}><i class="fontello-check"></i> Remember Me
                                            </label>
                                        
                            <p>
                                <a href="{{ route('auth.password.request.form') }}">I forgot my password</a>

                                <button class="custom-btn custom-btn--medium custom-btn--style-2 wide" type="submit" role="button">Submit</button>
                            </p>

                            <p class="text--center"><a href="{{ route('auth.register.form') }}">Sign Up</a> if you don???t have an account</p>
                        </form>
                    </div>
                </div>
            </section>
            <!-- end section -->
        </main>
        <!-- end main -->

        <div id="btn-to-top-wrap">
            <a id="btn-to-top" class="circled" href="javascript:void(0);" data-visible-offset="800"></a>
        </div>

        <script src="../../../ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-2.2.4.min.js"><\/script>')</script>

        <script type="text/javascript" src="js/main.min.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='../../../www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>

        <!-- BEGIN JIVOSITE CODE {literal} -->
        <script type='text/javascript'>
        (function(){ var widget_id = 'Paw7lkpeN6';var d=document;var w=window;function l(){
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
        <!-- {/literal} END JIVOSITE CODE -->
    </body>

</html>