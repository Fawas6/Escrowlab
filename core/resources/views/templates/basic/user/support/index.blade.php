@extends($activeTemplate . 'layouts.frontend')
@section('content')
    <section class="section bg--light">
        <div class="container">
            <div class="row gy-4">
                <div class="col-md-12">
                    <div class="text-end">
                        <a href="{{ route('ticket.open') }}" class="btn btn-sm btn--base mb-3">
                            <i class="las la-plus"></i> @lang('New Ticket')
                        </a>
                    </div>
                    <table class="table custom--table table-responsive--md">
                        <thead>
                            <tr>
                                <th>@lang('Subject')</th>
                                <th>@lang('Status')</th>
                                <th>@lang('Priority')</th>
                                <th>@lang('Last Reply')</th>
                                <th>@lang('Action')</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($supports as $support)
                                <tr>
                                    <td> <a href="{{ route('ticket.view', $support->ticket) }}" class="fw-bold">
                                            [@lang('Ticket')#{{ $support->ticket }}] {{ __($support->subject) }} </a>
                                    </td>
                                    <td>
                                        @php echo $support->statusBadge; @endphp
                                    </td>
                                    <td>
                                        @if ($support->priority == Status::PRIORITY_LOW)
                                            <span class="badge badge--dark">@lang('Low')</span>
                                        @elseif($support->priority == Status::PRIORITY_MEDIUM)
                                            <span class="badge  badge--warning">@lang('Medium')</span>
                                        @elseif($support->priority == Status::PRIORITY_HIGH)
                                            <span class="badge badge--danger">@lang('High')</span>
                                        @endif
                                    </td>
                                    <td>{{ \Carbon\Carbon::parse($support->last_reply)->diffForHumans() }} </td>

                                    <td>
                                        <a href="{{ route('ticket.view', $support->ticket) }}" class="btn btn-base--outline btn-sm">
                                            <i class="la la-desktop"></i> @lang('View Ticket')
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="100%" class="text-center">{{ __($emptyMessage) }}</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                @if ($supports->hasPages())
                    <div class="col-md-12">
                        {{ $supports->links() }}
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
