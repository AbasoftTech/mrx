<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MRX</title>
    <link rel="stylesheet" href="{{asset("frontend/CSS/style.css")}}">
    <link rel="stylesheet" href="{{asset("frontend/CSS/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("frontend/CSS/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("frontend/CSS/owl.theme.default.min.css")}}">
    <link rel="stylesheet" href="{{asset("frontend/CSS/animate.min.css")}}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
</head>
<header>
    <div class="header-desktop">
        <div class="container-fluid--custom-colored-one">
            <div class="container">
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <img src="{{asset("frontend/IMAGE/icons/phone.svg")}}" alt="">
                        <span class="phone_header_text text-white">*8555</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center">
                           <a href="{{route("login")}}" class="login_to_">
                                <img src="{{asset("frontend/IMAGE/icons/login.svg")}}" alt="">
                                <span class="log_slogan">Sistemə daxil ol</span>
                           </a>
                        </div>
                        <div class="form--lang">
                            <form action="">
                                <span>EN</span>
                                <span class="ms-1">RU</span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid--custom-colored-two">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <div><a href="{{route("home")}}"><img src="{{asset("frontend/IMAGE/icons/logo.svg")}}" alt=""></a></div>
                    </div>
                    <div class="d-flex align-items-center">
                        <ul class="nav-list">
                            <li><a href="{{route("home")}}">Ana Səhifə</a></li>
                            <li><a href="{{route("about")}}">Haqqımızda</a></li>
                            <li><a href="{{route("services")}}">Xidmətlər</a></li>
                            <li><a href="{{route("rieltors")}}">Rieltorlar</a></li>
                            <li><a href="{{route("news")}}">Media</a></li>
                            <li><a href="">Əlaqə</a></li>
                        </ul>
                        <div class="area--contract">
                            <div class="send--contract">
                                <button class="system-clickable system-clickable-color-1">Müqavilə Göndər</button>
                            </div>
                            <button type="button" class="search--contract" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-search text-white"></i></button>
                            <div class="hover-holder">
                                <div class="toggle--contract">Müqavilə Axtar</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-mobile">
        <div class="container-fluid--custom-colored-two">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <div><a href="{{route("home")}}"><img src="{{asset("frontend/IMAGE/icons/logo.svg")}}" alt=""></a></div>
                    </div>
                    <div class="d-flex align-items-center for--fold">
                        <div class="d-flex align-items-center">
                            <img src="{{asset("frontend/IMAGE/icons/phone.svg")}}" class="phone-ico" alt="">
                            <span class="phone_header_text">*8555</span>
                        </div>
                        <div class="ms-4 ms-sm-5">
                            <div class="burger-menu-holder">
                                <span class="burger-menu-line" style="top:0"></span>
                                <span class="burger-menu-line" style="top:12px"></span>
                                <span class="burger-menu-line" style="top:24px"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="burger-collapse">
            <div>
                <div class="d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                       <a href="{{route("login")}}" class="login_to_">
                            <img src="{{asset("frontend/IMAGE/icons/login.svg")}}" alt="">
                            <span class="log_slogan">Sistemə daxil ol</span>
                       </a>
                    </div>
                    <div class="form--lang">
                        <form action="">
                            <span>EN</span>
                            <span class="ms-1">RU</span>
                        </form>
                    </div>
                </div>
                <ul class="nav-list">
                    <li><a href="{{route("home")}}">Ana Səhifə</a></li>
                    <li><a href="{{route("about")}}">Haqqımızda</a></li>
                    <li><a href=="{{route("services")}}">Xidmətlər</a></li>
                    <li><a href="{{route("rieltors")}}">Rieltorlar</a></li>
                    <li><a href="{{route("news")}}">Media</a></li>
                    <li><a href="">Əlaqə</a></li>
                </ul>
                <div class="area--contract">
                    <div class="send--contract">
                        <button class="system-clickable system-clickable-color-1">Müqavilə Göndər</button>
                    </div>
                    <button type="button" class="search--contract" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-search text-white"></i></button>
                    <div class="hover-holder">
                        <div class="toggle--contract">Müqavilə Axtar</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-search-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header justify-content-end">
                <button type="button" class="close" data-bs-dismiss="modal" aria-bs-label="Close">
                  <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="search--contract--input--holder">
                    <img src="{{asset('frontend/IMAGE/icons/hashtag.svg')}}" class="code_contract" alt="">
                    <input type="text" placeholder="Müqavilə Axtar" class="search--contract--input-box">
                    <button class="go--for--contract"><i class="fas fa-search text-white"></i></button>
                </div>
            </div>
          </div>
        </div>
      </div>
</header>
<body>

