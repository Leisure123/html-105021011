<?php session_start();
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/12/6
 * Time: 上午 10:53
 */

?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
include ("mysql_connect.inc.php");
$id = $_POST['id'];
$pw = $_POST['pw'];

$sql = "SELECT * FROM user where `email` = '$id'";
$result = mysqli_query($sql);
$row = @mysqli_fetch_row($result);

if($id != null && $pw != null && $row[3] == $id && $row[1] == $pw){
    $_SESSION['username'] = $id;
    echo "登入成功";
    echo '<meta http-equiv="REFRESH CONTENT=1; url=teacherHome.php">';
}else{
    echo "登入失敗";
    echo '<meta http-equiv="REFRESH CONTENT=1; url=login.php">';
}
?>
