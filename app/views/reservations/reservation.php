<!--  inner-banner-section start  -->
<?php include('app/views/includes/inner-banner.php'); ?>

<!-- reservation-section start -->
<section class="reservation-section pt-120 pb-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="reservation-details-area">
            <div class="thumb">
              <img style="width: 80%" src="<?=self::ROOT?>/<?=$car['image']?>" alt="images">
            </div>
            <div class="content">
              <div class="content-block">
                <h3 class="car-name"><?=$car['brand_name']?> <?=$car['model']?></h3>
                <span class="price">Start form $<?=$car['price']?> per day</span>
                <p><?=$car['about']?></p>
              </div>
              <form action="<?=self::ROOT?>/reservations/reservation/<?=$car['id']?>" method="post" class="reservation-form">
                <div class="content-block">
                  <h3 class="title">reservation information</h3>
                  <!-- Addition options
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group form-check">
                        <input name="additional-1" id="additional-1" type="checkbox" class="form-check-input">
                        <label class="form-check-label" for="exampleCheck1">Wi-Fi in car $5 per day</label>
                      </div>
                    </div>
                    
                    <div class="col-lg-6">
                      <div class="form-group form-check">
                        <input name="additional-2" id="additional-2" type="checkbox" class="form-check-input" >
                        <label class="form-check-label" for="exampleCheck3">brackfast & lunch $20 per day</label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group form-check">
                        <input name="additional-3" id="additional-3" type="checkbox" class="form-check-input" >
                        <label class="form-check-label" for="exampleCheck4">car insurance 50$ per trip</label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group form-check">
                        <input name="additional-4" id="additional-4" type="checkbox" class="form-check-input" >
                        <label class="form-check-label" for="exampleCheck5">air-condition $5 per day</label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group form-check">
                        <input name="additional-5" id="additional-5" type="checkbox" class="form-check-input" >
                        <label class="form-check-label" for="exampleCheck6">free security & safety tutorial</label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group form-check">
                        <input name="additional-6" id="additional-6" type="checkbox" class="form-check-input">
                        <label class="form-check-label" for="exampleCheck2">free childen seat</label>
                      </div>
                    </div>
                  </div>
                  -->
                  <div class="row">
                    <div class="form-group col-md-6">
                      <i class="fa fa-map-marker"></i>
                      <input name="pickup_location" id="pickup_location" class="form-control has-icon" type="text" placeholder="Pickup Location">
                    </div>
                    <div class="form-group col-md-6">
                      <i class="fa fa-map-marker"></i>
                      <input name="dropoff_location" id="dropoff_location" class="form-control has-icon" type="text" placeholder="Drop Off Location">
                    </div>
                    <div class="form-group col-md-6">
                      <i class="fa fa-calendar"></i>
                      <input name="pickup_date" id="pickup_date" type='text' class='form-control has-icon datepicker-here' data-language='en' placeholder="Pickup Date">
                    </div>
                    <div class="form-group col-md-6">
                      <i class="fa fa-clock-o"></i>
                      <input name="pickup_time" id="pickup_time" type="text" name="timepicker" class="form-control has-icon timepicker" placeholder="Pickup Time">
                    </div>
                    <div class="form-group col-md-6">
                      <i class="fa fa-calendar"></i>
                      <input name="dropoff_date" id="dropoff_date" type='text' class='form-control has-icon datepicker-here' data-language='en' placeholder="Drop Off Date">
                    </div>
                    <div class="form-group col-md-6">
                      <i class="fa fa-clock-o"></i>
                      <input name="dropoff_time" id="dropoff_time" type="text" name="timepicker" class="form-control has-icon timepicker" placeholder="Drop Off Time">
                    </div>
                  </div>
                </div>
                <div class="content-block">
                  <h3 class="title">personal information</h3>
                  <div class="row">
                    <div class="col-lg-6 form-group">
                      <input name="fullname" id="fullname" type="text" placeholder="Name" value="<?php if($user['name'] != null) {echo($user['name'].' '.$user['lastname']);} ?>">
                    </div>
                    <div class="col-lg-6 form-group">
                      <input name="email" id="email" type="email" placeholder="Email Address" value="<?=$user['email']?>">
                    </div>
                    <div class="col-lg-6 form-group">
                      <input name="phone" id="phone" type="tel" placeholder="Phone" value="<?=$user['phone']?>">
                    </div>
                    <div class="col-lg-6 form-group">
                      <select name="gender" id="dender">
                        <option>Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="content-block">
                  <h3 class="title">payment method</h3>
                  <div class="row">
                    <div class="col-lg-6 form-group">
                      <select name="payment" id="payment">
                        <option>Select Payment Methos</option>
                        <option>Paypal</option>
                        <option>Payoneer</option>
                        <option>Visa Card</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="content-block">
                  <h3 class="title">addisonal information</h3>
                  <div class="row">
                    <div class="col-lg-12 form-group">
                      <textarea name="information" id="information" placeholder="Write addisonal information in here"></textarea>
                    </div>
                    <div class="col-lg-12">
                      <button type="reset" class="cmn-btn bg-black">Cancel</button>
                      <button type="submit" name="submit-reservation" class="cmn-btn">reservation</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <aside class="sidebar">
            <div class="widget widget-all-cars">
              <h4 class="widget-title">other cars</h4>
              <ul class="cars-list">
              <?php foreach($cars as $car) { ?>
                <li><a href="<?=self::ROOT?>/reservations/reservation/<?=$car['id']?>"><?=$car['brand_name']?> <?=$car['model']?></a></li>
              <?php } ?>
              </ul>
            </div>
            <div class="widget widget-testimonial">
              <h4 class="widget-title">testimonial</h4>
              <div class="widget-body">
                <div class="testimonial-slider owl-carousel">
                  <div class="testimonial-item">
                    <div class="testimonial-item--header">
                      <div class="thumb"><img src="<?=self::RES?>/images/testimonial/1.jpg" alt="image"></div>
                      <div class="content">
                        <h6 class="name">martin hook</h6>
                        <span class="designation">business man</span>
                      </div>
                    </div>
                    <div class="testimonial-item--body">
                      <p>Excellent and fast car rental service. Every weekend I take a different car to travel both around the city and out of town.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- widget end -->
          </aside>
        </div>
      </div>
    </div>
  </section>
  <!-- reservation-section end -->