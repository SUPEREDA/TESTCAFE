<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

     <title>購買咖啡豆</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    
    
    
  <link href="/assets/application-5d91d5cd1d672293a680de45f2932430.css" media="all" rel="stylesheet" />
    
  <link href="/css/bootstrap.min.css" rel="stylesheet">
    

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <!--<link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="brand"><img src="coffee.png" alt="Mountain View" style="width:100px;height:100px;text-align:center">No.15 Cafe </div>
   
    <div class="address-bar">No.15 Company</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.php">Business Casual</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php"><strong>店內飲品</strong></a>
                    </li>
                    
                    <li>
                        <a href="booking.php"><strong>員工介紹</strong></a>
                    </li>
                    <li>
                        <a href="contact.php"><strong>聯繫我們</strong></a>
                    </li>
                    <li>
                        <?php
                  if(isset($_SESSION['username'])){
              if($_SESSION['username']!=null){
                echo '<li><a href="profile.php">',$_SESSION['username'],'</a></li>';
                echo '<li><a href="logout.php">登出</a></li>';
                //將資料庫裡的所有會員資料顯示在畫面上
               //$sql = "SELECT * FROM future";
                //$result = $conn->query($sql);
              }}
              else{
                echo '<a href="open.php"><strong>會員登入</strong></a>';
              }
            ?>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <div class="container">
   
<div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div class="brand2"><img src="img/prd-03.png" alt="Mountain View" style="width:64px;height:46px;text-align:center">
                        咖啡豆 Whole Beans 
                    </div>
        <br>
              <div class="row list">   
                <div class="col-sm-4 clearfix">   
                  <div class='pull-center'> 
                      <a href="/categories/3/products/4">
                          <img alt="Coffee package   " class="img-responsive" src="img/COFFEE-PACKAGE-__.jpg" /></a></div>
                  <div class="pull-center">
                    <p>
    
                        義式咖啡豆<span>(64.5KG)</span><br>
                        優惠價 $天價 元
                      <span>/ 原價 $275達幣</span>
                      </p>
                  </div>
                </div>
              
            

              <div class="col-sm-4 clearfix">   
                <div class='pull-center'> <a href="/categories/3/products/9"><img alt="Coffee package a " class="img-responsive" src="img/COFFEE-PACKAGE-A_.jpg" /></a></div>
                <div class="pull-center">
                  <p>
                    
                      A級曼特寧<span>(227g)</span><br>
                     優惠價 $350 元
                    <span>
                      / 原價 $350 元
                    </span>
                  </p>
               </div>
              </div>
            

              <div class="col-sm-4 clearfix">   
                <div class='pull-center'> <a href="/categories/3/products/10"><img alt="Coffee package   " class="img-responsive" src="img/COFFEE-PACKAGE-__.jpg" /></a></div>
                <div class="pull-center">
                  <p>
                    
                      黃金曼特寧<span>(227g)</span><br>
                     優惠價 $450 元
                    <span>
                      / 原價 $450 元
                    </span>
                  </p>
                </div>
              </div>
             
              </div>

              <div class="row list">   
                <div class="col-sm-4 clearfix">   
                  <div class='pull-center'> <a href="/categories/3/products/36"><img alt="Coffee package pomona" class="img-responsive" src="img/COFFEE-PACKAGE-POMONA.jpg" /></a></div>
                  <div class="pull-center">
                    <p>
                     
                        果樹女神<span>(227g)</span><br>
                        優惠價 $350 元
                      <span>/ 原價 $350 元</span>
                      </p>
                  </div>
                </div>
              
            

              <div class="col-sm-4 clearfix">   
                <div class='pull-center'> <a href="/categories/3/products/37"><img alt="Coffee package chocolate" class="img-responsive" src="img/COFFEE-PACKAGE-CHOCOLATE.jpg" /></a></div>
                <div class="pull-center">
                  <p>
                    
                      巧克力王子<span>(227g)</span><br>
                      優惠價 $350 元
                    <span>
                      / 原價 $350 元
                    </span>
                  </p>
                </div>
              </div>
            

              <div class="col-sm-4 clearfix">   
                <div class='pull-center'> <a href="/categories/3/products/109"><img alt="Flora yirgacheffe" class="img-responsive" src="img/Flora-Yirgacheffe.jpg" / width="250" height="260"></a></div>
                <div class="pull-center">
                  <p>
                   
                      花香耶加雪菲<span>(227g)</span><br>
                      優惠價 $420 元
                    <span>
                      / 原價 $420 元
                    </span>
                  </p>
                </div>
              </div>
            
              </div>
<div class="row list">   
                <div class="col-sm-4 clearfix">   
                  <div class='pull-center'> <a href="/categories/3/products/36"><img alt="Coffee package pomona" class="img-responsive" src="img/COFFEE-PACKAGE-POMONA.jpg" /></a></div>
                  <div class="pull-center">
                    <p>
                      
                        果樹女神<span>(227g)</span><br>
                        優惠價 $350 元
                      <span>/ 原價 $350 元</span>
                      </p>
                  </div>
                </div>
              
            

              <div class="col-sm-4 clearfix">   
                <div class='pull-center'> <a href="/categories/3/products/37"><img alt="Coffee package chocolate" class="img-responsive" src="img/COFFEE-PACKAGE-CHOCOLATE.jpg" /></a></div>
                <div class="pull-center">
                  <p>
                  
                      巧克力王子<span>(227g)</span><br>
                      優惠價 $350 元
                    <span>
                      / 原價 $350 元
                    </span>
                  </p>
                </div>
              </div>
            

              
            
              </div>
            
            
                    
            

</div>
                </div>
     </div>
        </div>
          
       
    
                   
        
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                     <p>Copyright &copy; No.15 Cafe </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
  <script src="/js/SmoothScroll.js"></script> 
        
        
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
