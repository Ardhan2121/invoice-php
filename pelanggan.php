﻿<!DOCTYPE html>
<html lang="en">

<?php
session_start();
include("partials/logstate.php");
$_SESSION['hal'] = 'Pelanggan';
?>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="keywords" content="" />
  <meta name="author" content="" />
  <meta name="robots" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template" />
  <meta property="og:title" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template" />
  <meta property="og:description" content="Fillow : Fillow Saas Admin  Bootstrap 5 Template" />
  <meta property="og:image" content="https://fillow.dexignlab.com/xhtml/social-image.png" />
  <meta name="format-detection" content="telephone=no" />

  <!-- PAGE TITLE HERE -->
  <title>Admin Dashboard</title>

  <!-- FAVICONS ICON -->

  <!-- sweetalert -->
  <link href="vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">

  <!-- Datatable -->
  <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet" />

  <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
  <link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />

  <!-- Toastr -->
  <link rel="stylesheet" href="vendor/toastr/css/toastr.min.css">
</head>

<body>
  <!--*******************
        Preloader start
    ********************-->
  <div id="preloader">
    <div class="lds-ripple">
      <div></div>
      <div></div>
    </div>
  </div>
  <!--*******************
        Preloader end
    ********************-->

  <!--**********************************
        Main wrapper start
    ***********************************-->
  <div id="main-wrapper">
    <!--**********************************
            Nav header start
        ***********************************-->
    <div class="nav-header">
      <a href="index.html" class="brand-logo">
        <svg class="logo-abbr" width="55" height="55" viewbox="0 0 55 55" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd"
            d="M27.5 0C12.3122 0 0 12.3122 0 27.5C0 42.6878 12.3122 55 27.5 55C42.6878 55 55 42.6878 55 27.5C55 12.3122 42.6878 0 27.5 0ZM28.0092 46H19L19.0001 34.9784L19 27.5803V24.4779C19 14.3752 24.0922 10 35.3733 10V17.5571C29.8894 17.5571 28.0092 19.4663 28.0092 24.4779V27.5803H36V34.9784H28.0092V46Z"
            fill="url(#paint0_linear)"></path>
          <defs></defs>
        </svg>
        <div class="brand-title">
          <h2 class="">Fillow.</h2>
          <span class="brand-sub-title">Saas Admin Dashboard</span>
        </div>
      </a>
      <div class="nav-control">
        <div class="hamburger"><span class="line"></span><span class="line"></span><span class="line"></span></div>
      </div>
    </div>
    <!--**********************************
            Nav header end
        ***********************************-->

    <!--**********************************
            Chat box start
        ***********************************-->
    <div class="chatbox">
      <div class="chatbox-close"></div>
      <div class="custom-tab-1">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#chat">Chat</a>
          </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane fade active show" id="chat" role="tabpanel">
            <div class="card mb-sm-3 mb-md-0 contacts_card dlab-chat-user-box">
              <div class="card-header chat-list-header text-center">
                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24"
                    version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"></rect>
                      <rect fill="#000000" opacity="0.3"
                        transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) "
                        x="4" y="11" width="16" height="2" rx="1"></rect>
                    </g>
                  </svg></a>
                <div>
                  <h6 class="mb-1">Chat List</h6>
                  <p class="mb-0">Show All</p>
                </div>
                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24"
                    version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <rect x="0" y="0" width="24" height="24"></rect>
                      <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                      <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                      <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                    </g>
                  </svg></a>
              </div>
              <div class="card-body contacts_body p-0 dlab-scroll" id="DLAB_W_Contacts_Body">
                <ul class="contacts">
                  <li class="name-first-letter">A</li>
                  <li class="active dlab-chat-user">
                    <div class="d-flex bd-highlight">
                      <div class="img_cont">
                        <img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="" />
                        <span class="online_icon"></span>
                      </div>
                      <div class="user_info">
                        <span>Archie Parker</span>
                        <p>Kalid is online</p>
                      </div>
                    </div>
                  </li>
                  <li class="dlab-chat-user">
                    <div class="d-flex bd-highlight">
                      <div class="img_cont">
                        <img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="" />
                        <span class="online_icon offline"></span>
                      </div>
                      <div class="user_info">
                        <span>Alfie Mason</span>
                        <p>Taherah left 7 mins ago</p>
                      </div>
                    </div>
                  </li>
                  <li class="dlab-chat-user">
                    <div class="d-flex bd-highlight">
                      <div class="img_cont">
                        <img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="" />
                        <span class="online_icon"></span>
                      </div>
                      <div class="user_info">
                        <span>AharlieKane</span>
                        <p>Sami is online</p>
                      </div>
                    </div>
                  </li>
                  <li class="dlab-chat-user">
                    <div class="d-flex bd-highlight">
                      <div class="img_cont">
                        <img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="" />
                        <span class="online_icon offline"></span>
                      </div>
                      <div class="user_info">
                        <span>Athan Jacoby</span>
                        <p>Nargis left 30 mins ago</p>
                      </div>
                    </div>
                  </li>
                  <li class="name-first-letter">B</li>
                  <li class="dlab-chat-user">
                    <div class="d-flex bd-highlight">
                      <div class="img_cont">
                        <img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="" />
                        <span class="online_icon offline"></span>
                      </div>
                      <div class="user_info">
                        <span>Bashid Samim</span>
                        <p>Rashid left 50 mins ago</p>
                      </div>
                    </div>
                  </li>
                  <li class="dlab-chat-user">
                    <div class="d-flex bd-highlight">
                      <div class="img_cont">
                        <img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="" />
                        <span class="online_icon"></span>
                      </div>
                      <div class="user_info">
                        <span>Breddie Ronan</span>
                        <p>Kalid is online</p>
                      </div>
                    </div>
                  </li>
                  <li class="dlab-chat-user">
                    <div class="d-flex bd-highlight">
                      <div class="img_cont">
                        <img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="" />
                        <span class="online_icon offline"></span>
                      </div>
                      <div class="user_info">
                        <span>Ceorge Carson</span>
                        <p>Taherah left 7 mins ago</p>
                      </div>
                    </div>
                  </li>
                  <li class="name-first-letter">D</li>
                  <li class="dlab-chat-user">
                    <div class="d-flex bd-highlight">
                      <div class="img_cont">
                        <img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="" />
                        <span class="online_icon"></span>
                      </div>
                      <div class="user_info">
                        <span>Darry Parker</span>
                        <p>Sami is online</p>
                      </div>
                    </div>
                  </li>
                  <li class="dlab-chat-user">
                    <div class="d-flex bd-highlight">
                      <div class="img_cont">
                        <img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="" />
                        <span class="online_icon offline"></span>
                      </div>
                      <div class="user_info">
                        <span>Denry Hunter</span>
                        <p>Nargis left 30 mins ago</p>
                      </div>
                    </div>
                  </li>
                  <li class="name-first-letter">J</li>
                  <li class="dlab-chat-user">
                    <div class="d-flex bd-highlight">
                      <div class="img_cont">
                        <img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="" />
                        <span class="online_icon offline"></span>
                      </div>
                      <div class="user_info">
                        <span>Jack Ronan</span>
                        <p>Rashid left 50 mins ago</p>
                      </div>
                    </div>
                  </li>
                  <li class="dlab-chat-user">
                    <div class="d-flex bd-highlight">
                      <div class="img_cont">
                        <img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="" />
                        <span class="online_icon"></span>
                      </div>
                      <div class="user_info">
                        <span>Jacob Tucker</span>
                        <p>Kalid is online</p>
                      </div>
                    </div>
                  </li>
                  <li class="dlab-chat-user">
                    <div class="d-flex bd-highlight">
                      <div class="img_cont">
                        <img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="" />
                        <span class="online_icon offline"></span>
                      </div>
                      <div class="user_info">
                        <span>James Logan</span>
                        <p>Taherah left 7 mins ago</p>
                      </div>
                    </div>
                  </li>
                  <li class="dlab-chat-user">
                    <div class="d-flex bd-highlight">
                      <div class="img_cont">
                        <img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="" />
                        <span class="online_icon"></span>
                      </div>
                      <div class="user_info">
                        <span>Joshua Weston</span>
                        <p>Sami is online</p>
                      </div>
                    </div>
                  </li>
                  <li class="name-first-letter">O</li>
                  <li class="dlab-chat-user">
                    <div class="d-flex bd-highlight">
                      <div class="img_cont">
                        <img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="" />
                        <span class="online_icon offline"></span>
                      </div>
                      <div class="user_info">
                        <span>Oliver Acker</span>
                        <p>Nargis left 30 mins ago</p>
                      </div>
                    </div>
                  </li>
                  <li class="dlab-chat-user">
                    <div class="d-flex bd-highlight">
                      <div class="img_cont">
                        <img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="" />
                        <span class="online_icon offline"></span>
                      </div>
                      <div class="user_info">
                        <span>Oscar Weston</span>
                        <p>Rashid left 50 mins ago</p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="card chat dlab-chat-history-box d-none">
              <div class="card-header chat-list-header text-center">
                <a href="javascript:void(0);" class="dlab-chat-history-back">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px"
                    height="18px" viewbox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <polygon points="0 0 24 0 24 24 0 24"></polygon>
                      <rect fill="#000000" opacity="0.3"
                        transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) "
                        x="14" y="7" width="2" height="10" rx="1"></rect>
                      <path
                        d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z"
                        fill="#000000" fill-rule="nonzero"
                        transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) ">
                      </path>
                    </g>
                  </svg>
                </a>
                <div>
                  <h6 class="mb-1">Chat with Khelesh</h6>
                  <p class="mb-0 text-success">Online</p>
                </div>
                <div class="dropdown">
                  <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false"><svg
                      xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px"
                      height="18px" viewbox="0 0 24 24" version="1.1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24"></rect>
                        <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                        <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                        <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                      </g>
                    </svg></a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li class="dropdown-item"><i class="fa fa-user-circle text-primary me-2"></i> View profile</li>
                    <li class="dropdown-item"><i class="fa fa-users text-primary me-2"></i> Add to btn-close friends
                    </li>
                    <li class="dropdown-item"><i class="fa fa-plus text-primary me-2"></i> Add to group</li>
                    <li class="dropdown-item"><i class="fa fa-ban text-primary me-2"></i> Block</li>
                  </ul>
                </div>
              </div>
              <div class="card-body msg_card_body dlab-scroll" id="DLAB_W_Contacts_Body3">
                <div class="d-flex justify-content-start mb-4">
                  <div class="img_cont_msg">
                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                  </div>
                  <div class="msg_cotainer">
                    Hi, how are you samim?
                    <span class="msg_time">8:40 AM, Today</span>
                  </div>
                </div>
                <div class="d-flex justify-content-end mb-4">
                  <div class="msg_cotainer_send">
                    Hi Khalid i am good tnx how about you?
                    <span class="msg_time_send">8:55 AM, Today</span>
                  </div>
                  <div class="img_cont_msg">
                    <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                  </div>
                </div>
                <div class="d-flex justify-content-start mb-4">
                  <div class="img_cont_msg">
                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                  </div>
                  <div class="msg_cotainer">
                    I am good too, thank you for your chat template
                    <span class="msg_time">9:00 AM, Today</span>
                  </div>
                </div>
                <div class="d-flex justify-content-end mb-4">
                  <div class="msg_cotainer_send">
                    You are welcome
                    <span class="msg_time_send">9:05 AM, Today</span>
                  </div>
                  <div class="img_cont_msg">
                    <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                  </div>
                </div>
                <div class="d-flex justify-content-start mb-4">
                  <div class="img_cont_msg">
                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                  </div>
                  <div class="msg_cotainer">
                    I am looking for your next templates
                    <span class="msg_time">9:07 AM, Today</span>
                  </div>
                </div>
                <div class="d-flex justify-content-end mb-4">
                  <div class="msg_cotainer_send">
                    Ok, thank you have a good day
                    <span class="msg_time_send">9:10 AM, Today</span>
                  </div>
                  <div class="img_cont_msg">
                    <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                  </div>
                </div>
                <div class="d-flex justify-content-start mb-4">
                  <div class="img_cont_msg">
                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                  </div>
                  <div class="msg_cotainer">
                    Bye, see you
                    <span class="msg_time">9:12 AM, Today</span>
                  </div>
                </div>
                <div class="d-flex justify-content-start mb-4">
                  <div class="img_cont_msg">
                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                  </div>
                  <div class="msg_cotainer">
                    Hi, how are you samim?
                    <span class="msg_time">8:40 AM, Today</span>
                  </div>
                </div>
                <div class="d-flex justify-content-end mb-4">
                  <div class="msg_cotainer_send">
                    Hi Khalid i am good tnx how about you?
                    <span class="msg_time_send">8:55 AM, Today</span>
                  </div>
                  <div class="img_cont_msg">
                    <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                  </div>
                </div>
                <div class="d-flex justify-content-start mb-4">
                  <div class="img_cont_msg">
                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                  </div>
                  <div class="msg_cotainer">
                    I am good too, thank you for your chat template
                    <span class="msg_time">9:00 AM, Today</span>
                  </div>
                </div>
                <div class="d-flex justify-content-end mb-4">
                  <div class="msg_cotainer_send">
                    You are welcome
                    <span class="msg_time_send">9:05 AM, Today</span>
                  </div>
                  <div class="img_cont_msg">
                    <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                  </div>
                </div>
                <div class="d-flex justify-content-start mb-4">
                  <div class="img_cont_msg">
                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                  </div>
                  <div class="msg_cotainer">
                    I am looking for your next templates
                    <span class="msg_time">9:07 AM, Today</span>
                  </div>
                </div>
                <div class="d-flex justify-content-end mb-4">
                  <div class="msg_cotainer_send">
                    Ok, thank you have a good day
                    <span class="msg_time_send">9:10 AM, Today</span>
                  </div>
                  <div class="img_cont_msg">
                    <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                  </div>
                </div>
                <div class="d-flex justify-content-start mb-4">
                  <div class="img_cont_msg">
                    <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                  </div>
                  <div class="msg_cotainer">
                    Bye, see you
                    <span class="msg_time">9:12 AM, Today</span>
                  </div>
                </div>
              </div>
              <div class="card-footer type_msg">
                <div class="input-group">
                  <textarea class="form-control" placeholder="Type your message..."></textarea>
                  <div class="input-group-append">
                    <button type="button" class="btn btn-primary"><i class="fa fa-location-arrow"></i></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="alerts" role="tabpanel">
            <div class="card mb-sm-3 mb-md-0 contacts_card">
              <div class="card-header chat-list-header text-center">
                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24"
                    version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <rect x="0" y="0" width="24" height="24"></rect>
                      <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                      <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                      <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                    </g>
                  </svg></a>
                <div>
                  <h6 class="mb-1">Notications</h6>
                  <p class="mb-0">Show All</p>
                </div>
                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24"
                    version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <rect x="0" y="0" width="24" height="24"></rect>
                      <path
                        d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                        fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                      <path
                        d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                        fill="#000000" fill-rule="nonzero"></path>
                    </g>
                  </svg></a>
              </div>
              <div class="card-body contacts_body p-0 dlab-scroll" id="DLAB_W_Contacts_Body1">
                <ul class="contacts">
                  <li class="name-first-letter">SEVER STATUS</li>
                  <li class="active">
                    <div class="d-flex bd-highlight">
                      <div class="img_cont primary">KK</div>
                      <div class="user_info">
                        <span>David Nester Birthday</span>
                        <p class="text-primary">Today</p>
                      </div>
                    </div>
                  </li>
                  <li class="name-first-letter">SOCIAL</li>
                  <li>
                    <div class="d-flex bd-highlight">
                      <div class="img_cont success">RU</div>
                      <div class="user_info">
                        <span>Perfection Simplified</span>
                        <p>Jame Smith commented on your status</p>
                      </div>
                    </div>
                  </li>
                  <li class="name-first-letter">SEVER STATUS</li>
                  <li>
                    <div class="d-flex bd-highlight">
                      <div class="img_cont primary">AU</div>
                      <div class="user_info">
                        <span>AharlieKane</span>
                        <p>Sami is online</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex bd-highlight">
                      <div class="img_cont info">MO</div>
                      <div class="user_info">
                        <span>Athan Jacoby</span>
                        <p>Nargis left 30 mins ago</p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="card-footer"></div>
            </div>
          </div>
          <div class="tab-pane fade" id="notes">
            <div class="card mb-sm-3 mb-md-0 note_card">
              <div class="card-header chat-list-header text-center">
                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24"
                    version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1"></rect>
                      <rect fill="#000000" opacity="0.3"
                        transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) "
                        x="4" y="11" width="16" height="2" rx="1"></rect>
                    </g>
                  </svg></a>
                <div>
                  <h6 class="mb-1">Notes</h6>
                  <p class="mb-0">Add New Nots</p>
                </div>
                <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewbox="0 0 24 24"
                    version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <rect x="0" y="0" width="24" height="24"></rect>
                      <path
                        d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                        fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                      <path
                        d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                        fill="#000000" fill-rule="nonzero"></path>
                    </g>
                  </svg></a>
              </div>
              <div class="card-body contacts_body p-0 dlab-scroll" id="DLAB_W_Contacts_Body2">
                <ul class="contacts">
                  <li class="active">
                    <div class="d-flex bd-highlight">
                      <div class="user_info">
                        <span>New order placed..</span>
                        <p>10 Aug 2020</p>
                      </div>
                      <div class="ms-auto">
                        <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i
                            class="fas fa-pencil-alt"></i></a>
                        <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i
                            class="fa fa-trash"></i></a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex bd-highlight">
                      <div class="user_info">
                        <span>Youtube, a video-sharing website..</span>
                        <p>10 Aug 2020</p>
                      </div>
                      <div class="ms-auto">
                        <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i
                            class="fas fa-pencil-alt"></i></a>
                        <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i
                            class="fa fa-trash"></i></a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex bd-highlight">
                      <div class="user_info">
                        <span>john just buy your product..</span>
                        <p>10 Aug 2020</p>
                      </div>
                      <div class="ms-auto">
                        <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i
                            class="fas fa-pencil-alt"></i></a>
                        <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i
                            class="fa fa-trash"></i></a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="d-flex bd-highlight">
                      <div class="user_info">
                        <span>Athan Jacoby</span>
                        <p>10 Aug 2020</p>
                      </div>
                      <div class="ms-auto">
                        <a href="javascript:void(0);" class="btn btn-primary btn-xs sharp me-1"><i
                            class="fas fa-pencil-alt"></i></a>
                        <a href="javascript:void(0);" class="btn btn-danger btn-xs sharp"><i
                            class="fa fa-trash"></i></a>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--**********************************
            Chat box End
        ***********************************-->

    <!--**********************************
            Header start
        ***********************************-->
    <?php include 'partials/header.php'; ?>

    <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

    <!--**********************************
            Sidebar start
        ***********************************-->
    <?php include 'partials/sidebar.php'; ?>
    <!--**********************************
            Sidebar end
        ***********************************-->

    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">
      <!-- row -->
      <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <h5>Daftar Pelanggan</h5>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambahPelanggan">
              Tambah Pelanggan
            </button>
          </div>
          <div class="card-body">
            <div class="table-responsive p-0">
              <table class="display w-100" id="tabel">
                <thead>
                  <th>ID</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Alamat</th>
                  <th>Telepon</th>
                  <th>Aksi</th>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--**********************************
            Content body end
        ***********************************-->

    <!--**********************************
            Footer start
        ***********************************-->
    <div class="footer">
      <div class="copyright">
        <p>Copyright © Designed &amp; Developed by <a href="../index.htm" target="_blank">XI RPL - SMK
            MEDIA INFORMATIKA</a> 2021</p>
      </div>
    </div>
    <!--**********************************
            Footer end
        ***********************************-->

    <!--**********************************
           Support ticket button start
        ***********************************-->

    <!--**********************************
           Support ticket button end
        ***********************************-->
  </div>
  <!--**********************************
        Main wrapper end
    ***********************************-->

  <!--**********************************
        Scripts
    ***********************************-->
  <!-- Required vendors -->
  <script src="vendor/global/global.min.js"></script>
  <script src="vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
  <script src="js/custom.min.js"></script>
  <script src="js/dlabnav-init.js"></script>
  <script src="js/demo.js"></script>


  <script src="js/styleSwitcher.js"></script>
  <script src="vendor/inputmask/dist/jquery.inputmask.min.js
"></script>

  <!-- Datatable -->
  <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
  <script src="js/plugins-init/datatables.init.js"></script>

  <!-- sweetalert -->
  <script src="node_modules/sweetalert2/dist/sweetalert2.js"></script>
  <script src="js/plugins-init/sweetalert.init.js"></script>

  <script src="vendor/toastr/js/toastr.min.js"></script>



  <script>
    $(document).ready(function () {
      $('.telepon').inputmask('9999-9999-9999');
    });


    var table = $('#tabel').DataTable({
      lengthChange: false,
      language: {
        search: 'Search...',
        paginate: {
          next: '<i class="fa fa-angle-double-right" aria-hidden="true"></i>',
          previous: '<i class="fa fa-angle-double-left" aria-hidden="true"></i>',
        }
      },
      ajax: "controller/pelanggan/listpelanggan.php",
      columns: [
        { "data": "ID_Pelanggan" },
        { "data": "Nama_Pelanggan" },
        { "data": "Email_Pelanggan" },
        { "data": "Alamat_Pelanggan" },
        { "data": "NoTelp_Pelanggan" },
        
        <?php if($_SESSION["role"] == "admin"){ ?>
        {
          data: null,
          render: function (data, type, row) {
            // Tambahkan tombol Edit
            var editButton = '<button type="button" class="btn light btn-warning btn-edit" data-id="' + row.ID_Pelanggan + '" data-nama="' + row.Nama_Pelanggan + '" data-email="' + row.Email_Pelanggan + '" data-telepon="' + row.NoTelp_Pelanggan + '" data-alamat="' + row.Alamat_Pelanggan + '">Edit</button>';
            // Tambahkan tombol Delete
            var deleteButton = '<button type="button" class="btn btn-danger btn-delete" data-id="' + row.ID_Pelanggan + '">Delete</button>';
            // Gabungkan tombol Edit dan Delete
            return editButton + ' ' + deleteButton;
          }
        }
        <?php } ?>

      ]
    });

    $(document).ready(function () {
      // Saat form submit, kirim data ke API PHP dengan AJAX
      $('#form-tambah-pelanggan').submit(function (event) {
        // Mencegah form submit secara default
        event.preventDefault();

        // Ambil data dari form
        var nama = $('#nama').val();
        var email = $('#email').val();
        var alamat = $('#alamat').val();
        var telepon = $('#telepon').val();

        // Buat object data yang akan dikirim ke API
        var data = {
          'nama': nama,
          'email': email,
          'alamat': alamat,
          'telepon': telepon
        };

        // Kirim data ke API dengan AJAX
        $.ajax({
          type: 'POST',
          url: 'controller/pelanggan/tambahpelanggan.php',
          data: data,
          dataType: 'json',
          success: function (response) {
            // Tampilkan pesan berhasil atau gagal
            if (response.status == 'success') {
              Swal.fire({
                icon: 'success',
                title: response.status,
                text: response.message,
              })
              table.ajax.reload();
              // Reset nilai form
              $('#form-tambah-pelanggan')[0].reset();
              // Tutup modal
              $('#modalTambahPelanggan').modal('hide');
            } else {
              Swal.fire({
                icon: 'error',
                title: response.status,
                text: response.message,
              })
            }
          },
          error: function (xhr, status, error) {
            // Tampilkan pesan error
            alert(error);
          }
        });
      });

      $('#tabel').on('click', '.btn-delete', function () {
        // Ambil data dari tombol Delete
        var id = $(this).data('id');
        // Tampilkan konfirmasi Delete
        Swal.fire({
          title: 'Anda yakin?',
          text: "data akan dihapus permanen",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Hapus',
          cancelButtonText: 'Batal'
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajax({
              url: 'controller/pelanggan/deletepelanggan.php',
              method: 'POST',
              data: { id: id },
              dataType: 'json',
              success: function (response) {
                // Cek apakah status response adalah success
                if (response.status == 'success') {
                  Swal.fire({
                    icon: 'success',
                    title: response.status,
                    text: response.message,
                  })
                  // Reload data table
                  table.ajax.reload();
                } else {
                  Swal.fire({
                    icon: 'error',
                    title: response.status,
                    text: response.message,
                  })
                }
              },
              error: function (xhr, ajaxOptions, thrownError) {
                // Tampilkan pesan error
                alert(xhr.responseText);
              }
            });
          }
        })
      });

      // Tambahkan event click pada tombol edit
      $('#tabel').on('click', '.btn-edit', function () {
        // Ambil data dari row tabel yang diklik
        var id = $(this).data('id');
        var nama = $(this).data('nama');
        var email = $(this).data('email');
        var alamat = $(this).data('alamat');
        var telepon = $(this).data('telepon');

        // Set value form pada modal edit pelanggan
        $('#editId').val(id);
        $('#editNama').val(nama);
        $('#editEmail').val(email);
        $('#editAlamat').val(alamat);
        $('#editTelepon').val(telepon);

        $('#editPelangganModal').modal('show');
      });

      //ketika form disubmit
      $(document).on('submit', '#formEditPelanggan', function (e) {
        e.preventDefault();

        // Ambil data dari form
        var idPelanggan = $('#editId').val();
        var namaPelanggan = $('#editNama').val();
        var emailPelanggan = $('#editEmail').val();
        var alamatPelanggan = $('#editAlamat').val();
        var teleponPelanggan = $('#editTelepon').val();

        // Buat objek data untuk dikirim ke server
        var data = {
          id: idPelanggan,
          nama: namaPelanggan,
          email: emailPelanggan,
          telepon: teleponPelanggan,
          alamat: alamatPelanggan
        };

        // Kirim request ke API menggunakan AJAX
        $.ajax({
          url: 'controller/pelanggan/editpelanggan.php',
          type: 'POST',
          data: data,
          success: function (response) {
            // Tampilkan pesan sukses
            Swal.fire({
              icon: 'success',
              title: response.status,
              text: response.message,
            })
            // Refresh data pada tabel
            $('#tabel').DataTable().ajax.reload();

            // Tutup modal edit pelanggan
            $('#editPelangganModal').modal('hide');
          },
          error: function (xhr, status, error) {
            Swal.fire({
              icon: 'error',
              title: status,
              text: error,
            })
          }
        });
      });
    });

    $(document).ready(function () {
      $('#form-edit-profile').submit(function (e) {
        e.preventDefault(); // prevent the default form submit

        // get the form data
        var formData = {
          'nama': $('#nama-profil').val(),
          'password': $('#password').val(),
          'newpassword': $('#newpassword').val()
        };

        if (formData.newpassword.length < 6) {
          event.preventDefault();
          toastr.error("Password Tidak boleh Kurang dari 6 Karakter", "WRONG !", {
            positionClass: "toast-top-right",
            timeOut: 5e3,
            closeButton: !0,
            debug: !1,
            newestOnTop: !0,
            progressBar: !0,
            preventDuplicates: !0,
            onclick: null,
            showDuration: "300",
            hideDuration: "1000",
            extendedTimeOut: "1000",
            showEasing: "swing",
            hideEasing: "linear",
            showMethod: "fadeIn",
            hideMethod: "fadeOut",
            tapToDismiss: !1
          })
        }

        else {
          // send the form data to the server
          $.ajax({
            url: "controller/editprofile.php",
            type: "POST",
            data: formData,
            success: function (response) {
              toastr.success(response, "Success", {
                positionClass: "toast-top-right",
                timeOut: 5e3,
                closeButton: !0,
                debug: !1,
                newestOnTop: !0,
                progressBar: !0,
                preventDuplicates: !0,
                onclick: null,
                showDuration: "300",
                hideDuration: "1000",
                extendedTimeOut: "1000",
                showEasing: "swing",
                hideEasing: "linear",
                showMethod: "fadeIn",
                hideMethod: "fadeOut",
                tapToDismiss: !1
              });
              $('#modalEditProfile').modal('hide');
            },
            error: function (xhr, status, error) {
              console.log("ini error");
              toastr.error(xhr.responseText, "WRONG !", {
                positionClass: "toast-top-right",
                timeOut: 5e3,
                closeButton: !0,
                debug: !1,
                newestOnTop: !0,
                progressBar: !0,
                preventDuplicates: !0,
                onclick: null,
                showDuration: "300",
                hideDuration: "1000",
                extendedTimeOut: "1000",
                showEasing: "swing",
                hideEasing: "linear",
                showMethod: "fadeIn",
                hideMethod: "fadeOut",
                tapToDismiss: !1
              })
            }
          });
        }
      });
    });
  </script>
  <?php include 'modal/pelanggan.php'; ?>
  <?php include 'modal/editprofile.php'; ?>


</body>

</html>