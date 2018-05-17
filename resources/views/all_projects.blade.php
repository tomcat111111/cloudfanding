<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SmartFunding | プロジェクト一覧</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="css/common.css" rel="stylesheet" type="text/css">
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="js/header.js"></script>
        
        <style>
			.content{
				font-size:0;
			}
			
			.left{
				width: 33.3%;
				display: inline-block;
				text-align: left;
			}
			.left ul{
				padding:0;
				margin:0;
			}
			.left img{
				width:98%;
			}
			.left h2{
				font-size:20px;
				font-weight: 900;
				padding: 10px 0;
				border-bottom: 1px dashed #999;
			
			}
			.right{
				width: 66.6%;
				display:inline-block;
				vertical-align: top;
				text-align: left;
			}
			.left p{
				font-size:14px;
			}
			.right h3{
				font-size:17px;
				font-weight: 800;
			}
			.right p{
				font-size:14px;
			}
			.right meter{
				margin:20px 10px;
				width:100%;
				height:20px;
			}
			.rigth meter p{
				float:right;
			}
			.right ul{
				font-size:0;
				margin-bottom: 40px;
			}
			.right ul li{
				line-height: 1.6em;
				font-size:13px;
				text-align: center;
				padding:20px 10px;
				background-color: #DDD;
				display: inline-block;
				width:30%;
				margin:10px 5%;
			}
        </style>
    </head>
    <body>
            @include('common.header')
            <div class="content">
                <div class="left">
                	<h2>プロジェクトを絞りこむ</h2>
                	<p>エリア</p><br>
                	<p>カテゴリ</p><br>
                </div>
                <div class="right">
					<h2>プロジェクトの一覧（検索結果）</h2>
                    <meter value="75" min="0" max="100"><p class="gage">75%</p></meter>
                    <ul>
                    	<li>支援者<br>1人</li>
                    	<li>残り時間<br>4日</li>
                    </ul>
                    <h3>2000円を支援</h3>
                    <p>返礼品：あいうえお</p><br>
                    <h3>10000円を支援</h3>
                    <p>返礼品：あいうえお</p><br>
                    <h3>100000円を支援</h3>
                    <p>返礼品：あいうえお</p>
                </div>
            </div>
            @include('common.footer')
    </body>
</html>
