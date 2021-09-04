<!-- banner-section start  -->
  <section class="banner-section bg_img" data-background="<?=self::RES?>/images/banner.jpg">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-7">
          <div class="banner-content">
            <h1 class="title">find your own car</h1>
            <p>Whether you’re visiting for business or leisure, picking up a cheap rental car in your city will help you see things at your own pace. Visit various attractions and go sightseeing at will instead of forking out money on rideshares or figuring out which bus or train connections you’ll need to make. You can even go on a road trip and see what the area around your city has to offer.</p>
            <a href="<?=self::ROOT?>/cars" class="cmn-btn">see all vehicles</a>
          </div>
        </div>
        <div class="col-md-5">
          <div class="banner-img">
            <img src="<?=self::RES?>/images/elements/banner-man.png" alt="image">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- banner-section end  -->

  <!-- search-section start -->
  <section class="search-section pt-120 pb-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="car-search-area">
            <h3 class="title">Search for Your Car</h3>
            <form action="<?=self::ROOT?>/home" method="post" class="car-search-form">
              <div class="row">
                <div class="col-lg-12 form-group">
                    <select name="car_type" id="car_type" required>
                        <option value="-1" selected>Choose Your Car Type</option>
                        <?php foreach($carTypes as $carType) { ?>
                        <option value="<?=$carType['id']?>"><?=$carType['name']?></option>
                        <?php } ?>
                    </select>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <i class="fa fa-map-marker"></i>
                  <input name="pickup_location" id="pickup_location" class="form-control has-icon" type="text" placeholder="Pickup Location" required>
                </div>
                <div class="form-group col-md-6">
                  <i class="fa fa-map-marker"></i>
                  <input name="dropoff_location" id="dropoff_location" class="form-control has-icon" type="text" placeholder="Drop Off Location" required>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <i class="fa fa-calendar"></i>
                  <input name="pickup_date" id="pickup_date" type='text' class='form-control has-icon datepicker-here' data-language='en' placeholder="Pickup Date" required>
                </div>
                <div class="form-group col-md-6">
                  <i class="fa fa-clock-o"></i>
                  <input name="pickup_time" id="pickup_time" type="text" name="timepicker" class="form-control has-icon timepicker" placeholder="Pickup Time" required>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <i class="fa fa-calendar"></i>
                  <input  name="dropoff_date" id="dropoff_date" type='text' class='form-control has-icon datepicker-here' data-language='en' placeholder="Drop Off Date" required>
                </div>
                <div class="form-group col-md-6">
                  <i class="fa fa-clock-o"></i>
                  <input name="dropoff_time" id="dropoff_time" type="text" name="timepicker" class="form-control has-icon timepicker" placeholder="Drop Off Time" required>
                </div>
              </div>
              <button type="submit" name="submit-reservation" class="cmn-btn btn-radius">Reservation</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- search-section end -->

  <!-- features-section start -->
  <section class="features-section pb-120">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section-header text-center">
            <h2 class="section-title">our awesome features</h2>
            <p> On your next trip, don’t build your exploring around public transportation schedules. Instead, rent a car in your city and venture out whenever and wherever you like.</p>
          </div>
        </div>
      </div>
      <div class="row mb-none-30">
        <div class="col-lg-4 col-sm-6">
          <div class="icon-item text-center">
            <div class="icon"><i class="fa fa-user"></i></div>
            <div class="content">
              <h4 class="title">expert drivers</h4>
              <p>Car rental make it easy to pick out the perfect set of wheels for your trip </p>
            </div>
          </div>
        </div><!-- icon-item end -->
        <div class="col-lg-4 col-sm-6">
          <div class="icon-item text-center">
            <div class="icon"><i class="fa fa-rocket"></i></div>
            <div class="content">
              <h4 class="title">fast services</h4>
              <p>Book a rental car from Airport and start your adventure as soon as you land </p>
            </div>
          </div>
        </div><!-- icon-item end -->
        <div class="col-lg-4 col-sm-6">
          <div class="icon-item text-center">
            <div class="icon"><i class="fa fa-volume-control-phone"></i></div>
            <div class="content">
              <h4 class="title">customer support</h4>
              <p>We have 24/7 customer support on our hot number listed above. Feel free to call </p>
            </div>
          </div>
        </div><!-- icon-item end -->
      </div>
    </div>
  </section>
  <!-- features-section end -->

  <!-- rent-step-section start -->
  <section class="rent-step-section pb-120">
    <div class="element-one"><img src="<?=self::RES?>/images/elements/car.png" alt="image"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="block-area">
            <div class="block-header">
              <h2 class="title">Well Come to Renten For Rent </h2>
              <p>Book a rental car from Airport and start your adventure as soon as you land. There’s no need to scour car rental company websites to find your best ride. Instead, rent a car from Travelocity and save money while you do.</p>
            </div>
            <div class="block-body">
              <ul class="num-list">
                <li><span class="num">01</span>Download Car rent app</li>
                <li><span class="num">02</span>Choose the car you like</li>
                <li><span class="num">03</span>Car reservation</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- rent-step-section end -->

  <!-- choose-car-section start -->
  <section class="choose-car-section pt-120 pb-120 section-bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section-header text-center">
            <h2 class="section-title">choose awsome rental car</h2>
            <p> Car rental make it easy to pick out the perfect set of wheels for your trip.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="choose-car-slider owl-carousel">
          <?php foreach($cars as $car) { ?>
            <div class="car-item">
              <div class="thumb" >
                <img style="height: 195px; object-fit: cover;" src="<?=$car['image']?>" alt="image">
              </div>
              <div class="car-item-body">
                <div class="content">
                  <h4 class="title"><?=$car['brand_name']?> <?=$car['model']?></h4>
                  <span class="price">start form $<?=$car['price']?> per day</span>
                  <p><?=$car['about']?></p>
                  <a href="<?=self::ROOT?>/reservations/reservation/<?=$car['id']?>" class="cmn-btn">rent car</a>
                </div>
                <div class="car-item-meta">
                  <ul class="details-list">
                    <li><i class="fa fa-car"></i><?=$car['year']?> year</li>
                    <li><i class="fa fa-tachometer"></i><?=$car['mileage']?> KM</li>
                    <li><i class="fa fa-sliders"></i><?=$car['transmission_name']?></li>
                  </ul>
                </div>
              </div>
            </div><!-- car-item end -->
            <?php } ?>
          </div>
        </div>
        <div class="col-lg-4">
          
        </div>
      </div>
    </div>
  </section>
  <!-- choose-car-section end -->

  <!-- overview-section start -->
  <section class="overview-section pt-120 pb-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="block-area">
            <div class="block-header">
              <h2 class="title">We provided all Kind of Rental Services</h2>
              <p>Whether you’re visiting for business or leisure, picking up a cheap rental car in your city will help you see things at your own pace. Visit various attractions and go sightseeing at will instead of forking out money on rideshares or figuring out which bus or train connections you’ll need to make. You can even go on a road trip and see what the area around your city has to offer. </p>
            </div>
            <div class="block-body">
              <div class="row">
                <div class="col-md-4 col-sm-4 col-4">  
                  <div class="counter-item">
                    <span class="title">total car</span>
                    <span>3497</span>
                  </div>
                </div><!-- counter-item end -->
                <div class="col-md-4 col-sm-4 col-4">  
                  <div class="counter-item">
                    <span class="title">car rent</span>
                    <span>4574</span>
                  </div>
                </div><!-- counter-item end -->
                <div class="col-md-4 col-sm-4 col-4">  
                  <div class="counter-item">
                    <span class="title">experience</span>
                    <span>25</span><span class="counter-text">Y</span>
                  </div>
                </div><!-- counter-item end -->
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="overview-img">
            <div class="img-container"><img src="<?=self::RES?>/images/overview/2.jpg" alt="image"></div>
            <div class="img-container"><img src="<?=self::RES?>/images/overview/1.jpg" alt="image"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- overview-section end -->

  <!-- team-section start -->
  <section class="team-section pb-120 ">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section-header text-center">
            <h2 class="section-title">expert support team</h2>
            <p> We have 24/7 customer support on our hot number listed above. Feel free to call.</p>
          </div>
        </div>
      </div>
      <div class="row mb-none-30">
        <div class="col-lg-4 col-sm-6">
          <div class="team-item">
            <div class="thumb">
              <img src="<?=self::RES?>/images/team/1.jpg" alt="image">
              <div class="content">
                <h3 class="name">William Cook</h3>
                <span class="designation">Support Manager</span>
                <ul class="social-list d-flex justify-content-center">
                  <li><a href="#0"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#0"><i class="fa fa-pinterest-p"></i></a></li>
                  <li><a href="#0"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#0"><i class="fa fa-vimeo"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div><!--team-item end -->
        <div class="col-lg-4 col-sm-6">
          <div class="team-item">
            <div class="thumb">
              <img src="<?=self::RES?>/images/team/2.jpg" alt="image">
              <div class="content">
                <h3 class="name">Mark Moro</h3>
                <span class="designation">Support Manager</span>
                <ul class="social-list d-flex justify-content-center">
                  <li><a href="#0"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#0"><i class="fa fa-pinterest-p"></i></a></li>
                  <li><a href="#0"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#0"><i class="fa fa-vimeo"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div><!--team-item end -->
        <div class="col-lg-4 col-sm-6">
          <div class="team-item">
            <div class="thumb">
              <img src="<?=self::RES?>/images/team/3.jpg" alt="image">
              <div class="content">
                <h3 class="name">Jack Rendel</h3>
                <span class="designation">Support Manager</span>
                <ul class="social-list d-flex justify-content-center">
                  <li><a href="#0"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#0"><i class="fa fa-pinterest-p"></i></a></li>
                  <li><a href="#0"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#0"><i class="fa fa-vimeo"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div><!--team-item end -->
      </div>
    </div>
  </section>
  <!-- team-section end -->

  <!-- testimonial-section start -->
  <section class="testimonial-section overlay-black pt-120 pb-120 bg_img" data-background="<?=self::RES?>/images/testimonial-bg.jpg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="testimonial-slider owl-carousel">
            <div class="testimonial-item text-center">
              <div class="testimonial-item--header">
                <div class="thumb"><img src="<?=self::RES?>/images/testimonial/1.jpg" alt="image"></div>
                <h3 class="name">martin hook</h3>
                <span class="designation">business man</span>
              </div>
              <div class="testimonial-item--body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
              </div>
              <div class="testimonial-item--ratings">
                <a href="#0"><i class="fa fa-star"></i></a>
                <a href="#0"><i class="fa fa-star"></i></a>
                <a href="#0"><i class="fa fa-star"></i></a>
                <a href="#0"><i class="fa fa-star"></i></a>
                <a href="#0"><i class="fa fa-star-half-o"></i></a>
              </div>
            </div><!-- testimonial-item end -->
            <div class="testimonial-item text-center">
              <div class="testimonial-item--header">
                <div class="thumb"><img src="<?=self::RES?>/images/testimonial/1.jpg" alt="image"></div>
                <h3 class="name">martin hook</h3>
                <span class="designation">business man</span>
              </div>
              <div class="testimonial-item--body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
              </div>
              <div class="testimonial-item--ratings">
                <a href="#0"><i class="fa fa-star"></i></a>
                <a href="#0"><i class="fa fa-star"></i></a>
                <a href="#0"><i class="fa fa-star"></i></a>
                <a href="#0"><i class="fa fa-star"></i></a>
                <a href="#0"><i class="fa fa-star-half-o"></i></a>
              </div>
            </div><!-- testimonial-item end -->
            <div class="testimonial-item text-center">
              <div class="testimonial-item--header">
                <div class="thumb"><img src="<?=self::RES?>/images/testimonial/1.jpg" alt="image"></div>
                <h3 class="name">martin hook</h3>
                <span class="designation">business man</span>
              </div>
              <div class="testimonial-item--body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
              </div>
              <div class="testimonial-item--ratings">
                <a href="#0"><i class="fa fa-star"></i></a>
                <a href="#0"><i class="fa fa-star"></i></a>
                <a href="#0"><i class="fa fa-star"></i></a>
                <a href="#0"><i class="fa fa-star"></i></a>
                <a href="#0"><i class="fa fa-star-half-o"></i></a>
              </div>
            </div><!-- testimonial-item end -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- testimonial-section end -->

  <!-- blog-section start -->
  <section class="blog-section pt-120 pb-120">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section-header text-center">
            <h2 class="section-title">latest news & tips</h2>
            <p> Augue urna molestie mi adipiscing vulputate pede sedmassa  Praesquam massa, sodales velit turpis in tellu.</p>
          </div>
        </div>
      </div>
      <div class="row mb-none-30">
        <div class="col-lg-6">  
          <div class="post-item post-item--grid">
            <div class="thumb bg_img" data-background="<?=self::RES?>/images/blog/1.jpg">
              <ul class="post-meta d-flex">
                <li><a href="#0">25 Jan 2019</a></li>
                <li><a href="#0">03 Comments</a></li>
              </ul>
            </div>
            <div class="content">
              <h5 class="post-title"><a href="#0">Elementum cutur. Velit sed. Congue</a></h5>
              <p>Lorem ipsum dolor simaillan suspendisse nunc enim lupnar nostra mollis nonummy thiking and overviews</p>
              <a href="#0" class="text-btn">read more</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">  
          <div class="post-item post-item--grid">
            <div class="thumb bg_img" data-background="<?=self::RES?>/images/blog/2.jpg">
              <ul class="post-meta d-flex">
                <li><a href="#0">25 Jan 2019</a></li>
                <li><a href="#0">03 Comments</a></li>
              </ul>
            </div>
            <div class="content">
              <h5 class="post-title"><a href="#0">Aliquam id arccrupti eget velit, est vitae</a></h5>
              <p>Lorem ipsum dolor simaillan suspendisse nunc enim lupnar nostra mollis nonummy thiking and overviews</p>
              <a href="#0" class="text-btn">read more</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">  
          <div class="post-item post-item--grid">
            <div class="thumb bg_img" data-background="<?=self::RES?>/images/blog/3.jpg">
              <ul class="post-meta d-flex">
                <li><a href="#0">25 Jan 2019</a></li>
                <li><a href="#0">03 Comments</a></li>
              </ul>
            </div>
            <div class="content">
              <h5 class="post-title"><a href="#0">Quam magna iugiat urna in feugiat</a></h5>
              <p>Lorem ipsum dolor simaillan suspendisse nunc enim lupnar nostra mollis nonummy thiking and overviews</p>
              <a href="#0" class="text-btn">read more</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">  
          <div class="post-item post-item--grid">
            <div class="thumb bg_img" data-background="<?=self::RES?>/images/blog/4.jpg">
              <ul class="post-meta d-flex">
                <li><a href="#0">25 Jan 2019</a></li>
                <li><a href="#0">03 Comments</a></li>
              </ul>
            </div>
            <div class="content">
              <h5 class="post-title"><a href="#0">consectetu  volutpat vitae alias ante leo</a></h5>
              <p>Lorem ipsum dolor simaillan suspendisse nunc enim lupnar nostra mollis nonummy thiking and overviews</p>
              <a href="#0" class="text-btn">read more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- blog-section end  -->

  <!-- subscribe-section start -->
  <section class="subscribe-section overlay-main bg_img pt-120 pb-120" data-background="<?=self::RES?>/images/bg1.jpg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7">
          <div class="subscribe-content-area text-center">
            <h2 class="title text-white">Subscribe Our News Latters for Get Update </h2>
            <form class="subscribe-form">
              <input type="email" name="subs_email" id="subs_email" placeholder="Enter your email address">
              <button type="submit" class="form-icon"><i class="fa fa-paper-plane"></i></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- subscribe-section end -->

  <!-- consulting-section start -->
  <section class="consulting-section pt-120 pb-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="row mb-none-30">
            <div class="col-sm-6">
              <div class="brand-item">
                <div class="brand-item--inner">
                  <img src="<?=self::RES?>/images/brand-logo/1.png" alt="image">
                </div>
              </div>
            </div><!-- brand-item end -->
            <div class="col-sm-6">
              <div class="brand-item">
                <div class="brand-item--inner">
                  <img src="<?=self::RES?>/images/brand-logo/2.png" alt="image">
                </div>
              </div>
            </div><!-- brand-item end -->
            <div class="col-sm-6">
              <div class="brand-item">
                <div class="brand-item--inner">
                  <img src="<?=self::RES?>/images/brand-logo/3.png" alt="image">
                </div>
              </div>
            </div><!-- brand-item end -->
            <div class="col-sm-6">
              <div class="brand-item">
                <div class="brand-item--inner">
                  <img src="<?=self::RES?>/images/brand-logo/4.png" alt="image">
                </div>
              </div>
            </div><!-- brand-item end -->
          </div>
        </div>
        <div class="col-lg-6">
          <div class="consulting-from-area">
            <h2 class="title">Request a Free Consultation</h2>
            <form class="consulting-form">
              <div class="row">
                <div class="form-group col-md-6">
                  <input type="text" name="cons_f_name" id="cons_f_name" placeholder="First Name">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" name="cons_l_name" id="cons_l_name" placeholder="Last Name">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <input type="email" name="cons_email" id="cons_email" placeholder="Email Address">
                </div>
                <div class="form-group col-md-6">
                  <input type="tel" name="cons_phone" id="cons_phone" placeholder="Phone">
                </div>
              </div>
              <div class="form-group">
                <textarea placeholder="Message"></textarea>
              </div>
              <button type="submit" class="cmn-btn">submit now</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- consulting-section end -->