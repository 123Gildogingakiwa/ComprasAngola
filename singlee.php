<?php 
include 'conect.php';
     ?>
<!DOCTYPE html>
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
<!--flex slider-->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<script>
	// Can also be used with $(document).ready()
	$(window).load(function() {
	  $('.flexslider').flexslider({
		animation: "slide",
		controlNav: "thumbnails"
	  });
	});
</script>
<!--flex slider-->

<script src="js/imagezoom.js"></script>
<!-- //js --> 

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
<div class="products">	 
		<div class="container">  
			<div class="single-page">

				<div class="single-page-row" id="detail-21">
					                                <?php 
					                                $eletro=$_GET['id'];

     $q ="SELECT * FROM eletronicos where id=$eletro  ";

      $query=mysqli_query($con,$q);

     while ($res =mysqli_fetch_array($query)) {
           
     
 ?>
					<div class="col-md-6 single-top-left">	
						<div class="flexslider">
							<ul class="slides">
								<li data-thumb="../img/<?php echo $res['foto1']; ?>">
									<div class="thumb-image detail_images"> <img src="../img/<?php echo $res['foto1']; ?>" data-imagezoom="true" class="img-responsive" alt=""> </div>
								</li>
								<li data-thumb="../img/<?php echo $res['foto2']; ?>">
									 <div class="thumb-image"> <img src="../img/<?php echo $res['foto2']; ?>" data-imagezoom="true" class="img-responsive" alt=""> </div>
								</li>
								<li data-thumb="../img/<?php echo $res['foto3']; ?>">
								   <div class="thumb-image"> <img src="../img/<?php echo $res['foto3']; ?>" data-imagezoom="true" class="img-responsive" alt=""> </div>
								</li> 
							</ul>
						</div>
					</div>
					<div class="col-md-6 single-top-right">
						<h3 class="item_name"><?php echo $res['nome']; ?> </h3>
						<p><?php echo $res['subtitulo']; ?>. </p>
						<div class="single-rating">
							<ul>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								<li class="rating">
								<li><a href="#">Add your review</a></li>
							</ul> 
						</div>
						<div class="single-price">
							<ul>
								<li><?php echo $res['desconto']; ?></li>  
								<li><del><?php echo $res['preco']; ?></del></li> 
								<li><span class="w3off">Até  <?php echo $res['desconto']; ?> </span></li> 
								<li>Publicado em: <?php echo $res['data']; ?></li>
								<li><a href="#"><i class="fa fa-gift" aria-hidden="true"></i> Coupon</a></li>
							</ul>	
						</div> 
						<p class="single-price-text"><?php echo $res['sobre']; ?>. </p>
						<form action="#" method="post">
							<input type="hidden" name="cmd" value="_cart" />
							<input type="hidden" name="add" value="1" /> 
							<input type="hidden" name="w3ls1_item" value="Handbag" /> 
							<input type="hidden" name="amount" value="540.00" /> 
							<button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
						</form>
						<form action="#" method="post">
						<button  class="w3ls-cart w3ls-cart-like"><i class="fa fa-heart-o" aria-hidden="true"></i> Ver video</button>
						</form>
					</div>
					<?php 
       

       }


     ?>
				   <div class="clearfix"> </div>  
				</div>
			</div> 
				                               <?php 
					                                $eletro=$_GET['id'];

      $q ="SELECT * FROM eletronicos where id=$eletro  ";

      $query=mysqli_query($con,$q);

     while ($res =mysqli_fetch_array($query)) {
           
     
 ?>
			<!-- collapse-tabs -->
			<div class="collpse tabs">
				<h3 class="w3ls-title">Ver Mais sobre o Produto</h3> 
				<div class="panel-group collpse" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									<i class="fa fa-file-text-o fa-icon" aria-hidden="true"></i> Descrição <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
								</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
								<?php echo $res['infoad']; ?>
                     <br> <br>
							</h4>MARCA DO PRODUTO:  <?php echo $res['marca']; ?> </h4>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
							<h4 class="panel-title">
								<a class="collapsed pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									<i class="fa fa-info-circle fa-icon" aria-hidden="true"></i> Informações sobre o vendedor e as entregas.<span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
								</a> 
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="panel-body">
								</h4>VENDEDOR:  <?php echo $res['vendedor']; ?> </h4> <br>
								</h4>LOCAL ATUAL DA MERCADORIA:  <?php echo $res['local']; ?> <br> </h4>
								</h4>LOCAIS DE ENTREGA:  <?php echo $res['entrega']; ?>  <br></h4>
							

							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
							<h4 class="panel-title">
								<a class="collapsed pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									<i class="fa fa-check-square-o fa-icon" aria-hidden="true"></i> Video do produto <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
								</a>
							</h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="panel-body">

							<iframe id="ytplayer" type="text/html" width="340" height="260"
  src="http://www.youtube.com/embed/2yKgqJSy_ao?autoplay=1&origin=http://example.com"
  frameborder="0"/>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingFour">
							<h4 class="panel-title">
								<a class="collapsed pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
									<i class="fa fa-question-circle fa-icon" aria-hidden="true"></i> Ajuda <span class="fa fa-angle-down fa-arrow" aria-hidden="true"></span> <i class="fa fa-angle-up fa-arrow" aria-hidden="true"></i>
								</a>
							</h4>
						</div>
						<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
							<div class="panel-body">
								
								
							</div>
						</div>
					</div>
				</div>
			</div>
							<?php 
       

       }


     ?>
			<!-- //collapse --> 
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
