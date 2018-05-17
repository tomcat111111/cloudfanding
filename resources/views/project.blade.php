<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SmartFunding | プロジェクト詳細</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="css/common.css" rel="stylesheet" type="text/css">
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="js/header.js"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
			
			.content{
				font-size:0;
			}

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
			
			.head{
				height:50px;
			}
			.menu{
				width:98%;
				max-width:960px;
				margin:0 auto;
			}
			.site-title{
				float:left;
			}
			.site-title a{
				font-family: "ＭＳ Ｐ明朝", "MS PMincho","ヒラギノ明朝 Pro W3", "Hiragino Mincho Pro", "serif";
				font-weight:800;
				font-size: 30px;
				color:#222;
				text-decoration: none;
			}
			.site-title:hover{
				opacity:0.8;
			}
			.menu ul{
				display: inline-block;
				float:right;
			}
			.menu ul li{
				display:inline-block;
				vertical-align: bottom;
				margin:5px 15px 0;
			}
			.menu ul li a{
				color:#666;
				text-decoration: none;
				font-family: "ＭＳ ゴシック", "MS Gothic", "Osaka－等幅", "Osaka-mono", "monospace";
			}
			.menu ul li a:hover{
				opacity: 0.7;
			}
			
			.left{
				width: 66.7%;
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
				margin-right:20px;
				border-bottom: 1px dashed #999;
			
			}
			.right{
				width: 33.3%;
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
				padding:20px 0;
				background-color: #DDD;
				display: inline-block;
				width:40%;
				margin:10px 5%;
			}
			.return{
				padding:15px;
				margin:20px 0;
				background-color:#DDD;
			}
			.return h3{
				padding:15px;
			}
			.return p{
				padding:0 15px 15px 15px;
			}
			
        </style>
    </head>
    <body>
           @include('common.header')
            
            <div class="project_title">
            	<h2>プロジェクト名が入ります</h2>
            	<p><span>作成者：user1</span><span class="cate">カテゴリ：東京</span></p>
            </div>

            <div class="content">
                <div class="left">
                	<ul>
                		<li><img src="images/see1.jpeg"></li>
                	</ul>
                	<h2>地域おこしのためのプロジェクトにご協力をお願いします！</h2>
                	<p>地域おこしのために、大きなプロジェクトを行いたいと考えています。</p><br>
                	<p>以下のような計画で考えております。</p><br>
                	<p>・プロジェクト１：あいうえお</p>
                	<p>・プロジェクト２：かきくけこ</p>
                	<p>・プロジェクト３：さしすせそ</p>
                	<p>・プロジェクト４：たちつてと</p><br>
                	<p>実現のためには、皆様のお力添えが必要です！</p><br>
                	<p>よろしくお願いいたします。</p>
                </div>
                <div class="right">
					<h3>現在集まっている金額：300000円</h3>
                    <meter value="75" min="0" max="100"><p class="gage">75%</p></meter>
                    <ul>
                    	<li>支援者<br>1人</li>
                    	<li>残り時間<br>4日</li>
                    </ul>
                    <div class="return">
                    	<h3>2000円を支援</h3>
                        <p>返礼品：あいうえお</p>
                    </div>
                    <div class="return">
                    	<h3>10000円を支援</h3>
                        <p>返礼品：あいうえお</p>
                    </div>
                    <div class="return">
                    	<h3>20000円を支援</h3>
                        <p>返礼品：あいうえお</p>
                    </div>
                </div>
            </div>
            @include('common.footer')
    </body>
</html>
