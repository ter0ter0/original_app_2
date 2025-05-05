<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand text-secondary fs-2" href="/">Note</a>

        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a href="#about" class="nav-link">サイト紹介</a></li>
                <li class="nav-item"><a href="#works" class="nav-link">世界</a></li>
                <li class="nav-item"><a href="#contact" class="nav-link">お問い合わせ</a></li>
            </ul>
            <ul class="navbar-nav" id="auth-nav">
                @if(Auth::check())
                    <li class="nav-item"><a href="{{ route('logout')}}" class="nav-link text-secondary">ログアウト</a></li>
                @else
                    <li class="nav-item"><a href="{{ route('register') }}" class="nav-link text-muted">新規ユーザー登録</a></li>
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link text-muted">ログイン</a></li>
                @endif
            </ul>
        </div>
    </nav>
</header>

