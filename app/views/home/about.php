  <!--  inner-banner-section start  -->
  <?php include('app/views/includes/inner-banner.php'); ?>

  <!-- features-section start -->
  <section class="features-section pt-120 pb-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="car-search-area car-search-area--style2">
            <h3 class="title">Rent your car</h3>
            <form class="car-search-form">
              <div class="row">
                <div class="col-xl-12 form-group">
                  <select>
                    <option value="1" selected="">Choose Your Car Type</option>
                    <option value="2">Another option</option>
                    <option value="4">Potato</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-xl-6">
                  <i class="fa fa-map-marker"></i>
                  <input class="form-control has-icon" type="text" placeholder="Pickup Location">
                </div>
                <div class="form-group col-xl-6">
                  <i class="fa fa-map-marker"></i>
                  <input class="form-control has-icon" type="text" placeholder="Drop Off Location">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-xl-6">
                  <i class="fa fa-calendar"></i>
                  <input type="text" class="form-control has-icon datepicker-here" data-language="en" placeholder="Pickup Date">
                </div>
                <div class="form-group col-xl-6">
                  <i class="fa fa-clock-o"></i>
                  <input type="text" name="timepicker" class="form-control has-icon timepicker" placeholder="Pickup Time">
                </div>
              </div>
              <div class="row">
                <div class="form-group col-xl-6">
                  <i class="fa fa-calendar"></i>
                  <input type="text" class="form-control has-icon datepicker-here" data-language="en" placeholder="Drop Off Date">
                </div>
                <div class="form-group col-xl-6">
                  <i class="fa fa-clock-o"></i>
                  <input type="text" name="timepicker" class="form-control has-icon timepicker" placeholder="Drop Off Time">
                </div>
              </div>
              <button type="submit" class="cmn-btn">Reservation</button>
            </form>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="feature-content">
            <h2 class="title title--border">our awsome features</h2>
            <p>Pellentesque turpis et nonummy eu nulla. Quis gravida ultrices nam sed vel ut, vehicula adipiscing quam. Nibh vestibulum tempor, magna maecenas, vehicula donec ut nonummy cras suscipit.</p>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="feature-item">
                <div class="feature-item-header">
                  <i class="fa fa-user"></i>
                  <h5 class="title">expert drivers</h5>
                </div>
                <div class="feature-item-body">
                  <p>Assumenda integer, accumsanvitae felis. Sodales sunt est </p>
                </div>
              </div>
            </div><!-- feature-item end -->
            <div class="col-sm-6">
              <div class="feature-item">
                <div class="feature-item-header">
                  <i class="fa fa-user"></i>
                  <h5 class="title">24 hours suport</h5>
                </div>
                <div class="feature-item-body">
                  <p>Assumenda integer, accumsanvitae felis. Sodales sunt est </p>
                </div>
              </div>
            </div><!-- feature-item end -->
            <div class="col-sm-6">
              <div class="feature-item">
                <div class="feature-item-header">
                  <i class="fa fa-user"></i>
                  <h5 class="title">free registration</h5>
                </div>
                <div class="feature-item-body">
                  <p>Assumenda integer, accumsanvitae felis. Sodales sunt est </p>
                </div>
              </div>
            </div><!-- feature-item end -->
            <div class="col-sm-6">
              <div class="feature-item">
                <div class="feature-item-header">
                  <i class="fa fa-user"></i>
                  <h5 class="title">low rent cost</h5>
                </div>
                <div class="feature-item-body">
                  <p>Assumenda integer, accumsanvitae felis. Sodales sunt est </p>
                </div>
              </div>
            </div><!-- feature-item end -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- features-section end -->

  <!-- call-action-section start -->
  <section class="call-action-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5">
          <div class="call-action-img text-lg-left text-center">
            <img src="<?=self::RES?>/images/elements/call-action-personj.png" alt="image">
          </div>
        </div>
        <div class="col-lg-7">
          <div class="call-cation-content">
            <h3 class="top-title">Call Us  for Suport</h3>
            <span class="call-number">+444-555-666</span>
            <p>Pellentesque turpis et nonummy eu nulla. Quis gravida ultrices nam sed vel ut, ve adiping quam. Nibh vestibulum tempor, magna maecenas, vehicula donec ut nonummy crascipit. Amet aliquam ut elit semper urna metus, pede.</p>
            <a href="#0" class="cmn-btn">contact us</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- call-action-section end -->

  <!-- choose-car-section start -->
  <section class="choose-car-section section-bg pt-120 pb-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="choose-car-slider-two owl-carousel">
            <div class="car-item border-none">
              <div class="thumb">
                <img src="<?=self::RES?>/images/cars/s1.jpg" alt="image">
                <a href="#0" class="cmn-btn">reservation now</a>
              </div>
              <div class="content px-0 pb-0">
                <h4 class="title">mistubishi lancer</h4>
                <span class="price">$70 per day </span>
                <div class="review-starts">
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                  <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                </div>
              </div>
            </div><!-- car-item end -->
            <div class="car-item border-none">
              <div class="thumb">
                <img src="<?=self::RES?>/images/cars/s2.jpg" alt="image">
                <a href="#0" class="cmn-btn">reservation now</a>
              </div>
              <div class="content px-0 pb-0">
                <h4 class="title">mistubishi lancer</h4>
                <span class="price">$70 per day </span>
                <div class="review-starts">
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                  <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                </div>
              </div>
            </div><!-- car-item end -->
            <div class="car-item border-none">
              <div class="thumb">
                <img src="<?=self::RES?>/images/cars/s3.jpg" alt="image">
                <a href="#0" class="cmn-btn">reservation now</a>
              </div>
              <div class="content px-0 pb-0">
                <h4 class="title">mistubishi lancer</h4>
                <span class="price">$70 per day </span>
                <div class="review-starts">
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                  <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                </div>
              </div>
            </div><!-- car-item end -->
            <div class="car-item border-none">
              <div class="thumb">
                <img src="<?=self::RES?>/images/cars/s4.jpg" alt="image">
                <a href="#0" class="cmn-btn">reservation now</a>
              </div>
              <div class="content px-0 pb-0">
                <h4 class="title">mistubishi lancer</h4>
                <span class="price">$70 per day </span>
                <div class="review-starts">
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                  <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                </div>
              </div>
            </div><!-- car-item end -->
            <div class="car-item border-none">
              <div class="thumb">
                <img src="<?=self::RES?>/images/cars/s1.jpg" alt="image">
                <a href="#0" class="cmn-btn">reservation now</a>
              </div>
              <div class="content px-0 pb-0">
                <h4 class="title">mistubishi lancer</h4>
                <span class="price">$70 per day </span>
                <div class="review-starts">
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                  <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                </div>
              </div>
            </div><!-- car-item end -->
            <div class="car-item border-none">
              <div class="thumb">
                <img src="<?=self::RES?>/images/cars/s2.jpg" alt="image">
                <a href="#0" class="cmn-btn">reservation now</a>
              </div>
              <div class="content px-0 pb-0">
                <h4 class="title">mistubishi lancer</h4>
                <span class="price">$70 per day </span>
                <div class="review-starts">
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star"></i></a>
                  <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                  <a href="#0"><i class="fa fa-star-half-empty"></i></a>
                </div>
              </div>
            </div><!-- car-item end -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- choose-car-section end -->

  <!-- company-char-section start -->
  <section class="company-char-section pt-120 pb-120">
    <div class="container">
      <div class="row mb-50">
        <div class="col-lg-6">
          <div class="company-char-content">
            <h2 class="title title--border text-capitalize">our company charateristics</h2>
            <p>Lorem ipsum dolor sit amet, phasellus ut curabitur vestibulum sit vitae aenean, morbi quam blandit ad. Quis ac, eu enim pulvinar ante nam, sed purus, ut metus ligula imperdiet orci nibh. Id dolor id, congue mauris eu arcu nibh, suspendisse vitae, et sociosqu. Eros vivamus </p>
            <blockquote>
              <p>Pellentesque turpis et nonummy eu nulla. Quis gravida ultrices nam sed vel ut, vehicula adipiscing quam. Nibh vestibulutempormagna maecenas vehicula donec ligula.Quisque cras molestie dictum, aliquam litora. Tempus amet pellentesque vitae.</p>
            </blockquote>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="company-char-thumb">
            <img src="<?=self::RES?>/images/elements/company-char.jpg" alt="image">
            <a href="https://www.youtube.com/embed/aFYlAzQHnY4" data-rel="lightcase:myCollection" class="yt-icon"><i class="fa fa-play"></i></a>
          </div>
        </div>
      </div>
      <div class="row mb-none-30">
        <div class="col-lg-4 col-sm-6">
          <div class="text-item">
            <h3 class="title">We are Seen Form 1965</h3>
            <p>Volutpat vestibulum ac nulla. Quisque craslestie dictum, aliquam litora. Tempus amet pelltesque vitae ante, consectetuer consequat sed vestilum fringilla dictumenim</p>
          </div>
        </div><!-- text-item end -->
        <div class="col-lg-4 col-sm-6">
          <div class="text-item">
            <h3 class="title">Provided Best Services</h3>
            <p>Volutpat vestibulum ac nulla. Quisque craslestie dictum, aliquam litora. Tempus amet pelltesque vitae ante, consectetuer consequat sed vestilum fringilla dictumenim</p>
          </div>
        </div><!-- text-item end -->
        <div class="col-lg-4 col-sm-6">
          <div class="text-item">
            <h3 class="title">Our Mission</h3>
            <p>Volutpat vestibulum ac nulla. Quisque craslestie dictum, aliquam litora. Tempus amet pelltesque vitae ante, consectetuer consequat sed vestilum fringilla dictumenim</p>
          </div>
        </div><!-- text-item end -->
      </div>
    </div>
  </section>
  <!-- company-char-section end -->

  <!-- team-section start -->
  <section class="team-section pb-120">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="section-header text-center">
            <h2 class="section-title">expert support team</h2>
            <p> Augue urna molestie mi adipiscing vulputate pede sedmassa  Praesquam massa, sodales velit turpis in tellu.</p>
          </div>
        </div>
      </div>
      <div class="row mb-none-30">
        <div class="col-lg-3 col-sm-6">
          <div class="team-item team-item--style2">
            <div class="thumb">
              <img src="<?=self::RES?>/images/team/4.jpg" alt="image">
            </div>
            <div class="content">
              <h5 class="name">martin hook</h5>
              <span class="designation">support manager</span>
              <ul class="details-list">
                <li><a href="mailto:www.support/martin.com">www.support/martin.com</a></li>
                <li><a href="tel:+088-222-5555-4444">+088-222-5555-4444</a></li>
                <li>
                  <a href="#0"><i class="fa fa-facebook-f"></i></a>
                  <a href="#0"><i class="fa fa-linkedin"></i></a>
                  <a href="#0"><i class="fa fa-twitter"></i></a>
                  <a href="#0"><i class="fa fa-skype"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div><!-- team-item end -->
        <div class="col-lg-3 col-sm-6">
          <div class="team-item team-item--style2">
            <div class="thumb">
              <img src="<?=self::RES?>/images/team/5.jpg" alt="image">
            </div>
            <div class="content">
              <h5 class="name">luthar king</h5>
              <span class="designation">luthar king</span>
              <ul class="details-list">
                <li><a href="mailto:www.support/luthar.com">www.support/luthar.com</a></li>
                <li><a href="tel:+088-222-5555-4444">+088-222-5555-4444</a></li>
                <li>
                  <a href="#0"><i class="fa fa-facebook-f"></i></a>
                  <a href="#0"><i class="fa fa-linkedin"></i></a>
                  <a href="#0"><i class="fa fa-twitter"></i></a>
                  <a href="#0"><i class="fa fa-skype"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div><!-- team-item end -->
        <div class="col-lg-3 col-sm-6">
          <div class="team-item team-item--style2">
            <div class="thumb">
              <img src="<?=self::RES?>/images/team/6.jpg" alt="image">
            </div>
            <div class="content">
              <h5 class="name">harbrt tony</h5>
              <span class="designation">support manager</span>
              <ul class="details-list">
                <li><a href="mailto:www.support/harbrt.com">www.support/harbrt.com</a></li>
                <li><a href="tel:+088-222-5555-4444">+088-222-5555-4444</a></li>
                <li>
                  <a href="#0"><i class="fa fa-facebook-f"></i></a>
                  <a href="#0"><i class="fa fa-linkedin"></i></a>
                  <a href="#0"><i class="fa fa-twitter"></i></a>
                  <a href="#0"><i class="fa fa-skype"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div><!-- team-item end -->
        <div class="col-lg-3 col-sm-6">
          <div class="team-item team-item--style2">
            <div class="thumb">
              <img src="<?=self::RES?>/images/team/7.jpg" alt="image">
            </div>
            <div class="content">
              <h5 class="name">tom jekson</h5>
              <span class="designation">support manager</span>
              <ul class="details-list">
                <li><a href="mailto:www.support/jekson.com">www.support/jekson.com</a></li>
                <li><a href="tel:+088-222-5555-4444">+088-222-5555-4444</a></li>
                <li>
                  <a href="#0"><i class="fa fa-facebook-f"></i></a>
                  <a href="#0"><i class="fa fa-linkedin"></i></a>
                  <a href="#0"><i class="fa fa-twitter"></i></a>
                  <a href="#0"><i class="fa fa-skype"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div><!-- team-item end -->
      </div>
    </div>
  </section>
  <!-- team-section end -->

  <!-- consulting-section start -->
  <section class="consulting-section pb-120">
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