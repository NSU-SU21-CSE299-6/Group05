@extends('layout')
@section('content')
<!----- Old chat list
 <div class="row">
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
                  </ul>
    </div>
</div> --->

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
        <div class="user-wrapper">
        <ul class="users">
        <li class="user">
            <span class="panding">1</span>         
            <div class="media">
                    <div class="media-left">
                        <img src="https://via.placeholder.com/150" alt="" class="media-object">
                    </div>
                    <div class="media-body">
                        <p class="name">Mohsin Kamal</p>
                        <p class="email">mohsin.kamal879@gmail.com</p>
                    </div>
                </div>
            </li>
            <li class="user">
            <span class="panding">1</span>         
            <div class="media">
                    <div class="media-left">
                        <img src="https://via.placeholder.com/150" alt="" class="media-object">
                    </div>
                    <div class="media-body">
                        <p class="name">Mohsin Kamal</p>
                        <p class="email">mohsin.kamal879@gmail.com</p>
                    </div>
                </div>
            </li>
            </ul>
        </div>
        </div>
        <div class="col-md-8" id="messages">
            <div class="message-wrapper">
                <ul class="messages">
                    <li class="message clearfix">
                        <div class="sent">
                            <p>Hi.How are you?</p>
                            <p class="date"> 21 august 2021</p>
                        </div>
                    </li>
                    <li class="message clearfix">
                        <div class="received">
                            <p>Hi.How are you?</p>
                            <p class="date"> 21 august 2021</p>
                        </div>
                    </li>
                    <li class="message clearfix">
                        <div class="sent">
                            <p>Hi.How are you?</p>
                            <p class="date"> 21 august 2021</p>
                        </div>
                    </li>
                    <li class="message clearfix">
                        <div class="received">
                            <p>Hi.How are you?</p>
                            <p class="date"> 21 august 2021</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="input-text">
                <input type="text" name="message" class="submit">
            </div>
        </div>
    </div>
</div>

@endsection