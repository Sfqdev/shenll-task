<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Budgeting Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/dashboard">Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                @auth
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('page1') ? 'active' : ''}}" href="/page1">Admin 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('page2') ? 'active' : ''}}" href="/page2">Admin 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('page3') ? 'active' : ''}}" href="/page3">User 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('page4') ? 'active' : ''}}" href="/page4">User 2</a>
                    </li>
                </ul>
                @endauth
                <ul class="navbar-nav ms-auto">
                    @auth
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Welcome back, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                          <li>
                            <form action="/logout" method="post">
                              @csrf
                              <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                            </form>
                          </li>
                        </ul>
                      </li>
                    @else
                    <li class="nav-item">
                      <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i>
                        Login
                      </a>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        @yield('container')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

</body>

</html>
