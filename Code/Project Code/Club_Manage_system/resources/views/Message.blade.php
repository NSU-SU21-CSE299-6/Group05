@extends('layout')
@section('content')
<div class="col-12">
                    <div class="online-status d-flex justify-content-between align-items-center">
                      <p class="chat">Chats</p>
                      <span class="status offline online"></span>
                    </div>
                  </div>
                  <ul class="profile-list">
                      <li class="profile-list-item">
                          <a href="#">
                              <span class="pro-pic"><img src="http://via.placeholder.com/47x47" alt=""></span>
                              <div class="user">
                                  <p class="u-name">David</p>
                                  <p class="u-designation">Python Developer</p>
                              </div>
                          </a>
                      </li>
                      <!-- list person -->
                  </ul>

@endsection