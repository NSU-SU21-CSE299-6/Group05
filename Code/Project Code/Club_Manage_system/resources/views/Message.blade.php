
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
<style>
      ul {
            margin: 0;
            padding: 0;
        }
        li {
            list-style: none;
        }
      .user-wrapper, .message-wrapper {
            border: 1px solid #dddddd;
            overflow-y: auto;
        }
        .user-wrapper {
            height: 600px;
        }
        .user {
            cursor: pointer;
            padding: 5px 0;
            position: relative;
        }
        .user:hover {
            background: #eeeeee;
        }
        .user:last-child {
            margin-bottom: 0;
        }
        .pending {
            position: absolute;
            left: 13px;
            top: 9px;
            background: #b600ff;
            margin: 0;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            line-height: 18px;
            padding-left: 5px;
            color: #ffffff;
            font-size: 12px;
        }
        
        .media-left {
            margin: 0 10px;
        }
        .media-left img {
            width: 64px;
            border-radius: 64px;
        }
        .media-body p {
            margin: 6px 0;
        }
        .message-wrapper {
            padding: 10px;
            height: 536px;
            background: #eeeeee;
        }
        .messages .message {
            margin-bottom: 15px;
        }
        .messages .message:last-child {
            margin-bottom: 0;
        }
        .received, .sent {
            width: 45%;
            padding: 3px 10px;
            border-radius: 10px;
        }
        .received {
            background: #ffffff;
        }
        .sent {
            background: #3bebff;
            float: right;
            text-align: right;
        }
        .message p {
            margin: 5px 0;
        }
        .date {
            color: #777777;
            font-size: 12px;
        }
        .active {
            background: #eeeeee;
        }
        input[type=text] {
            width: 100%;
            padding: 12px 20px;
            margin: 15px 0 0 0;
            display: inline-block;
            border-radius: 4px;
            box-sizing: border-box;
            outline: none;
            border: 1px solid #cccccc;
        }
        input[type=text]:focus {
            border: 1px solid #aaaaaa;
        }

</style>

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