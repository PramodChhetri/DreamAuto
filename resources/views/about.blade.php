@extends('layouts.homemaster_innerpage')
@section('content')

       <!-- ======= Breadcrumbs ======= -->
       <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
  
          <div class="d-flex justify-content-between align-items-center">
            <h2>About</h2>
            <ol>
              <li><a href="/">Home</a></li>
              <li>About</li>
            </ol>
          </div>
  
        </div>
      </section><!-- End Breadcrumbs -->
  
      <!-- ======= About Us Section ======= -->
      <section id="about-us" class="about-us">
        <div class="container" data-aos="fade-up">
  
          <div class="row content">
            <div class="col-lg-6" data-aos="fade-right">
              <h2>Dream Auto Pvt. Ltd.</h2>
              <h3>At Dream Auto Pvt. Ltd., we pride ourselves on our expertise in denting and painting, restoring your vehicle’s bodywork to its original condition with precision color matching and a flawless finish. </h3>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
              <p>
                Welcome to Dream Auto Pvt. Ltd., your premier destination for top-quality car and jeep maintenance and repair services. As an authorized service center by Suzuki, we specialize in denting, painting, mechanical repairs, and comprehensive vehicle inspections, ensuring that your vehicle looks its best and runs smoothly. Founded with a passion for automobiles and a commitment to excellence, we have built a reputation for reliability and professionalism over the years. Our experienced team of technicians treats every vehicle with the utmost care, using the latest techniques and high-quality materials to deliver exceptional results.
              </p>
              <ul>
                <li><i class="ri-check-double-line"></i> Authorized Suzuki Service Center</li>
                <li><i class="ri-check-double-line"></i> Expert Technicians and Advanced Techniques</li>
                <li><i class="ri-check-double-line"></i> Comprehensive Services and Customer Satisfaction</li>
              </ul>
              <p class="fst-italic">
                Customer satisfaction is our top priority, and we strive to exceed your expectations with our friendly service, transparent pricing, and exceptional results. Visit Dream Auto Pvt. Ltd. today and experience the difference. Your dream ride deserves the best, and we are here to deliver just that.
              </p>
            </div>
          </div>
  
        </div>
      </section><!-- End About Us Section -->
  
      <!-- ======= Our Team Section ======= -->
      <section id="team" class="team section-bg">
        <div class="container">
  
          <div class="section-title" data-aos="fade-up">
            <h2>Our <strong>Team</strong></h2>
            <p>The core team of the organization direct the quality and direction of the organization. We have the best people of the industry who asset the data and improves the quality of the oraganization</p>
          </div>
  
          <div class="row">
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-3">
              <div class="member" data-aos="fade-up">
                <div class="member-img">
                  <img src="{{asset('frontend/assets/img/team/team3.jpg')}}" class="img-fluid" alt="">
                 
                </div>
                <div class="member-info">
                  <h4>Walter White</h4>
                  <span>Chief Executive Officer</span>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-3">
              <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                  <img src="{{asset('frontend/assets/img/team/team4.jpg')}}" class="img-fluid" alt="">
                  
                </div>
                <div class="member-info">
                  <h4>Sarah Jhonson</h4>
                  <span>Product Manager</span>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-3">
              <div class="member" data-aos="fade-up" data-aos-delay="200">
                <div class="member-img">
                  <img src="{{asset('frontend/assets/img/team/team1.jpg')}}" class="img-fluid" alt="">
                 
                </div>
                <div class="member-info">
                  <h4>Arbind Gupta</h4>
                  <span>Parts Manager</span>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-3">
              <div class="member" data-aos="fade-up" data-aos-delay="300">
                <div class="member-img">
                  <img src="{{asset('frontend/assets/img/team/team2.jpg')}}" class="img-fluid" alt="">
                 
                </div>
                <div class="member-info">
                  <h4>Hema Kumar</h4>
                  <span>CCD Head</span>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-3">
              <div class="member" data-aos="fade-up" data-aos-delay="300">
                <div class="member-img">
                  <img src="{{asset('frontend/assets/img/team/team5.jpg')}}" class="img-fluid" alt="">
                 
                </div>
                <div class="member-info">
                  <h4>Bhim Maya Sinjali Magar</h4>
                  <span>Accountant</span>
                </div>
              </div>
            </div>

           
          </div>
  
        </div>
      </section><!-- End Our Team Section -->
  

@endsection