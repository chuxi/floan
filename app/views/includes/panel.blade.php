<div class="panel">
    <ul class="nav nav-tabs">
        <li {{(Request::is('about/jieshao') ? 'class="active"' : '' )}}><a href="{{{ URL::to('about/jieshao') }}}">公司介绍</a></li>
        <li {{(Request::is('about/tuandui') ? 'class="active"' : '' )}}><a href="{{{ URL::to('about/tuandui') }}}">管理团队</a></li>
        <li {{(Request::is('about/gonggao') ? 'class="active"' : '' )}}><a href="{{{ URL::to('about/gonggao') }}}">平台公告</a></li>
        <li class="divider"></li>
        <li {{(Request::is('about/danbao') ? 'class="active"' : '' )}}><a href="{{{ URL::to('about/danbao') }}}">合作担保</a></li>
        <li class="divider"></li>
        <li {{(Request::is('about/contactus') ? 'class="active"' : '' )}}><a href="{{{ URL::to('about/contactus') }}}">联系我们</a></li>
    </ul>
</div>