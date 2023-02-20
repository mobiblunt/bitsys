<!DOCTYPE html>
<html>

<!-- Mirrored from renoxcrypto.com/?a=support by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Jun 2021 18:15:41 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Support | BitcoinSystemOnline LTD</title>
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
        vertical-align: middle;"><div id="google_translate_element"></div></div>
<div class="hdRight">
<div class="mainNavRight">
<div class="navbar">
<div class="navbar-inner">
<ul class="nav">
<li><a  href="/">Home</a></li>
<li><a href="{{ route('about.home') }}">About</a></li>
<li><a href="{{ route('steps.home') }}">FAQ </a></li>
<li><a  href="{{ route('robots.home') }}">PLANS</a></li>
<li><a  href="{{ route('affiliate.home') }}">AFFILIATES</a></li>
<li><a style="color:#c79021!important;" href="{{ route('contact.home') }}">SUPPORT</a></li>

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
<h3>Contact <span>Us</span></h3>
</div>
</div>
</div>
<div class="inside_wrap">
<div class="inside_inner">
<div class="contact_right">
<h1 class="section-header">Feedback Form</h1>
<script language=javascript>

function checkform() {
  if (document.mainform.name.value == '') {
    alert("Please type your full name!");
    document.mainform.name.focus();
    return false;
  }
  if (document.mainform.email.value == '') {
    alert("Please enter your e-mail address!");
    document.mainform.email.focus();
    return false;
  }
  if (document.mainform.message.value == '') {
    alert("Please type your message!");
    document.mainform.message.focus();
    return false;
  }
  return true;
}

</script>
<form method=post name=mainform onsubmit="return checkform()"><input type="hidden" name="form_id" value="16239537091785"><input type="hidden" name="form_token" value="df5e06745160999fef15208fded9a3c6">
<input type=hidden name=a value=support>
<input type=hidden name=action value=send>
<table cellspacing=0 cellpadding=2 border=0>
<tr>
<td>Your Name:</td>
<td><input type="text" name="name" value="" size=30 class=inpts></td>
</tr>
<tr>
<td>Your Email:</td>
<td><input type="text" name="email" value="" size=30 class=inpts></td>
</tr>
<tr>
<td colspan=2>Message:<br><br><textarea name=message class=inpts cols=45 rows=4></textarea>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type=submit value="Send" class=sbmt></td>
</tr></table>
</form>
</div>
<div class="contact_mid">
<p> Do You have any questions? We strongly recommend that you start searching for the necessary information in the <a href="{{ route('steps.home') }}">FAQ</a> section. If you need advice or technical assistance, do not hesitate to contact our specialists. Customer support is available around the clock. You just need to send a letter or a request via the feedback form to promptly receive the necessary assistance. Remember that the more detailed the description of your problem is, the sooner it will be solved. Do not forget to indicate your login, if you are a registered user of the website.</p>
<div class="email">
<h2>Our E-mail:</h2>
<p><a href=""><span class="__cf_email__" data-cfemail="">support@bitcoinsystemonline.com</span></a></p>
</div> </div> </div> </div>
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
<h3>Copyright &copy; <a href="/">BitcoinSystemOnline</a> 2011 - <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear())</script> All Right Reserved.</h3>
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

<!-- Mirrored from renoxcrypto.com/?a=support by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Jun 2021 18:15:41 GMT -->
</html>
