<?php
/*
Template Name: Gallery Page Template Backup
*/
?>

<?php
get_header(); ?>

<section class="gallery-nav">
<div class="container-fluid">
          <div class="row">
            <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <!-- <h1 class="gallery-title">Gallery</h1> -->
                <div class="center mydiv">
                <button class="btn btn-default filter-button active-on" data-filter="all">All</button>
                <button class="btn btn-default filter-button" data-filter="hdpe">HOTEL</button>
                <button class="btn btn-default filter-button" data-filter="sprinkle">THE ROOMS</button>
                <button class="btn btn-default filter-button" data-filter="spray">RESTAURANT</button>
                <button class="btn btn-default filter-button" data-filter="irrigation">THE BAR</button>
                <button class="btn btn-default filter-button" data-filter="spray">DISCOVER</button>
                <button class="btn btn-default filter-button" data-filter="hdpe">VIDEO</button>
            </div>
          </div>
</div>
</section>
<section class="gallery-list-grid">
<div class="container">
  <div class="row">
    <div class="col-sm-6 box-image filter hdpe">
      <div class="imagebox">
        <a href="#hola">
          <img src="https://wordpress-426808-2401231.cloudwaysapps.com/wp-content/uploads/2022/02/hotel1.png"  class="category-banner img-responsive">
          <span class="imagebox-desc">Lorem ipsum dolor sit amet!</span>
        </a>
      </div>
    </div>
    <div class="col-sm-6 box-image filter sprinkle">
      <div class="imagebox">
        <a href="#hola">
          <img src="https://wordpress-426808-2401231.cloudwaysapps.com/wp-content/uploads/2022/02/hotel1.png"  class="category-banner img-responsive">
          <span class="imagebox-desc">Lorem ipsum dolor sit amet!</span>
        </a>
      </div>
    </div>
    <div class="col-sm-6 box-image filter sprinkle">
      <div class="imagebox">
        <a href="#hola">
          <img src="https://wordpress-426808-2401231.cloudwaysapps.com/wp-content/uploads/2022/02/hotel1.png"  class="category-banner img-responsive">
          <span class="imagebox-desc">Lorem ipsum dolor sit amet!</span>
        </a>
      </div>
    </div>
    <div class="col-sm-6 box-image filter hdpe">
      <div class="imagebox">
        <a href="#hola">
          <img src="https://wordpress-426808-2401231.cloudwaysapps.com/wp-content/uploads/2022/02/hotel1.png"  class="category-banner img-responsive">
          <span class="imagebox-desc">Lorem ipsum dolor sit amet!</span>
        </a>
      </div>
    </div>
    <div class="col-sm-6 box-image filter sprinkle">
      <div class="imagebox">
        <a href="#hola">
          <img src="https://wordpress-426808-2401231.cloudwaysapps.com/wp-content/uploads/2022/02/hotel1.png"  class="category-banner img-responsive">
          <span class="imagebox-desc">Lorem ipsum dolor sit amet!</span>
        </a>
      </div>
    </div>
    <div class="col-sm-6 box-image filter sprinkle">
      <div class="imagebox">
        <a href="#hola">
          <img src="https://wordpress-426808-2401231.cloudwaysapps.com/wp-content/uploads/2022/02/hotel1.png"  class="category-banner img-responsive">
          <span class="imagebox-desc">Lorem ipsum dolor sit amet!</span>
        </a>
      </div>
    </div>
    <div class="col-sm-6 box-image filter hdpe">
      <div class="imagebox">
        <a href="#hola">
          <img src="https://wordpress-426808-2401231.cloudwaysapps.com/wp-content/uploads/2022/02/hotel1.png"  class="category-banner img-responsive">
          <span class="imagebox-desc">Lorem ipsum dolor sit amet!</span>
        </a>
      </div>
    </div>
    <div class="col-sm-6 box-image filter sprinkle">
      <div class="imagebox">
        <a href="#hola">
          <img src="https://wordpress-426808-2401231.cloudwaysapps.com/wp-content/uploads/2022/02/hotel1.png"  class="category-banner img-responsive">
          <span class="imagebox-desc">Lorem ipsum dolor sit amet!</span>
        </a>
      </div>
    </div>
    <div class="col-sm-6 box-image filter sprinkle">
      <div class="imagebox">
        <a href="#hola">
          <img src="https://wordpress-426808-2401231.cloudwaysapps.com/wp-content/uploads/2022/02/hotel1.png"  class="category-banner img-responsive">
          <span class="imagebox-desc">Lorem ipsum dolor sit amet!</span>
        </a>
      </div>
    </div>

  </div>
</div>
 
</section>

    <style>

.imagebox {
  background: #f1eadf;
  padding: 0px;
  position: relative;
  text-align: left;
  width: 100%;
}

.col-sm-6.box-image {
    margin-bottom: 80px;
    padding-right: 50px;
}

.imagebox img {
  opacity: 1;
  transition: 0.5s opacity;
}

.imagebox .imagebox-desc {
  background-color: rgb(245 245 245 / 50%);
  bottom: 0px;
  color: white;
  font-size: 1.2em;
  left: 0px;
  padding: 10px 15px;
  position: absolute;
  transition: 0.5s padding;
  text-align: left;
  width: 100%;
  visibility:hidden;
}

.imagebox:hover img {
  opacity: 0.7;
}

.imagebox:hover .imagebox-desc {
    padding-bottom: 5%;
    visibility: visible;
    padding-top: 5%;
    padding-left: 5%;
}





 .card-heading-up {
    background-color: rgb(245 245 245 / 50%);
    padding: 33px 0 33px 50px;
    position: absolute;
    width: 96%;
    margin-top: -90px;
    color: #fff;
    visibility: hidden;
    transition: all 0.6s cubic-bezier(0.25, 1, 0.5, 1);
}
.gallery_product:hover div {
    visibility: visible;
    transition: 0.3s;
}
section.gallery-nav {
    background-color: rgb(97 97 107 / 50%);
}
.gallery-title
{
    font-size: 36px;
    color: #42B32F;
    text-align: center;
    font-weight: 500;
    margin-bottom: 70px;
}
.gallery-title:after {
    content: "";
    position: absolute;
    width: 7.5%;
    left: 46.5%;
    height: 45px;
    border-bottom: 1px solid #5e5e5e;
}
.filter-button
{
    font-size: 18px;
    /* border: 1px solid #42B32F;
    border-radius: 5px; */
    text-align: center;
    color: #42B32F;
    /* margin-bottom: 30px; */

}
button {
    background: none;
}
.filter-button:hover
{
    color: #ffffff !important;
    text-decoration: underline;

}
.btn-default:active .filter-button:active
{
  color: #ffffff !important;
    text-decoration: underline;
}
button.btn.btn-default.filter-button:focus {
    box-shadow: none;
}
.gallery .btn {
    font-weight: normal;
    border: none;
    padding: 0;
    font-size: 18px;
    line-height: 1.5;
    /* background-color: rgb(97 97 107 / 50%) !important; */
    color: #61616B;
    font-family: Moderat;
    padding: 25px 45px 28px 0;
}

.port-image
{
    width: 100%;
}
section.gallery-list-grid {
    background-color: #F1EADF;
    padding-top: 74px;
}

.gallery_product
{
    margin-bottom: 30px;
    width: 100%;
    margin-bottom: 35px;
    position: relative;
    overflow: hidden;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: inline-block;
    z-index: 1;
}

button:focus {
    outline: 0;
}
button.btn.btn-default.filter-button.active-on {
    color: #fff;
}
    </style>
    <script>
      $(document).ready(function(){

$(".filter-button").click(function(){
    var value = $(this).attr('data-filter');
    
    if(value == "all")
    {
        //$('.filter').removeClass('hidden');
        $('.filter').show('1000');
    }
    else
    {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
        $(".filter").not('.'+value).hide('3000');
        $('.filter').filter('.'+value).show('3000');
        
    }
});


if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});

$('button.btn.btn-default.filter-button').on('click', function(){
    $('button.btn.btn-default.filter-button').removeClass('active-on');
    $(this).addClass('active-on');
});

    </script>
<?php get_footer(); ?>