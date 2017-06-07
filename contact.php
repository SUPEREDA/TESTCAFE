<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>聯繫我們</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

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

    <script>
        function submit() {
            alert("完成寄出！");
        }

    </script>

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
                        <a href="booking.php"><strong>員工介紹</strong></a>
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
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>聯絡方式</strong> 
                    </h2>
                    <hr>
                </div>
                   <br><br><br><br>
                   <p class="text-center">
                    886-2-27333141<br>10607 臺北市大安區基隆路4段43號
                    </p>
                    <br>
                <div class="col-md-8" >
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    <iframe  align="center" width="1100" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=25.013250, 121.541119&amp;spn=56.506174,79.013672&amp;t=m&amp;z=15&amp;output=embed"></iframe>
                </div>
                
                

                <div class="col-md-4">
                    
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>聯繫我們</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/opinion.gif" width="500" alt="">
                    <br> <br>
                    <p>親愛的顧客您好，感謝您光臨Team15's Cafe。
                    <br>您的滿意是我們努力的目標，我們極需要您的寶貴意見<br>以做為改善的方向，您的意見將成為我們提昇服務品質<br>的動力。</p>
                    <p>如有任何問題，也歡迎以訊息或來電詢問。<br>再次感謝您對本店的支持與愛護。</p>
                    <br> <br> <br> <br> <br>
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>名子/Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>電子郵件/Email
                                </label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>手機電話/Phone Number</label>
                                <input type="tel" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>訊息/Message</label>
                                <textarea class="form-control" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" class="btn btn-default" onclick="alert('填寫完成!')">傳送</button>
                            </div>
                        </div>
                    </form>
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

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
