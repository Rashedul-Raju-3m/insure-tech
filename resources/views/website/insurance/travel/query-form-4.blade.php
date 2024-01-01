@extends('website.layouts')

@section('content')

    @php
        use App\Models\Country;use App\Models\District;use App\Models\Division;use App\Models\Upazila;
        $country = Country::GetAllCountry();
        $divisions = Division::GetAllDivisionDropdownData();
        $districts = District::GetAllDivisionWiseDistrictDropdownData(isset($user->division)?$user->division:'');
        $upazilas = Upazila::GetAllDistrictWiseUpazilaDropdownData(isset($user->district)?$user->district:'');
    @endphp

<!--Contact Us Section-->
<section class="contact-us" style="padding-top: 25px !important;">
    <div class="container px-4">
        <div class="contact-head">
            <div class="row">

                <div class="col-lg-12 mb-lg-0 mb-5 col-12">
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



                        <div class="panel-body wizard-content">

                            <form action="{{route('ins_insurance_submit_4',[$page->slug,$sessionUser->code])}}" method="post" class="tab-wizard wizard-circle wizard clearfix">
                                {{ csrf_field() }}
                                <section>

                                    <br/>
                                    <div class="row">
                                        <div class="col-lg-10">
                                            <h4><b>4. Payment Form</b></h4>
                                        </div>
                                    </div>

                                    @php
                                        $healthBasicInfo = Session::get('healthBasicInfo');
                                        $healthPlanInfo = Session::get('healthPlanInfo');
                                        $healthMemberInfo = Session::get('healthMemberInfo');

                                        /*echo "<pre>";
                                        var_dump($healthBasicInfo);
                                        echo "<br>";
                                        echo "<pre>";
                                        var_dump($healthPlanInfo);
                                        echo "<br>";
                                        echo "<pre>";
                                        var_dump($healthMemberInfo);
                                        echo "<br>";*/
                                    @endphp

                                    <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                                        <div class="card">
                                            <div class="row">
                                                <div class="col-md-12 cart">

                                                    <div class="row  ">
                                                        <div class="row main align-items-center text-center">
                                                            <div class="col-md-4"><img width="80px" class="img-fluid" src="http://localhost/insure-tech/public/uploads/media/photo1.png"></div>
                                                            <div class="col-md-4">
                                                                <div class="row text-muted">Health</div>
                                                                <div class="row">Insurence</div>
                                                            </div>

                                                            <div class="col-md-4">Tk.  44.00 <span class="close">&#10005;</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="row main align-items-center text-center">
                                                            <div class="col-md-4"><img width="80px" class="img-fluid" src="http://localhost/insure-tech/public/uploads/media/photo1.png"></div>
                                                            <div class="col-md-4">
                                                                <div class="row text-muted">Health</div>
                                                                <div class="row">Insurence</div>
                                                            </div>

                                                            <div class="col-md-4">Tk.  44.00 <span class="close">&#10005;</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="row  ">
                                                        <div class="row main align-items-center text-center">
                                                            <div class="col-md-4"><img width="80px" class="img-fluid" src="http://localhost/insure-tech/public/uploads/media/photo1.png"></div>
                                                            <div class="col-md-4">
                                                                <div class="row text-muted">Health</div>
                                                                <div class="row">Insurence</div>
                                                            </div>

                                                            <div class="col-md-4">Tk.  44.00 <span class="close">&#10005;</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
<br><br>
                                        <div class="card-body p-0">
                                            <div class="row g-0">
                                                <div class="col-lg-8">
                                                    <div class="p-5">

                                                        @csrf
                                                        <div class="">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="Email">Email</label>
                                                                        <input type="text" name="email" class="form-control" placeholder="Email" required>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for=Phone">Phone</label>
                                                                        <input type="text" name="phone" class="form-control" placeholder="Phone" required>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for=Name">First Name</label>
                                                                        <input type="text" name="first_name" class="form-control" placeholder="First Name" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for=Name">Last Name</label>
                                                                        <input type="text" name="last_name" class="form-control" placeholder="Last Name" required>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for=Name">Address</label>
                                                                        <textarea type="text" name="address" class="form-control" placeholder="Address" required></textarea>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for=Name">Country</label>
                                                                        <select required name="country" class="form-control select2">
                                                                            <option value="">Choose Country</option>
                                                                            @foreach ($country as $val)
                                                                                <option value="{{$val->id}}"
                                                                                    {{$val->id==18?'Selected' : ''}}>{{$val->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for=Name">Division</label>
                                                                        <select required name="division" class="form-control division select2">
                                                                            <option value="">Choose Division</option>
                                                                            @foreach ($divisions as $val)
                                                                                <option value="{{$val->id}}">{{$val->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for=Name">District</label>
                                                                        <a data-href="{{route('get_division_wise_district_user')}}" style="display: none" id="getDistrictRoute"></a>
                                                                        <select required name="district" class="form-control district select2" id="district">
                                                                            <option value="">Choose District</option>
                                                                            @foreach ($districts as $val)
                                                                                <option value="{{$val->id}}"
{{--                                                                                    {{$val->id==18?'Selected' : ''}}>{{$val->name}}</option>--}}
                                                                                    >{{$val->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for=Name">Upazila</label>
                                                                        <a data-href="{{route('get_district_wise_upazila_user')}}" style="display: none" id="getUpazilaRoute"></a>
                                                                        <select required name="upazila" class="form-control upazila select2" id="upazila">
                                                                            <option value="">Choose Upazila</option>
                                                                            @foreach ($upazilas as $val)
                                                                                <option value="{{$val->id}}"
{{--                                                                                    {{$val->id==18?'Selected' : ''}}>{{$val->name}}</option>--}}
                                                                                    >{{$val->name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 bg-grey">
                                                    <div class="" style="padding: 10px">
                                                        <h3 class="fw-bold mb-1 mt-2 pt-1">Summary</h3>
                                                        <hr class="my-4">

                                                        <div class="d-flex justify-content-between mb-1">
                                                            <h5 class="text-uppercase" style="font-size: 15px !important;">Total price</h5>
                                                            <h5 style="font-size: 15px !important;" class="total-amount-tk">Tk. {{number_format(2000,2)}}</h5>
                                                        </div>

                                                        <div class="card checkout-right">
                                                            <div class="card-body">
                                                                <h5 class="mb-4">Payment Method</h5>
                                                                <div class="payments">
                                                                    <label class="">Debit / Credit Card / Mobile Payment
                                                                        <input type="radio" name="payment_type" class="" value="PAYPAL" checked>

                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>

                                                        <span style="font-weight: bold;">SSLCommerz</span>
                                                        <p style="text-align: justify;background: #dadbdb;padding: 8px;">
                                                            Pay securely by Credit/Debit card, Internet banking or Mobile banking through SSLCommerz.
                                                        </p>
                                                        <hr>

                                                        <p style="text-align: justify;">
                                                            Your personal data will be used to process your order, support your experience through out this website, and for other purposes described in our
                                                            {{--                                                        <a href="{{route('cms_page','privacy_policy')}}">privacy policy.</a>--}}
                                                            <a href="">privacy policy.</a>
                                                        </p>

                                                        <p style="text-align: justify;">
                                                            <input type="checkbox" required>
                                                            {{--                                                        I have read and agree to the website <a href="{{route('cms_page','terms_conditions')}}">terms and conditions</a>,--}}
                                                            I have read and agree to the website <a href="">terms and conditions</a>,
                                                            {{--                                                        <a href="{{route('cms_page','privacy_policy')}}">Privacy policy</a>, <a href="{{route('cms_page','refund_policy')}}">Refund Policy</a>--}}
                                                            <a href="">Privacy policy</a>, <a href="">Refund Policy</a>
                                                        </p>
                                                        <br>

                                                        <button class="btn btn-success step-2-submit" type="submit">Submit</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <img src="{{ asset('public/website/health-insurance.jpg') }}" alt="Health Insurance" width="100%" height="400">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
{{--                <button type="button" class="btn btn-primary">Understood</button>--}}
            </div>
        </div>
    </div>
</div>
@endsection
