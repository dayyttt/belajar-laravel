@extends('layouts.app')
@section('content')
<section id="contact">      
      <div class="contact-form">
        <div class="container">
          <div class="row justify-content-center"> 
            <div class="offset-top">
              <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="contact-block wow fadeInUp animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
                  <div class="section-header">   
                    <p class="btn btn-subtitle wow fadeInDown animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">Contact</p>       
                    <h2 class="section-title">Love to Hear From You</h2>
                  </div>
                  <form id="contactForm">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="" data-error="Please enter your name" fdprocessedid="t3v0sa">
                          <div class="help-block with-errors"></div>
                        </div>                                 
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" placeholder="Email" id="email" class="form-control" name="name" required="" data-error="Please enter your email" fdprocessedid="1y0d5xi">
                          <div class="help-block with-errors"></div>
                        </div> 
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="text" placeholder="Subject" id="msg_subject" class="form-control" required="" data-error="Please enter your subject" fdprocessedid="n5o9hd">
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group"> 
                          <textarea class="form-control" id="message" placeholder="Message" rows="7" data-error="Write your message" required=""></textarea>
                          <div class="help-block with-errors"></div>
                        </div>
                        <div class="submit-button">
                          <button class="btn btn-common btn-effect" id="submit" type="submit" fdprocessedid="7j2s33">Submit</button>
                          <div id="msgSubmit" class="h3 hidden"></div> 
                          <div class="clearfix"></div> 
                        </div>
                      </div>
                    </div>            
                  </form>
                </div>
              </div>
            </div> 
          </div>
        </div>
      </div>        
    </section>
@endsection
