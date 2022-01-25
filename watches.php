<?php 
include 'conect.php';


     ?>
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

<div class="content">
	<div class="container">
		<div class="col-md-4 w3ls_dresses_grid_left">
			<div class="w3ls_dresses_grid_left_grid">
				<h3>Categories</h3>
					<div class="w3ls_dresses_grid_left_grid_sub">
						<div class="ecommerce_dres-type">
							<ul>
								<li><a href="watches.html">Leather strap</a></li>
								<li><a href="watches.html">Steel strap</a></li>
								<li><a href="watches.html">Chain type</a></li>
								<li><a href="watches.html">Iron strap</a></li>
							</ul>
						</div>
					</div>
			</div>
			<div class="w3ls_dresses_grid_left_grid">
				<h3>Color</h3>
				<div class="w3ls_dresses_grid_left_grid_sub">
					<div class="ecommerce_color">
						<ul>
							<li><a href="#"><i></i> Red(5)</a></li>
							<li><a href="#"><i></i> Brown(2)</a></li>
							<li><a href="#"><i></i> Yellow(3)</a></li>
							<li><a href="#"><i></i> Violet(6)</a></li>
							<li><a href="#"><i></i> Orange(2)</a></li>
							<li><a href="#"><i></i> Blue(1)</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="w3ls_dresses_grid_left_grid">
				<h3>Size</h3>
				<div class="w3ls_dresses_grid_left_grid_sub">
					<div class="ecommerce_color ecommerce_size">
						<ul>
							<li><a href="#">Medium</a></li>
							<li><a href="#">Large</a></li>
							<li><a href="#">Extra Large</a></li>
							<li><a href="#">Small</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="w3ls_dresses_grid_left_grid">
				<div class="dresses_img_hover">
					<img src="images/offer5.jpg" alt=" " class="img-responsive" />
					<div class="dresses_img_hover_pos">
						<h4>Upto<span>30%</span><i>Off</i></h4>
					</div>
				</div>
			</div>
		</div>
		<?php 

      $a=1;
   
     
      $q ="SELECT * FROM roupas where id=$a ";

      $query=mysqli_query($con,$q);

     while ($res =mysqli_fetch_array($query)) {
           
     
 ?>
		<div class="col-md-8 col-sm-8 women-dresses">
			<div class="women-set1">
				<div class="col-md-4 women-grids wp1 animated wow slideInUp" data-wow-delay=".5s">
					<a href="single.html"><div class="product-img">


  
						<img src="../img/<?php echo $res['foto1']; ?>" alt="" />
						<div class="p-mask">
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart" />
								<input type="hidden" name="add" value="1" /> 
								<input type="hidden" name="w3ls1_item" value="Pencil dress" /> 
								<input type="hidden" name="amount" value="50.00" /> 
								<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
							</form>
						</div>
					</div></a>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star gray-star" aria-hidden="true"></i>
					<h4>
<?php echo $res['nome']; ?> </h4>
					<h5><?php echo $res['preco']; ?> </h5>
				</div>
<?php 
       

       }


     ?>



	<?php 

     
      $b=$a+1;
       
      $q ="SELECT * FROM roupas where id=$b";

      $query=mysqli_query($con,$q);

     while ($res =mysqli_fetch_array($query)) {
           
   

 ?>			                                     
				<div class="col-md-4 women-grids wp2 animated wow slideInUp" data-wow-delay=".5s">
					<a href="single.html"><div class="product-img">
						<img src="../img/<?php echo $res['foto1']; ?>" alt="" />
						<div class="p-mask">
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart" />
								<input type="hidden" name="add" value="1" /> 
								<input type="hidden" name="w3ls1_item" value="Casual dress" /> 
								<input type="hidden" name="amount" value="70.00" /> 
								<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
							</form>
						</div>
					</div></a>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star gray-star" aria-hidden="true"></i>
									<h4>
<?php echo $res['nome']; ?> </h4>
					<h5><?php echo $res['preco']; ?> </h5>
				</div>
<?php 
       

       }


     ?>
			<?php 

     
      $c=$b+1;
       
      $q ="SELECT * FROM roupas where id=$c";

      $query=mysqli_query($con,$q);

     while ($res =mysqli_fetch_array($query)) {
           
      

 ?>	<div class="col-md-4 women-grids wp3 animated wow slideInUp" data-wow-delay=".5s">
					<a href="single.html"><div class="product-img">
						<img src="../img/<?php echo $res['foto1']; ?>" alt="" />
						<div class="p-mask">
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart" />
								<input type="hidden" name="add" value="1" /> 
								<input type="hidden" name="w3ls1_item" value="Casual dress" /> 
								<input type="hidden" name="amount" value="90.00" /> 
								<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
							</form>
						</div>
					</div></a>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star gray-star" aria-hidden="true"></i>
					<h4><?php echo $res['nome']; ?> </h4>
					<h5><?php echo $res['preco']; ?></h5>
				</div><?php 
       

       }


     ?>
				<div class="clearfix"></div><?php 

     
      $d=$c+1;
       
      $q ="SELECT * FROM roupas where id=$d";

      $query=mysqli_query($con,$q);

     while ($res =mysqli_fetch_array($query)) {
           
     

 ?>
			</div>
			<div class="women-set2">
				<div class="col-md-4 women-grids wp4 animated wow slideInUp" data-wow-delay=".5s">
					<a href="single.html"><div class="product-img">
						<img src="../img/<?php echo $res['foto1']; ?>" alt="" />
						<div class="p-mask">
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart" />
								<input type="hidden" name="add" value="1" /> 
								<input type="hidden" name="w3ls1_item" value="Casual dress" /> 
								<input type="hidden" name="amount" value="100.00" /> 
								<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
							</form>
						</div>
					</div></a>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star gray-star" aria-hidden="true"></i>
					<h4><?php echo $res['nome']; ?> </h4>
					<h5><?php echo $res['preco']; ?></h5>
				</div><?php 
       

       }


     ?><?php 

     
      $e=$d+1;
       
      $q ="SELECT * FROM roupas where id=$e";

      $query=mysqli_query($con,$q);

     while ($res =mysqli_fetch_array($query)) {
           
     

 ?>
				<div class="col-md-4 women-grids wp5 animated wow slideInUp" data-wow-delay=".5s">
					<a href="single.html"><div class="product-img">
						<img src="../img/<?php echo $res['foto1']; ?>" alt="" />
						<div class="p-mask">
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart" />
								<input type="hidden" name="add" value="1" /> 
								<input type="hidden" name="w3ls1_item" value="Casual dress" /> 
								<input type="hidden" name="amount" value="120.00" /> 
								<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
							</form>
						</div>
					</div></a>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<h4><?php echo $res['nome']; ?> </h4>
					<h5><?php echo $res['preco']; ?></h5>
				</div><?php 
       

       }


     ?>
		<?php 

     
      $f=$e+1;
       
      $q ="SELECT * FROM roupas where id=$f";

      $query=mysqli_query($con,$q);

     while ($res =mysqli_fetch_array($query)) {
           
     

 ?>	


				<div class="col-md-4 women-grids wp6 animated wow slideInUp" data-wow-delay=".5s">
					<a href="single.html"><div class="product-img">
						<img src="../img/<?php echo $res['foto1']; ?>" alt="" />
						<div class="p-mask">
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart" />
								<input type="hidden" name="add" value="1" /> 
								<input type="hidden" name="w3ls1_item" value="Casual dress" /> 
								<input type="hidden" name="amount" value="160.00" /> 
								<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
							</form>
						</div>
					</div></a>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<h4><?php echo $res['nome']; ?> </h4>
					<h5><?php echo $res['preco']; ?></h5>
				</div><?php 
       

       }


     ?>

				<div class="clearfix"></div>
			</div>
			<div class="women-set3"><?php 

     
      $g=$f+1;
       
      $q ="SELECT * FROM roupas where id=$g";

      $query=mysqli_query($con,$q);

     while ($res =mysqli_fetch_array($query)) {
           
     

 ?>
				<div class="col-md-4 women-grids wp7 animated wow slideInUp" data-wow-delay=".5s">
					<a href="single.html"><div class="product-img">
						<img src="../img/<?php echo $res['foto1']; ?>" alt="" />
						<div class="p-mask">
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart" />
								<input type="hidden" name="add" value="1" /> 
								<input type="hidden" name="w3ls1_item" value="Casual dress" /> 
								<input type="hidden" name="amount" value="110.00" /> 
								<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
							</form>
						</div>
					</div></a>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<h4><?php echo $res['nome']; ?> </h4>
					<h5><?php echo $res['preco']; ?></h5>
				</div><?php 
       

       }


     ?>
		<?php 

     
      $h=$g+1;
       
      $q ="SELECT * FROM roupas where id=$h";

      $query=mysqli_query($con,$q);

     while ($res =mysqli_fetch_array($query)) {
           
     

 ?>		<div class="col-md-4 women-grids wp8 animated wow slideInUp" data-wow-delay=".5s">
					<a href="single.html"><div class="product-img">
						<img src="../img/<?php echo $res['foto1']; ?>" alt="" />
						<div class="p-mask">
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart" />
								<input type="hidden" name="add" value="1" /> 
								<input type="hidden" name="w3ls1_item" value="Casual dress" /> 
								<input type="hidden" name="amount" value="180.00" /> 
								<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
							</form>
						</div>
					</div></a>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
				<h4><?php echo $res['nome']; ?> </h4>
					<h5><?php echo $res['preco']; ?></h5>
				</div><?php 
       

       }


     ?>
<?php 

     
      $i=$h+1;
       
      $q ="SELECT * FROM roupas where id=$i";

      $query=mysqli_query($con,$q);

     while ($res =mysqli_fetch_array($query)) {
           
     

 ?>
				<div class="col-md-4 women-grids wp9 animated wow slideInUp" data-wow-delay=".5s">
					<a href="single.html"><div class="product-img">
						<img src="../img/<?php echo $res['foto1']; ?>" alt="" />
						<div class="p-mask">
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart" />
								<input type="hidden" name="add" value="1" /> 
								<input type="hidden" name="w3ls1_item" value="Casual dress" /> 
								<input type="hidden" name="amount" value="130.00" /> 
								<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
							</form>
						</div>
					</div></a>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
					<i class="fa fa-star yellow-star" aria-hidden="true"></i>
				<h4><?php echo $res['nome']; ?> </h4>
					<h5><?php echo $res['preco']; ?></h5>
				</div><?php 
       

       }


     ?>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
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
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-grids fgd1">
		<a href="index.html"><img src="images/logo2.png" alt=" " /><h3>FASHION<span>CLUB</span></h3></a>
		<ul>
			<li>1234k Avenue, 4th block,</li>
			<li>New York City.</li>
			<li><a href="mailto:info@example.com">info@example.com</a></li>
			<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
			<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
		</ul>
		</div>
		<div class="col-md-3 footer-grids fgd2">
			<h4>Information</h4> 
			<ul>
				<li><a href="contact.html">Contact Us</a></li>
				<li><a href="icons.html">Web Icons</a></li>
				<li><a href="typography.html">Typography</a></li>
				<li><a href="faq.html">FAQ's</a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-grids fgd3">
			<h4>Shop</h4> 
			<ul>
				<li><a href="jewellery.html">Jewellery</a></li>
				<li><a href="cosmetics.html">Cosmetics</a></li>
				<li><a href="Shoes.html">Shoes</a></li>
				<li><a href="deos.html">Deos</a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-grids fgd4">
			<h4>My Account</h4> 
			<ul>
				
				<li><a href="login.html">Login</a></li>
				<li><a href="register.html">Register</a></li>
				<li><a href="recommended.html">Recommended </a></li>
				<li><a href="payment.html">Payments</a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
		<p class="copy-right">© 2016 Fashion Club . All rights reserved | Design by <a href="http://w3layouts.com"> W3layouts.</a></p>
	</div>
</div>
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
