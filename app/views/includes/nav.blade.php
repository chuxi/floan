<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"> 友 借 </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">我 要 理 财</a></li>
                <li><a href="#">我 要 融 资</a></li>
                <li><a href="#">平 台 保 障</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">关 于 我 们<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">公司介绍</a></li>
                        <li><a href="#">管理团队</a></li>
                        <li><a href="#">平台公告</a></li>
                        <li class="divider"></li>
                        <li><a href="#">合作担保</a></li>
                        <li class="divider"></li>
                        <li><a href="contactus">联系我们</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                <li><a href="{{{ URL::to('dashboard') }}}">欢 迎 {{{ Auth::user()->email }}}</a></li>
                <li><a href="{{{ URL::to('logout') }}}">登 出</a></li>
                @else
                <li {{ (Request::is('login') ? ' class="active"' : '') }}><a href="{{{ URL::to('login') }}}">登 录</a></li>
                <li {{ (Request::is('register') ? ' class="active"' : '') }}><a href="{{{ URL::to('register') }}}">注 册</a></li>
                @endif
            </ul>
        </div>
    </div>

</nav>

