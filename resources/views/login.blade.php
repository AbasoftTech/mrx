@extends('layouts.master')
@section('content')
<section id="login">
    <div class="container">
        <div class="breadcrumb-mrx">
            <a href="" class="breadcrumb-mrx-link">Ana Səhifə</a>
            <span class="me-3"><img src="{{asset('frontend/IMAGE/icons/breadcrumb-arrow.svg')}}" alt=""></span>
            <a href="" class="breadcrumb-mrx-link">Hesab</a>
            <span class="me-3"><img src="{{asset('frontend/IMAGE/icons/breadcrumb-arrow.svg')}}" alt=""></span>
            <a class="breadcrumb-mrx-link breadcrumb-mrx-link-current">Daxil Ol</a>
        </div>
    </div>
    <div class="container">
        <div class="log-reg-holder">
            <div class="log-reg-left">
                <h1 class="block--title">Daxil Ol</h1>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
               @endif
                <form action="{{route('getLoged')}}" method="POST" class="log-reg-form">
                 @csrf
                    <div class="d-flex flex-column">
                        <div class="mt-4 d-flex flex-column flex-sm-column flex-lg-column flex-row justify-content-between justify-content-lg-start">
                            <div>
                                <div class="label-text text-center text-lg-start">Nömrə</div>
                                <div class="mt-2 d-flex align-items-center justify-content-center justify-lg-content-start">
                                    <label for="">
                                        {{-- <div class="custom-select-c custom-select-prefix" style="width:200px;">
                                            <select name="main_phone_number">
                                                <option value="050">050</option>
                                                <option value="051">051</option>
                                                <option value="055">055</option>
                                                <option value="070">070</option>
                                                <option value="077">077</option>
                                            </select>
                                        </div> --}}
                                        <div style="width: 127px;height: 47px">
                                            <div class="my-select">
                                                <select name="prefix" id="">
                                                    <option value="prefix" selected>prefix</option>
                                                    <option value="050">050</option>
                                                    <option value="051">051</option>
                                                    <option value="055">055</option>
                                                    <option value="070">070</option>
                                                    <option value="077">077</option>
                                                </select>
                                                <div class="clone-select chevron"></div>
                                                <div class="clone-option"></div>
                                            </div>
                                        </div>
                                    </label>
                                    <label for="" class="num-label">
                                        <input name="top" type="number" class="insert-number" maxlength="3" pattern="[0-9]" name="" id="1">
                                        <input name="middle" type="number" class="insert-number index0" maxlength="2" pattern="[0-9]" name="" id="2">
                                        <input name="below" type="number" class="insert-number index0" maxlength="2" pattern="[0-9]" name="" id="3">
                                    </label>
                                </div>
                            </div>
                            <div class="mt-4 d-flex justify-content-center justify-content-lg-start">
                                <label for="" class="text-center text-lg-start w-100">
                                    <span class="label-text text-center- text-lg-left">Şifrə</span>
                                    <div class="mt-2">
                                        <input type="password" name="password" class="system-input">
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div>
                            <label class="custom-checkbox">
                                <input type="checkbox" class="user-radio-input"  name="radio">
                                <span class="checkmark"></span>
                                <span style="checkbox-text">Yadda Saxla</span>
                            </label>
                        </div>
                        <div class="mt-4 text-center">
                            <button class="system-clickable system-clickable-color-2">Daxil Ol!</button>
                            <a href="" class="forget-password">Şifrəni unutmuşam</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="log-reg-right">
                <h3 class="log-reg-title">Qeydiyyatdan Keçməmisiniz?</h3>
                <p class="log-reg-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.
                </p>
                <div class="mt-5">
                    <a href="{{route('register')}}" class="system-clickable system-clickable-color-1">Qeydiyyatdan Keç!</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
