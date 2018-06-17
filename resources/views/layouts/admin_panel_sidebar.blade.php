<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="{{ url('/dashboard') }}">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
        </a>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Appointments">
        <a class="nav-link" href="{{url('/appointments')}}">
            <i class="fa fa-fw fa-user-md"></i>
            <span class="nav-link-text">Appointments</span>
        </a>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Questions">
        <a class="nav-link" href="{{ url('/questions') }}">
            <i class="fa fa-fw fa-question-circle-o"></i>
            <span class="nav-link-text">Questions</span>
        </a>
    </li>
</ul>
<ul class="navbar-nav sidenav-toggler">
    <li class="nav-item">
        <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
        </a>
    </li>
</ul>