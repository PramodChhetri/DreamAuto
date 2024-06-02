@extends('layouts.master_user')

@section('home_content')
        

<style>
  #portfolio {
    box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1), 0px 1px 3px rgba(0, 0, 0, 0.2);
    transition: box-shadow 0.3s ease-in-out;
}

#portfolio:hover {
    box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.2), 0px 2px 6px rgba(0, 0, 0, 0.3);
}
</style>
    
          <!-- ======= About Us Section ======= -->
          <section id="about" class="about">
            <div class="container" data-aos="fade-up">
      
              <div class="section-title">
                <h2>About Us</h2>
              </div>
      
              <div class="row content">
                <div class="col-lg-6">
                  <p>
                    
                  </p>
                  <ul>
                    <li><i class="ri-check-double-line"></i> Authorized Suzuki Service Center</li>
                    <li><i class="ri-check-double-line"></i> Expert Technicians and Advanced Techniques</li>
                    <li><i class="ri-check-double-line"></i> Comprehensive Services and Customer Satisfaction</li>
                  </ul>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                  <p>
                    Welcome to Hamro Dream Pvt. Ltd. , your premier destination for top-quality car and jeep maintenance and repair services. As an authorized service center by Suzuki, we specialize in denting, painting, mechanical repairs, and comprehensive vehicle inspections, ensuring that your vehicle looks its best and runs smoothly. Founded with a passion for automobiles and a commitment to excellence, we have built a reputation for reliability and professionalism over the years. Our experienced team of technicians treats every vehicle with the utmost care, using the latest techniques and high-quality materials to deliver exceptional results.
                  </p>
                  <a href="/about" class="btn-learn-more">Learn More</a>
                </div>
              </div>
      
            </div>
          </section><!-- End About Us Section -->
    
     <!-- ======= Services Section ======= -->
     <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Expert automotive care to keep your vehicle in top condition.</p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-car"></i></div>
              <h4><a href="">Denting and Painting</a></h4>
              <p>Expert denting and painting services to restore your vehicle's finish. We ensure a flawless finish with precise color matching.</p>
            </div>
          </div>
        
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-wrench"></i></div>
              <h4><a href="">Mechanical Repairs</a></h4>
              <p>Comprehensive mechanical repairs to keep your vehicle running smoothly. Our experienced mechanics handle all types of issues.</p>
            </div>
          </div>
        
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-search"></i></div>
              <h4><a href="">Comprehensive Vehicle Inspections</a></h4>
              <p>Thorough inspections to ensure your vehicle is in top condition. We check all critical systems to prevent future breakdowns.</p>
            </div>
          </div>
        
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Customization and Upgrades</a></h4>
              <p>Enhance your vehicle with our customization and upgrade services. We offer a range of options to improve performance and appearance.</p>
            </div>
          </div>
        </div>
        

      </div>
    </section><!-- End Services Section -->


      <!-- ======= Top  Portfolio Section ======= -->
      <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Top Selling Parts</h2>
          </div>
  
          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
  
            @foreach ($topproducts as $topproduct)
      
            <div class="col-lg-4 col-md-6 portfolio-item filter-{{$topproduct->condition}}">
              <a href="{{route('user.productdetail',$topproduct->id)}}">
                <div class="portfolio-img"><img src="{{ asset('images/products/'.$topproduct->photopath_1) }}" class="img-fluid" alt=""></div>
                <div class="portfolio-info">
                </a>
                <h4>{{$topproduct->name}}</h4>
                <p>Rs. {{$topproduct->price}} (Available: {{$topproduct->stock}})</p>
                <div style="display:flex;">
                  <a href="{{ asset('images/products/'.$topproduct->photopath_1) }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{$topproduct->name}}" style="height: 45px"><i class='bx bx-zoom-in'></i></i></a>
                  <form action="{{route('user.orders.cart.store')}}" method="POST">
                    @csrf
                  <input type="hidden" name="product_id" value="{{$topproduct->id}}"> 
                  <input type="number" name="quantity" value="1" id="products-quantity">
                  <button type="submit" id="add-to-cart">+</button>
                  </form>
                </div>
        
              </div>
            </div>   
      
            @endforeach
  
          </div>
  
        </div>
      </section><!-- End Portfolio Section -->


  

@endsection