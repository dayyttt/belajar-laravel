@extends('layouts.app')
@section('content')
    <section id="screenshots" class="screens-shot section">
      <div class="container">
        <div class="section-header">   
          <p class="btn btn-subtitle wow fadeInDown animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">Screenshots</p>       
          <h2 class="section-title">App Screens</h2>
        </div>
        <div class="row">
          <div class="touch-slider owl-carousel owl-theme" style="opacity: 1; display: block;">
            <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 2160px; left: 0px; display: block; transition: 800ms; transform: translate3d(-180px, 0px, 0px);"><div class="owl-item" style="width: 180px;"><div class="item">
              <div class="screenshot-thumb">
                <img class="img-fluid" src="http://127.0.0.1:8000/assets/img/screenshot/img-1.png" alt="">
              </div>
            </div></div><div class="owl-item" style="width: 180px;"><div class="item">
              <div class="screenshot-thumb">
                <img class="img-fluid" src="http://127.0.0.1:8000/assets/img/screenshot/img-2.png" alt="">
              </div>
            </div></div><div class="owl-item" style="width: 180px;"><div class="item">
              <div class="screenshot-thumb">
                <img class="img-fluid" src="http://127.0.0.1:8000/assets/img/screenshot/img-3.png" alt="">
              </div>
            </div></div><div class="owl-item" style="width: 180px;"><div class="item">
              <div class="screenshot-thumb">
                <img class="img-fluid" src="http://127.0.0.1:8000/assets/img/screenshot/img-4.png" alt="">
              </div>
            </div></div><div class="owl-item" style="width: 180px;"><div class="item">
              <div class="screenshot-thumb">
                <img class="img-fluid" src="http://127.0.0.1:8000/assets/img/screenshot/img-5.png" alt="">
              </div>
            </div></div><div class="owl-item" style="width: 180px;"><div class="item">
              <div class="screenshot-thumb">
                <img class="img-fluid" src="http://127.0.0.1:8000/assets/img/screenshot/img-6.png" alt="">
              </div>
            </div></div></div></div>
            
            
            
            
            
          <div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div></div></div>
        </div>
      </div>
    </section>
@endsection
