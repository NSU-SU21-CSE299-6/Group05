@extends('layout')
@section('content')
 
<div class="card">
    <div class="card-body">
         <h2 class="card-title">All President</h2>
         <p class="alert-success">
                         <?php
                            $exception=Session::get('exception');

                            if ($exception){
                            echo $exception;
                            Session::put('exception',null);
                        }
                        ?> 
                        </p>
            <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Image</th>
                          <th>Club</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($all_president_info as $v_president)
                      <tr>
                          <td>{{$v_president->president_id}}</td>
                          <td>{{$v_president->president_name}}</td>
                          <td>{{$v_president->president_email}}</td>
                          <td>{{$v_president->president_phone}}</td>
                          <td><img src="{{URL::to($v_president->president_image)}}" height="80" width="100" style="border-radius: 50%;"></td>
                          <td>
                                @if($v_president->president_club == 1)
                                     <span class = "label label-success">{{'NSU ACM'}}</span>
                                @elseif($v_president->president_club == 2)
                                     <span class = "label label-success">{{'NSU PS'}}</span>
                                @elseif($v_president->president_club == 3)
                                     <span class = "label label-success">{{'NSU IEEE'}}</span>
                                @elseif($v_president->president_club == 4)
                                     <span class = "label label-success">{{'NSU SSC'}}</span>
                                @else
                                     <span class = "label label-success">{{'Not Defined'}}</span>
                                @endif
                          </td>
                          <td>
                            <a href="{{URL::to('/president_view/'.$v_president->president_id)}}"><button class="btn btn-outline-primary">View</button></a>
                          </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>





@endsection