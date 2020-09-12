<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/')}}/css/main.css">
    <title>Login</title>
</head>
<body>


    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="tile">
              <h3 class="tile-title">Login Form</h3>
              <div class="tile-body">
                <form action="{{route('admin.login')}}" method="POST">
                    @csrf
               
                  <div class="form-group">
                    <label class="control-label">Email</label>
                    <input class="form-control" name="email" type="email" placeholder="Enter email address">
                    @error('email')
                    <div class="form-control-feedback text-danger font-weight-bold">{{$message}}</div>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label class="control-label">Password</label>
                    <input class="form-control" name="password" type="password" placeholder="Enter Password address">
                    @error('password')
                    <div class="form-control-feedback text-danger font-weight-bold">{{$message}}</div>
                    @enderror
                  </div>

          

                  <div class="tile-footer">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Login</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="#"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
                  </div>

                </form>
              </div>
             
            </div>
          </div>
    </div>

</body>
</html>