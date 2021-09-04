<header class="header-section">
    <div class="header-top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-3">
            <ul class="social-links">
              <li><a href="#0"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#0"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#0"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#0"><i class="fa fa-google-plus"></i></a></li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul class="header-info d-flex justify-content-center">
              <li>
                <i class="fa fa-map-marker"></i>
                <p>4050 Stevely Ave, Los Angeles <br>CA, United States</p>
              </li>
              <li>
                <i class="fa fa-clock-o"></i>
                <p>Monday - Sunday <br>06:00 am - 11:00 pm </p>
              </li>
            </ul>
          </div>
          <div class="col-lg-3">
            <div class="header-action d-flex align-items-center justify-content-end">
              <div class="lag-select-area">
                <select>
                  <option>ENG</option>
                  <option>RUS</option>
                </select>
              </div>

              <?php if($this->currentUser['Email'] === 'Guest') {?>
                <div class="login-reg">
                    <a href="<?=self::ROOT?>/auth/reg">Sign Up</a>
                    <a href="<?=self::ROOT?>/auth/entry">Sign in</a>
                </div>
              <?php } else {?>
                <div class="login-reg">
                    <a href="<?=self::ROOT?>/auth/profile"><?=$this->currentUser['Name']?></a>
                    <a href="<?=self::ROOT?>/auth/exit">Exit</a>
                </div>
              <?php }?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header-bottom">
      <div class="container">
        <nav class="navbar navbar-expand-lg p-0">
          <a class="site-logo site-title" href="<?=self::ROOT?>/home"><img src="<?=self::RES?>/images/logo1.png" alt="site-logo"><span class="logo-icon"><i class="flaticon-fire"></i></span></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="menu-toggle"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav main-menu mr-auto">
              <li><a href="<?=self::ROOT?>/home">Home</a></li>
              <li><a href="<?=self::ROOT?>/home/about">About</a></li>
              <li><a href="<?=self::ROOT?>/cars">Cars</a></li>
              <li class="menu_has_children"><a href="<?=self::ROOT?>/blogs">blog</a>
                <ul class="sub-menu">
                  <li><a href="<?=self::ROOT?>/blogs">blog page</a></li>
                  <li><a href="<?=self::ROOT?>/blogs/blog_details">blog details</a></li>
                </ul>
              </li>
              <li><a href="<?=self::ROOT?>/home/contact">contact us</a></li>
              
            <?php if($this->access()) {?>
              <li><a href="<?=self::ROOT?>/admin">admin</a></li>
            <?php } ?>

            </ul>
          </div>
        </nav>
      </div>
    </div><!-- header-bottom end -->
  </header>