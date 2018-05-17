<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SmartFunding | クラウドファンディング</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="css/common.css" rel="stylesheet" type="text/css">
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="js/header.js"></script>
        
        <style>
			#slideshow{
				padding:0;
				margin-top:50px;
			}
			#slideshow li img{
				width:100%;
				height:auto;
			}
        </style>
    </head>
    <body>
            @include('common.header')
            <ul id="slideshow">
                	<li><img src="images/see1.jpeg"></li>
            </ul>
            <div class="content">
                <h2 class="left">新着プロジェクト</h2>
                <ul class="newproject">
                	<li><img src="images/see1.jpeg"><br><h4><a href="project">プロジェクト1</a></h4><p>このプロジェクトは、地域おこしを目的として...</p></li>
                	<li><img src="images/see1.jpeg"><br><h4><a href="project">プロジェクト1</a></h4><p>このプロジェクトは、地域おこしを目的として...</p></li>
                	<li><img src="images/see1.jpeg"><br><h4><a href="project">プロジェクト1</a></h4><p>このプロジェクトは、地域おこしを目的として...</p></li>
                </ul>
                <h2 class="left">お知らせ</h2>
                <p>地域密着型のクラウドファンディングサービス・SmartFundingのサイトが5月にオープン予定です。サイトの完成まで今しばらくお待ちくださいませ。</p>
            </div>
            @include('common.footer')
    </body>
</html>
