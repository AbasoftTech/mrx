@extends('layouts.master')
@section('content')
<section id="login">
    <div class="container">
        <div class="breadcrumb-mrx">
            <a href="{{route("home")}}" class="breadcrumb-mrx-link">Ana Səhifə</a>
            <span class="me-3"><img src="{{asset('frontend/IMAGE/icons/breadcrumb-arrow.svg')}}" alt=""></span>
            <a href="" class="breadcrumb-mrx-link">Hesab</a>
            <span class="me-3"><img src="{{asset('frontend/IMAGE/icons/breadcrumb-arrow.svg')}}" alt=""></span>
            <a class="breadcrumb-mrx-link breadcrumb-mrx-link-current">Haqqımızda</a>
        </div>
    </div>
    <div class="container">
        <div class="log-reg-holder">
            <div class="log-reg-left">
                <h1 class="block--title">Daxil Ol</h1>
                <form action="" class="log-reg-form">
                    <div class="d-flex flex-column">
                        <div class="mt-4 d-flex flex-column flex-sm-column flex-lg-column flex-row justify-content-between justify-content-lg-start">
                            <div>
                                <div class="label-text text-center text-lg-start">Nömrə</div>
                                <div class="mt-2 d-flex align-items-center justify-content-center justify-lg-content-start">
                                    <label for="">
                                        <div class="custom-select-c custom-select-prefix" style="width:200px;">
                                            <select>
                                                <option value="1">050</option>
                                                <option value="1">051</option>
                                                <option value="2">050</option>
                                                <option value="3">055</option>
                                            </select>
                                        </div>
                                    </label>
                                    <label for="">
                                        <input type="number" class="insert-number" maxlength="3" pattern="[0-9]" name="" id="1">
                                        <input type="number" class="insert-number" maxlength="2" pattern="[0-9]" name="" id="2">
                                        <input type="number" class="insert-number" maxlength="2" pattern="[0-9]" name="" id="3">
                                    </label>
                                </div>
                            </div>
                            <div class="mt-4 d-flex justify-content-center justify-content-lg-start">
                                <label for="" class="text-center text-lg-start">
                                    <span class="label-text text-center- text-lg-left">Şifrə</span>
                                    <div class="mt-2">
                                        <input type="text" class="system-input">
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
                    <a href="{{route("signup")}}" class="system-clickable system-clickable-color-1">Qeydiyyatdan Keç!</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
