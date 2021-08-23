@extends('layout.public')

@section('content')
<div class="section-body">
  <h2 class="section-title">This is Example Page</h2>
  <p class="section-lead">This page is just an example for you to create your own page.</p>
  <div class="card">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-md">
          <tr>
            <th>#</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Amount</th>
            <th>Action</th>
          </tr>
          @for ($i = 0; $i < 5; $i++)
          <tr>
            <td>{{ ($i + 1) }}</td>
            <td>Rizal Fakhri</td>
            <td>2017-01-11</td>
            <td>2</td>
            <td class="d-flex justify-content-center">
              <form action="">
                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
              </form>
              <a href="{{ route('cart.update') }}" class="btn btn-sm btn-success ml-2">Update</a>
            </td>
          </tr>
          @endfor
        </table>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <form method="post" action="">
            <div class="form-group">
              <label for="total_payment" class="control-label">Total Payment</label>
              <input id="total_payment" type="text" class="form-control" name="total_payment" readonly>
            </div>
            <div class="form-group">
              <label for="shipping_method">Shipping Method</label>
              <select id="shipping_method" class="form-control" name="shipping_method">
                <option value="jne">JNE</option>
                <option value="jnt">JNT</option>
                <option value="sicepat">Sicepat</option>
              </select>
            </div>
            <div class="form-group">
              <label for="address" class="control-label">Shipping Address</label>
              <textarea id="address" class="form-control" name="address" rows="4" cols="50"></textarea>
            </div>
            <div class="form-group">
              <label for="input_payment" class="control-label">Input Payment</label>
              <input id="input_payment" type="text" class="form-control" name="input_payment">
            </div>
            <button type="submit" class="btn btn-primary">Checkout</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection