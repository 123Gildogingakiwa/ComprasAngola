<?php 
include 'conect.php';
     ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="" />
    <link rel="stylesheet" href="css/style2.css">
    <script src="js/jquery.js"></script>
    <script>
        // jQuery is required to run this code
  $( document ).ready(function() {
    scaleVideoContainer();

    initBannerVideoSize('.video-container .poster img');
    initBannerVideoSize('.video-container .filter');
    initBannerVideoSize('.video-container video');

    $(window).on('resize', function() {
      scaleVideoContainer();
      scaleBannerVideoSize('.video-container .poster img');
      scaleBannerVideoSize('.video-container .filter');
      scaleBannerVideoSize('.video-container video');
    });
  });

  function scaleVideoContainer() {
    var height = $(window).height() + 5;
    var unitHeight = parseInt(height) + 'px';
    $('.homepage-hero-module').css('height',unitHeight);
  }

  function initBannerVideoSize(element){
    $(element).each(function(){
      $(this).data('height', $(this).height());
      $(this).data('width', $(this).width());
    });

    scaleBannerVideoSize(element);
  }

  function scaleBannerVideoSize(element) {

    var windowWidth = $(window).width(),
    windowHeight = $(window).height() + 5,
    videoWidth,
    videoHeight;

    // console.log(windowHeight);

    $(element).each(function(){
      var videoAspectRatio = $(this).data('height')/$(this).data('width');

      $(this).width(windowWidth);

      if(windowWidth < 1000){
          videoHeight = windowHeight;
          videoWidth = videoHeight / videoAspectRatio;
          $(this).css({'margin-top' : 0, 'margin-left' : -(videoWidth - windowWidth) / 2 + 'px'});

          $(this).width(videoWidth).height(videoHeight);
      }

      $('.homepage-hero-module .video-container video').addClass('fadeIn animated');

    });
  }

    </script>
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
      <form action="pesquisa.php"  method='get' >
                <input type="search" name="busca" placeholder="Pesquisar..." required="">
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

    <div class="homepage-hero-module">
        <div class="video-container">

            <div class="title-container">
                <h1 class="display-3">FAÇA BOAS COMPRAS</h1>
                <p class="lead">$</p>
            </div>

            <div class="filter"></div>
            <video autoplay loop muted playsinline class="fillWidth">
            <source src="Travaho/Travaho.mp4" type="video/mp4" />O Seu navegador não suporta o formato de video de fundo.
            <source src="Travaho/Travaho.webm" type="video/webm" />O Seu navegador não suporta o formato de video de fundo.
            </video>
            <div class="poster hidden">
            <img src="The-strip/The-strip.jpg" alt="">
            </div>
        </div>
    </div>

    

<div class="top-products">
    <div class="container">
        <h3>Mais Vendidos</h3>
        <div class="sap_tabs">          
            <div id="horizontalTab">
                <ul class="resp-tabs-list">
                    <li class="resp-tab-item"><span>Homens</span></li>
                    <li class="resp-tab-item"><span>Mulheres</span></li>
                    <li class="resp-tab-item"><span>Pastas</span></li>  
                    <li class="resp-tab-item"><span>Eletronicos</span></li>                      
                </ul>   
                <div class="clearfix"> </div>   
                <div class="resp-tabs-container">
                    <div class="tab-1 resp-tab-content">
                                <?php 

      $q ="SELECT * FROM roupas where tipo='Homem'  ";

      $query=mysqli_query($con,$q);

     while ($res =mysqli_fetch_array($query)) {
           
     
 ?>
                        <div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
                            <a href="single.php?id=<?php echo $res['id']; ?> "><div class="product-img">
                                <img src="../img/<?php echo $res['foto1']; ?>" alt="" />
                                <div class="p-mask">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" /> 
                                    <input type="hidden" name="w3ls1_item" value="Formal shoes" /> 
                                    <input type="hidden" name="amount" value="<?php echo $res['preco']; ?>" /> 
                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i>Adicionar ao Carrinho</button>
                                </form>
                                </div>
                            </div></a>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
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
                    </div>
                    <div class="tab-1 resp-tab-content">
                                                        <?php 

      $q ="SELECT * FROM roupas where tipo='Mulher'  ";

      $query=mysqli_query($con,$q);

     while ($res =mysqli_fetch_array($query)) {
           
     
 ?>
                        <div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
                           <a href="single.php?id=<?php echo $res['id']; ?> "><div class="product-img">
                                <img src="../img/<?php echo $res['foto1']; ?>" alt="" />
                                <div class="p-mask">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" /> 
                                    <input type="hidden" name="w3ls1_item" value="Casual wear" /> 
                                    <input type="hidden" name="amount" value="<?php echo $res['preco']; ?>" /> 
                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i>Adicionar ao Carrinho</button>
                                </form>
                                </div>
                            </div></a>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                    <h4>
<?php echo $res['nome']; ?> </h4>
                    <h5><?php echo $res['preco']; ?> </h5>
                </div>
<?php 
       

       }


     ?>
                       
                        <div class="clearfix"></div>
                        <div class="top-products-set2">
                       
                        <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="tab-1 resp-tab-content">
                                                               <?php 

      $q ="SELECT * FROM roupas where nome='Pasta'  ";

      $query=mysqli_query($con,$q);

     while ($res =mysqli_fetch_array($query)) {
           
     
 ?>
                        <div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
                            <a href="single.php?id=<?php echo $res['id']; ?> "><div class="product-img">
                                <img src="../img/<?php echo $res['foto1']; ?>" alt="" />
                                <div class="p-mask">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" /> 
                                    <input type="hidden" name="w3ls1_item" value="Handbag" /> 
                                    <input type="hidden" name="amount" value="90.00" /> 
                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i>Adicionar ao Carrinho</button>
                                </form>
                                </div>
                            </div></a>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                     <h4>
<?php echo $res['nome']; ?> </h4>
                    <h5><?php echo $res['preco']; ?> </h5>
                </div>
<?php 
       

       }


     ?>
                        
                        <div class="clearfix"></div>    
                        <div class="top-products-set2">
                       
                               
                        <div class="clearfix"></div>
                        </div>                      
                    </div>      
                    <div class="tab-1 resp-tab-content">
                                                                                       <?php 

      $q ="SELECT * FROM eletronicos where tipo='Eletronicos'  ";

      $query=mysqli_query($con,$q);

     while ($res =mysqli_fetch_array($query)) {
           
     
 ?>
                        <div class="col-md-3 top-product-grids tp1 animated wow slideInUp" data-wow-delay=".5s">
                            <a href="singlee.php?id=<?php echo $res['id']; ?> "><div class="product-img">
                                <img src="../img/<?php echo $res['foto1']; ?>" alt="" />
                                <div class="p-mask">
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart" />
                                    <input type="hidden" name="add" value="1" /> 
                                    <input type="hidden" name="w3ls1_item" value="Eye makeup" /> 
                                    <input type="hidden" name="amount" value="<?php echo $res['preco']; ?>" /> 
                                    <button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i>Adicionar ao Carrinho</button>
                                </form>
                                </div>
                            </div></a>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star yellow-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                            <i class="fa fa-star gray-star" aria-hidden="true"></i>
                     <h4>
<?php echo $res['nome']; ?> </h4>
                    <h5><?php echo $res['preco']; ?> </h5>
                </div>
<?php 
       

       }


     ?>
                        
                       
                       
                        <div class="clearfix"></div>    
                        <div class="top-products-set2">
                        
                        
                                  
                        <div class="clearfix"></div>
                        </div>
                    </div>                      
                </div>
            </div>
        </div>  
    </div>
</div>



    <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default', //Types: default, vertical, accordion           
                width: 'auto', //auto or any width like 600px
                fit: true   // 100% fit in a container
            });
        });     
    </script>

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
                                <img src="images/jj.jpg" class="img-responsive" alt="" />
                            </li>
                            <li> 
                                <img src="images/jjj.jpg" class="img-responsive" alt="" />
                            </li>
                            <li> 
                                <img src="images/jjjj.jpg" class="img-responsive" alt="" />
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
                            <p>Entregas em 72horas em Luanda</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="pince">
                        <div class="pince-left">
                            <h5>02</h5>
                        </div>
                        <div class="pince-right">
                            <p>Pagamento Presencial de forma Segura e confiavel.</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="pince">
                        <div class="pince-left">
                            <h5>03</h5>
                        </div>
                        <div class="pince-right">
                            <p>Produtos com qualidade e bom estado de conservação.</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="pince">
                        <div class="pince-left">
                            <h5>04</h5>
                        </div>
                        <div class="pince-right">
                            <p>Responsabilidade e confiança é a nossa MARCA.</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
                <script src="js/jquery.wmuSlider.js"></script> 
                                <script>
                                    $('.example1').wmuSlider();         
    
                            </script> 





<div class="banner-bootom-w3-agileits">
    <div class="container">
        <div class="col-md-5 bb-grids bb-left-agileits-w3layouts">
            <a href="women.php"><div class="bb-left-agileits-w3layouts-inner">
                    <h3>Descontos</h3>
                    <h4>Roupas de Mulher até<span>15%</span></h4>
            </div></a>
        </div>
        <div class="col-md-4 bb-grids bb-middle-agileits-w3layouts">
            <a href="shoes.php"><div class="bb-middle-top">
                <h3>Descontos</h3>
                <h4>Tenis até<span>25%</span></h4>
            </div></a>
            <a href="jewellery.php"><div class="bb-middle-bottom">
                <h3>Descontos</h3>
                <h4>Joias até<span>13%</span></h4>
            </div></a>
        </div>
        <div class="col-md-3 bb-grids bb-right-agileits-w3layouts">
            <a href="watches.php"><div class="bb-right-top">
                <h3>Descontos</h3>
                <h4>Relogios até<span>9%</span></h4>
            </div></a>
            <a href="handbags.php"><div class="bb-right-bottom">
                <h3>Descontos</h3>
                <h4>Pastas até<span>10%</span></h4>
            </div></a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

</div>
<!-- top-brands -->
    <div class="top-brands">
        <div class="container">
            <h3>Nossos Parceiros</h3>
            <div class="sliderfig">
                <ul id="flexiselDemo1">         
                    <li>
                        <img src="images/4.png" alt=" " class="img-responsive" />
                    </li>
                    <li>
                        <img src="images/5.png" alt=" " class="img-responsive" />
                    </li>
                    <li>
                        <img src="images/6.png" alt=" " class="img-responsive" />
                    </li>
                    <li>
                        <img src="images/7.png" alt=" " class="img-responsive" />
                    </li>
                    <li>
                        <img src="images/46.jpg" alt=" " class="img-responsive" />
                    </li>
                </ul>
        </div>
                    <script type="text/javascript">
                            $(window).load(function() {
                                $("#flexiselDemo1").flexisel({
                                    visibleItems: 4,
                                    animationSpeed: 1000,
                                    autoPlay: false,
                                    autoPlaySpeed: 3000,            
                                    pauseOnHover: true,
                                    enableResponsiveBreakpoints: true,
                                    responsiveBreakpoints: { 
                                        portrait: { 
                                            changePoint:480,
                                            visibleItems: 1
                                        }, 
                                        landscape: { 
                                            changePoint:640,
                                            visibleItems:2
                                        },
                                        tablet: { 
                                            changePoint:768,
                                            visibleItems: 3
                                        }
                                    }
                                });
                                
                            });
                    </script>
                    <script type="text/javascript" src="js/jquery.flexisel.js"></script>
        </div>
    </div>
<!-- //top-brands -->
<!-- newsletter -->
    <div class="newsletter">
        <div class="container">
            <div class="col-md-6 w3agile_newsletter_left">
                <h3>Newsletter</h3>
                <p>Envie o seu email Para Receber promoçôes</p>
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