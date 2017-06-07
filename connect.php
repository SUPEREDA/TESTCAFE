<?PHP session_start() ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
error_reporting('e_all ~& e_notice');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eda";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_POST['id'];
$pw = $_POST['pw'];
//搜尋資料庫資料

//$result = mysql_query("SELECT * FROM Persons");
//$sql = "SELECT * FROM `student` WHERE `member-account`=`$id` ;";
$sql = "SELECT * FROM future where username = '$id'";

//$sql = "SELECT `member_account`,member_password FROM `student`";        

//echo $sql;
$result = $conn->query($sql);

if(!$result) {
    echo $conn->error;
    exit;
}
//echo "<script>alert('" . $id . "')</script>";
$row = $result->fetch_assoc();
if(($id != null) && ($pw != null) && ($row['username'] == $id) && ($row["password"] == $pw))
{
        //將帳號寫入session，方便驗證使用者身份
        $_SESSION["username"] = $id;
     //   echo '登入成功!';
        echo '<meta http-equiv=REFRESH CONTENT=0;url=index.php>';
}
else
{
        var_dump($row);
        echo $row[0];
      echo '||';
        echo $row[1];
      echo '||';
        echo $row[2];
        echo '登入失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=1000;url=open.php>';
}
?>