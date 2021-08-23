@extends('layout.public')

@section('content')
<div class="section-body">
  <h2 class="section-title">This is Example Page</h2>
  <p class="section-lead">This page is just an example for you to create your own page.</p>
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="card">
        <div class="card-body">
          <div class="form-group">
            <label for="product_name" class="control-label">Product Name</label>
            <input id="product_name" type="text" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label for="product_price" class="control-label">Product Price</label>
            <input id="product_price" type="text" class="form-control" readonly>
          </div>
          <div class="form-group">
            <label for="product_image" class="control-label">Product Thumbnail</label>
            <img src="/assets/img/news/img08.jpg" alt="" class="img-fluid d-block mb-2" style="width: 250px;">
          </div>
          <div class="form-group">
            <label for="product_desc" class="control-label">Product Description</label>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae, ipsam. Nobis, dolorem totam commodi possimus sed ut nostrum minus numquam?</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection