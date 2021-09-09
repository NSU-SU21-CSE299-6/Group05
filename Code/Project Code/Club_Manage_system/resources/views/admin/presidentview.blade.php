@extends('layout')
@section('content')

<div class="content-wrapper">
          <h1 class="page-title">President Profile</h1>


          <div class="row user-profile">
            <div class="col-lg-10 side-left">
              <div class="card mb-4">
                <div class="card-body avatar">
                  <h2 class="card-title">Info</h2>
                  <img src="http://via.placeholder.com/47x47" alt="">
                  <p class="name">{{$president_description_profile->president_name}}</p>
                  <a class="email" href="#">{{$president_description_profile->president_email}}</a>
                  <h2>Institution ID</h2>
                  <p class="member id"> {{$president_description_profile->president_id}}</p>
                  <h2>Contact Details</h2>
                  <a class="phone" href="#"> {{$president_description_profile->president_phone}}</a>
                </div>
              </div>
              <div class="card mb-4">
                <div class="card-body overview">
                  <ul class="achivements">
                    <li><p>0</p><p>Post</p></li>
                  </ul>
                  <div class="wrapper about-user">
                    <h2 class="card-title mt-4 mb-3">About</h2>
                    <p>Student of NSU.                                         </p>
                  </div>
                  <div class="info-links">
                    <a class="social-link" href="#">
                      <i class="icon-social-facebook icon"></i>
                      <span>https://www.facebook.com/johndoe</span>
                    </a>
                    <a class="social-link" href="#">
                      <i class="icon-social-linkedin icon"></i>
                      <span>https://www.linkedin.com/johndoe</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
</div>
 






@endsection