@extends($activeTemplate . 'layouts.frontend')
@section('content')
    <div class="section bg--light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card custom--card">
                        <div class="card-body">
                            <form action="{{ $data->url }}" method="{{ $data->method }}">
                                <ul class="list-group text-center list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between">
                                        @lang('You have to pay '):
                                        <strong>{{ showAmount($deposit->final_amo) }}
                                            {{ __($deposit->method_currency) }}</strong>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        @lang('You will get '):
                                        <strong>{{ showAmount($deposit->amount) }} {{ __($general->cur_text) }}</strong>
                                    </li>
                                </ul>
                                <script src="{{ $data->src }}" class="stripe-button"
                                    @foreach ($data->val as $key => $value)
                            data-{{ $key }}="{{ $value }}" @endforeach>
                                </script>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script-lib')
    <script src="https://js.stripe.com/v3/"></script>
@endpush
@push('script')
    <script>
        (function($) {
            "use strict";
            $('button[type="submit"]').addClass("btn btn--base h-45 w-100 mt-3");
            $('button[type="submit"]').removeClass("stripe-button-el");
            $('button[type="submit"]').text("Pay Now");
        })(jQuery);
    </script>
@endpush
