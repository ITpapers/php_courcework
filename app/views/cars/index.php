<!--  inner-banner-section start  -->
<?php include('app/views/includes/inner-banner.php'); ?>

<?php if($this->access()) {?>
<div style="margin: 30px 0 -60px 0; text-align: center;">
<p><a href="<?=self::ROOT?>/cars/create" class="btn btn-sm btn-primary p-2">Add New Car</a></p>
</div>
<?php } ?>


  <!-- car-search-section start -->
  <section class="car-search-section pt-120 pb-120">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">

          <div class="car-search-filter-area">
            <div class="car-search-filter-form-area">
              <form action="<?=self::ROOT?>/cars" method="post" class="car-search-filter-form">
                <div class="row justify-content-between">
                  <div class="col-lg-4 col-md-5 col-sm-6">
                    <div class="cart-sort-field">
                      <span class="caption">Filter by : </span>
                      <select name="brand">
                        <option value="-1">All Brands</option>
                        <?php foreach($brands as $brand) { ?>
                            <option value="<?=$brand['id']?>" <?php if($brand['id'] == $brandId) { echo('selected'); } ?>>
                                <?=$brand['name']?>
                            </option>
                        <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-7 col-md-7 col-sm-6 d-flex">
                    <input type="text" name="car_search" id="car_search" placeholder="Search what you want........">
                    <button type="submit" name="submit-filter" id="select_btn" class="search-submit-btn">Search</button>
                  </div>
                </div>
                </form>
            </div>
            <div class="view-style-toggle-area">
              <button class="view-btn list-btn"><i class="fa fa-bars"></i></button>
              <button class="view-btn grid-btn active"><i class="fa fa-th-large"></i></button>
            </div>
          </div>

        
        </div>
      </div>
      <div class="row mt-70">
        <div class="col-lg-8">

          <div class="car-search-result-area grid--view row mb-none-30">

            <?php foreach($cars as $car) { ?>
            <div id="car-item-<?=$car['id']?>" class="col-md-6 col-12">
              <div id="car-item"  class="car-item">
                <div class="thumb bg_img" data-background="<?=$car['image']?>"></div>
                <div class="car-item-body">
                  <div class="content">
                    <h4 class="title"><?=$car['brand_name']?> <?=$car['model']?></h4>
                    <span id="car-item-price-<?=$car['id']?>-<?=$car['price']?>" class="price">start form $<?=$car['price']?> per day</span>
                    <p><?=$car['about']?></p>
                    <a href="<?=self::ROOT?>/reservations/reservation/<?=$car['id']?>" class="cmn-btn">rent car</a>
                    <?php if($this->access()) {?>
                    <a href="<?=self::ROOT?>/cars/update/<?=$car['id']?>" style="background-color: #6c757d;" class="cmn-btn">Edit</a>
                    <a href="<?=self::ROOT?>/cars/delete/<?=$car['id']?>" style="background-color: #6c757d;" class="cmn-btn">Delete</a>
                    <?php } ?>
                  </div>
                  <div class="car-item-meta">
                    <ul class="details-list">
                      <li><i class="fa fa-car"></i><?=$car['year']?> year</li>
                      <li><i class="fa fa-tachometer"></i><?=$car['mileage']?> KM</li>
                      <li><i class="fa fa-sliders"></i><?=$car['transmission_name']?></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div><!-- car-item end -->
            <?php } ?>
          </div>

          <nav class="d-pagination" aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
            </ul>
          </nav> 
        </div>
        <div class="col-lg-4">
          <aside class="sidebar">
            <div class="widget widget-reservation">
              <h4 class="widget-title">reservation with call</h4>
              <div class="widget-body">
                <form action="<?=self::ROOT?>/cars" method="post" class="car-search-form">
                  <div class="row">
                    <div class="col-lg-12 form-group">
                      <select name="car_type" id="car_type" required>
                        <option value="-1" selected>Choose Your Car Type</option>
                        <?php foreach($carTypes as $carType) { ?>
                        <option value="<?=$carType['id']?>"><?=$carType['name']?></option>
                        <?php } ?>
                      </select>
                    </div>
                    <div class="form-group col-md-12">
                      <i class="fa fa-map-marker"></i>
                      <input name="pickup_location" id="pickup_location" class="form-control has-icon" type="text" placeholder="Pickup Location" required>
                    </div>
                    <div class="form-group col-md-12">
                      <i class="fa fa-map-marker"></i>
                      <input name="dropoff_location" id="dropoff_location" class="form-control has-icon" type="text" placeholder="Drop Off Location" required>
                    </div>
                    <div class="form-group col-md-12">
                      <i class="fa fa-calendar"></i>
                      <input name="pickup_date" id="pickup_date" type='text' class='form-control has-icon datepicker-here' data-language='en' placeholder="Pickup Date" required>
                    </div>
                    <div class="form-group col-md-12">
                      <i class="fa fa-clock-o"></i>
                      <input name="pickup_time" id="pickup_time" type="text" name="timepicker" class="form-control has-icon timepicker" placeholder="Pickup Time" required>
                    </div>
                    <div class="form-group col-md-12">
                      <i class="fa fa-calendar"></i>
                      <input name="dropoff_date" id="dropoff_date" type='text' class='form-control has-icon datepicker-here' data-language='en' placeholder="Drop Off Date" required>
                    </div>
                    <div class="form-group col-md-12">
                      <i class="fa fa-clock-o"></i>
                      <input name="dropoff_time" id="dropoff_time" type="text" name="timepicker" class="form-control has-icon timepicker" placeholder="Drop Off Time" required>
                    </div>
                  </div>
                  <button type="submit" name="submit-reservation" class="cmn-btn">Reservation</button>
                </form>
              </div>
            </div><!-- widget end -->
            <div class="widget widget-price-filter">
              <h4 class="widget-title">price filter</h4>
              <div class="widget-body">
                <div id="slider-range"></div>
                <div class="filter-price-result">
                  <input type="text" id="amount" readonly><span>(Per Day)</span>
                </div>
              </div>
            </div><!-- widget end -->
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
  <!-- car-search-section end -->

