<!DOCTYPE html>
<html>

<!-- Mirrored from renoxcrypto.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Jun 2021 18:15:04 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Homepage | BitcoinSystemOnline LTD</title>
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
<a href="/" id="logo"></a>

<div style=" 
				position: relative;
				display: inline-block;
				margin: 5px 0 0 15px;
    			margin-top: 5px;
    			margin-right: 0px;
    			margin-bottom: 0px;
    			margin-left: 15px;
				font-size: 15px;
				vertical-align: middle;"><div id="google_translate_element"></div></div>
<div class="hdRight">
<div class="mainNavRight">
<div class="navbar">
<div class="navbar-inner">
<ul class="nav">
<li><a style="color:#c79021!important;" href="/">Home</a></li>
<li><a href="{{ route('about.home') }}">About</a></li>
<li><a href="{{ route('steps.home') }}">FAQ </a></li>
<li><a href="{{ route('robots.home') }}">PLANS</a></li>
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
<div class="bannerInner fadeInRight wow">
<div class="ctn-banner">
<h3>welcome to <br>
<span>BitcoinSystem <br> Online </span>
</h3>
<p>BitcoinSystemOnline LTD is a professional investment corporation engaged in stock, foreign exchange market, Forex market and gold trading under UK registration 12921366</p>
<h4>Earn up 50% Investment Profit </h4>
<div class="banner-btt">
<a href="{{ route('auth.login.form') }}" class="bn-btt1">Member Login</a>
<a href="{{ route('auth.register.form') }}" class="bn-btt2">Registration</a>
</div>
<br>

</div>
</div>
</div>
<div class="profitContainer">
<div class="profitInner">
<div class="contentBot zoomIn wow">
<div class="ctn-bot-row ctn-bot-row1">
<h3>
$ <script> var givenNumber = 2450400000 + Math.floor(Math.random() * 100000); document.write(givenNumber.toLocaleString('en-US')); </script>
</h3>
<p>Total Deposited</p>
</div>
<div class="ctn-bot-row ctn-bot-row2">
<h3>
<script> var givenNumber = 100910 + Math.floor(Math.random() * 100); document.write(givenNumber.toLocaleString('en-US')); </script>
</h3>
<p>Total members</p>
</div>
<div class="ctn-bot-row ctn-bot-row3">
<h3>
$ <script> var givenNumber = 4050400000 + Math.floor(Math.random() * 100000); document.write(givenNumber.toLocaleString('en-US')); </script>
</h3>
<p>Total payments</p>
</div>
<div class="ctn-bot-row ctn-bot-row4">
<h3>3820</h3>
<p>days online</p>
</div>
</div>
</div>
</div>
</div>
<div class="becomeContainer">
  <iframe width="100%" id="video" height="360" src="https://player.vimeo.com/video/567155337"></iframe><br> <br>  
<div class="becomeInner fadeInRight wow">
  
<div class="ctn-become">
<p>Our investment plan of <script>document.write(new Date().getFullYear())</script>. You can earn<span> up 50% Investment Profit.</span></p>
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
<div class="contentTopContainer">
<div class="contentTopInner">
<div class="ctn-forexrial fadeInRight wow">
<h1>Welcome to <span>BitcoinSystemOnline LTD</span></h1>
<p>Looking for highest returns on your investments? BitcoinSystemOnline LTD is an automatic online investment platform, part of BitcoinSystemOnline LTD – team of professional traders focusing mainly on Bitcoin and other crypto currencies trading over multiple Exchanges and markets. Thanks to the extraordinary diversification of our investments, we are able to deliver steady income for our investors.</p>
<p>Headquartered in London in 2011, BitcoinSystemOnline LTD is already becoming the Panam's fastest growing trading company. Our name is synonymous with effective and profitable trading solutions where our investors need little to no trading experience at all. With BitcoinSystemOnline LTD, investors choose one of our four simple investment plans, make a deposit and sit back while our experts go to work. They can withdraw their profit any time and schedule withdrawals quickly and easily through our website. If you have been looking for an easy to use investment platform, choose Renoxcrypto LTD now and let our professionals help you choose an investment plan that meets your needs today!</p>
</div>
</div>
</div>
<div class="depositContainer">
<div class="depositInner">
<div class="depositLeft fadeInLeft wow">
<h3>Last Deposits <img src="styles/assets/images/ctn-ic5.png"></h3>
<div class="ctn-diposit-part1">
<iframe src="https://www.btcwidget.info/widget/liveTx/%23ffffff/%23ffffff/%23ffffff/%23F5A322/%23ffffff/500/400/10" width="550" height="350" frameBorder="0" scrolling="no"></iframe>
</div>
</div>
<div class="depositRight fadeInRight wow">
<h3>Last Withdrawals <img src="styles/assets/images/ctn-ic6.png"></h3>
<div class="ctn-diposit-part1">
<iframe src="https://www.btcwidget.info/widget/liveTx/%23ffffff/%23ffffff/%23ffffff/%23F5A322/%23ffffff/500/400/10" width="550" height="350" frameBorder="0" scrolling="no"></iframe>
</div>
</div>
</div>
</div>
<div class="investmentContainer">
<div class="investmentInner zoomIn wow">
<h2><span>BitcoinSystemOnline LTD</span> BENEFITS</h2>
<hr>
<div class="ctn-inves-row">
<div class="ctn-Instant Instant-part1">
<h1>Professional Team</h1>
<p>We are team of professional traders in Forex &amp; Crypto Exchange and Coins trading and Crypto Mining who know how to grab the profit end of the day.</p>
</div>
<div class="ctn-Instant Instant-part2">
<h1>ddos protection</h1>
<p>We are using one of most experienced , professional and trusted DDoS Protection and mitigation provider.</p>
</div>
<div class="ctn-Instant Instant-part3">
<h1>Cloudflare SSL Security</h1>
<p>Our website using Cloudflare SSL Security, SSL <br> encryption and that confirms that the presented content is the genuine and legitimate.</p>
</div>
<div class="ctn-Instant Instant-part4">
<h1>UK Registered Company</h1>
<p>We are a legal company registered in the UK providing its investment services to the members all around the world.</p>
</div>
<div class="ctn-Instant Instant-part5">
<h1>Instant Withdrawals</h1>
<p>Get your payment instantly as soon as you request it!. When your balance reaches the minimum withdrawal amount, you can request for withdrawal. There is no fee for withdrawals of hourly interest.</p>
</div>
<div class="ctn-Instant Instant-part6">
<h1>Great Customer Support</h1>
<p>We understand how important having reliable support service is to you. Please don't hesitate to contact us should you have any questions and we will get back to you in 24 Hours!</p>
</div>
</div>
</div>
</div>
<div class="primebitContainer">
<div class="primebitInner zoomIn wow ">
<h1><span>3 level</span> Referral commission</h1>
<div class="ctn-level fadeInLeft wow">
<div class="livel-part">
<h2>5<span>%</span></h2>
<p>level1</p>
</div>
<div class="livel-img">
<img src="styles/assets/images/call-ic2.png">
</div>
<div class="livel-part">
<h2>2<span>%</span></h2>
<p>level2</p>
</div>
<div class="livel-img">
<img src="styles/assets/images/call-ic2.png">
</div>
<div class="livel-part">
<h2>1<span>%</span></h2>
<p>level3</p>
</div>
</div>
<div class="text-level fadeInRight wow">
<p>At BitcoinSystemOnline LTD, we believe there is no better advertisement than satisfied clients. No wonder that majority of our new clients are affiliates from our existing clients. We are proud that our clients like to recommend our financial service to others. Because of this, we are pleased to offer one of the strongest online affiliate programs in the financial service industry, with a high commission rate, customized tools and reports, and timely commission payouts. </p>
<p>BitcoinSystemOnline LTD is paying for the popularization of its investment program and anyone can be rewarded. To benefit from this, you have to tell your friends, relatives or colleagues about our company. We offer 3 level referral commissions: The first level of direct referrals from you will entitle you to a commission of 5%, and second level gives you commission of 2% and third level is 1% . You can surely make a lot of money from the referral commissions you get!</p>
</div>
</div>
</div>
<div class="ref_wrap">
<div class="inside_inner">
<div class="ref_box ref1">
<div class="ref_box_left"><img src="styles/assets/images/ref_left_icon.png" alt="" /></div>
<div class="ref_box_right">
<h3>Promote BitcoinSystemOnline LTD</h3>
<p>Present our project to your friends, family, or any other community, advertise &amp; promote it everywhere and enjoy the financial benefits. You don't even need an active deposit to receive affiliate commission.</p>
</div>
</div>
<div class="ref_box ref2">
<div class="ref_box_left"><img src="styles/assets/images/ref_right_icon.png" alt="" /></div>
<div class="ref_box_right">
<h3>Get Affiliates &amp; Earn Money</h3>
<p>Once someone registers through your referral link, he automatically becomes your referral! You will receive 4% referral commission for every deposit that your direct referral makes from his wallet. We also offer a second level referral commission - 0.5% and third level 0.5%.</p>
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

<!-- Mirrored from renoxcrypto.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Jun 2021 18:15:13 GMT -->
</html>