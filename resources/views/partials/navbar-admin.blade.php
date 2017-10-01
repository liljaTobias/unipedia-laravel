<ul class="nav">
    <li {{{ (Request::is('admin/dashboard') ? 'class=active' : '') }}}>
        <a href="dashboard">
            {{-- <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span> --}}
            Dashboard
        </a>
    </li>

    <li {{{ (Request::is('admin/courses') ? 'class=active' : '') }}}>
        <a href="courses">
            {{-- <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> --}}
            Courses
        </a>
    </li>

    <li {{{ (Request::is('admin/schools') ? 'class=active' : '') }}}>
        <a href="schools">
            {{-- <span class="glyphicon glyphicon-user" aria-hidden="true"></span> --}}
            Schools
        </a>
    </li>

    {{-- <li>
        <a data-toggle="collapse" href="#school-dropdown" class="collapsed" aria-expanded="true">Schools</a>
        <div class="collapse" id="school-dropdown" aria-expanded="true">
            <ul class="nav-child">
                <li><a href="#">All Schools</a></li>
                <li><a href="#">New School</a></li>
                <li><a href="#">Update School</a></li>
            </ul>
        </div>
    </li> --}}

    <li {{{ (Request::is('admin/users') ? 'class=active' : '') }}}>
        <a href="users">
            {{-- <span class="glyphicon glyphicon-user" aria-hidden="true"></span> --}}
            Users
        </a>
    </li>
</ul>   