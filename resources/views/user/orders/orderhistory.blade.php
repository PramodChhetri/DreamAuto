@extends('layouts.master_innerpage')
@section('content')

 <!-- ======= Breadcrumbs ======= -->
 <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Orders</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li>Orders History</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  {{-- Content Starts Here --}}

    
<div class="container-fluid">
    <div class="row">
    <div class="col-md-2 sidebar">
      <ul class="navbar-nav">
        <li>
          <a class="nav-link" href="{{route('user.orders.index')}}">Current Orders</a>
        </li>
        <li >
            <a class="nav-link" href="{{route('user.orders.orderhistory')}}">Order History</a>
        </li>
        <li >
            <a class="nav-link" href="{{route('user.orders.cart')}}">Cart</a>
        </li>
        </ul>
    </div>
    <div class="col-md-10 content">

      <div class="card" style="background: #f3f5fa">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h2 style="color: #283a5ae6;">Order History</h2>
            </div>

            <!-- Success Message -->
            @if(session('success'))
            <div class="alert alert-success mt-4">
                {{ session('success') }}
            </div>
            @endif

            @error('quantity')
            <div class="alert alert-danger mt-4">
                {{ $message }}
            </div>
            @enderror

            <hr style="border: 1px solid #283a5ae6">
            <!-- Rest of the content -->

            <div class="table-responsive">
                <table id="mytable" class="table table-hover">
                  <thead>
                    <tr>
                        <th>Product Image</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Payment</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $OD)
                        <tr>
                          <td><img height="50px"
                            src="{{ asset('images/products/'.$OD->product->photopath_1) }}"
                            alt=""></td>
                          <td>{{$OD->product->name}}</td>
                          <td>{{$OD->quantity}}</td>
                          <td>{{$OD->total_price}}</td>
                          <td>{{$OD->payment_method}}</td>
                          <td>{{$OD->status}}</td>
                          <td>
                          @if ($OD->status == "Pending")
                          <button id="btn-action-delete" class="btn btn-danger" data-product-id="{{ $OD->id }}">Cancel</button>
                          @endif
                        </td>
                      </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>



<div id="deleteModal" class="modal">
<div class="modal-dialog">
<div class="modal-content bg-white p-4 rounded-lg">
<form action="{{route('user.orders.destroy')}}" method="POST">
@csrf
<p class="modal-title text-2xl">Are you sure you want to Cancel your Order?</p>
<input type="hidden" name="dataid" id="dataid" value="">
<div class="modal-footer justify-center">
  <input type="submit" value="Yes" class="btn btn-primary mx-2">
  <a id="btn-cancel" class="btn btn-danger mx-2">No</a>
</div>
</form>
</div>
</div>
</div>



<script>
$(document).ready(function() {
// Event delegation for dynamically generated elements
$('#mytable').on('click','#btn-action-delete', function() {
var productId = $(this).data('product-id');
$('#dataid').val(productId);
$('#deleteModal').modal('show');
});

$('#btn-cancel').on('click', function() {
$('#deleteModal').modal('hide');
});

$('#deleteModal').on('hidden.bs.modal', function() {
$('#dataid').val('');
});
});
</script>



<script>
let table = new DataTable('#mytable');
</script>


@endsection
