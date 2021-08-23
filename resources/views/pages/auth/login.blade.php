@extends('layout.auth')

@section('content')
<div class="card card-primary">
  <div class="card-header">
    <h4>Login</h4>
  </div>

  <div class="card-body">
    <form method="POST" action="#">
      <div class="form-group">
        <label for="email" class="control-label">Email</label>
        <input id="email" type="email" class="form-control" name="email">
      </div>

      <div class="form-group">
        <label for="password" class="control-label">Password</label>
        <input id="password" type="password" class="form-control" name="password">
      </div>

      <button type="submit" class="btn btn-primary btn-lg btn-block">
        Login
      </button>
    </form>

  </div>
</div>
<div class="mt-2 text-muted text-center">
  Don't have an account? <a href="{{ route('auth.register') }}">Create One</a>
</div>
@endsection