<nav class="navbar navbar-default" style="border-radius: 0px;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">名語郎Q</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/statements/index">トップページ</a></li>
        <li><a href="/statements/add">語録を投稿</a></li>
      </ul>
      <form class="navbar-form navbar-left" action="/statements/search" method="get">
        <div class="form-group">
          <input type="text" name="keyword" class="form-control" placeholder="検索したい文字列">
        </div>
        <button type="submit" class="btn btn-default">検索</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
          @guest
          <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">ログイン</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">ログアウト</a>
              {{-- baldeでアンダーバーをふたつ続けて書くと何になるの？ --}}
          </li>
        <!-- <li><a href="/logout">ログアウト</a></li> -->
          @else
          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  ようこそ {{ Auth::user()->name }} さん<span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
          </li>
          @endguest
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="container">
  <div class="row">
      <div class="col-md-12">
          @if(session()->has('message'))
          <div class="alert alert-info mb-3">
              {{session('message')}}
          </div>
          @endif
      </div>
  </div>
</div>