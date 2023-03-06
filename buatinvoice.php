<!DOCTYPE html>
<html lang="en">

<?php
session_start();
$_SESSION['hal'] = 'Invoice';
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

  <!-- Pick date -->
  <link rel="stylesheet" href="vendor/pickadate/themes/default.css">
  <link rel="stylesheet" href="vendor/pickadate/themes/default.date.css">
  <link href="../icon.css?family=Material+Icons" rel="stylesheet">

  <!-- Datatable -->
  <link href="vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet" />

  <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
  <link href="vendor/jquery-nice-select/css/nice-select.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />

  <!-- Toastr -->
  <link rel="stylesheet" href="vendor/toastr/css/toastr.min.css">

</head>

<?php if (!isset($_SESSION['pelanggan'])) {
  header("Location: 500.html");
} ?>

<body>
  <!--*******************
        Preloader start
    ********************-->
  <!-- <div id="preloader">
    <div class="lds-ripple">
      <div></div>
      <div></div>
    </div>
  </div> -->
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
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">

            <div class="card mt-3">
              <div class="card-header"> Invoice <strong>
                  <?php echo $_SESSION['tanggalInvoice']; ?>
                </strong> <span class="float-end">
                  <strong>Status:</strong> Pending</span> </div>
              <div class="card-body">
                <div class="row mb-5">
                  <div class="col-md-6">
                    <h6>From:</h6>
                    <div> <strong>Webz Poland</strong> </div>
                    <div>Madalinskiego 8</div>
                    <div>71-101 Szczecin, Poland</div>
                    <div>Email: info@webz.com.pl</div>
                    <div>Phone: +48 444 666 3333</div>
                  </div>
                  <div class="col-md-6 text-end">
                    <h6>To:</h6>
                    <div> <strong>
                        <?php echo $_SESSION['pelanggan']['nama']; ?>
                      </strong> </div>
                    <div>Alamat :
                      <?php echo $_SESSION['pelanggan']['alamat']; ?>
                    </div>
                    <div>Email :
                      <?php echo $_SESSION['pelanggan']['email']; ?>
                    </div>
                    <div>Telepon :
                      <?php echo $_SESSION['pelanggan']['telepon']; ?>
                    </div>
                  </div>
                </div>
                <div class="wrapper d-flex justify-content-end mt-4">
                  <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal"
                    data-bs-target="#modalTambahProduk">
                    Tambah Produk
                  </button>
                </div>
                <div class="table-responsive" style="min-height:300px;">
                  <table id="daftar-pembelian" class="display w-100">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Qty</th>
                        <th>Total</th>
                        <th></th>
                      </tr>
                    </thead>
                  </table>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-6">
                    <table class="table table-clear">
                      <tbody>
                        <tr>
                          <td class="left"><strong>Diskon</strong></td>
                          <td class="text-end input-group">
                            <input class="form-control" type="number" id="diskon" value="0" min="0">
                            <span class="input-group-text">%</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="left"><strong>Ppn</strong></td>
                          <td class="text-end input-group">
                            <input class="form-control" type="number" id="pajak" value="0" min="0">
                            <span class="input-group-text">%</span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="col-md-6 ms-auto">
                    <table class="table table-clear">
                      <tbody>
                        <tr>
                          <td class="left"><strong>Subtotal</strong></td>
                          <td class="text-end" id="subtotal">0</td>
                        </tr>
                        <tr>
                          <td class="left"><strong>Total</strong></td>
                          <td class="text-end" id="total"><strong>0</strong>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="wrapper d-flex justify-content-end">
                      <button class="ms-auto btn btn-dark mt-3" id="buat-invoice" disabled>Buat Invoice<span
                          class="btn-icon-start text-dark"><i class="far fa-plus-square"></i></span></button>
                    </div>
                  </div>
                </div>
              </div>
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
        <p>Copyright © Designed &amp; Developed by <a href="../index.htm" target="_blank">DexignLab</a> 2021</p>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js
"></script>
  <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/df-number-format/2.1.6/jquery.number.min.js"></script>

  <!-- Datatable -->
  <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
  <script src="js/plugins-init/datatables.init.js"></script>

  <!-- sweetalert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="js/plugins-init/sweetalert.init.js"></script>

  <!-- pickdate -->
  <script src="vendor/pickadate/picker.js"></script>
  <script src="vendor/pickadate/picker.time.js"></script>
  <script src="vendor/pickadate/picker.date.js"></script>

  <script src="vendor/toastr/js/toastr.min.js"></script>


  <script>
    $(document).ready(function () {
      updateSubtotal()
      var table = $('#daftar-pembelian').DataTable({
        searching: false,
        paging: false,
        info: false,
        lengthChange: false,
        // konfigurasi DataTable lainnya
        "drawCallback": function (settings) {
          var api = this.api();
          var rows = api.rows({ page: 'current' }).nodes();

          if (rows.length === 0) {
            // datatable kosong, disable tombol
            $('#buat-invoice').prop('disabled', true);
          } else {
            // datatable tidak kosong, enable tombol
            $('#buat-invoice').prop('disabled', false);
            // hapus pesan datatable kosong (jika ada)
          }
        },

        columnDefs: [
          {
            targets: [0], // index kolom id
            visible: false, // menyembunyikan kolom id
          },
          {
            width: '55%',
            targets: [1]
          },
          {
            width: '10%',
            targets: [2]
          },
          {
            width: '10%',
            targets: [3]
          },
          {
            width: '10%',
            targets: [4]
          },
          {
            width: '10%',
            targets: [5]
          }
        ],

        ajax: {
          url: 'controller/buatinvoice/daftarpembelian.php',
          dataSrc: ''
        },
        columns: [
          { data: 'id', className: 'text-center' }, // tambahan kolom id
          { data: 'nama' },
          {
            data: 'harga',
            render: function (data) {
              return formatAngka(data);
            }
          },
          { data: 'qty' },
          {
            data: 'total',
            render: function (data) {
              return formatAngka(data);
            }
          },
          {
            data: null,
            className: 'text-center',
            render: function (data) {
              return '<button class="btn-delete btn btn-danger" data-id="' + data.id + '"><i class="fa fa-trash"></i></button>';
            }
          }
        ]
      });

      table.on('click', '.btn-delete', function () {
        var row = $(this).closest('tr');
        var productId = $(this).data('id');
        console.log(productId);

        // lakukan request ajax untuk menghapus produk dengan id tertentu
        $.ajax({
          type: 'POST',
          url: 'controller/buatinvoice/daftarpembelian.php',
          data: { hapus_produk: productId },
          success: function (response) {
            // Refresh data table
            $('#table-cart').DataTable().ajax.reload();
            updateSubtotal();
          },
          error: function (XMLHttpRequest, textStatus, errorThrown) {
            console.log('Error : ' + errorThrown);
          }
        });


        // hapus baris dari datatable
        table.row(row).remove().draw(false);
      });


      function formatAngka(angka) {
        return $.number(angka, 0, ',', '.');
      }

      function updateSubtotal() {
        // Kirim permintaan AJAX untuk mengambil nilai subtotal terbaru
        $.ajax({
          url: "controller/buatinvoice/subtotal.php",
          success: function (response) {
            // Update nilai subtotal dengan nilai yang diperbarui
            $("#subtotal").html(formatAngka(response));
            hitungTotal();
          },
          error: function (xhr, status, error) {
            console.log("Terjadi kesalahan: " + error);
          }
        });
      }

      function hitungTotal() {
        // Menghitung total
        var subtotal = parseInt($("#subtotal").text().replace(/\./g, ""));
        var diskon = parseInt($("#diskon").val());
        var ppn = parseInt($("#pajak").val());


        // Cek nilai diskon
        if (isNaN(diskon) || diskon === "") {
          diskon = 0;
        } else if (diskon > 100) {
          diskon = 100;
        }

        // Cek nilai ppn
        if (isNaN(ppn) || ppn === "") {
          ppn = 0;
        } else if (ppn > 100) {
          ppn = 100;
        }

        var total = subtotal - (subtotal * diskon / 100) + (subtotal * ppn / 100);

        // Menampilkan hasil perhitungan di elemen outputTotal
        $("#total").text(formatAngka(total));
      }

      $('#buat-invoice').click(function () {
        // Ambil data subtotal dari session cart
        var subtotal = parseInt($('#subtotal').text().replace(".", ""));
        var diskon = parseInt($("#diskon").val());
        var pajak = parseInt($("#pajak").val());
        var total = subtotal - (subtotal * diskon / 100) + (subtotal * pajak / 100);
        // Kirim data subtotal menggunakan Ajax
        $.ajax({
          url: 'controller/buatinvoice/simpaninvoice.php',
          method: 'POST',
          data: {
            subtotal: subtotal,
            diskon: diskon,
            pajak: pajak,
            total: total
          },
          success: function (response) {
            Swal.fire({
              title: 'Berhasil',
              text: "Mau di Print atau ga",
              icon: 'success',
              showCancelButton: true,
              confirmButtonText: 'Print Dong!',
              cancelButtonText: "G"
            }).then((result) => {
              if (result.isConfirmed) {
                var url = "detailinvoice.php?id=" + response;
                window.open(url, "_blank");
                window.location.href = "invoice.php";
              }
              else if (result.isConfirmed == 0){
                window.location.href = "invoice.php";
              }
            })
          },
          error: function (xhr, status, error) {
            // Tampilkan pesan error
            alert('Terjadi kesalahan: ' + error);
          }
        });
      });




      // Ketika opsi yang dipilih berubah
      $('#inputIdProduk').change(function () {
        var idProduk = $(this).val(); // Ambil nilai opsi yang dipilih

        // Kirimkan data ke server menggunakan AJAX
        $.ajax({
          type: 'POST',
          url: 'controller/buatinvoice/cariproduk.php', // Ganti dengan URL yang sesuai
          data: { idProduk: idProduk },
          dataType: 'json',
          success: function (data) {
            // Isi input dengan data yang diterima dari server
            $('#inputNamaProduk').val(data.nama);
            $('#inputHargaProduk').val(formatAngka(data.harga));
          },
          error: function (xhr, status, error) {
            console.log(xhr.responseText);
          }
        });
      });

      $('#inputIdProduk').change(function () {
        if ($("#inputIdProduk").val() !== '') {
          // Aktifkan tombol Lanjut
          $('#btntambah').prop('disabled', false);
        } else {
          // Jika kosong, nonaktifkan tombol Lanjut
          $('#btntambah').prop('disabled', true);
        }
      });

      $('#btntambah').click(function () {
        var idProduk = $('#inputIdProduk').val();
        var namaProduk = $('#inputNamaProduk').val();
        var hargaProduk = parseInt($('#inputHargaProduk').val().replace(".", ""));
        var qtyProduk = parseInt($('#inputQtyProduk').val());
        var total = hargaProduk * qtyProduk;

        var produk = {
          id: idProduk,
          nama: namaProduk,
          harga: hargaProduk,
          qty: qtyProduk,
          total: total
        };

        // Send the product data to PHP API using AJAX
        $.ajax({
          url: 'controller/buatinvoice/daftarpembelian.php',
          method: 'POST',
          data: {
            produk: produk
          },
          success: function (response) {
            $('#daftar-pembelian').DataTable().ajax.reload();
            updateSubtotal();
            toastr.success("Berhasil Menambah Barang", "Success", {
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
          },
          error: function (xhr, status, error) {
            // Handle error response
            console.log(error);
          }
        });
      });

      $("#diskon, #pajak").on("input", function () {
        hitungTotal();
      });

      $('#diskon, #pajak').on('keypress keydown keyup', function (event) {
        var currentValue = $(this).val();
        if (event.which != 8 && currentValue > 100) {
          event.preventDefault();
          $(this).val(100);
        }
      });
    });
  </script>

  <?php include 'modal/buatinvoice.php'; ?>
</body>

</html>