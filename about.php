<?php 
include 'conect.php';
     ?>
<html lang="pt-br">
<head>
<title>Zageshop</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashion Club Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all" />
<!--// css -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<body>
<?php 
include 'partes/menu.php';


     ?>
								<script>
				$(document).ready(function(){
					$(".dropdown").hover(            
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideDown("fast");
							$(this).toggleClass('open');        
						},
						function() {
							$('.dropdown-menu', this).stop( true, true ).slideUp("fast");
							$(this).toggleClass('open');       
						}
					);
				});
				</script>
		<div class="col-md-4 search-agileinfo">
			<form action="#" method="post">
				<input type="search" name="Search" placeholder="Search for a Product..." required="">
				<button type="submit" class="btn btn-default search" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"> </i>
				</button>
			</form>
		</div>
		<div class="col-md-1 cart-wthree">
			<div class="cart"> 
				<form action="#" method="post" class="last"> 
					<input type="hidden" name="cmd" value="_cart" />
					<input type="hidden" name="display" value="1" />
					<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
				</form>  
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="sub-banner">
</div>
<div class="about">
	<div class="container"> 
		<h3>Sobre Nós</h3>
		<div class="about-info">
			<div class="col-md-8 about-grids">
				<h4>Confira as entregas que já realizamos</h4>
				<p>Produtos Vendidos e entregues. </p>		
					<div class="about-w3ls-row">
						<script type="text/javascript">
								 $(window).load(function() {
									$("#flexiselDemo3").flexisel({
										visibleItems:2,
										animationSpeed: 1000,
										autoPlay: true,
										autoPlaySpeed: 3000,    		
										pauseOnHover: true,
										enableResponsiveBreakpoints: true,
										responsiveBreakpoints: { 
											portrait: { 
												changePoint:480,
												visibleItems:2
											}, 
											landscape: { 
												changePoint:640,
												visibleItems:2
											},
											tablet: { 
												changePoint:768,
												visibleItems:2
											}
										}
									});
									
								});
						</script>
						<script type="text/javascript" src="js/jquery.flexisel.js"></script> 
						<ul id="flexiselDemo3">
							<li>
								<img src="images/a1.jpg" class="img-responsive" alt="" />
							</li>
							<li> 
								<img src="images/a2.jpg" class="img-responsive" alt="" />
							</li>
							<li> 
								<img src="images/a3.jpg" class="img-responsive" alt="" />
							</li>
							<li> 
								<img src="images/a4.jpg" class="img-responsive" alt="" />
							</li>
						</ul> 
						<div class="clearfix"> </div>
					</div>
			</div>
			<div class="col-md-4 about-grids">
					<h4>Nossas Vantagens</h4>
					<div class="pince">
						<div class="pince-left">
							<h5>01</h5>
						</div>
						<div class="pince-right">
							<p>Vero vulputate enim non justo posuere phasellus eget  mauris.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="pince">
						<div class="pince-left">
							<h5>02</h5>
						</div>
						<div class="pince-right">
							<p>Vero vulputate enim non justo posuere phasellus eget  mauris.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="pince">
						<div class="pince-left">
							<h5>03</h5>
						</div>
						<div class="pince-right">
							<p>Vero vulputate enim non justo posuere phasellus eget  mauris.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="pince">
						<div class="pince-left">
							<h5>04</h5>
						</div>
						<div class="pince-right">
							<p>Vero vulputate enim non justo posuere phasellus eget  mauris.</p>
						</div>
						<div class="clearfix"> </div>
					</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //about -->
<!-- about-bottom -->
	<div class="about-bottom">
		<div class="container">
			<h3> Flat <span>50%</span> Off</h3>
			<h4>On women Accessories</h4>
			<a href="Jewellery.html">Shop Now</a>
		</div>
	</div>
<!-- //about-bottom -->
<!--team-->
<div class="team" id="team">
	<div class="container">
		<h3>Nossa Equipa</h3>
		<div class="team-grids">
			<div class="col-md-3 team-grid">
									<div class="team-img">
										<img src="images/Ginga.jpg" class="img-responsive" alt=" " />
										<figcaption class="overlay">
											<div class="social-icon">
												<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
												<a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
												<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
												<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
											</div>
										</figcaption>
									</div>
									<h4>Gildo Ginga Kiwa</h4>
									<h5>Desenvolvedor Web e Gestor</h5>
			</div>
			<div class="col-md-3 team-grid">
				<div class="team-img">
					<img src="images/t3.jpg" class="img-responsive" alt=" " />
					<figcaption class="overlay">
						<div class="social-icon">
							<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
						</div>
					</figcaption>
				</div>
				<h4>Jaye Smith</h4>
				<h5>Lead Developer</h5>
			</div>
			<div class="col-md-3 team-grid">
				<div class="team-img">
					<img src="images/t2.jpg" class="img-responsive" alt=" " />
					<figcaption class="overlay">
						<div class="social-icon">
							<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
						</div>
					</figcaption>
				</div>
				<h4>Mike Arney</h4>
				<h5>Fashion Designer</h5>
			</div>
			<div class="col-md-3 team-grid">
				<div class="team-img">
					<img src="images/t4.jpg" class="img-responsive" alt=" " />
					<figcaption class="overlay">
						<div class="social-icon">
							<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
						</div>
					</figcaption>
				</div>
				<h4>Michele Lampa</h4>
				<h5>fashion Designer</h5>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--team-->
<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="col-md-6 w3agile_newsletter_left">
				<h2>Newsletter</h2>
				<p>Excepteur sint occaecat cupidatat non proident, sunt.</p>
			</div>
			<div class="col-md-6 w3agile_newsletter_right">
				<form action="#" method="post">
					<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" value="Subscribe" />
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //newsletter -->
<?php 
include 'partes/footer.php';


     ?>
	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
        w3ls1.render();

        w3ls1.cart.on('w3sb1_checkout', function (evt) {
        	var items, len, i;

        	if (this.subtotal() > 0) {
        		items = this.items();

        		for (i = 0, len = items.length; i < len; i++) {
        			items[i].set('shipping', 0);
        			items[i].set('shipping2', 0);
        		}
        	}
        });
    </script>  
	<!-- //cart-js -->  
</body>
</html>