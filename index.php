<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NTUST team15</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
      <!--<link href="css/bootstrap.min.css" rel="stylesheet"> -->
    


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
                    <span class="sr-only">Toggle navigati</span>
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
                        <a href="blog.php"><strong>咖啡的小孩</strong></a>
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
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <!----        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="4"></li>---->
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="img/slide-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-3.jpg" alt="">
                            </div>
                 <!----           <div class="item">
                                <img  class="img-responsive img-full"  src="img/11111.jpg" width= "843" height="403" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/news02.jpg" width="843" height="403" alt="">
                            </div>
                            ----->
                            
                            
                            
                            
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <br>
                    <h1>
                        Welcome to
                    </h1>
                    <h1 class="brand-name">No.15 CAFE</h1>
                    <hr class="tagline-divider">

                </div>
            </div>
        </div>
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">最新消息
                        <strong>latest news</strong>
                    </h2>
                    <hr>&nbsp;&nbsp;
                    <img class="img-responsive img-border img-left" src="img/coffeenew.jpg" width="250" height="270" alt="">
                    <hr class="visible-xs">
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2017-05-30 [最新活動]【大學生期末回饋】每日限量買一送一</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2017-05-05 [最新活動]【我的堅持。我的品味】精品咖啡豆-新上市</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2017-04-28 [門市消息] 5/1起-部分門市調整營業時間</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2017-04-28 [最新活動]【甜食新主張】手作烘培-新上市</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2017-04-23 [公告]【公開聲明】安全蛋品來源</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2017-02-24 [門市消息]【再會】感恩回饋促銷日3/1-3/15   </p>
                </div>
            </div>
        </div>  
            <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">店內餐點
                        <strong>Menu</strong>
                    </h2>
                    <hr>
                    
                    <br>
                    
                    <img class="img-responsive img-border img-left" src="img/coffeecone.jpg" width="250" alt="">
                    <hr class="visible-xs">
                    <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;咖啡甜筒 Coffee cone</h1>
                    <br><br><br>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;豆以苦為佳，奶以鮮為甜，合而為一稱作咖啡牛奶。</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;將精華全部放在粗脆香甜的餅乾中，那滋味令人無法自拔。</p>
                    
                      
                        
                    </h2>
                    <br>
                    <br>
                    <br><br><br><br><br><br><br><br><br>
                    <br>
                    

                    <img class="img-responsive img-border img-left" src="img/top2.jpg" width="250" alt="">
                    <hr class="visible-xs">
                    <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;摩卡 Mocaccino</h1>
                    <br><br><br>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;採用深度烘焙的100%摩卡咖啡豆，利用高壓蒸氣沖煮而成，<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;巧克力香氣四溢，香醇濃郁，搭配一些餅乾當今日下午茶，令人意猶未盡。</p>
                        <br>
                    
                    </h2>
                    <br>
                    <br>
                    <br><br><br><br><br><br>
                   
                    <br><br>
                    <img class="img-responsive img-border img-left" src="img/top3.jpg" width="250" alt="">
                    <hr class="visible-xs">
                    <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;卡布奇諾 Cappuccino</h1>
                    <br><br><br>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;延續義大利五千年的傳統，一代代流傳下的古老秘方，<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;透過奶泡與上等阿拉比卡咖啡交織而成，體現出歷史性的文化美味。</p>
                     <br>
                    
                    </h2>
                
                    <br>
                    <br><br><br><br><br><br>
                    
                     <br><br><br>
                    <img class="img-responsive img-border img-left" src="img/top4.jpg" width="250" alt="">
                    <hr class="visible-xs">
                    <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;榛果拿堤 Hazelnut Latte</h1>
                    <br><br><br>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;以濃縮咖啡、蒸奶、榛果蜜糖碎片與鮮奶油結合。<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;充滿奶油香氣的榛果風味那堤，深受愛好焦糖與核果風味的顧客喜愛。</p>
                     <br>
                   
                        <br>
                    <br><br><br><br><br><br>
                    </h2>
                </div>
            </div>
        </div>
        
       
       
       <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h3 class="text-center">
                        <strong>營業時間</strong>
                    </h3>
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/news02.jpg"  alt="">
                    <hr class="visible-xs">
                    <h4>
                        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </h4>
                    
                </div>
            </div>
        </div>  
       
       
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h3 class="text-center">
                        <strong>掌握手沖小撇步，輕鬆變身居家咖啡職人吧</strong>
                    </h3>
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/idx-07.jpg"  alt="">
                    <hr class="visible-xs">
                    <h4>
                        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <hr class="text-center">
                        手沖咖啡的變數之多，任何一個環節、要素有所改變，沖出來的咖啡，就有可能造成出截然不同的口感。但這樣的手沖咖啡變數反而也是其最大的特色，每一杯都獨一無二。
                    <hr></h4>
                    
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
    <script src="js/jquery.bxslider.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
<script>
    
    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
