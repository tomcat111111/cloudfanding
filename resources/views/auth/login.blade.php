<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SmartFunding | ログイン</title>

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link href="css/app.css" rel="stylesheet" type="text/css">
        <link href="css/common.css" rel="stylesheet" type="text/css">
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="js/header.js"></script>
        
    </head>
    <body>
           @include('common.header')
           <div class="backimg">
                <div class="box">
                   <h2>ログイン</h2>
                   <p class="mb20">ご登録のメールアドレス及びパスワードをご入力ください。</p>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="left mt10">メールアドレス</label><br>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="left mt10">パスワード</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="mt10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> パスワードを記憶
                                    </label>
                                </div>
                            </div>
							
                        </div>

                        <div class="form-group row mb-0">
                            <div class="mt10 ml30">
                                <button type="submit" class="btn btn-primary">
                                    ログイン
                                </button>

                                <a class="btn btn-link fs12" href="{{ route('password.request') }}">
                                    パスワードをお忘れの方
								</a>
                            </div>
                        </div>
                    </form>
                 </div>                  
            </div>
            @include('common.footer')
    </body>
</html>
