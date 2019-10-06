@extends('layouts.app')

@section('content')

    <section id="banner" class="">
    <div id="header_slider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#header_slider" data-slide-to="0" class="active"></li>
            <li data-target="#header_slider" data-slide-to="1"></li>
            <li data-target="#header_slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/slider3.jpg" class="img-lg-size w-100" alt="Slider First">
                <img src="images/slider3_mob.jpg" class="img-sm-size w-100" alt="Slider First">
            </div>
            <div class="carousel-item">
                <img src="images/slider2.jpg" class="img-lg-size w-100" alt="Slider Second">
                <img src="images/slider2_mob.jpg" class="img-sm-size w-100" alt="Slider Second">
            </div>
            <div class="carousel-item">
                <img src="images/slider4.jpg" class="img-lg-size w-100" alt="Slider Third">
                <img src="images/slider4_mob.jpg" class="img-sm-size w-100" alt="Slider Third">
            </div>
        </div>
        <a class="carousel-control-prev" href="#header_slider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#header_slider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<section id="laren_directry" class="py-lg-4 py-3">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-12">
        <img src="images/everything.jpg" class="img-lg-size w-100" >
          <img src="images/everything_mob.jpg" class="img-sm-size w-100" >
      </div>
    </div>
  </div>
</section>

<section id="our_clients" class="py-lg-4 py-3">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-12">
        <h1 style="color: black">Health</h1>
        <p >
          <h5 style="color: black">
          Bootstrap is a free and open-source CSS framework directed at responsive, mobile-first front-end web development. It contains CSS- and JavaScript-based design templates for typography, forms, buttons, navigation and other interface for it <br>
          Bootstrap is a free and open-source CSS framework directed at responsive, mobile-first front-end web development. It contains CSS- and JavaScript-based JavaScript-based design templates for typography, forms, buttons, navigation and other interface components. Wikipedia
        </h5>
        </p>
        <br>
        <a href="" class="btn btn-info">Mental Wellbeing</a>
        <a href="" class="btn btn-danger">physical Wellbeing</a>
        <a href="" class="btn btn-success">social Wellbeing</a> 

      </div>
      <div class="col-sm-6 col-12">
        <img src="images/health.png" class="img-lg-size w-100" >
        <img src="images/everything_mob.jpg" class="img-sm-size w-100" >  
      </div>
    </div>
  </div>
</section>

 <section class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="heading p-3 mb-5 wow bounceInUp" data-wow-duration="1.4s">
                    <h3>Wallet Based Trasaction</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
      <div class="row justify-content-center" >
        <div class="col-md-10">
            <h5><p>
             <img src="images/wallet.png" style="width: 200px; float:left;" > 
             <ul>
               <li>You Can create online wallet for our health services.</li>
               <li>75% content is free, only 25% is premium.</li>
               <li>Premium content is optional, you can read only free content.</li>
               <li>There is one time registration, No card or bank detail required.</li>
             </ul>
             </p></h5>
        </div>
    </div>    
  </div>
</section>


<!--

<section id="laren_directry" class="py-lg-4 py-3">
    <div class="container">

          <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
           
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-6754955755683111"
                 data-ad-slot="5216685041"
                 data-ad-format="auto"
                 data-full-width-responsive="true"></ins>
            <script>
                 (adsbygoogle = window.adsbygoogle || []).push({});
            </script>

    </div>
    
</section>
-->

<section id="our_clients" class="py-lg-5 py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
              <div class="col-lg-12 col-12">
                <img src="images/YogaMain.jpg" class="img-lg-size w-100" >
                <img src="images/YogaMainMob.jpg" class="img-sm-size w-100" >
              </div>
            </div>
        </div>
    </div>
</section>

<section id="convinience" class="py-lg-5 py-3">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-3">
        <img src="images/exp2.png" class="wow bounceInUp" width="200" data-wow-duration="1.4s" alt="Generate Business Leads for yourself" />
      </div>
      <div class="col-lg-9 col-9">
        <ul>
          <li class="wow bounceInUp" data-wow-duration="1.4s">Convenience to Attend the Course Anytime, Anywhere from your <span>Base Location.</span></li>
          <li class="wow bounceInUp" data-wow-duration="1.4s">Subject matter experts from <span>World's best Universities</span>.</li>
          <li class="wow bounceInUp" data-wow-duration="1.4s">Generate <span>Business Leads</span> for yourself</li>
        </ul>
      </div>
    </div>
  </div>
</section>


<section id="our_clients" class="py-lg-5 py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="heading p-3 mb-5 wow bounceInUp" data-wow-duration="1.4s">
                    <h3>Our Satisfied Clients</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="customer-logos">
       <ul >
           <li style="display: inline;"><img src="images/logo1.png" width="200"></li>
           <li style="display: inline;"><img src="images/logo1.png" width="200"></li>
           <li style="display: inline;"><img src="images/logo1.png" width="200"></li>
           <li style="display: inline;"><img src="images/logo1.png" width="200"></li>
           <li style="display: inline;"><img src="images/logo1.png" width="200"></li>
           <li style="display: inline;"><img src="images/logo1.png" width="200"></li>
       </ul>

        
    </div>
</section>


@endsection
     
