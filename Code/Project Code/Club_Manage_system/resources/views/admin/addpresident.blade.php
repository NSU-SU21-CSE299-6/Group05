@extends('layout')
@section('content')

<div class="col-12 col-lg-6 grid-margin">
     <div class="card">
                <div class="card-body">
                    <h2 class="card-title">President's Information</h2>
                    <p class="alert-success">
                         <?php
                            $exception=Session::get('exception');

                            if ($exception){
                            echo $exception;
                            Session::put('exception',null);
                        }
                        ?> 
                        </p>
                        <form class="forms-sample" method="POST" action="{{URL::to('/save_president')}}" enctype="multipart/form-data">
                            {{csrf_field() }}
                              <div class="form-group">
                                  <label for="exampleInputEmail1">President Name</label>
                                  <input type="text" class="form-control p-input" name = "president_name" aria-describedby="emailHelp" placeholder="Enter name">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">ID</label>
                                  <input type="text" class="form-control p-input" name="president_id" placeholder="president ID">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Email</label>
                                  <input type="email" class="form-control p-input" name="president_email" placeholder="email@gmai.com">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputPassword1">Phone</label>
                                  <input type="text" class="form-control p-input" name="president_phone" placeholder="+001">
                              </div>
                              <div class="form-group">
                                  <label>Upload Image</label>
                                  <div class="row">
                                    <div class="col-12">
                                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Image</label>
                                      <input type="file" name="president_image" class="form-control-file" id="exampleInputFile2" aria-describedby="fileHelp">
                                    </div>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputPassword1">Club</label>
                                  <select class="form-control p-input" name="president_club">
                                      <option value="1">NSU ACM</option>
                                      <option value="2">NSU PS</option>
                                      <option value="3">NSU IEEE</option>
                                      <option value="4">NSU SSC</option>
                                  </select>
                            </div>

                              
                              <button type="submit" class="btn btn-success btn-block">Add President</button>
                          </form>
                    </div>
        </div>
    </div>

@endsection