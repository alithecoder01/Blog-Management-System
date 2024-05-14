<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <!-- Name -->
            <a class="navbar-brand" href="{{url('/home')}}">Blog Managment</a>
            
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbarItms">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/home')}}">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Body -->
    <div class="container mt-5">
        @yield('content')
        
    </div>
</body>
</html>