<!DOCTYPE HTML>
<html>
<head>
    <title>The Free Techno Website Template | 404 :: w3layouts</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=Carrois+Gothic+SC' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="menu-bg">
    <div class="wrap">
        <div class="menu">
            <ul id="nav">
                <li  id="selected"><a href="index.html">TRANG CHỦ</a></li>
                <li><a href="about.html">GIỚI THIỆU</a></li>
                <li><a href="staff.html">CÁ NHÂN</a></li>
                <li><a href="service.html">HỌC HỎI</a></li>
                <li><a href="contact.html">LIÊN HỆ</a></li>
            </ul>
            <!--nav-->
            <script src="js/jquery.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="js/jquery-ui.min.js"></script>
            <script type="text/javascript" src="js/jquery.spasticNav.js"></script>
            <script type="text/javascript">
                $('#nav').spasticNav();
            </script>
            <div class="clear"></div>
        </div>
    </div>
</div>
<div class="wrap">
    <div class="header">
        <div class="logo">
            <a href="index.html"><img src="images/logo.png" alt="" title="logo"></a>
        </div>
        <ul class="soc-icons">
            <li><a href=""><img src="images/facebook.png" title="facebook" alt=""/></a></li>
            <li><a href=""><img src="images/twitter.png" title="twitter" alt="" /></a></li>
            <li><a href=""><img src="images/youtube.png" title="youtube" alt=""/></a></li>
            <li><a href=""><img src="images/rss.png" title="rss" alt="" /></a></li>
        </ul>
        <div class="clear"></div>
    </div>
</div>
<div class="content-bg">
    <div class="wrap">

        @yield('content')

    </div>
</div>

@yield('UniqueFooter')

//footer
<div class="ftr-bg">
    <div class="wrap">
        <div class="footer">
            <p class="w3-link">© All Rights Reserved | Designed by&nbsp; <a href="http://w3layouts.com/"> W3Layouts</a></p>
        </div>
    </div>
</div>
