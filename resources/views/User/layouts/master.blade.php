<!DOCTYPE html>
<html lang="zxx">

@include('layouts.headLink')



<body>

 <!-- Custom Styles -->
 <style>
        .alert {
            transition: opacity 0.5s ease-out;
        }

        .sidebar {
            height: 100vh;
            background: #343a40;
            color: white;
        }

        .sidebar a {
            color: white;
        }
    </style>


<div id="app">
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Admin Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('profil')}}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <!-- Sidebar -->
                <div class="col-md-2 sidebar">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Settings</a>
                        </li>
                    </ul>
                </div>

                <!-- Main Content -->
                <div class="col-md-10">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>




     <!-- Scripts -->
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>

</html>
