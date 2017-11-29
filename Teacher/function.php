<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/29
 * Time: 上午 10:42
 */

function nav($flag){
    ?>
    <ul class="nav nav-pills nav-stacked">
        <li <?php if($flag==1) echo 'class="active"' ?>><a href="teacherHome.php">首頁</a></li>
        <li <?php if($flag==2) echo 'class="active"' ?>><a href="teacherIntroduce.php">簡歷</a></li>
        <li <?php if($flag==3) echo 'class="active"' ?>><a href="teacherAcademic.php">學術</a></li>
        <li <?php if($flag==4) echo 'class="active"' ?>><a href="teacherBook.php">著作</a></li>
        <li <?php if($flag==5) echo 'class="active"' ?>><a href="teacherStudent.php">學生</a></li>
        <li <?php if($flag==6) echo 'class="active"' ?>><a href="teacherLink.php">常用連結</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
<?php
}
?>

<?php
function navbar($flag){
    ?>
    <ul class="nav navbar-nav">-->
        <li <?php if($flag==1) echo 'class="active"' ?>><a href="teacherHome.php">首頁</a></li>
        <li <?php if($flag==2) echo 'class="active"' ?>><a href="teacherIntroduce.php">簡歷</a></li>
        <li <?php if($flag==3) echo 'class="active"' ?>><a href="teacherAcademic.php">學術</a></li>
        <li <?php if($flag==4) echo 'class="active"' ?>><a href="teacherBook.php">著作</a></li>
        <li <?php if($flag==5) echo 'class="active"' ?>><a href="teacherStudent.php">學生</a></li>
        <li <?php if($flag==6) echo 'class="active"' ?>><a href="teacherLink.php">常用連結</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
<?php
}
?>