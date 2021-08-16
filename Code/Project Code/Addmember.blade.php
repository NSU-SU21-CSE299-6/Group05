@extends('layout')
@section('content')

<div class="col-12 col-lg-6 grid-margin">
     <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Member's Information</h2>
                        <form class="forms-sample">
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Member Name</label>
                                  <input type="text" class="form-control p-input" name = "member_name" aria-describedby="emailHelp" placeholder="Enter name">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">ID</label>
                                  <input type="text" class="form-control p-input" name="member_id" placeholder="Member ID">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Father's Name</label>
                                  <input type="text" class="form-control p-input" name="member_fathername" placeholder="father's Name">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Mother's Name</label>
                                  <input type="text" class="form-control p-input" name="member_mothername" placeholder="mother's name">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Email</label>
                                  <input type="email" class="form-control p-input" name="member_email" placeholder="email@gmai.com">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Phone</label>
                                  <input type="text" class="form-control p-input" name="member_phone" placeholder="+001">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Address</label>
                                  <input type="text" class="form-control p-input" name="member_address" placeholder="address">
                              </div>
                              <div class="form-group">
                                  <label>Upload Image</label>
                                  <div class="row">
                                    <div class="col-12">
                                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Image</label>
                                      <input type="file" name="member_image" class="form-control-file" id="exampleInputFile2" aria-describedby="fileHelp">
                                    </div>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Password</label>
                                  <input type="text" class="form-control p-input" name="member_password" placeholder="Password">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Club</label>
                                  <input type="text" class="form-control p-input" name="member_club" placeholder="Club's name. ex:NSU ACM">
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Club</label>
                                  <select class="form-control p-input">
                                      <option>NSU ACM</option>
                                      <option>NSU PS</option>
                                      <option>NSU IEEE</option>
                                      <option>NSU SSC</option>
                                  </select>
                            </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Addmission Year</label>
                                  <input type="text" class="form-control p-input" name="member_addmissionyear" placeholder="Password">
                              </div>
                              <button type="submit" class="btn btn-success">Submit</button>
                          </form>
                    </div>
        </div>
    </div>

@endsection