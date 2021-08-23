@extends('layout.public')

@section('content')
<div class="section-body">
  <h2 class="section-title">Hi, Ujang!</h2>
  <p class="section-lead">
    Change information about yourself on this page.
  </p>

  <div class="row justify-content-center mt-sm-4">
    <div class="col-12 col-md-12 col-lg-7">
      <div class="card">
        <div class="card-header">
          <h4>Edit Profile</h4>
        </div>
        <div class="card-body">
          <form method="post" action="">
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
            <button class="btn btn-primary">Save Changes</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection