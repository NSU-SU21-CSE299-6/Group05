@extends('layout')
@section('content')
 
<div class="card">
    <div class="card-body">
         <h2 class="card-title">Data table</h2>
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
                          <th>Phone</th>
                          <th>Image</th>
                          <th>Address</th>
                          <th>Club</th>
                          <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($all_member_info as $v_member)
                      <tr>
                          <td>{{$v_member->member_id}}</td>
                          <td>{{$v_member->member_name}}</td>
                          <td>{{$v_member->member_phone}}</td>
                          <td><img src="{{URL::to($v_member->member_image)}}" height="80" width="100" style="border-radius: 50%;"></td>
                          <td>{{$v_member->member_address}}</td>
                          <td>
                                @if($v_member->member_club == 1)
                                     <span class = "label label-success">{{'NSU ACM'}}</span>
                                @elseif($v_member->member_club == 2)
                                     <span class = "label label-success">{{'NSU PS'}}</span>
                                @elseif($v_member->member_club == 3)
                                     <span class = "label label-success">{{'NSU IEEE'}}</span>
                                @elseif($v_member->member_club == 4)
                                     <span class = "label label-success">{{'NSU SSC'}}</span>
                                @else
                                     <span class = "label label-success">{{'Not Defined'}}</span>
                                @endif
                          </td>
                          <td>
                            <a href="{{URL::to('/member_view/'.$v_member->member_id)}}"><button class="btn btn-outline-primary">View</button></a>
                            <a href="{{URL::to('/member_edit/'.$v_member->member_id)}}"><button class="btn btn-outline-primary">Edit</button></a>
                            <a href="{{URL::to('/member_delete/'.$v_member->member_id)}}"><button class="btn btn-outline-danger"
                            >Delete</button></a>
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