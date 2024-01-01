@extends('website.layouts')

@section('content')
    <!-- Custom style -->

    <style>
        .link-btn{
            color: #5034FC;
            font-weight: bold;
            font-size: 20px;
            text-decoration: none;
        }
        .radius{
            border-radius: 20px;
        }

        .orange-bg{
            background-image: url('public/website/assets/icons/Orange-bg.png');
            background-repeat: no-repeat;
            background-size: cover;
        }
        .text-black{
            color: black;
        }
        .bg-golden{
            background-color: #FFF7ED;
        }
        .bg-pastel-light{
            background-color: #E7F3F1;
        }

        .bg-pastel-blue{
            background-color: #157a68;
            border-top-left-radius:100px;
            border-bottom-left-radius: 100px;
        }
        .bg-pastel{
            background-color: #B3DED5;
        .pastel-dark{
            background-color: #157A68;
        }
        .pastel-dark input{
            width: 300px;
        }


    </style>

    <!-- Font Awesome -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Header-->

    <header class="mt-2">
        <div class="container">
            <div class="row gx-5 align-items-center justify-content-between">
                <div class="mt-1 col-lg-12 col-xl-12 col-xxl-6">
                    <div class="row">
                        <div class="col-md-5 orange-bg radius p-4">
                            <!-- Main Content -->
                            <h1 class="text-white font-bold uppercase text-5xl leading-normal fw-bold">
                                Secure your<br />
                                future with<br />
                                <span class="text-black">reliable insurance</span><br />
                                coverage today!
                            </h1>
                            <div class="d-flex justify-content-between text-white mt-3">
                                <p class="d-flex align-items-center">
                                    <span class="fs-1 fw-bold text-black">2K </span>
                                    Insurance sold
                                </p>
                                <p class="d-flex align-items-center">
                                    <span class="fs-1 fw-bold text-black">6K</span>
                                    Satisfied and Happy Customers
                                </p>
                            </div>
                        </div>

                        <div class="col-md-7">
                            <!-- Sidebar -->
                            <img class="custom-hover radius shadow-sm mb-1" width="100%" src="{{ asset('public/website/assets/icons/pic1.png') }}"  alt="Header Background" />
                        </div>
                    </div>
                </div>
            </div>


            <div class="my-4">
                <div class="row">
                    <div class="col-7  ">
                        <div class="container bg-pastel-light p-4 radius">
                            <div class="row row-cols-2 row-cols-lg-6 g-lg-3 radius">
                                <div class="col align-items-center">

                                    <div class="p-4 border-0 rounded-circle bg-success text-white text-center">
                                        <i class="fa fa-heartbeat fa-2x" aria-hidden="true"></i>
                                    </div>
                                    <p class="text-center">Health</p>
                                </div>
                                <div class="col">
                                    <div class="p-4 border-0 rounded-circle bg-success text-white text-center">
                                        <i class="fa fa-car fa-2x" aria-hidden="true"></i>

{{--                                                                                <i class="fa-solid fa-car fa-2xl"></i>--}}
                                    </div>
                                    <p class="text-center">Car</p>
                                </div>
                                <div class="col">
                                    <div class="p-4 border-0 rounded-circle bg-success text-white text-center">
                                        <i class="fa fa-plane fa-2x" aria-hidden="true"></i>

{{--                                                                                <i class="fa-solid fa-plane-departure fa-2xl"></i>--}}
                                    </div>
                                    <p class="text-center">Travel</p>
                                </div>
                                <div class="col">
                                    <div class="p-4 border-0 rounded-circle bg-success text-white text-center">
{{--                                        <i class="fa-solid fa-heart-pulse fa-2xl"></i>--}}
                                        <i class="fa fa-heartbeat fa-2x" aria-hidden="true"></i>

                                    </div>
                                    <p class="text-center">Life</p>
                                </div>
                                <div class="col">
                                    <div class="p-4 border-0 rounded-circle bg-success text-white text-center">
{{--                                        <i class="fa-solid fa-tooth fa-2xl"></i>--}}
                                        <i class="fa fa-medkit fa-2x" aria-hidden="true"></i>

                                    </div>
                                    <p class="text-center">Dental</p>
                                </div>
                                <div class="col">
                                    <div class="p-4 border-0 rounded-circle bg-success text-white text-center">
                                        <i class="fa fa-ellipsis-h fa-2x" aria-hidden="true"></i>

                                    </div>
                                    <p class="text-center">More</p>
                                </div>
                            </div>

                            <div class="flex-nowrap">
                                <input type="text" placeholder="Enter Mobile no."  class=" border-0 rounded-pill p-2" aria-label="Enter Mobile no.">
                                <button class="mx-4 px-6 text-white rounded-pill fw-bold">
                                    Get Price
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-5  justify-content-between align-items-center radius-left p-3">
                        <div class="row bg-pastel-blue ">
                        <div class="col-5">
                            <img class="" width="60%" src="{{ asset('public/website/assets/icons/star.png') }}"  alt="Header Background" style="padding-top: 10px" />
                        </div>
                        <div class="col-7">
                            <h2 class="text-center text-white fw-bold mb-4"><br>EXPLORE</br>INSURANCES</h2>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
    </header>

    <!-- ===========Categories Section=========== -->

    <section class="bg-golden p-3">
        <div class="container my-5">
            <h2 class="text-black fw-bold mb-3">Explore categories</h2>
            <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
                <div class="col">
                    <div class=" border-0 bg-white p-4 rounded-3 d-flex align-items-center justify-content-center"><i class="fa-solid fa-building-columns fa-2xl"></i><span class="px-3 pe-5">Bank</span></div>
                </div>

                <!-- <div class="col">
                  <div class=" border-0 bg-white p-4 rounded-3 d-flex align-items-center justify-content-center"><i class="fa-solid fa-plane-departure fa-2xl"></i><span class="px-3">Travel Insurance Company </span></div>
                </div> -->

                <div class="col">
                    <div class=" border-0 bg-white p-4 rounded-3 d-flex align-items-center justify-content-center"><i class="fa-solid fa-car fa-2xl"></i><span class="px-3">Car Dealer</span></div>
                </div>
                <div class="col">
                    <div class=" border-0 bg-white p-4 rounded-3 d-flex align-items-center justify-content-center"><i class="fa-solid fa-couch fa-2xl"></i><span class="px-3">Furniture Store</span></div>

                </div>
                <div class="col">
                    <div class=" border-0 bg-white p-4 rounded-3 d-flex align-items-center justify-content-center"><i class="fa-regular fa-gem fa-2xl"></i><span class="px-3">Jewelry Store</span></div>
                </div>
                <div class="col">
                    <div class=" border-0 bg-white p-4 rounded-3 d-flex align-items-center justify-content-center"><i class="fa-solid fa-shirt fa-2xl"></i><span class="px-3">Clothing Store</span></div>
                </div>

                <!-- <div class="col">
                    <div class=" border-0 bg-white p-4 rounded-3 d-flex align-items-center justify-content-center"><i class="fa-solid fa-car fa-2xl"></i><span class="px-3">Car Dealer</span></div>
                  <div class="p-3 border-0 bg-white p-4 rounded-3">Electronics & Technology</div>
                </div>
                <div class="col">
                    <div class=" border-0 bg-white p-4 rounded-3 d-flex align-items-center justify-content-center"><i class="fa-solid fa-car fa-2xl"></i><span class="px-3">Car Dealer</span></div>
                  <div class="p-3 border-0 bg-white p-4 rounded-3">Fitness and Nutrtion Services</div>
                </div> -->

                <div class="col">
                    <div class=" border-0 bg-white p-4 rounded-3 d-flex align-items-center justify-content-center"><i class="fa-solid fa-paw fa-2xl"></i><span class="px-3">Pet Store</span></div>
                </div>
                <div class="col">
                    <div class=" border-0 bg-white p-4 rounded-3 d-flex align-items-center justify-content-center"><i class="fa-solid fa-charging-station fa-2xl"></i><span class="px-3">Enerygy Supplier</span></div>
                </div>

                <div class="col">
                    <div class=" border-0 bg-white p-4 rounded-3 d-flex align-items-center justify-content-center"><i class="fa-solid fa-house-chimney fa-2xl"></i><span class="px-3">Real Estate Agents</span></div>
                </div>
                <!-- <div class="col">
                    <div class=" border-0 bg-white p-4 rounded-3 d-flex align-items-center justify-content-center"><i class="fa-solid fa-car fa-2xl"></i><span class="px-3">Car Dealer</span></div>
                  <div class="p-3 border-0 bg-white p-4 rounded-3">Agency</div>
                </div> -->
            </div>
        </div>
    </section>

    <!-- ===========Testimonial=========== -->

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

@endsection
