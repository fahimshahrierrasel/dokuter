<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ asset('img/bg7.jpg')}}">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

Tip 2: you can also add an image using data-image tag
-->
    <div class="logo">
        <a href="{{ url('admin/dashboard') }}" class="simple-text logo-normal">
            <img src="{{ asset('img/favicon/android-chrome-512x512.png') }}" style="height: 36px">
            Dokuter
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item ">
                <a class="nav-link" href="{{ url('admin/dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="{{ url('admin/books') }}">
                    <i class="material-icons">library_books</i>
                    <p>Books</p>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('admin/question') }}">
                    <i class="material-icons">bubble_chart</i>
                    <p>Questions</p>
                </a>
            </li>
        </ul>
    </div>
</div>