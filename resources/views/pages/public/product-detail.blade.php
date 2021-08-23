@extends('layout.public')

@section('content')
<div class="section-body mt-5">
  <div class="row">
    <div class="col-12 col-sm-6 col-md-6 col-lg-5">
      <img src="/assets/img/news/img08.jpg" alt="" class="img-fluid">
    </div>
    <div class="col-12 col-sm-6 col-md-6">
      <h2>Excepteur sint occaecat cupidatat non proident</h2>
      <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur.
      </p>
      <h4 class="d-flex align-items-center">
        <i class="fas fa-tags mr-2"></i>
        <span>10.000</span>
      </h4>
      <h5 class="mt-4">Order Amount</h5>
      <form method="POST" action="#">
        <div class="form-group">
          <input id="order_amount" type="text" class="form-control border-2" name="order_amount" placeholder="enter your order amount...">
        </div>
        <button type="submit" class="btn btn-primary">
          <i class="fas fa-shopping-cart mr-2"></i>Add To Cart
        </button>
      </form>
    </div>
  </div>
</div>
@endsection