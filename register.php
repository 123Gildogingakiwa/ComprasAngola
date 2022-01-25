
<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>ComprasAngola</title>
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
	<div class="login">
	
		<div class="main-agileits">
				<div class="form-w3agile">
					<h3>Criar Conta</h3>
					<form  action="verificacao.php" enctype="multipart/form-data" method="post">
						    <div class="form-group">
                        <label>Carregar Foto</label>
                        <input type="file"  class="file-upload-default" name="foto">
                       
                      </div>
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text"  name="nome1" required=""  placeholder="Primeiro Nome">
							<div class="clearfix"></div>
						</div>
						<div class="key">
								<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text"  name="nome2"  required=""  placeholder="Segundo Nome">
							<div class="clearfix"></div>
						</div>
							<div class="key">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input  type="text"  name="email_tell"  required=""  placeholder="Telefone">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password"  name="passe"  required="" placeholder="Senha">
							<div class="clearfix"></div>
						</div>
						
						<input type="submit" value="criar" name="criar">
					</form>
				</div>
			</div>
		</div>
		<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
		
			<div class="col-md-6 w3agile_newsletter_right">
			
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