@extends('member_layout')
@section('content')

<div class="col-12 col-lg-6 grid-margin">
     <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Update Information</h2>
                    <p class="alert-success">
                         <?php
                            $exception=Session::get('exception');

                            if ($exception){
                            echo $exception;
                            Session::put('exception',null);
                        }
                        ?> 
                        </p>
                        <form class="forms-sample" method="POST" action="{{URL::to('/update_own_profile')}}" >
                            {{csrf_field() }}
                              
                              
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Email</label>
                                  <input type="email" class="form-control p-input" name="member_email"
                                   value = "{{($member_description_profile->member_email)}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Phone</label>
                                  <input type="text" class="form-control p-input" name="member_phone"
                                   value = "{{($member_description_profile->member_phone)}}">
                              </div>
                              
                              
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Password</label>
                                  <input type="password" class="form-control p-input" name="member_password"
                                   value = "{{($member_description_profile->member_password)}}">
                              </div>

                             
                              <button type="submit" class="btn btn-success btn-block">Update</button>
                          </form>
                    </div>
        </div>
    </div>

@endsection