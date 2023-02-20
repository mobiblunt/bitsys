<!DOCTYPE html>
<html>

<!-- Mirrored from renoxcrypto.com/?a=cust&page=investment by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Jun 2021 18:15:40 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Investment Plans</title>
<link rel="shortcut icon" href="styles/assets/images/favicon.png">
<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">
<link href='styles/assets/bootstrap.min.css' rel='stylesheet' type='text/css'>
<link href='styles/assets/animate.css' rel='stylesheet' type='text/css'>
<link href='styles/assets/custom_back.css' rel='stylesheet' type='text/css'>
<script src='styles/assets/jquery.js' type='text/javascript'></script>
<script src="styles/assets/wow.js"></script>
<script src="styles/assets/wow.min.js"></script>
<script type="text/javascript" src="styles/assets/bootstrap.min.js"></script>
<script src='styles/assets/setting.js' type='text/javascript'></script>
<script> </script>
<script type="text/javascript">
         //// Get the CryptoCurrency Information from the API
         jQuery.ajax({
           url: "https://min-api.cryptocompare.com/data/pricemulti",
           data: "fsyms=BTC,ETH,DASH,LTC&tsyms=USD",
           dataType : 'json',
         }).done(function(data) {
           // console.log( "BTC : " + data.BTC.USD + ", ETH : " + data.ETH.USD + ", DASH : " + data.DASH.USD, LTC : " + data.LTC.USD);
           jQuery(".dashCoin").html('$' + data.DASH.USD);
           jQuery(".ethCoin").html('$' + data.ETH.USD);
           jQuery(".bitCoin").html('$' + data.BTC.USD);
           jQuery(".liteCoin").html('$' + data.LTC.USD);
         }).fail(function() {
           console.log( "API error" );
         });
      </script>
</head>
<body>
<div class="wrapper">
<div class="headerContainer">
<div class="headerInner fadeInLeft wow">
<a href="indexbc14.html?a=home" id="logo"></a>

<div style=" 
                  position: relative;
                  display: inline-block;
                  margin: 5px 0 0 15px;
                  margin-top: 5px;
                  margin-right: 0px;
                  margin-bottom: 0px;
                  margin-left: 15px;
                  font-size: 15px;
                  vertical-align: middle;">
<div id="google_translate_element"></div>
</div>
<div class="hdRight">
<div class="mainNavRight">
<div class="navbar">
<div class="navbar-inner">
<ul class="nav">
<li><a  href="/">Home</a></li>
<li><a href="{{ route('about.home') }}">About</a></li>
<li><a href="{{ route('steps.home') }}">FAQ </a></li>
<li><a style="color:#c79021!important;" href="{{ route('robots.home') }}">PLANS</a></li>
<li><a href="{{ route('affiliate.home') }}">AFFILIATES</a></li>
<li><a href="{{ route('contact.home') }}">SUPPORT</a></li>

@if (Sentinel::check())
  <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
  
  <li><a href="{{ route('auth.logout') }}">Log Out</a></li>
 @else
  <li><a href="{{ route('auth.login.form') }}" class="login">login</a></li>
<li><a href="{{ route('auth.register.form') }}" class="signup">signup</a></li>
 @endif 
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="bannerContainer">
<div class="bannerInner insideheader fadeInRight wow">
<div class="ctn-banner">
<h3> Investment <span>Plans</span></h3>
</div>
</div>
</div>
</div>
<div class="becomeContainer">
<div class="becomeInner fadeInRight wow">
<div class="ctn-become">
<p>
Our investment plan of <script>document.write(new Date().getFullYear())</script>. You can earn<span> up 50% Investment Profit.</span>
</p>
</div>
</div>
</div>
<div class="startedContainer">
<div class="startedInner">
<div class="ctn-started">
<div class="started-row started-part1 fadeInLeft wow">
<h3>Starter Plan</h3>
<h1>10%</h1>
<h2> Hourly For 24 Hours</h2>
<p>Minimum Deposit: $100</p>
<p>Maximum Deposit: $500</p>
<a href="{{ route('auth.login.form') }}" class="login">login</a>
<a href="{{ route('auth.register.form') }}" class="signup">signup</a>
</div>
<div class="started-row started-part2 fadeInRight wow">
<h3>premium Plan</h3>
<h1>15%</h1>
<h2> Daily For 3 Days</h2>
<p>Minimum Deposit: $500</p>
<p>Maximum Deposit: $5,000</p>
<a href="{{ route('auth.login.form') }}" class="login">login</a>
<a href="{{ route('auth.register.form') }}" class="signup">signup</a>
</div>
<div class="started-row started-part3 fadeInRight wow">
<h3>advanced Plan</h3>
<h1>30%</h1>
<h2> Daily For 5 Days</h2>
<p>Minimum Deposit: $5,000</p>
<p>Maximum Deposit: $10,000</p>
<a href="{{ route('auth.login.form') }}" class="login">login</a>
<a href="{{ route('auth.register.form') }}" class="signup">signup</a>
</div>
<div class="started-row started-part4 fadeInRight wow">
<h3>vip Plan</h3>
<h1>50%</h1>
<h2>Daily For 7 Days</h2>
<p>Minimum Deposit: $10,000</p>
<p>Maximum Deposit: $100,000</p>
<a href="{{ route('auth.login.form') }}" class="login">login</a>
<a href="{{ route('auth.register.form') }}" class="signup">signup</a>
</div>
</div>
</div>
</div>
<div class="CalculateContainer">
<div class="CalculateInner fadeInLeft wow">
<div class="calu">
<table class="cal">
<th>
<td>
<lebel>Select Plan</lebel>
<select id="calc_plan" style="
                        border: 0px;
                        padding: 6px;
                        width: 110%;
                        border-radius: 30px;
                        text-transform: capitalize;
                        letter-spacing: 0.5px;
                        outline: none;
                        margin-top:7px;">
<option value="1">10% Hourly For 24 Hours</option>
<option value="2">15% Daily For 3 Days</option>
<option value="3">30% Daily For 5 Days</option>
<option value="4"> VIP Daily For 7 Days</option>
</select>
</td>
</th>
<th>
<td>
<lebel>Enter Amount</lebel>
<input id="inv_amount" type="text" value="100" />
</td>
</th>
<th>
<td>
<lebel>Total Profit</lebel>
<input id="net_profit" type="text" value="100" style="background-color: #F5A322;color: #ffffff" readonly="" />
</td>
</th>
<th>
<td>
<lebel>Total Percent</lebel>
<input id="assign_per" type="text" value="100" style="background-color: #F5A322;color: #ffffff" readonly="" />
</td>
</th>
<th>
<td>
<lebel>Total Return</lebel>
<input id="total_return" type="text" value="100" style="background-color: #F5A322;color: #ffffff" readonly="" />
</td>
</th>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="solidContainer">
<div class="solidInner zoomIn wow">
<div class="solid"> <a href="#" class="solid1"></a> <a href="#" class="solid2"></a> <a href="#" class="solid3"></a> <a href="#" class="solid4"></a> <a href="#" class="solid5"></a> <a href="#" class="solid6"></a> <a href="#" class="solid7"></a> <a href="#" class="solid8"></a> </div>
</div>
</div>
<div class="footerContainer">
<div class="footerInner">
<div class="ft-row1">
<h3>Copyright &copy; <a href="/">BitcoinSystemOnline</a> 2011 - <script>document.write(new Date().getFullYear())</script> All Right Reserved.</h3>
</div>
<div class="ft-part1"> <a href="{{ route('about.home') }}">ABOUT US</a>  <a href="{{ route('steps.home') }}">FAQ</a> <a href="{{ route('contact.home') }}">support</a> </div>
</div>
</div>



<script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: ''
            }, 'google_translate_element');
        }
    </script>
<script type="text/javascript" src="../translate.google.com/translate_a/elementa0d8.html?cb=googleTranslateElementInit"></script>
</body>

<!-- Mirrored from renoxcrypto.com/?a=cust&page=investment by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Jun 2021 18:15:40 GMT -->
</html>