<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-secondary ml-5">
        <div class="container-fluid">
          <a class="navbar-brand black" href="#">MY BLOG</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/myposts') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/about') }}">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/services') }}">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/posts') }}">Posts</a>
              </li>




            </ul>
            <div class="d-flex">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <li><a class="dropdown-item" href="{{ route('createPost') }}">Create</a></li>
                </li>
                @auth
                    <li class="nav-item">
                        <li><a class="dropdown-item" href="{{ url('/logout') }}">Logout</a></li>
                    </li>

                @else
                    <li class="nav-item">
                        <li><a class="dropdown-item" href="{{ url('/') }}">Login</a></li>
                    </li>
                    <li class="nav-item">
                        <li><a class="dropdown-item" href="{{ url('/register') }}">Register</a></li>
                    </li>

                @endauth


                </ul>
            </div>
          </div>
        </div>
      </nav>

</body>
</html>
