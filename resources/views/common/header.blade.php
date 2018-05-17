        <header id="top-head">
           <div class="inner">
              <div id="mobile-head">
                 <h1 class="logo"><a href="/">SmartFunding</a></h1>
                 <div id="nav-toggle">
                    <div>
                       <span></span>
                       <span></span>
                       <span></span>
                    </div>
                 </div>
             </div>
             <nav id="global-nav">
                <ul>
                   @auth
                   @else
                   <li><a href="about">SmartFundingとは</a></li>
                   @endauth
                   <li><a href="all_projects">プロジェクト一覧</a></li>
                   @auth
                   <li><a href="home">マイページトップ</a></li>
                   <li><a href="/logout">ログアウト</a></li>
                   @else
                   <li><a href="{{ route('register') }}">会員登録</a></li>
                   <li><a href="{{ route('login') }}">ログイン</a></li>
                   @endauth
                </ul>
             </nav>
          </div>
        </header>