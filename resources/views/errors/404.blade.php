<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SmartFunding | エラー</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="/css/common.css" rel="stylesheet" type="text/css">
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="/js/header.js"></script>
        
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
            <div class="content vh70 error">
                <h2>ERROR</h2>
                <p>申し訳ございません。<br>お探しのページは見つかりませんでした。</p>
                
                <a href="/">トップへ戻る</a>
            </div>
            @include('common.footer')
    </body>
</html>
