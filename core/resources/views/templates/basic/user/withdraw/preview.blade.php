@extends($activeTemplate . 'layouts.frontend')
@section('content')
    <section class="section bg--light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card custom--card">
                        <div class="card-body">
                            <h5 class="card-title text-center mb-3">@lang('Withdraw Via') {{ $withdraw->method->name }}</h5>
                            <form action="{{ route('user.withdraw.submit') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-2">
                                    @php
                                        echo $withdraw->method->description;
                                    @endphp
                                </div>
                                <x-viser-form identifier="id" identifierValue="{{ $withdraw->method->form_id }}" />
                                @if (auth()->user()->ts)
                                    <div class="form-group ">
                                        <label>@lang('Google Authenticator Code')</label>
                                        <input type="text" name="authenticator_code" class="form-control form--control"
                                            required>
                                    </div>
                                @endif
                                <button type="submit" class="btn btn--base h-45 w-100">@lang('Submit')</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script>
        (function($) {
            $('.form-group').addClass('');
        })(jQuery);
    </script>
@endpush
