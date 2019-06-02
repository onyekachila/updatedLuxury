<body>
<script src='{{ asset('user/js/ajax.js') }}"></script><script src="../../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
  	}
})();
</script>
<script>
(function(){
if(typeof _bsa !== 'undefined' && _bsa) {
	// format, zoneKey, segment:value, options
	_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
}
})();
</script>
<script>
(function(){
	if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
  		_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
  	}
})();
</script><script>
	(function(v,d,o,ai){ai=d.createElement("script");ai.defer=true;ai.async=true;ai.src=v.location.protocol+o;d.head.appendChild(ai);})(window, document, "../../../../../../vdo.ai/core/w3layouts/vdo.ai.js");
	</script><!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-125810435-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-125810435-1');
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../../../www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-30027142-1', 'w3layouts.com');
  ga('send', 'pageview');
</script>
<body>
<!-- header -->
	<div class="header">
			<div class="header-grid">
					<div class="container">
				<div class="header-left animated wow fadeInLeft" data-wow-delay=".5s">
					<ul>
					<li><i class="glyphicon glyphicon-headphones"></i><a href="#">24x7 live support</a></li>
						<li><i class="glyphicon glyphicon-envelope" ></i><a href="mailto:info@excoporateluxury.com">info@excoporateluxury.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" ></i>+1234 567 892</li>

					</ul>
				</div>
				<div class="header-right animated wow fadeInRight" data-wow-delay=".5s">
				<div class="header-right1 ">
                <ul>
                @if (Auth::guest())
                    <li><i class="glyphicon glyphicon-log-in"></i><a href="{{ url('login') }}">Login</a></li>
                    @else
                    <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                <i class="glyphicon glyphicon-log-out">Logout</i>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        @endif
                    <!-- <li><i class="glyphicon glyphicon-book"></i><a href="{{ url('register') }}">Register</a></li> -->
                    </ul>
				</div>
				<div class="header-right2">
					<div class="cart box_1">
						<a href="checkout.html">
							<h3> <div class="total">
								<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
								<img src="{{ asset('user/images/cart.png') }}" alt="" />
							</h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			</div>
			<div class="container">
			<div class="logo-nav">

					<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						 <div class="navbar-brand logo-nav-left ">
                         <img src="{{ asset('user/images/logo.png') }}" alt="" height="100px" width="100px">
						</div>

					</div>
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav">
							<li class="active"><a href="index-2.html" class="act">Home</a></li>
							<!-- Mega Menu -->
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Women <b class="caret"></b></a>
								<ul class="dropdown-menu multi">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Submenu1</h6>

												<li><a href="#">Accessories</a></li>
												<li><a href="#">Bags</a></li>
												<li><a href="#">Caps & Hats</a></li>
												<li><a href="#">Hoodies & Sweatshirts</a></li>

											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Submenu2</h6>
												<li><a href="#">Jackets & Coats</a></li>
												<li><a href="#">Jeans</a></li>
												<li><a href="#">Jewellery</a></li>
												<li><a href="#">Jumpers & Cardigans</a></li>
												<li><a href="#">Leather Jackets</a></li>
												<li><a href="#">Long Sleeve T-Shirts</a></li>

											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Submenu3</h6>
												<li><a href="#">Shirts</a></li>
												<li><a href="#">Shoes, Boots & Trainers</a></li>
												<li><a href="#">Sunglasses</a></li>
												<li><a href="#">Sweatpants</a></li>
												<li><a href="#">Swimwear</a></li>
												<li><a href="#">Trousers & Chinos</a></li>

											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="row-top">
										<div class="col-sm-6 row1">
											<a href="#"><img src="{{ asset('user/images/me.jpg') }}" alt="" class="img-responsive"></a>
										</div>
										<div class=" col-sm-6 row2">
											<a href="#"><img src="{{ asset('user/images/me1.jpg') }}" alt="" class="img-responsive"></a>
										</div>
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Men <b class="caret"></b></a>
								<ul class="dropdown-menu multi multi1">
									<div class="row">
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Submenu1</h6>

												<li><a href="#">Accessories</a></li>
												<li><a href="#">Bags</a></li>
												<li><a href="#">Caps & Hats</a></li>
												<li><a href="#">Hoodies & Sweatshirts</a></li>

											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Submenu2</h6>
												<li><a href="#">Jackets & Coats</a></li>
												<li><a href="#">Jeans</a></li>
												<li><a href="#">Jewellery</a></li>
												<li><a href="#">Jumpers & Cardigans</a></li>
												<li><a href="#">Leather Jackets</a></li>
												<li><a href="#">Long Sleeve T-Shirts</a></li>

											</ul>
										</div>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<h6>Submenu3</h6>
												<li><a href="#">Shirts</a></li>
												<li><a href="#">Shoes, Boots & Trainers</a></li>
												<li><a href="#">Sunglasses</a></li>
												<li><a href="#">Sweatpants</a></li>
												<li><a href="#">Swimwear</a></li>
												<li><a href="#">Trousers & Chinos</a></li>

											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="row-top">
										<div class="col-sm-6 row1">
											<a href="#"><img src="{{ asset('user/images/me2.jpg') }}" alt="" class="img-responsive"></a>
										</div>
										<div class=" col-sm-6 row2">
											<a href="#"><img src="{{ asset('user/images/me3.jpg') }}" alt="" class="img-responsive"></a>
										</div>
										<div class="clearfix"></div>
									</div>
								</ul>
							</li>

                            <li><a href="codes.html"> About Code</a></li>
							<li><a href="codes.html"> Redeem Code</a></li>
							<li><a href="contact.html">Contact Us</a></li>
						</ul>
					</div>
					</nav>
				</div>

		</div>
	</div>
<!-- //header -->
