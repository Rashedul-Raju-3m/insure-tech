@extends('website.layouts')

@section('content')

<!--Contact Us Section-->
<section class="contact-us">
    <div class="container px-4">
        <div class="contact-head">
            <div class="row">

                <div class="col-lg-4 col-12">
                    <div class="single-head">
                        @if(isset($pageData->contact_info_heading))
						@foreach($pageData->contact_info_heading as $contact_info_heading)
                        <div class="single-info">
                            <h4 class="title text-dark fw-bold">{{ $contact_info_heading }}</h4>
                            <div class="content">
                            {!! isset($pageData->contact_info_content[$loop->index]) ? xss_clean($pageData->contact_info_content[$loop->index]) : '' !!}
                            </div>
                        </div>
                        @endforeach
                        @endif

                        <div class="single-info">
                            <h4 class="title text-dark fw-bold">{{ _lang('Social Links') }}</h4>
                            <div class="content">
                                <ul class="list-unstyled d-flex">
                                    <li class="me-2 wow animate__zoomIn" data-wow-delay=".2s"><a href="{{ isset($pageData->facebook_link) ? $pageData->facebook_link : '' }}" class="text-decoration-none"><i class="bi bi-facebook ri-2x"></i></a></li>
                                    <li class="me-2 wow animate__zoomIn" data-wow-delay=".4s"><a href="{{ isset($pageData->linkedin_link) ? $pageData->linkedin_link : '' }}" class="text-decoration-none"><i class="bi bi-linkedin ri-2x"></i></a></li>
                                    <li class="me-2 wow animate__zoomIn" data-wow-delay=".6s"><a href="{{ isset($pageData->twitter_link) ? $pageData->twitter_link : '' }}" class="text-decoration-none"><i class="bi bi-twitter ri-2x"></i></a></li>
                                    <li class="me-2 wow animate__zoomIn" data-wow-delay=".8s"><a href="{{ isset($pageData->youtube_link) ? $pageData->youtube_link : '' }}" class="text-decoration-none"><i class="bi bi-youtube ri-2x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 mb-lg-0 mb-5 col-12">
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            <strong>{{ session('success') }}</strong>
                        </div>
                    @endif
                    {{Session::has('error')}}

                    @if(Session::has('error'))
                        <div class="alert alert-danger">
                            <strong>{{ session('error') }}</strong>
                        </div>
                    @endif

                        @if($errors->has('otp'))
                            <div class="alert alert-danger">
                                <strong>{{ $errors->first('otp') }}</strong>
                            </div>
                        @endif

                        @if(isset($wrongOtp))
                            <div class="alert alert-danger">
                                <strong>Wrong otp</strong>
                            </div>
                        @endif

                    <div class="form-main">
                        <div class="title">
                            <h2 class="text-dark fw-bold mb-3">{{ isset($page->name) ? $page->name.' , Let’s get connected..
 ' : '' }}</h2>
                            <p>Buy Health Insurance Policy Online in Bangladesh.</p>
                        </div>
                        <form class="form" method="post" autocomplete="off" action="{{ route('ins_opt_check') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 col-12">
                                    <div class="form-group">
                                        <input name="otp" type="text" placeholder="{{ _lang('Otp') }}" class="wow animate__zoomIn" data-wow-delay=".4s" autocomplete="off">
                                        <input type="hidden" name="session_id" value="{{$sessionUser->id}}">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <button type="submit" class="send-btn wow animate__zoomIn" data-wow-delay=".8s">{{ _lang('Next') }}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
