@extends('layouts.master')
@section('title' , 'ورود')
@section('scriptrecaptcha')
<script src="https://www.google.com/recaptcha/api.js?hl=fa" async defer></script>
@endsection
@section('main')

                <!-- Start Content -->
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                    <div class="row">
                        <div class="col-xl-6 col-lg-12 ">
                            <div class="px-3">
                                <div class="form-ui dt-sl dt-sn pt-4"> 
                                    <div class="section-title title-wide mb-1 no-after-title-wide">
                                        <h2 class="font-weight-bold">ورود به دیجی کالا</h2>
                                    </div>
                                    @if ($errors->any())
                                                <div class="message-light">
                                                    <ul>
                                                        @foreach ($errors->all() as $item)
                                                             <li>{{ $item }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                    @endif
                                    <form method="POST" action=" {{ route('login') }} " novalidate>
                                        @csrf
                                        <div class="form-row-title">
                                            <h3>ایمیل یا شماره موبایل</h3>
                                        </div>
                                        <div class="form-row with-icon">
                                            <input type="email" name="email" class="input-ui pr-2" placeholder="ایمیل یا شماره موبایل خود را وارد نمایید" required>
                                            <i class="mdi mdi-account-circle-outline"></i>
                                        </div>
                                        <div class="form-row-title">
                                            <h3>رمز عبور</h3>
                                        </div>
                                        <div class="form-row with-icon">
                                            <input type="password" name="password" class="input-ui pr-2" placeholder="رمز عبور خود را وارد نمایید" required>
                                            <i class="mdi mdi-lock-open-variant-outline"></i>
                                        </div>
                                        <div class="form-row mt-2">
                                            <div class="custom-control custom-checkbox float-right mt-2">
                                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                <label class="custom-control-label" for="customCheck3">
                                                    مرا به خاطر بسپار
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-row mt-3">
                                            <button type="submit" class="btn-primary-cm btn-with-icon mx-auto w-100">
                                                <i class="mdi mdi-login-variant"></i>
                                                ورود به دیجی کالا
                                            </button>
                                        </div>
                                        <div class="g-recaptcha form-footer text-right mt-3" data-sitekey="{{env('GOOGLE_RECAPTCHA_SITE_KEY')}}">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Content -->
@endsection

