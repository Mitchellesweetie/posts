<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <main class="login-form">
      <div class="cotainer">
          <div class="row justify-content-center">
              <div class="">
                  <div class="card1">
                      <div class="card-header">Login</div>
                      <div class="card-body">
                          <form class='form-control'method="POST" action="{{ url('/login') }}">
                              @csrf
                              <div class="form-group row">
                                  <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                  <div class="col-md-6">
                                      <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                      @if ($errors->has('email'))
                                          <span class="text-danger">{{ $errors->first('email') }}</span>
                                      @endif
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                  <div class="col-md-6">
                                      <input type="password" id="password" class="form-control" name="password" required>
                                      @if ($errors->has('password'))
                                          <span class="text-danger">{{ $errors->first('password') }}</span>
                                                                                    @endif
                                  </div>
                              </div>
                                <div class="form-group row">
                                <div class="col-md-6 offset-md-3">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                                <p>Don't have an account?<a href="/register">Signup</a>

                            </div>
                            <div class="col-md-6 offset-md-1">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </main>
</body>
</html>
