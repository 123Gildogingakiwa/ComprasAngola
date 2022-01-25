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
<div class="sub-banner my-banner3">
</div>
<div class="content">
	<div class="container">
		<div class="col-md-4 w3ls_dresses_grid_left">
			<div class="w3ls_dresses_grid_left_grid">
				<h3>Categories</h3>
					<div class="w3ls_dresses_grid_left_grid_sub">
						<div class="ecommerce_dres-type">
							<ul>
								<li><a href="casuals.html">Men casuals</a></li>
								<li><a href="casuals.html">Women casuals</a></li>
								<li><a href="casuals.html">Jeans</a></li>
								<li><a href="casuals.html">Shirts</a></li>
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
					<img src="images/offer.jpg" alt=" " class="img-responsive" />
					<div class="dresses_img_hover_pos">
						<h4>Upto<span>40%</span><i>Off</i></h4>
					</div>
				</div>
			</div>
		</div>
<div class="col-md-8 col-sm-8 women-dresses">
			<div class="women-set1"><?php 

      
   
     
      $q ="SELECT * FROM eletronicos where tipo='Computador' ";

      $query=mysqli_query($con,$q);

     while ($res =mysqli_fetch_array($query)) {
           
     
 ?>
				<div class="col-md-4 women-grids wp1 animated wow slideInUp" data-wow-delay=".5s">
					<a href="singlee.php?id=<?php echo $res['id']; ?>"><div class="product-img">


  
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



	
				<div class="clearfix"></div>
			</div>
			<div class="women-set2">
				
				<div class="clearfix"></div>
			</div>
			<div class="women-set3">

				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
<!-- newsletter -->
	
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
