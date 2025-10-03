@extends('layouts.app')
@section('content')
<div id="pricing" class="section pricing-section">
      <div class="container">
        <div class="section-header">   
          <p class="btn btn-subtitle wow fadeInDown animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">Pricing</p>       
          <h2 class="section-title">Our Pricing Plan</h2>
        </div>

        <div class="row pricing-tables">
          <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="pricing-table wow fadeInLeft animated" data-wow-delay="0.2s" style="visibility: visible;-webkit-animation-delay: 0.2s; -moz-animation-delay: 0.2s; animation-delay: 0.2s;">
              <div class="pricing-details">
                <div class="icon">
                  <i class="lni-rocket"></i>
                </div>
                <h2>Free</h2>
                <ul>
                  <li>Free Installation</li>
                  <li>2 GB Storage</li>
                  <li>Single User</li>
                  <li>Sales Dashboard</li>
                  <li>Minimal Features</li>
                  <li>1000 Logs</li>
                </ul>
                <div class="price">$0<span>/mo</span></div>
              </div>
              <div class="plan-button">
                <a href="#" class="btn btn-border">Get Started</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="pricing-table pricing-active">
              <div class="pricing-details">
                <div class="icon">
                  <i class="lni-drop"></i>
                </div>
                <h2>Standard</h2>
                <ul>
                  <li>Free Installation</li>
                  <li>10 GB Hosting</li>
                  <li>5 Users</li>
                  <li>Sales Dashboard</li>
                  <li>Premium Features</li>
                  <li>50,000 Logs</li>
                </ul>
                <div class="price">$99 <span>/mo</span></div>
              </div>
              <div class="plan-button">
                <a href="#" class="btn btn-border">Get Started</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="pricing-table">
              <div class="pricing-details">
                <div class="icon">
                  <i class="lni-briefcase"></i>
                </div>
                <h2>Business</h2>
                <ul>
                  <li>Free Installation</li>
                  <li>50 GB Hosting</li>
                  <li>Unlimited Users</li>
                  <li>Sales and Marketing Dashbaord</li>
                  <li>Premium Features</li>
                  <li>Unlimited Logs</li>
                </ul>
                <div class="price">$199 <span>/mo</span></div>
              </div>
              <div class="plan-button">
                <a href="#" class="btn btn-border">Get Started</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
@endsection