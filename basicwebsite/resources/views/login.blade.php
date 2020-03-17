<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
  </head>
  
  <body class="text-center">
    <div class="container" style="width:400px;">
    <form class="form-signin">
      <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="text" id="user_id" class="form-control" placeholder="User Id">
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="user_password" class="form-control" placeholder="Password">
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-secondary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
</div>
  </body>
</html>
