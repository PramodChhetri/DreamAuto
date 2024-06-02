@extends('layouts.master_home')

@section('home_content')
        
    <style> 
    .custom-bg-grey-500 {
    background-color: #7d7d7d; /* Adjust the color code as needed */
}

.map-responsive {
  position: relative;
  overflow: hidden;
  padding-top: 56.25%; /* 16:9 Aspect Ratio */
}

.map-responsive iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
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
                Welcome to Dream Auto Pvt. Ltd. , your premier destination for top-quality car and jeep maintenance and repair services. As an authorized service center by Suzuki, we specialize in denting, painting, mechanical repairs, and comprehensive vehicle inspections, ensuring that your vehicle looks its best and runs smoothly. Founded with a passion for automobiles and a commitment to excellence, we have built a reputation for reliability and professionalism over the years. Our experienced team of technicians treats every vehicle with the utmost care, using the latest techniques and high-quality materials to deliver exceptional results.
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
      
            <div class="col-lg-4 col-md-6 portfolio-item ">
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
  
          <div class="col-12 d-flex justify-content-end">
            <a href="{{route('user.products')}}" class="btn-more ">More Products</a>
          </div>
        </div>
      </section><!-- End Portfolio Section -->
  
      <!-- ======= Team Section ======= -->
      <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Team</h2>
            <p>The core team of the organization direct the quality and direction of the organization. We have the best people of the industry who asset the data and improves the quality of the oraganization</p>
          </div>
  
          <div class="row">
  
            <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
              <div class="member d-flex align-items-start">
                <div class="pic"><img  src="{{asset('frontend/assets/img/team/team3.jpg')}}" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Santosh Malla Thakuri</h4>
                  <span>Chief Executive Officer</span>
                  <p>Incharge of the management and administrative direction of organization</p>
                  <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="200">
              <div class="member d-flex align-items-start">
                <div class="pic"><img src="{{asset('frontend/assets/img/team/team4.jpg')}}" class="img-fluid" alt=""></div>
                <div class="member-info">
                  <h4>Pravin Chhetri</h4>
                  <span>Manager</span>
                  <p>Responsible for monitoring products and assisting strategic direction</p>
                  <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>
  
        
          </div>
  
        </div>
      </section><!-- End Team Section -->
  
  
      <!-- ======= Frequently Asked Questions Section ======= -->
      <section id="faq" class="faq section">
        <div class="container" >
  
          <div class="section-title">
            <h2>Frequently Asked Questions</h2>
            <p>Here are the top questions that are frequently asked by customerer through different social media platforms.</p>
          </div>
  
          <div class="faq-list">
            <ul>
              <li data-aos="fade-up " style="background-color: #f3f5fa; " data-aos-delay="100">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-target="#faq-list-1">Why should I choose Dream Auto Pvt. Ltd. for my car maintenance? </a>
                <div id="faq-list-1"  data-bs-parent=".faq-list">
                  <p>
                    At Dream Auto Pvt. Ltd., we ensure quality service by experienced technicians using genuine parts, preserving your vehicle's warranty.
                  </p>
                </div>
              </li>
  
              <li data-aos="fade-up" style="background-color: #f3f5fa; " data-aos-delay="200">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-target="#faq-list-2" >How to book a service appointment?</a>
                <div id="faq-list-2"  data-bs-parent=".faq-list">
                  <p>
                    You can easily schedule a service by calling us or using our online booking platform.
                  </p>
                </div>
              </li>
  
              <li data-aos="fade-up " style="background-color: #f3f5fa; " data-aos-delay="300">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-target="#faq-list-3" >What services does Dream Auto Pvt. Ltd. offer?</a>
                <div id="faq-list-3"  data-bs-parent=".faq-list">
                  <p>
                    We provide a range of automotive services including denting, painting, mechanical repairs, comprehensive inspections, and customization/upgrades.
                  </p>
                </div>
              </li>
  
              <li data-aos="fade-up" style="background-color: #f3f5fa; " data-aos-delay="400">
                <i class="bx bx-help-circle icon-help"></i> <a  data-bs-target="#faq-list-4" >Do you offer any discounts or loyalty programs for regular customers?</a>
                <div id="faq-list-4"  data-bs-parent=".faq-list">
                  <p>
                    Yes, we have special discounts and loyalty programs available for our valued customers; inquire with us for more details.
                  </p>
                </div>
              </li>
  
              <li style="background-color: #f3f5fa; ">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-target="#faq-list-5" >Can I get a loaner car while my vehicle is being serviced?</a>
                <div id="faq-list-5"  data-bs-parent=".faq-list">
                  <p>
                    Yes, we offer loaner cars or shuttle services to ensure minimal disruption to your daily routine during the service period.
                  </p>
                </div>
              </li>
  
            </ul>
          </div>
  
        </div>
      </section><!-- End Frequently Asked Questions Section -->


      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Contact</h2>
            <p>You can contact our team if you have questions and suggestion for our site</p>
          </div>
  
          <div class="row">
            <div class="col-lg-5 d-flex align-items-stretch">
              <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>Savapati chowk, Kawasoti-8 , Nawalparasi, Nepal</p>
                </div>
          
                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>kawasotisuzukiservice@gmail.com</p>
                </div>
          
                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p>+977 9845764109</p>
                </div>
          
                <div class="map-responsive">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14137.778171859587!2d84.1235994!3d27.6417148!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399451a04fd215bd%3A0xa0dc61d1ae8a05f2!2sSuzuki%20service%20center%20(hamro%20dream%20auto)!5e0!3m2!1sne!2snp!4v1717147197277!5m2!1sne!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
            </div>
          
            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
              <form action="{{route('send.email')}}" method="post" class="contact-form">
                @csrf
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                      @error('name')
                      <span class="message-error">{{$message}}</span>
                      @enderror
                  </div> 
                  <div class="form-group col-md-6">
                    <label for="phone">Phone No.</label>
                    <input type="text" class="form-control" name="phone" id="phone" required>
                    @error('phone')
                      <span class="message-error">{{$message}}</span>
                  @enderror
                  </div>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="email" id="email" required>
                </div>
                  @error('email')
                      <p class="message-error">{{$message}}</p>
                  @enderror
                <div class="form-group">
                  <label for="subject">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject" required>
                </div>
                  @error('subject')
                      <p class="message-error">{{$message}}</p>
                  @enderror
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea class="form-control" name="message" id="message" rows="10" required></textarea>
                </div>
                  @error('message')
                      <p class="message-error">{{$message}}</p>
                  @enderror
                  <div style="text-align: center;">
                    <button type="submit" class="contact-button">Send Message</button>
                  </div>
              </form>
            </div>
          </div>
          
  
        </div>
      </section><!-- End Contact Section -->
 
      
@endsection