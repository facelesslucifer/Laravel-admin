<ul class="nav navbar-nav">
    @if (Auth::check())
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                aria-haspopup="true" aria-expanded="false">
                Register <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li><a href="#">Teachers</a></li>
                <li><a href="/admin/student">Students</a></li>
            </ul>
        </li>
        <li @if (Request::is('admin/post*')) class="active" @endif>
            <a href="#">Rubrics</a>
        </li>
        <li @if (Request::is('admin/tag*')) class="active" @endif>
            <a href="#">Reading Level</a>
        </li>
        <li @if (Request::is('admin/upload*')) class="active" @endif>
            <a href="#">Term Target</a>
        </li>
        <li @if (Request::is('admin/upload*')) class="active" @endif>
            <a href="#">Notes to Parent</a>
        </li>
    @endif
</ul>

<ul class="nav navbar-nav navbar-right">
    @if (Auth::guest())
        <li><a href="/auth/login">Login</a></li>
    @else
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }}<span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li>

                    <a href="/auth/logout">
                        <span class="glyphicon glyphicon-user"></span> Profile
                    </a>
                </li>
                <li>
                    <a href="/auth/logout">
                        <span class="glyphicon glyphicon-log-out"></span> Log out
                    </a>
                </li>
            </ul>
        </li>
    @endif
</ul>