@extends($activeTemplate . 'layouts.frontend')
@section('content')
    <section class="section bg--light">
        <div class="container ">
            <div class="row gy-4">
                <div class="col-lg-4">
                    <div class="card custom--card">
                        <div class="card-body">
                            <ul class="list-group list-group-flush ">
                                <li class="list-group-item d-flex flex-column justify-content-between border-0 bg-transparent">
                                    <span class="fw-md text-muted">{{ $user->username }}</span>
                                    <small class="text-muted"> <i class="la la-user"></i> @lang('Userame')</small>
                                </li>

                                <li class="list-group-item d-flex flex-column justify-content-between border-0 bg-transparent">
                                    <span class="fw-md text-muted">{{ $user->email }}</span>
                                    <small class="text-muted"><i class="la la-envelope"></i> @lang('Email')</small>
                                </li>

                                <li class="list-group-item d-flex flex-column justify-content-between border-0 bg-transparent">
                                    <span class="fw-md text-muted">+{{ $user->mobile }}</span>
                                    <small class="text-muted"><i class="la la-mobile"></i> @lang('Mobile')</small>
                                </li>

                                <li class="list-group-item d-flex flex-column justify-content-between border-0 bg-transparent">
                                    <span class="fw-md text-muted">{{ $user->address->country }}</span>
                                    <small class="text-muted"><i class="la la-globe"></i> @lang('Country')</small>
                                </li>

                                <li class="list-group-item d-flex flex-column justify-content-between border-0 bg-transparent">
                                    <span class="fw-md text-muted">{{ $user->address->address }}</span>
                                    <small class="text-muted"><i class="la la-map-marked"></i> @lang('Address')</small>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card custom--card">
                        <div class="card-body">

                            <form class="register" action="" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="form-group  col-sm-6">
                                        <label class="form-label">@lang('First Name')</label>
                                        <input type="text" class="form-control form--control" name="firstname" value="{{ $user->firstname }}" required>
                                    </div>
                                    <div class="form-group  col-sm-6">
                                        <label class="form-label">@lang('Last Name')</label>
                                        <input type="text" class="form-control form--control" name="lastname" value="{{ $user->lastname }}" required>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group  col-sm-12">
                                        <label class="form-label">@lang('Address')</label>
                                        <input type="text" class="form-control form--control" name="address" value="{{ @$user->address->address }}">
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="form-group  col-sm-6">
                                        <label class="form-label">@lang('State')</label>
                                        <input type="text" class="form-control form--control" name="state" value="{{ @$user->address->state }}">
                                    </div>
                                    <div class="form-group  col-sm-6">
                                        <label class="form-label">@lang('Zip Code')</label>
                                        <input type="text" class="form-control form--control" name="zip" value="{{ @$user->address->zip }}">
                                    </div>

                                </div>

                                <button type="submit" class="btn btn--base h-45 w-100">@lang('Submit')</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
