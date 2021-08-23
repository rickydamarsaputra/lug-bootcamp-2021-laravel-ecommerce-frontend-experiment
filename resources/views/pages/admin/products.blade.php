@extends('layout.public')

@section('content')
<div class="section-body">
  <h2 class="section-title">This is Example Page</h2>
  <p class="section-lead">This page is just an example for you to create your own page.</p>
  <div class="card">
    <div class="card-body">
      <a href="{{ route('admin.product.create') }}" class="btn btn-primary mb-4"><i class="fas fa-plus-circle mr-2"></i>Add Product</a>
      <div class="table-responsive">
        <table class="table table-bordered table-md">
          <tr>
            <th>#</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Action</th>
          </tr>
          @for ($i = 0; $i < 5; $i++)
          <tr>
            <td>{{ ($i + 1) }}</td>
            <td>Rizal Fakhri</td>
            <td>2</td>
            <td class="d-flex justify-content-center">
              <form action="">
                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
              </form>
              <a href="{{ route('admin.product.update') }}" class="btn btn-sm btn-success ml-2">Update</a>
              <a href="{{ route('admin.product.detail') }}" class="btn btn-sm btn-info ml-2">Detail</a>
            </td>
          </tr>
          @endfor
        </table>
      </div>
    </div>
  </div>
</div>
@endsection