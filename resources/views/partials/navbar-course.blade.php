<ul class="nav">
    <li {{{ (Request::is('dashboard') ? 'class=active' : '') }}}>
       {{--  <div class="content">    
        {{ Form::open() }}
        {{ Form::text('code', null, array('placeholder' => 'Search...', 'class' => 'form-control')) }}
        </div> --}}
        <a href="/search">
            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            Search...
        </a>
    </li>

    <li {{{ (Request::is('courses') ? 'class=active' : '') }}}>
        <a href="courses">
            <span class="glyphicon glyphicon-book" aria-hidden="true"></span>
            Courses
        </a>
    </li>
    
    @if(Auth::check())
    
    <hr>
    <li {{{ (Request::is('users') ? 'class=active' : '') }}}>
        <a href="users">
            {{-- <span class="glyphicon glyphicon-user" aria-hidden="true"></span> --}}
            Manage Content
        </a>
    </li>

    <li {{{ (Request::is('users') ? 'class=active' : '') }}}>
        <a href="users">
            {{-- <span class="glyphicon glyphicon-user" aria-hidden="true"></span> --}}
            Moderators
        </a>
    </li>

    <li {{{ (Request::is('users') ? 'class=active' : '') }}}>
        <a href="users">
            {{-- <span class="glyphicon glyphicon-user" aria-hidden="true"></span> --}}
            Logout
        </a>
    </li>

    @endif
</ul>