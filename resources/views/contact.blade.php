<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SmartFunding | お問い合わせ</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="css/app.css" rel="stylesheet" type="text/css">
        <link href="css/common.css" rel="stylesheet" type="text/css">
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="js/header.js"></script>
    </head>
    <body>
           @include('common.header')
           <div class="backimg">
                <div class="box">
					<h2>お問い合わせ</h2>
                    <p>SmartFundingのサービスについてご不明な点がある方、またクラウドファンディングのご利用を検討されている法人・個人の方はこちらからお気軽にお問い合わせください。</p>
                    <form method="POST" action="/contact">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="left mb10">お名前</label><br>
                         

                            <div class="col-md-12">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="left mt10">メールアドレス</label><br>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="left mt10">お問い合わせ内容</label><br>

                            <div class="col-md-12">
                                <textarea id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required></textarea>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="mt40 center">
                                <center><button type="submit" class="btn btn-primary center">
                                    送信
                                </button></center>
                            </div>
                        </div>
                    </form>
                </div>                
            </div>
            @include('common.footer')
    </body>
</html>
