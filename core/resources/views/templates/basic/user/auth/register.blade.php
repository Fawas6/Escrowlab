@extends($activeTemplate . 'layouts.frontend')
@section('content')
    @php
        $register = getContent('register.content', true);
        $policyPages = getContent('policy_pages.element', orderById: true);
    @endphp
    <div class="section ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="login-section__content">
                        <div class="row justify-content-center">
                            <div class="col-xl-6 col-lg-5 d-none d-lg-block">
                                <div class="text-center login-section__image">
                                    <img src="{{ getImage('assets/images/frontend/register/' . @$register->data_values->image, '425x600') }}" alt="image" class="img-fluid login-section__image-is">
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7 col-md-10 ">
                                <div class="login-form">
                                    <div class="login-form__head">
                                        <h4 class="mt-lg-0 text-center">
                                            {{ __(@$register->data_values->heading) }}</h4>
                                        <p class="text-center section__para mx-auto">
                                            {{ __(@$register->data_values->subheading) }}
                                        </p>
                                    </div>
                                    <form action="{{ route('user.register') }}" method="POST" class="verify-gcaptcha">
                                        @csrf
                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">@lang('Username')</label>
                                                    <input type="text" class="form-control form--control checkUser" name="username" value="{{ old('username') }}" required>
                                                    <small class="text-danger usernameExist"></small>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">@lang('E-Mail Address')</label>
                                                    <input type="email" class="form-control form--control checkUser" name="email" value="{{ old('email') }}" required>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">@lang('Country')</label>
                                                    <div class="form--select-light">
                                                        <select name="country" class="form-select form--select" required>
                                                            @foreach ($countries as $key => $country)
                                                                <option data-mobile_code="{{ $country->dial_code }}" value="{{ $country->country }}" data-code="{{ $key }}">
                                                                    {{ __($country->country) }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <input type="hidden" name="mobile_code">
                                                <input type="hidden" name="country_code">
                                                <div class="form-group">
                                                    <label class="form-label">@lang('Mobile')</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text bg-white mobile-code">
                                                        </span>
                                                        <input type="number" name="mobile" value="{{ old('mobile') }}" class="form-control form--control checkUser" required>
                                                    </div>
                                                    <small class="text-danger mobileExist"></small>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">@lang('Password')</label>
                                                    <input type="password" class="form-control form--control" name="password" required>
                                                    @if ($general->secure_password)
                                                        <div class="input-popup">
                                                            <p class="error lower">@lang('1 small letter minimum')</p>
                                                            <p class="error capital">@lang('1 capital letter minimum')</p>
                                                            <p class="error number">@lang('1 number minimum')</p>
                                                            <p class="error special">@lang('1 special character minimum')</p>
                                                            <p class="error minimum">@lang('6 character password')</p>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="form-label">@lang('Confirm Password')</label>
                                                    <input type="password" class="form-control form--control" name="password_confirmation" required>
                                                </div>
                                            </div>

                                            <x-captcha />

                                        </div>

                                        @if ($general->agree)
                                            <div class="form-group  mt-3">
                                                <input type="checkbox" id="agree" @checked(old('agree')) name="agree" required>
                                                <label for="agree">@lang('I agree with')</label> <span>
                                                    @foreach ($policyPages as $policy)
                                                        <a href="{{ route('policy.pages', [slug($policy->data_values->title), $policy->id]) }}" class="text--base">{{ __($policy->data_values->title) }}</a>
                                                        @if (!$loop->last)
                                                            ,
                                                        @endif
                                                    @endforeach
                                                </span>
                                            </div>
                                        @endif
                                        <div class="form-group">
                                            <button type="submit" id="recaptcha" class="btn btn--base w-100 h-45">
                                                @lang('Register')</button>
                                        </div>
                                        <p class="mb-0">@lang('Already have an account?')
                                            <a href="{{ route('user.login') }}" class="text--base">
                                                @lang('Login')
                                            </a>
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="existModalCenter" tabindex="-1" role="dialog" aria-labelledby="existModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="existModalLongTitle">@lang('You are with us')</h5>
                    <span type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="las la-times"></i>
                    </span>
                </div>
                <div class="modal-body">
                    <h6 class="text-center">@lang('You already have an account please Login')</h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark"data-bs-dismiss="modal">@lang('Close')</button>
                    <a href="{{ route('user.login') }}" class="btn btn--base">@lang('Login')</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('style')
    <style>
        .country-code .input-group-text {
            background: #fff !important;
        }

        .country-code select {
            border: none;
        }

        .country-code select:focus {
            border: none;
            outline: none;
        }
    </style>
@endpush
@if ($general->secure_password)
    @push('script-lib')
        <script src="{{ asset('assets/global/js/secure_password.js') }}"></script>
    @endpush
@endif
@push('script')
    <script>
        "use strict";
        (function($) {
            @if ($mobileCode)
                $(`option[data-code={{ $mobileCode }}]`).attr('selected', '');
            @endif

            $('select[name=country]').change(function() {
                $('input[name=mobile_code]').val($('select[name=country] :selected').data('mobile_code'));
                $('input[name=country_code]').val($('select[name=country] :selected').data('code'));
                $('.mobile-code').text('+' + $('select[name=country] :selected').data('mobile_code'));
            });
            $('input[name=mobile_code]').val($('select[name=country] :selected').data('mobile_code'));
            $('input[name=country_code]').val($('select[name=country] :selected').data('code'));
            $('.mobile-code').text('+' + $('select[name=country] :selected').data('mobile_code'));

            @if ($general->secure_password)
                $('input[name=password]').on('input', function() {
                    secure_password($(this));
                });
            @endif


            $('.checkUser').on('focusout', function(e) {
                var url = '{{ route('user.checkUser') }}';
                var value = $(this).val();
                var token = '{{ csrf_token() }}';
                if ($(this).attr('name') == 'mobile') {
                    var mobile = `${$('.mobile-code').text().substr(1)}${value}`;
                    var data = {
                        mobile: mobile,
                        _token: token
                    }
                }
                if ($(this).attr('name') == 'email') {
                    var data = {
                        email: value,
                        _token: token
                    }
                }
                if ($(this).attr('name') == 'username') {
                    var data = {
                        username: value,
                        _token: token
                    }
                }
                $.post(url, data, function(response) {
                    if (response.data != false && response.type == 'email') {
                        $('#existModalCenter').modal('show');
                    } else if (response.data != false) {
                        $(`.${response.type}Exist`).text(`${response.type} already exist`);
                    } else {
                        $(`.${response.type}Exist`).text('');
                    }
                });
            });
        })(jQuery);
    </script>
@endpush
