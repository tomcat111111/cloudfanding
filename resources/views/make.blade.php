<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SmartFunding | 新規プロジェクト作成</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="css/app.css" rel="stylesheet" type="text/css">
        <link href="css/common.css" rel="stylesheet" type="text/css">
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="js/header.js"></script>

    </head>
    <body>
        @include('common.header_2')
        @include('common.mypage_header')
        <div class="content">
               <div class="box">
					<h2>新規プロジェクトの作成</h2>
                    <p>こちらからプロジェクトを作成できます。金額や内容など、詳細をご記入ください。弊社の承認を経てサイト上に公開されます。</p>
                    <form method="POST" action="/make">
                        @csrf

                        <div class="form-group row">
                            <label for="project_name" class="left mb10">プロジェクト名（30文字以内）</label><br>
                         

                            <div class="col-md-12">
                                <input id="project_name" type="text" class="form-control{{ $errors->has('project_name') ? ' is-invalid' : '' }}" name="name" maxlength="30" value="{{ old('project_name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('project_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div><br>
                        
                        <div class="form-group row">
                            <label for="image" class="left mb10">画像</label><br>
                            
                            <div class="col-md-8">
                               <input class="form-field" type="file" name="image" id="image" />
                            </div>
                            
                        </div><br>
                        
                        <div class="form-group row">
                            <label for="name" class="left mb10">カテゴリ</label><br>
                         

                            <div class="col-md-3">
                                <select name="category">
                                   <option value="">---</option>
                                   <option value="音楽">音楽</option>
                                   <option value="ファッション">ファッション</option>
                                   <option value="映画">映画</option>
                                   <option value="プロダクト">プロダクト</option>
                                   <option value="飲食">飲食</option>
                                   <option value="スポーツ">スポーツ</option>
                                   <option value="ジャーナリズム">ジャーナリズム</option>
                                   <option value="その他">その他</option>
								</select>

                                @if ($errors->has('category'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div><br>
                        
                        <div class="form-group row">
                            <label for="name" class="left mb10">エリア</label>
                         

                            <div class="col-md-3">
                                <select name="area">
                                   <option value="">---</option>
                                   <option value="北海道">北海道</option>
                                   <option value="青森県">青森県</option>
                                   <option value="岩手県">岩手県</option>
                                   <option value="秋田県">秋田県</option>
                                   <option value="山形県">山形県</option>
                                   <option value="宮城県">宮城県</option>
                                   <option value="福島県">福島県</option>
                                   <option value="新潟県">新潟県</option>
                                   <option value="群馬県">群馬県</option>
                                   <option value="栃木県">栃木県</option>
                                   <option value="新潟県">新潟県</option>
								</select>

                                @if ($errors->has('area'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('area') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="left mt10">目標金額</label><br>

                            <div class="col-md-11">
                                <input id="cost" type="text" class="form-control{{ $errors->has('cost') ? ' is-invalid' : '' }}" name="cost" value="{{ old('cost') }}" required>

                                @if ($errors->has('cost'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('cost') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="left mt10">プロジェクトの目的・概要</label><br>

                            <div class="col-md-12">
                                <textarea id="content" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="content" required></textarea>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="return" class="left mt10">返礼品の概要</label><br>

                            <div class="col-md-12">
                                <textarea id="return" class="form-control{{ $errors->has('return ') ? ' is-invalid' : '' }}" name="return" required></textarea>

                                @if ($errors->has('return'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('return') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="email" class="left mt10">電話番号</label><br>

                            <div class="col-md-12">
                                <input id="cost" type="tel" class="form-control{{ $errors->has('tel') ? ' is-invalid' : '' }}" name="tel" value="{{ old('tel') }}" required>

                                @if ($errors->has('tel'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('tel') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="email" class="left mt10">メールアドレス</label><br>

                            <div class="col-md-12">
                                <input id="cost" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="mt40 center">
                                <button type="submit" class="btn btn-primary center">
                                    送信
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>
        @include('common.footer')
    </body>
</html>
