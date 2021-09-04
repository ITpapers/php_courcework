<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Renten - Car Rental - <?=$title?></title>
  <!-- site favicon -->
  <link rel="shortcut icon" type="image/png" href="<?=self::RES?>/images/favicon.jpg"/>
  <!-- fontawesome css link -->
  <link rel="stylesheet" href="<?=self::RES?>/css/fontawesome.min.css">
  <!-- bootstrap css link -->
  <link rel="stylesheet" href="<?=self::RES?>/css/bootstrap.min.css">
  <!-- lightcase css link -->
  <link rel="stylesheet" href="<?=self::RES?>/css/lightcase.css">
  <!-- animate css link -->
  <link rel="stylesheet" href="<?=self::RES?>/css/animate.css">
  <!-- nice select css link -->
  <link rel="stylesheet" href="<?=self::RES?>/css/nice-select.css">
  <!-- datepicker css link -->
  <link rel="stylesheet" href="<?=self::RES?>/css/datepicker.min.css">
  <!-- wickedpicker css link -->
  <link rel="stylesheet" href="<?=self::RES?>/css/wickedpicker.min.css">
  <!-- jquery ui css link -->
  <link rel="stylesheet" href="<?=self::RES?>/css/jquery-ui.min.css">
  <!-- owl carousel css link -->
  <link rel="stylesheet" href="<?=self::RES?>/css/owl.carousel.min.css">
  <!-- main style css link -->
  <link rel="stylesheet" href="<?=self::RES?>/css/main.css">
  <!-- base style css link -->
  <link rel="stylesheet" href="<?=self::RES?>/css/base.css">
</head>

<body>

  <!-- preloader -->
  <div id="preloader"></div>
 

  <!--  header-section start  -->
  <?php include('app/views/includes/header.php'); ?>

  <!-- page content -->
  <?php include($this->contentPath); ?>

  

  <!-- footer-section start -->
  <?php include('app/views/includes/footer.php'); ?>
  <!-- footer-section end -->


  <!-- scroll-to-top start -->
  <div class="scroll-to-top">
    <span class="scroll-icon">
      <i class="fa fa-rocket"></i>
    </span>
  </div>
  <!-- scroll-to-top end -->
  
  <!-- jquery js link -->
  <script src="<?=self::RES?>/js/jquery-3.3.1.min.js"></script>
  <!-- jquery migrate js link -->
  <script src="<?=self::RES?>/js/jquery-migrate-3.0.0.js"></script>
  <!-- bootstrap js link -->
  <script src="<?=self::RES?>/js/bootstrap.min.js"></script>
  <!-- lightcase js link -->
  <script src="<?=self::RES?>/js/lightcase.js"></script>
  <!-- wow js link -->
  <script src="<?=self::RES?>/js/wow.min.js"></script>
  <!-- nice select js link -->
  <script src="<?=self::RES?>/js/jquery.nice-select.min.js"></script>
  <!-- datepicker js link -->
  <script src="<?=self::RES?>/js/datepicker.min.js"></script>
  <script src="<?=self::RES?>/js/datepicker.en.js"></script>
  <!-- wickedpicker js link -->
  <script src="<?=self::RES?>/js/wickedpicker.min.js"></script>
  <!-- owl carousel js link -->
  <script src="<?=self::RES?>/js/owl.carousel.min.js"></script>
  <!-- jquery ui js link -->
  <script src="<?=self::RES?>/js/jquery-ui.min.js"></script>
  <!-- main js link -->
  <script src="<?=self::RES?>/js/main.js"></script>
  <!-- individual page js link -->
  <script src="<?=$script?>"></script>
</body>

</html>