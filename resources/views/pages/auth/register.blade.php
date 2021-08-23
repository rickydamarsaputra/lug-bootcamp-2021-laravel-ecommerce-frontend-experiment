@extends('layout.auth')

@section('content')
<div class="card card-primary">
  <div class="card-header">
    <h4>Register</h4>
  </div>

  <div class="card-body">
    <form method="POST" action="#">
      <div class="form-group">
        <label for="username" class="control-label">Username</label>
        <input id="username" type="text" class="form-control" name="username">
      </div>

      <div class="form-group">
        <label for="email" class="control-label">Email</label>
        <input id="email" type="email" class="form-control" name="email">
      </div>

      <div class="form-group">
        <label for="password" class="control-label">Password</label>
        <input id="password" type="password" class="form-control" name="password">
      </div>

      <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
        Register
      </button>
    </form>

  </div>
</div>
<div class="mt-2 text-muted text-center">
  I am alredy have account <a href="{{ route('auth.login') }}">Login</a>
</div>
@endsection