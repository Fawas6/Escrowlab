@php
    $socialContent = getContent('social_icon.content', true);
    $socialElements = getContent('social_icon.element', orderById: true);
    $contactElements = getContent('contact.element', orderById: true);
    $policyElements = getContent('policy_pages.element', orderById: true);
    $footerContent = getContent('footer_section.content', true);
@endphp

<footer class="footer">

    <div class="section bg--accent">
        <div class="container">
            <div class="row gy-4">
                <div class="col-md-6 col-lg-6  col-xxl-4">
                    <a href="{{ route('home') }}" class="logo mt-0">
                        <img src="{{ getImage('assets/images/logoIcon/logo.png') }}" alt="image" class="img-fluid logo__is">
                    </a>
                    <hr class="footer-hr">
                    <p class="text--white">{{ __(@$footerContent->data_values->footer_text) }}</p>

                    <ul class="list list--row">
                        @foreach ($socialElements as $social)
                            <li class="list--row__item">
                                <a href="{{ @$social->data_values->url }}" class="social-icon t-link icon icon--sm icon--circle" target="_blank">
                                    @php echo @$social->data_values->icon @endphp
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-md-6 col-lg-6 col-xxl-2">
                    <h5 class="mt-0 text--white">@lang('Quick Links')</h5>
                    <hr class="footer-hr">
                    <ul class="list list--column">
                        <li class="list--column__item">
                            <a href="{{ route('home') }}" class="t-link t-link--base text--white d-inline-block">
                                @lang('Home')
                            </a>
                        </li>
                        @foreach ($pages as $data)
                            <li class="list--column__item">
                                <a href="{{ route('pages', [$data->slug]) }}" class="t-link t-link--base text--white d-inline-block">
                                    {{ __($data->name) }}
                                </a>
                            </li>
                        @endforeach
                        <li class="list--column__item">
                            <a href="{{ route('blogs') }}" class="t-link t-link--base text--white d-inline-block">
                                @lang('Blogs')
                            </a>
                        </li>
                        <li class="list--column__item">
                            <a href="{{ route('contact') }}" class="t-link t-link--base text--white d-inline-block">
                                @lang('Contact')
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-6 col-lg-6 col-xxl-3">
                    <h5 class="mt-0 text--white">@lang('Company Policy')</h5>
                    <hr class="footer-hr">
                    <ul class="list list--column">
                        @foreach ($policyElements as $policy)
                            <li class="list--column__item">
                                <a href="{{ route('policy.pages', [slug($policy->data_values->title), $policy->id]) }}" class="t-link t-link--base text--white d-inline-block">
                                    {{ strLimit(__(@$policy->data_values->title), 25) }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-6 col-lg-6  col-xxl-3">
                    <h5 class="mt-0 text--white">@lang('Contact Us')</h5>
                    <hr class="footer-hr">
                    <ul class="list list--column">
                        @foreach ($contactElements as $contact)
                            <li class="list--column__item">
                                <div class="contact-card">
                                    <div class="contact-card__icon">
                                        @php echo @$contact->data_values->icon @endphp
                                    </div>
                                    <div class="contact-card__content">
                                        <p class="text--white mb-0">
                                            {{ __(@$contact->data_values->details) }}
                                        </p>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer__copyright py-3">
        <p class="mb-0 sm-text text--white text-center">
            @lang('Copyright') &copy; {{ date('Y') }}. @lang('All Rights Reserved')
        </p>
    </div>

</footer>
