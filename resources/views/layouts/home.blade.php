<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>School management system</title>

    <!-- Scripts -->

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- jquery script -->
</head>
<body>
    <div id="app">
        <div class="d-flex" id="wrapper" >

            <!-- Sidebar -->

                <div class="bg-white shadow-sm border-right" id="sidebar-wrapper" >
                    <div class="sidebar-heading" >School Logo</div>
                        <div class="list-group list-group-flush">
                            <a href="{{ route('home') }}" class="list-group-item list-group-item-action bg-white">Dashboard</a>

                            @if(Auth::user()->role == "admin")
                                <a href="{{ route('students.index') }}" class="list-group-item list-group-item-action bg-white">Students</a>
                                <a href="{{ route('clases.index') }}" class="list-group-item list-group-item-action bg-white">Classes</a>
                                <a href="{{ route('guardians.index') }}" class="list-group-item list-group-item-action bg-white">Guardians</a>
                                <a href="{{ route('teachers.index') }}" class="list-group-item list-group-item-action bg-white">Teachers</a>
                                <a href="{{ route('admin.index') }}" class="list-group-item list-group-item-action bg-white">Users</a>
                                <a href="{{ route('workers.index') }}" class="list-group-item list-group-item-action bg-white">Workers</a>
                                <a href="{{ route('announcements.index') }}" class="list-group-item list-group-item-action bg-white">Announcements</a>
                                <a href="{{ route('projects.index') }}" class="list-group-item list-group-item-action bg-white">Projects</a>
                            @endif

                            @if(Auth::user()->role == "teacher")
                                <a href="{{ route('attendances.index') }}" class="list-group-item list-group-item-action bg-white">Attendances</a>
                                <a href="{{ route('scores.index') }}" class="list-group-item list-group-item-action bg-white">Class Scores</a>
                                <a href="{{ route('results.index') }}" class="list-group-item list-group-item-action bg-white">Results</a>
                                <a href="{{ route('teachers_timetables.index') }}" class="list-group-item list-group-item-action bg-white">Time table</a>
                                <a href="{{ route('teachers_announcements.index') }}" class="list-group-item list-group-item-action bg-white">Announcements</a>
                                
                            @endif

                            @if(Auth::user()->role == "guardian")
                                <a href="{{ route('guardians_results.index') }}" class="list-group-item list-group-item-action bg-white">Results</a>
                                <a href="{{ route('guardians_scores.index') }}" class="list-group-item list-group-item-action bg-white">Class Scores</a>
                                <a href="{{ route('guardians_fees.index') }}" class="list-group-item list-group-item-action bg-white">Fees</a>
                                <a href="{{ route('guardians_announcements.index') }}" class="list-group-item list-group-item-action bg-white">Announcements</a>
                            @endif

                            @if(Auth::user()->role == "finance")
                                <a href="{{ route('fees.index') }}" class="list-group-item list-group-item-action bg-white">Fees</a>
                                <a href="{{ route('finances_announcements.index') }}" class="list-group-item list-group-item-action bg-white">Announcements</a>
                            @endif

                            @if(Auth::user()->role == "librarian")
                                <a href="{{ route('libraries.index') }}" class="list-group-item list-group-item-action bg-white">Books</a>
                                <a href="{{ route('libraries_announcements.index') }}" class="list-group-item list-group-item-action bg-white">Announcements</a>
                            @endif

                        </div>
                </div>    
            
            <!-- /#sidebar-wrapper -->
            <!-- Page Content -->
            <div id="page-content-wrapper">
                <nav class="navbar sticky-top navbar-expand-md navbar-light bg-white mr-auto">
                    <div class="container">

                    @if(Auth::user()->role == "admin")
                        <a class="navbar-brand" href="{{ route('students.index')}}">
                            Students 
                        </a>
                        <a class="navbar-brand" href="{{ route('clases.index')}}">
                            Classes 
                        </a>  
                        <a class="navbar-brand" href="{{ route('teachers.index')}}">
                            Teachers 
                        </a>
                        <a class="navbar-brand" href="{{ route('guardians.index')}}">
                            Guardians 
                        </a>
                        <a class="navbar-brand" href="{{ route('admin.index')}}">
                            Users 
                        </a>
                        <a class="navbar-brand" href="{{ route('workers.index')}}">
                            Workers 
                        </a>
                        <a class="navbar-brand" href="{{ route('announcements.index')}}">
                            Announcements 
                        </a>
                        <a class="navbar-brand" href="{{ route('projects.index')}}">
                            Projects 
                        </a>
                    @endif

                    @if(Auth::user()->role == "teacher")
                        <a class="navbar-brand" href="{{ route('attendances.index')}}">
                            Attendances 
                        </a>
                        <a class="navbar-brand" href="{{ route('scores.index')}}">
                            Class Scores 
                        </a>
                        <a class="navbar-brand" href="{{ route('results.index')}}">
                            Results 
                        </a>
                        <a class="navbar-brand" href="{{ route('teachers_timetables.index')}}">
                            Time Table 
                        </a>
                        <a class="navbar-brand" href="{{ route('teachers_announcements.index')}}">
                            Announcements
                        </a>
                    @endif

                    @if(Auth::user()->role == "finance")
                        <a class="navbar-brand" href="{{ route('fees.index')}}">
                            Fees 
                        </a>
                        <a class="navbar-brand" href="{{ route('finances_announcements.index')}}">
                            Announcements
                        </a>
                    @endif

                    @if(Auth::user()->role == "guardian")
                        <a class="navbar-brand" href="{{ route('guardians_results.index')}}">
                            Results 
                        </a>
                        <a class="navbar-brand" href="{{ route('guardians_scores.index')}}">
                            Class Scores 
                        </a>
                        <a class="navbar-brand" href="{{ route('guardians_fees.index')}}">
                            Fees 
                        </a>
                        <a class="navbar-brand" href="{{ route('guardians_announcements.index')}}">
                            Announcements
                        </a>
                    @endif

                    @if(Auth::user()->role == "librarian")
                        <a class="navbar-brand" href="{{ route('libraries.index')}}">
                            Books 
                        </a>
                        <a class="navbar-brand" href="{{ route('libraries_announcements.index')}}">
                            Announcements
                        </a>
                    @endif

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav me-auto">

                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ms-auto">
                                    <li class="nav-item dropdown">
                                        
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            <div class="container-fluid">
                
                <main class="py-4">
                    @yield('content')
                </main>

                <!-- Footer -->
                <footer class="page-footer font-small">

                <!-- Copyright -->
                <div class="footer-copyright text-center py-3">© 2022 Copyright:
                <a> School </a>
                </div>
                <!-- Copyright -->

                </footer>
                <!-- Footer -->
            </div>
            </div>
                
            <!-- /#page-content-wrapper -->

            </div>
            <!-- /#wrapper -->
        </div>
    </div>
</body>
</html>
