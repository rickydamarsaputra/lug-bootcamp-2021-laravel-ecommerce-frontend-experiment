@extends('layout.public')

@section('content')
<div class="section-body">
  <h2 class="section-title">This is Example Page</h2>
  <p class="section-lead">This page is just an example for you to create your own page.</p>
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="card">
        <div class="card-body">
          <form action="">
            <div class="form-group">
              <label for="product_name" class="control-label">Product Name</label>
              <input id="product_name" type="text" class="form-control" name="product_name">
            </div>
            <div class="form-group">
              <label for="product_price" class="control-label">Product Price</label>
              <input id="product_price" type="text" class="form-control" name="product_price">
            </div>
            <div class="form-group">
              <label for="product_image" class="control-label">Product Thumbnail</label>
              <img src="/assets/img/news/img08.jpg" alt="" class="img-fluid d-block mb-2" style="width: 250px;">
              <input type="file" class="form-control" name="product_image">
            </div>
            <div class="form-group">
              <label for="product_desc" class="control-label">Product Description</label>
              <textarea id="product_desc" class="form-control summernote-simple" name="product_desc"></textarea>
            </div>
            <button type="submit" class="btn btn-success"><i class="fas fa-plus-circle mr-2"></i>Update Product</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection