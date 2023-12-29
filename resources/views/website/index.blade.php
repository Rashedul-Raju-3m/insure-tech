@extends('website.layouts')

@section('content')
    <!-- Custom style -->
    <style>
        /* Custom CSS for hover effect */
        .custom-hover:hover {
            border: 2px solid #007bff; /* Change the background color on hover */
        }

        .custom-border {
            transition: border 0.10s ease; /* Smooth transition effect for the border */
        }
        .hero-area{
            width: 100%;
            height: 100vh;
            background-image: url('public/website/assets/icons/home-page-banner.png');
            background-size: cover;
            background-position: bottom;
        }
        .link-btn{
            color: #5034FC;
            font-weight: bold;
            font-size: 20px;
            text-decoration: none;
        }
    </style>

    <!-- Header-->
    <header class="hero-area">
        <div class="container px-4">
            <div class="row gx-5 align-items-center justify-content-between">
                <div class="col-lg-8 col-xl-9 col-xxl-6">

                    <!-- First Row -->

                    <div class="container">
                        <div class="row">
                            <div><h1>Do the Digit Insurance<h1></div>
                            <div><p>Trusted by 3 Crore+ Indians </p></div>

                        </div>

                        <!-- Third Row with 7 columns -->

                        <div class="row mt-3">
                            <div class="row">
                                <div class="col-md-2">
                                    <a href="{{route('ins_start','car-insurance')}}">
                                    <img class="custom-hover shadow-sm mb-1" width="100px" src="{{ isset($pageMedia->hero_image) ? asset('public/uploads/media/'.$pageMedia->hero_image) : asset('public/website/assets/icons/car.png') }}" alt="Header Background" />
                                    </a>
                                    <h5 class="text-center">Car</h5>
                                </div>

                                <div class="col-md-2">
                                    <img class="custom-hover shadow-sm mb-1" width="100px" src="{{ isset($pageMedia->hero_image) ? asset('public/uploads/media/'.$pageMedia->hero_image) : asset('public/website/assets/icons/bike.png') }}" alt="Header Background" />
                                    <h5 class="text-center">Bike</h5>
                                </div>

                                <div class="col-md-2">
                                    <a href="{{route('ins_start','health-insurance')}}">
                                    <img class="custom-hover shadow-sm mb-1" width="100px" src="{{ isset($pageMedia->hero_image) ? asset('public/uploads/media/'.$pageMedia->hero_image) : asset('public/website/assets/icons/health.png') }}" alt="Header Background" />
                                    </a>
                                    <h5 class="text-center">Health</h5>
                                </div>

                                <div class="col-md-2">
                                    <img class="custom-hover shadow-sm mb-1" width="100px" src="{{ isset($pageMedia->hero_image) ? asset('public/uploads/media/'.$pageMedia->hero_image) : asset('public/website/assets/icons/edu.png') }}" alt="Header Background" />
                                    <h5 class="text-center">Education</h5>
                                </div>

                                <div class="col-md-2">
                                    <img class="custom-hover shadow-sm mb-1 img-fluid" width="100px" src="{{ isset($pageMedia->hero_image) ? asset('public/uploads/media/'.$pageMedia->hero_image) : asset('public/website/assets/icons/travel.png') }}" alt="Header Background" />
                                    <h5 class="text-center">Travel</h5>
                                </div>

                                <div class="col-md-2">
                                    <img class="custom-hover shadow-sm mb-1" width="100px" src="{{ isset($pageMedia->hero_image) ? asset('public/uploads/media/'.$pageMedia->hero_image) : asset('public/website/assets/icons/more.png') }}" alt="Header Background" />
                                    <h5 class="text-center">More</h5>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-xxl-3 d-none d-xl-block text-center wow animate__fadeInRight" data-wow-delay="1s">
                </div>

                <div class="row mx-5">
                    <div class="col-md-4 link-btn"><a href="">Don’t have Reg num? ></a></div>
                    <div class="col-md-4 link-btn"> <a href="">It’s a brand new Car ></a></div>
                    <div class="col-md-4 link-btn"> <a href="">renew digit policy ></a></div>
                </div>

                <!-- Bootstrap JS and Popper.js -->
                <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->


                <div class="mx-5 text-center text-xl-start hero-content col-xl-8 col-xxl-8">
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>

                <!-- <h1 class="wow animate__fadeInUp" data-wow-delay="0.4s">{{ isset($pageData->hero_heading) ? $pageData->hero_heading : '' }}</h1>
                    <p class="wow animate__fadeInUp" data-wow-delay="0.6s">{{ isset($pageData->hero_sub_heading) ? $pageData->hero_sub_heading : '' }}</p> -->

                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start mb-3">
                        <a class="btn btn-primary py-3 px-4 fw-bold border-2 shadow border-radius-10 wow animate__fadeInLeft" data-wow-delay="1s" href="{{ isset($pageData->get_started_link) ? $pageData->get_started_link : '#' }}">{{ isset($pageData->get_started_text) ? $pageData->get_started_text : _lang('Get Started') }} <i class="bi bi-arrow-right ms-2"></i></a>
                        <a class="btn btn-outline-primary py-3 px-4 fw-bold border-2 border-radius-10 wow animate__fadeInRight" data-wow-delay="1s" href="{{ route('login') }}">{{ _lang('Sign In') }} <i class="bi bi-box-arrow-in-right ms-2"></i></a>
                    </div>
                </div>


            </div>
        </div>

    </header>

    <!-- Features section-->
    @if(isset($pageData->features_status) && $pageData->features_status == 1)
        <section id="services" class="bg-light">
            <div class="container my-3 px-4">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <div class="text-center section-header">
                            <h3 class="wow animate__zoomIn">{{ _lang('Features') }}</h3>
                            <h2 class="wow animate__fadeInUp">{{ isset($pageData->features_heading) ? $pageData->features_heading : '' }}</h2>
                            <p class="wow animate__fadeInUp">{{ isset($pageData->features_sub_heading) ? $pageData->features_sub_heading : '' }}</p>
                        </div>
                    </div>
                </div>

                <div class="row gx-5">
                    <div class="col-lg-12">
                        <div class="row">
                            @foreach($features as $feature)
                                <div class="col-lg-4 mb-5 h-100">
                                    <div class="feature wow animate__zoomIn" data-wow-delay=".2s">
                                        <div class="icon text-primary fw-bold mb-4">
                                            {!! xss_clean($feature->icon) !!}
                                        </div>
                                        <h2 class="mb-1 mb-3">{{ $feature->translation->title }}</h2>
                                        <p>{{ $feature->translation->content }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if(isset($pageData->pricing_status) && $pageData->pricing_status == 1)
        <!--Pricing Table-->
        <section id="pricing-table">
            <div class="container my-3 px-4">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <div class="text-center section-header">
                            <h3 class="wow animate__zoomIn">{{ _lang('Pricing') }}</h3>
                            <h2 class="wow animate__fadeInUp">{{ isset($pageData->pricing_heading) ? $pageData->pricing_heading : '' }}</h2>
                            <p class="wow animate__fadeInUp">{{ isset($pageData->pricing_sub_heading) ? $pageData->pricing_sub_heading : '' }}</p>
                        </div>
                    </div>
                </div>

                <div class="row gx-5 justify-content-center">

                    <div class="d-flex align-items-center justify-content-center">
                        <div class="form-check form-switch custom-switch mb-5 me-3">
                            <input class="form-check-input plan_type" type="checkbox" value="monthly" name="plan_type" id="monthy-plans" checked>
                            <label class="form-check-label ms-1 text-primary" for="monthy-plans"><b>{{ _lang('Monthly') }}</b></label>
                        </div>

                        <div class="form-check form-switch custom-switch mb-5 me-3">
                            <input class="form-check-input plan_type" type="checkbox" value="yearly" name="plan_type" id="yearly-plans">
                            <label class="form-check-label ms-1 text-primary" for="yearly-plans"><b>{{ _lang('Yearly') }}</b></label>
                        </div>

                        <div class="form-check form-switch custom-switch mb-5">
                            <input class="form-check-input plan_type" type="checkbox" value="lifetime" name="plan_type" id="lifetime-plans">
                            <label class="form-check-label ms-1 text-primary" for="lifetime-plans"><b>{{ _lang('Lifetime') }}</b></label>
                        </div>
                    </div>

                    @foreach($packages as $package)
                        <div class="col-lg-4 mb-5 {{ $package->package_type }}-plan">
                            <div class="pricing-plan popular h-100 {{ $package->package_type == 'monthly' ? 'wow' : '' }} animate__zoomIn" data-wow-delay=".6s">
                                <div class="pricing-plan-header">
                                    @if($package->is_popular == 1)
                                        <span>{{ _lang('Most popular') }}</span>
                                    @endif
                                    <h5>{{ $package->name }}</h5>
                                    @if($package->discount > 0)
                                        <p class="d-inline-block">
                                            <small><del>{{ decimalPlace($package->cost, currency_symbol()) }}</del></small>
                                            <span class="bg-primary d-inline-block text-white px-3 py-1 rounded-pill ms-1">{{ $package->discount.'% '._lang('Discount') }}</span>
                                        </p>
                                        <h4><span>{{ decimalPlace($package->cost - ($package->discount / 100) * $package->cost, currency_symbol()) }}</span> / {{ ucwords($package->package_type) }}</h4>
                                    @else
                                        <h4><span>{{ decimalPlace($package->cost, currency_symbol()) }}</span> / {{ ucwords($package->package_type) }}</h4>
                                    @endif

                                    @if($package->trial_days > 0)
                                        <h6 class="mt-2 text-danger">{{ $package->trial_days.' '._lang('Days Free Trial') }}</h6>
                                    @else
                                        <h6 class="mt-2 text-dark">{{ _lang('No Trial Available') }}</h6>
                                    @endif
                                </div>
                                <div class="pricing-plan-body">
                                    <ul>
                                        <li><i class="bi bi-check2-circle me-2"></i>{{ str_replace('-1',_lang('Unlimited'), $package->business_limit).' '._lang('Business Account') }}</li>
                                        <li><i class="bi bi-check2-circle me-2"></i>{{ str_replace('-1',_lang('Unlimited'), $package->user_limit).' '._lang('Active Staff') }}</li>
                                        <li><i class="bi bi-check2-circle me-2"></i>{{ str_replace('-1',_lang('Unlimited'), $package->invoice_limit).' '._lang('Invoice') }}</li>
                                        <li><i class="bi bi-check2-circle me-2"></i>{{ str_replace('-1',_lang('Unlimited'), $package->quotation_limit).' '._lang('Quotation') }}</li>
                                        <li><i class="bi {{ $package->recurring_invoice == 0 ? 'bi-x-circle' : 'bi-check2-circle' }} me-2"></i>{{ _lang('Recurring Invoice') }}</li>
                                        <li><i class="bi bi-check2-circle me-2"></i>{{ str_replace('-1',_lang('Unlimited'), $package->customer_limit).' '._lang('Customer Account') }}</li>
                                        <li><i class="bi {{ $package->invoice_builder == 0 ? 'bi-x-circle' : 'bi-check2-circle' }} me-2"></i>{{ _lang('Invoice Template Builder') }}</li>
                                        <li><i class="bi {{ $package->online_invoice_payment == 0 ? 'bi-x-circle' : 'bi-check2-circle' }} me-2"></i>{{ _lang('Accept Online Payment') }}</li>
                                    </ul>
                                    <a href="{{ route('register') }}?package_id={{ $package->id }}">{{ _lang('Select') }} <i class="bi bi-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--End Pricing Table-->
    @endif

    @if(isset($pageData->blog_status) && $pageData->blog_status == 1)
        <!-- Blog preview section-->
        <section id="blogs" class="bg-light">
            <div class="container my-3 px-4">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <div class="text-center section-header">
                            <h3 class="wow animate__zoomIn">{{ _lang('Blogs') }}</h3>
                            <h2 class="wow animate__fadeInUp">{{ isset($pageData->blog_heading) ? $pageData->blog_heading : '' }}</h2>
                            <p class="wow animate__fadeInUp">{{ isset($pageData->blog_sub_heading) ? $pageData->blog_sub_heading : '' }}</p>
                        </div>
                    </div>
                </div>
                <div class="row gx-4">
                    @foreach($blog_posts as $post)
                        <div class="col-lg-4 mb-5">
                            <div class="latest-post h-100 wow animate__zoomIn" data-wow-delay=".2s">
                                <img class="card-img-top" src="{{ asset('public/uploads/media/'.$post->image) }}" alt="{{ $post->translation->title }}" />
                                <div class="post-body p-4">
                                    <p class="post-date">{{ $post->created_at }}</p>
                                    <a class="text-decoration-none" href="{{ url('/blogs/'.$post->slug) }}">
                                        <h4 class="post-title mb-3">{{ $post->translation->title }}</h4>
                                    </a>
                                    <a href="{{ url('/blogs/'.$post->slug) }}" class="read-more">{{ _lang('Read More') }} <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif


    @if(isset($pageData->testimonials_status) && $pageData->testimonials_status == 1)
        <section id="testimonial">
            <div class="container my-3 px-4">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <div class="text-center section-header mb-5">
                            <h3 class="wow animate__zoomIn">{{ _lang('Testimonials') }}</h3>
                            <h2 class="wow animate__fadeInUp">{{ isset($pageData->testimonials_heading) ? $pageData->testimonials_heading : '' }}</h2>
                            <p class="wow animate__fadeInUp">{{ isset($pageData->testimonials_sub_heading) ? $pageData->testimonials_sub_heading : '' }}</p>
                        </div>
                    </div>
                </div>

                <div class="testimonial-slider">
                    @foreach($testimonials as $testimonial)
                        <div class="card single-testimonial h-100 mt-5">
                            <div class="card-body d-flex align-items-center flex-column justify-content-center text-center">
                                <picture class="avatar">
                                    <img class="img-fluid rounded-circle" src="{{ asset('public/uploads/media/'.$testimonial->image) }}" alt="{{ $testimonial->translation->name }}">
                                </picture>

                                <div class="px-4">
                                    <p class="lead fw-bolder mb-4 mt-4 text-dark">{{ $testimonial->translation->name }}</p>

                                    <p class="font-weight-normal mb-4"><i>"{{ $testimonial->translation->testimonial }}"</i></p>

                                    <span class="ratings">
                            <i class="bi bi-star-fill text-primary"></i>
                            <i class="bi bi-star-fill text-primary"></i>
                            <i class="bi bi-star-fill text-primary"></i>
                            <i class="bi bi-star-fill text-primary"></i>
                            <i class="bi bi-star-fill text-primary"></i>
                        </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif


    @if(isset($pageData->newsletter_status) && $pageData->newsletter_status == 1)
        <!-- Call to action-->
        <section id="newsletter" style="background-image: url({{ isset($pageMedia->newsletter_bg_image) ? 'public/uploads/media/'.$pageMedia->newsletter_bg_image : 'public/website/assets/call-to-action.jpg' }})">
            <div class="container px-4">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <div class="text-center section-header mb-5">
                            <h3 class="wow animate__zoomIn">{{ _lang('Newsletter') }}</h3>
                            <h2 class="text-white wow animate__fadeInUp">{{ isset($pageData->newsletter_heading) ? $pageData->newsletter_heading : '' }}</h2>
                            <p class="text-white wow animate__fadeInUp">{{ isset($pageData->newsletter_sub_heading) ? $pageData->newsletter_sub_heading : '' }}</p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center wow animate__zoomIn" data-wow-duration="1s">
                    <div class="col-lg-6">
                        <form action="{{ url('/email_subscription') }}" id="email_subscription" method="post">
                            @csrf
                            <div class="input-group">
                                <input class="form-control" type="text" name="email_address" placeholder="{{ _lang('Email address') }}" aria-label="{{ _lang('Email address') }}" aria-describedby="button-newsletter" required/>
                                <button class="btn btn-primary border-radius-10 px-3" id="button-newsletter" type="submit">{{ _lang('Subscribe') }} <i class="bi bi-arrow-right ms-2"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection
