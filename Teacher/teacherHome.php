<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/29
 * Time: 上午 10:41
 */
include ("function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>首頁</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {height: 550px}

        /* Set gray background color and 100% height */
        .sidenav {
            background-color: #f1f1f1;
            height: 100%;
        }
        footer{
            background-color: #6e6e6e;
            font-size: 8px;
            padding: 15px;
            color: black;
            text-shadow: 2px 2px 5px darkgray;
            align: center;
        }
        /* On small screens, set height to 'auto' for the grid */
        @media screen and (max-width: 767px) {
            .row.content {height: auto;}
        }
    </style>
</head>
<body>


<nav class="navbar navbar-inverse visible-xs">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" ></a>
            <img src="http://csie.asia.edu.tw/images/teacher/chencn.jpg" style="width: 70%">
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <?php navbar(1); ?>
<!--            <ul class="nav navbar-nav">-->
<!--                <li class="active"><a href="#">首頁</a></li>-->
<!--                <li><a href="teacherIntroduce.html">簡歷</a></li>-->
<!--                <li><a href="#">學術</a></li>-->
<!--                <li><a href="#">著作</a></li>-->
<!--                <li><a href="#">學生</a></li>-->
<!--                <li><a href="#">常用連結</a></li>-->
<!--                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->
<!--            </ul>-->
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-3 sidenav hidden-xs">
            <h2><img src="http://csie.asia.edu.tw/images/teacher/chencn.jpg" style="width: 6em">
            </h2>
            <?php nav(1);?>
<!--            <ul class="nav nav-pills nav-stacked">-->
<!--                <li class="active"><a href="#">首頁</a></li>-->
<!--                <li><a href="teacherIntroduce.html">簡歷</a></li>-->
<!--                <li><a href="#section3">學術</a></li>-->
<!--                <li><a href="#section4">著作</a></li>-->
<!--                <li><a href="#section5">學生</a></li>-->
<!--                <li><a href="#section6">常用連結</a></li>-->
<!--                <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>-->
<!--            </ul><br>-->

        </div>
        <br>

        <div class="col-sm-9">
            <div class="well">
                <h1>陳兆南</h1>
                <p>Chao-Nan Chen</p>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="well">
                        <h3>任職</h3>
                        <p>資工系 副教授</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="well">
                        <h3>辦公室</h3>
                        <p>8019</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="well">
                        <h3>分機</h3>
                        <p>48019</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="well">
                        <h3>E-mail</h3>
                        <p>chencn@asia.edu.tw</p>
                        <p>d9228101@gmail.com</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="well">
                        <h3>研究領域</h3>
                        <p>影像顯示技術</p>
                        <p>多媒體及3D遊戲設計</p>
                        <p>VLSI技術</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!--<div id="footer" align="center" >-->
<!--<p>Leisure @ Asia University 2017</p>-->
<!--</div>-->
<footer class="container-fluid text-center">
    <p>Leisure @ Asia University 2017</p>
</footer>
</body>
</html>

