<div class="container-fluid">
    <div class="row">
        <div class="col-md-3 sidebar-container">
            <form wire:submit.prevent="updated">
                <label class="form-label mt-2">Search Product By Name:</label>
                <div class="search-bar">
                    <input wire:model="name" style="width: 100%; padding: 6px 12px; outline: none; border: 2px solid #ddd; border-radius: 4px;"
                    type="text" placeholder="Search Name">
                </div>
  
                <label class="form-label mt-2">Search Product By Code:</label>
                <div class="search-bar">
                    <input wire:model="code" style="width: 100%; padding: 6px 12px; outline: none; border: 2px solid #ddd; border-radius: 4px;"
                    type="text" placeholder="Search By Code">
                </div>
                
                <div class="form-group">
                    <label class="form-label" for="min-price">Price Range:</label>
                    <div class="price-input-group" style="display: flex; align-items: center;">
                        <input wire:model="minprice" type="number" class="form-control form-control-price" style="flex: 1; height: 40px; border: 1px solid #ddd; border-radius: 5px; padding: 5px;" id="min-price" placeholder="Min" min="0" max="1000" step="10">
                        <span class="separator" style="margin: 0 10px; font-weight: bold;">-</span>
                        <input wire:model="maxprice" type="number" class="form-control form-control-price" style="flex: 1; height: 40px; border: 1px solid #ddd; border-radius: 5px; padding: 5px;" id="max-price" placeholder="Max" min="0" max="1000" step="10">
                    </div>
                </div>
  
                <div class="form-group">
                    <label for="price-order">Price Order:</label>
                    <select wire:model="priceOrder" class="form-control" id="price-order">
                        <option value="">None</option>
                        <option value="asc">Low to High</option>
                        <option value="desc">High to Low</option>
                    </select>
                </div>
            </form>
        </div>
  
        <div class="col-md-9">
            <div id="main-content">
                <section id="portfolio" class="portfolio">
                    <div class="container">
                        <div class="row portfolio-container">
                            {{-- data-aos="fade-up" --}}
                            @foreach ($products as $product)
                            <div class="col-lg-4 col-md-6 portfolio-item">
                                <a href="{{route('user.productdetail',$product->id)}}">
                                    <div class="portfolio-img"><img src="{{ asset('images/products/'.$product->photopath_1) }}" class="img-fluid" alt=""></div>
                                    <div class="portfolio-info">
                                    </a>
                                    <h4>{{$product->name}}</h4>
                                    <p>Rs. {{$product->price}} (Available: {{$product->stock}})</p>
                                    <div style="display:flex;">
                                        <a href="{{ asset('images/products/'.$product->photopath_1) }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{$product->name}}" style="height: 45px"><i class='bx bx-zoom-in'></i></i></a>
                                        <form action="{{route('user.orders.cart.store')}}" method="POST">
                                          @csrf
                                        <input type="hidden" name="product_id" value="{{$product->id}}"> 
                                        <input type="number" name="quantity" value="1" id="products-quantity">
                                        <button type="submit" id="add-to-cart">+</button>
                                        </form>
                                      </div>
                                </div>
                            </div>   
                            @endforeach
                        </div>
                        {{ $products->links() }}
                        <style>
                            svg {
                                width: 25px;
                            }
                        </style>   
                    </div>
                </section>
            </div>
        </div>
    </div>
  </div>
  
  <script>
    $(document).ready(function() {
        $('#sidebar-toggle').click(function() {
            $('.sidebar-container').toggleClass('hide');
            $('#main-content').toggleClass('col-md-9 col-md-12');
        });
    });
  </script>
  