<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>About - Business Casual - Start Bootstrap Theme</title>

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/business-casual.css" rel="stylesheet">

  <!-- Plane CSS -->
  <link href="css/plane.css" rel="stylesheet">

  <!-- Fonts -->
  <!--<link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
    rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic"
    rel="stylesheet" type="text/css">-->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <script src="js/vue.min.js"></script>
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
                        <a href="blog.php"><strong>咖啡的小孩</strong></a>
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
        <div class="col-lg-12">
        </div>
       
          
          
          
          <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">咖啡店店長
                        <strong>吳奕達</strong>
                    </h2>
                    <hr>
                    <br>
                    <img class="img-responsive img-border img-left" src="img/EDA.jpg" width="250" alt="">
                    <hr class="visible-xs">
                    <br><br><br>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;24小時都用心為客人著想，如何泡出一杯好咖啡，<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;讓客人能在這個小空間裡放鬆閒聊。</p>
                    <br>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;店長名言:「堅持用心的泡出每一杯咖啡」</p>
                    <br>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;工作內容:   罵打雜小弟，負責收錢，給員工放無薪價，努力成為嘴砲王。</p>
                    
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(實際上工作內容是編寫前端)</p>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br>
                </div>
            </div>
        </div>  
          
          
          <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">茶水小妹
                        <strong>林宜昕</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/boo.jpg" width="250" alt="">
                    <hr class="visible-xs">
                    <br><br>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;一心只想要賺很多的扣扣，但畢業後不想當爆肝工程師。<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;只好在咖啡廳工作，每天做著 r=1-sinθ 形狀的蛋糕。</p>
                    <br>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;口頭禪:「好討厭自戀的店長哦 !」</p>
                    <br>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;工作內容: 前端文案修改美化</p>
                    
                   
                </div>
            </div>
        </div>  
          
          
          <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">打雜小弟
                        <strong>許睿森</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/DOG2.jpg" width="250" alt="">
                    <hr class="visible-xs">
                    <p>2017-05-05[最新活動]【我的堅持。我的品味】EDA精品咖啡豆-新上市</p>
                    <p>2017-04-28[門市消息]5/1起-部分門市調整營業時間</p>
                    <p>2017-04-28[最新活動]【我的甜食新主張】EDA手作烘培-新上市</p>
                    <p>2017-04-23[公告]【公開聲明】安全蛋品來源</p>
                    <p>2017-02-24[門市消息]【再會!EDA店】感恩回饋促銷日3/1-3/15   </p>
                </div>
            </div>
        </div>  
          
         </div> 
        </div>  
          
        </div>  
          
          
        <!-- /.container -->
        <br>

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

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

</body>

</html>