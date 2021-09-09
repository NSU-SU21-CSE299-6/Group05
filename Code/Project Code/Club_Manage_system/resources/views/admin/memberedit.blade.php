@extends('layout')
@section('content')

<div class="col-12 col-lg-6 grid-margin">
     <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Member's Information</h2>
                    <p class="alert-success">
                         <?php
                            $exception=Session::get('exception');

                            if ($exception){
                            echo $exception;
                            Session::put('exception',null);
                        }
                        ?> 
                        </p>
                        <form class="forms-sample" method="POST" action="{{URL::to('/update_member',$member_description_profile->member_id)}}" >
                            {{csrf_field() }}
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Member Name</label>
                                  <input type="text" class="form-control p-input" name = "member_name" aria-describedby="emailHelp" 
                                  value = "{{($member_description_profile->member_name)}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">ID</label>
                                  <input type="text" class="form-control p-input" name="member_id" 
                                  value = "{{($member_description_profile->member_id)}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Father's Name</label>
                                  <input type="text" class="form-control p-input" name="member_fathername" 
                                  value = "{{($member_description_profile->member_fathername)}}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Mother's Name</label>
                                  <input type="text" class="form-control p-input" name="member_mothername" 
                                  value = "{{($member_description_profile->member_mothername)}}">
                              </div>
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
                                  <label for="exampleInputPassword1">Address</label>
                                  <input type="text" class="form-control p-input" name="member_address"
                                   value = "{{($member_description_profile->member_address)}}">
                              </div>
                              
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Password</label>
                                  <input type="password" class="form-control p-input" name="member_password"
                                   value = "{{($member_description_profile->member_password)}}">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Club</label>
                                  <select class="form-control p-input" name="member_club"
                                  value = "{{($member_description_profile->member_club)}}">
                                      <option value="1">NSU ACM</option>
                                      <option value="2">NSU PS</option>
                                      <option value="3">NSU IEEE</option>
                                      <option value="4">NSU SSC</option>
                                  </select>
                            </div>

                             <div class="form-group">
                                  <label for="exampleInputPassword1">Admission Year</label>
                                  <input type="date" class="form-control p-input" name="member_admissionyear" 
                                  value = "{{($member_description_profile->member_admissionyear)}}">
                              </div> 
                              <button type="submit" class="btn btn-success btn-block">Update</button>
                          </form>
                    </div>
        </div>
    </div>

@endsection