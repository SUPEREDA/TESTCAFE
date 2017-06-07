<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("mysql_connect.inc.php");

$id = $_POST['id'];
$pw = $_POST['pw'];
$pw2 = $_POST['pw2'];
$emai = $_POST['emai'];
$nam = $_POST['nam'];
$bir = $_POST['bir'];
$sddr=$_POST['sddr'];
//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($id != null && $pw != null && $pw2 != null && $pw == $pw2)
//&& $emai != null&& $nam != null&& $bir != null&& $sddr != null
{
        //新增資料進資料庫語法
     
          $sql =  "INSERT INTO `future`(`ID`, `username`, `password`, `name`, `mail`, `birthday`, `address`)VALUES(NULL, '$id', '$pw', '$nam', '$emai', '$bir', '$addr')";
     
        if(mysql_query($sql))
        {
                echo '新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=0;url=index.php>';
        }
        else
        {
                echo '新增失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=index.html>';
                 die('Error: ' . mysql_error());
        }
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.html>';
}
?>