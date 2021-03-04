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
    <link rel="stylesheet" href="{{asset("frontend/CSS/calendar.css")}}">
    <link rel="stylesheet" href="{{asset("frontend/CSS/datepicker.css")}}">
    <link rel="stylesheet" href="{{asset("frontend/CSS/dropzone.css")}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
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
                            @if (Auth::guard('normal_users')->user() == null)
                           <a href="{{route("login")}}" class="login_to_">
                                <img src="{{asset("frontend/IMAGE/icons/login.svg")}}" alt="">
                                <span class="log_slogan">Sistemə daxil ol</span>
                           </a>
                           @else
                           <form action="{{route('logout')}}" method="post">
                               @csrf
                               <div>
                                <a href="{{route('myinfo')}}">
                                    {{-- {{ Auth::guard('normal_users')->user()->fullname}} --}}
                                    <img src="{{asset('frontend/IMAGE/logout-avatar.png')}}" class="logout-img" alt=""></a>
                                <button class="logout-btn">Çıxış</button>
                            </div>
                           </form>

                           @endif
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
                        <div><a href="{{url("/")}}"><img src="{{asset("frontend/IMAGE/icons/logo.svg")}}" alt=""></a></div>
                    </div>
                    <div class="d-flex align-items-center">
                        <ul class="nav-list">
                            
                            @foreach ($slugs as $slug)
                                
                            <li><a href="{{url($slug->slug)}}">{{$slug->menu_name}}</a></li>
                            @endforeach

                        </ul>
                        <div class="area--contract">
                            <div class="send--contract">
                                <a href="" class="system-clickable system-clickable-color-1">Müqavilə Göndər</a>
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
                        <div><a href=""><img src="{{asset("frontend/IMAGE/icons/logo.svg")}}" alt=""></a></div>
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

                    @if (Auth::guard('normal_users')->user() == null)
                       <a href="{{route("login")}}" class="login_to_">
                            <img src="{{asset("frontend/IMAGE/icons/login.svg")}}" alt="">
                            <span class="log_slogan">Sistemə daxil ol</span>
                       </a>
                    @else
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <div>
                            <a href="{{route('myinfo')}}"><img src="{{asset('frontend/IMAGE/logout-avatar.png')}}" class="logout-img" alt=""></a>
                            <button class="logout-btn">Çıxış</button>
                        </div>
                    </form>

                    @endif
                    </div>
                    <div class="form--lang">
                        <form action="">
                            <span>EN</span>
                            <span class="ms-1">RU</span>
                        </form>
                    </div>
                </div>
                <ul class="nav-list">
                    <li><a href="">Ana Səhifə</a></li>
                    <li><a href="">Haqqımızda</a></li>
                    <li><a href="">Xidmətlər</a></li>
                    <li><a href="">Rieltorlar</a></li>
                    <li><a href="">Media</a></li>
                    <li><a href="">Əlaqə</a></li>
                </ul>
                <div class="area--contract">
                    <div class="send--contract">
                        <a href="" class="system-clickable system-clickable-color-1">Müqavilə Göndər</a>
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
                    <a href="" class="go--for--contract"><i class="fas fa-search text-white"></i></a>
                </div>
            </div>
          </div>
        </div>
      </div>
</header>
<body>

