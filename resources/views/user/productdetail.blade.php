@extends('layouts.master_innerpage')
@section('content')


 <!-- ======= Breadcrumbs ======= -->
 <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Part Details</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li><a href="{{route('user.products')}}">Parts</a></li>
          <li>Part Details</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Product Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4">

        <div class="col-lg-8">
          <div class="portfolio-details-slider swiper">
            <div class="swiper-wrapper align-items-center">

              <div class="swiper-slide">
                <img src="{{ asset('images/products/'.$product->photopath_1) }}" alt="">
              </div>

              <div class="swiper-slide">
                <img src="{{ asset('images/products/'.$product->photopath_1) }}" alt="">
              </div>

              <div class="swiper-slide">
                <img src="{{ asset('images/products/'.$product->photopath_1) }}" alt="">
              </div>

            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="portfolio-info">
            <h3>{{$product->name}}</h3>
            <ul>

              <li><strong>Part Number</strong>: {{$product->alternate_code}}</li>
              <li><strong>Price</strong>: Rs. {{$product->price}}</li>
              <li><strong>Available</strong>: {{$product->stock}} Piece</li>
              <li><strong>Detail</strong>: {{$product->description}}</li>
            </ul>
            <p class="fs-5 text-danger">
              <form action="{{route('user.orders.cart.store')}}" method="POST">
                @csrf
              <input type="hidden" name="product_id" value="{{$product->id}}"> 
              <input type="number" name="quantity" value="1" class="cart-quantity">
              <button type="submit" style="border: none; background-color: #fff;" class="text-success" ><i class="bx bx-plus"></i> Add to Card</button>
            </form>
            </p>
          </div>
          
      </div>

    </div>
  </section><!-- End Portfolio Details Section -->


  @endsection