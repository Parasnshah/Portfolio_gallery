<!DOCTYPE html>
<html>
<head>
   <title>Portfolio gallery </title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
</head>
<body>
</body>
</html>
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
   body{
   margin:0;
   padding:0;
   background-color:#80808061;
}
/* .container{
   width:90%
   margin:10px auto;
} */
.portfolio-menu{
   text-align:center;
}
.portfolio-menu ul li{
   display:inline-block;
   margin:0;
   list-style:none;
   padding:10px 15px;
   cursor:pointer;
   -webkit-transition:all 05s ease;
   -moz-transition:all 05s ease;
   -ms-transition:all 05s ease;
   -o-transition:all 05s ease;
   transition:all .5s ease;
}

.portfolio-item{
   /*width:100%;*/
}
.portfolio-item .item{
   /*width:303px;*/
   float:left;
   margin-bottom:10px;
}
</style>
</script>
<div class="container">
   <div class="row">
      <div class="col-lg-12 text-center my-2">
         <h4 class="border-bottom border-dark p-2">Php framework and cms</h4>
      </div>
   </div>
   <div class="portfolio-menu mt-2 mb-4">
      <ul>
         <li class="btn btn-outline-dark active" data-filter="*">All</li>
         <li class="btn btn-outline-dark text" data-filter=".framework">Framework</li>
         <li class="btn btn-outline-dark text" data-filter=".cms">Cms</li>
      </ul>
   </div>
   <div class="portfolio-item row">
      <div class="item framework col-lg-3 col-md-4 col-6 col-sm">
         <a href="laravel.png" class="fancylight popup-btn" data-fancybox-group="light">
         <img class="img-fluid" src="laravel.png" alt="">
         </a>
      </div>
      <div class="item framework col-lg-3 col-md-4 col-6 col-sm">
         <a href="codeigniter.png" class="fancylight popup-btn" data-fancybox-group="light">
         <img class="img-fluid" src="codeigniter.png" alt="">
         </a>
      </div>
      <div class="item framework col-lg-3 col-md-4 col-6 col-sm">
         <a href="symfony.jpg" class="fancylight popup-btn" data-fancybox-group="light">
         <img class="img-fluid" src="symfony.jpg" alt="">
         </a>
      </div>
      <div class="item framework col-lg-3 col-md-4 col-6 col-sm">
         <a href="cakephp.jpg" class="fancylight popup-btn" data-fancybox-group="light">
         <img class="img-fluid" src="cakephp.jpg" alt="">
         </a>
      </div>
      <div class="item framework col-lg-3 col-md-4 col-6 col-sm">
         <a href="phalcon.png" class="fancylight popup-btn" data-fancybox-group="light">
         <img class="img-fluid" src="phalcon.png" alt="">
         </a>
      </div>
      <div class="item framework col-lg-3 col-md-4 col-6 col-sm">
         <a href="zend.jpg" class="fancylight popup-btn" data-fancybox-group="light">
         <img class="img-fluid" src="zend.jpg" alt="">
         </a>
      </div>
      <div class="item framework col-lg-3 col-md-4 col-6 col-sm">
         <a href="yii-logo.jpg" class="fancylight popup-btn" data-fancybox-group="light">
         <img class="img-fluid" src="yii-logo.jpg" alt="">
         </a>
      </div>
      <div class="item framework col-lg-3 col-md-4 col-6 col-sm">
         <a href="FuelPHP.jpg" class="fancylight popup-btn" data-fancybox-group="light">
         <img class="img-fluid" src="FuelPHP.jpg" alt="">
         </a>
      </div>
      <div class="item cms col-lg-3 col-md-4 col-6 col-sm">
         <a href="wordpress.png" class="fancylight popup-btn" data-fancybox-group="light">
         <img class="img-fluid" src="wordpress.png" alt="">
         </a>
      </div>
      <div class="item cms col-lg-3 col-md-4 col-6 col-sm">
         <a href="magento.png" class="fancylight popup-btn" data-fancybox-group="light">
         <img class="img-fluid" src="magento.png" alt="">
         </a>
      </div>
      <div class="item cms col-lg-3 col-md-4 col-6 col-sm">
         <a href="drupal.jpg" class="fancylight popup-btn" data-fancybox-group="light">
         <img class="img-fluid" src="drupal.jpg" alt="">
         </a>
      </div>
      <div class="item cms col-lg-3 col-md-4 col-6 col-sm">
         <a href="joomla.jpg" class="fancylight popup-btn" data-fancybox-group="light">
         <img class="img-fluid" src="joomla.jpg" alt="">
         </a>
      </div>
   </div>
</div>
<script type="text/javascript">
$('.portfolio-item').isotope({
      itemSelector: '.item',
      layoutMode: 'fitRows'
   });
   $('.portfolio-menu ul li').click(function(){
      $('.portfolio-menu ul li').removeClass('active');
      $(this).addClass('active');
      
      var selector = $(this).attr('data-filter');
      $('.portfolio-item').isotope({
         filter:selector
      });
      return  false;
   });
   $(document).ready(function() {
   var popup_btn = $('.popup-btn');
   popup_btn.magnificPopup({
   type : 'image',
   gallery : {
      enabled : true
   }
   });
});
</script>