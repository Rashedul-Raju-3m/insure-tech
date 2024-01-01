@extends('website.layouts')

@section('content')

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
                            <p>Buy Car Insurance Policy Online in Bangladesh.</p>
                        </div>

                        <div class="panel-body wizard-content">


                                <section>
                              

                                    <div id="hideFeature">
                                        <div class="row">
                                            <div class="col-lg-1"></div>
                                            <div class="col-lg-10"><h6><b> Plans for you </b></h6></div>
                                            <div class="col-lg-1"></div>
                                        </div>

                    

                                        <div class="row" style="padding-top: 8px">
                                            <div class="col-lg-1"></div>
                                            <div class="col-lg-10">
                                                <section id="pricing-table" style="padding: 0px !important;">
                                                    <div class=" justify-content-center">
                                                        <div class="mb-5 monthly-plan">
                                                            <div class="pricing-plan popular h-100 wow animate__zoomIn" data-wow-delay=".6s">
                                                                <div class="row" style="height: 160px">
                                                                    <div class="col-md-3" style="border-right: 1px solid #cedddb">
                                                                        <div class="pricing-plan-header" style="padding: 13px 15px;">
                                                                            <span style="font-size: 10px !important;right: 105px !important;border-top-left-radius: 3px !important;border-bottom-right-radius: 10px !important;border-bottom-left-radius:0px !important;">{{ _lang('Most popular') }}</span>
                                                                        </div>
                                                                        <p class="d-inline-block">
                                                                            <img src="{{ asset('public/website/assets/company/delta.png') }}" alt="" style="width: 200px;padding: 0px 12px;">
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-md-6" style="border-right: 1px solid #cedddb">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="pricing-plan-header" style="padding: 0px !important;">
                                                                                <h3 style="text-align: left !important;margin-bottom: 0px !important;">
                                                                                    <span style="font-size: 15px !important;color: #000000;">Plan name</span>
                                                                                </h3>
                                                                                <h4 style="text-align: left !important;">
                                                                                    <span style="font-size: 18px !important;color: #000000;"><b>GHI Starter</b> </span>
                                                                                </h4>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col">
                                                                            <div class="pricing-plan-header" style="padding: 0px !important;">
                                                                                <h3 style="text-align: left !important;margin-bottom: 0px !important;">
                                                                                    <span style="font-size: 15px !important;color: #000000;">Coverage</span>
                                                                                </h3>
                                                                                <h4 style="text-align: left !important;">
                                                                                    <span style="font-size: 18px !important;color: #000000;"><b>TK. 10,000-20,000</b> </span>
                                                                                </h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <br>

                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="pricing-plan-header" style="padding: 0px !important;">
                                                                                <h3 style="text-align: left !important;margin-bottom: 0px !important;">
                                                                                    <span style="font-size: 15px !important;color: #000000;">Insurance Provider</span>
                                                                                </h3>
                                                                                <h4 style="text-align: left !important;">
                                                                                    <span style="font-size: 18px !important;color: #000000;"><b>Green Delta Insurance</b> </span>
                                                                                </h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    </div>
                                                                    <div class="col-md-3">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="pricing-plan-header" style="padding: 0px !important;">
                                                                                <h3 style="text-align: center !important;margin-bottom: 0px !important;">
                                                                                    <span style="font-size: 15px !important;color: #000000;">Premium</span>
                                                                                </h3>
                                                                                <h4 style="text-align: center !important;">
                                                                                    <span style="font-size: 18px !important;color: #000000;"><b>TK. 490-1000 / Year</b> </span>
                                                                                </h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <div class="pricing-plan-header" style="padding: 0px !important;">
                                                                                <h4 style="text-align: center !important;">
                                                                                    <span style="font-size: 12px !important;color: #000000;">
                                                                                        <p class="btn btn-success" style="cursor: pointer" id="getDetailsFeature">Select</p>
                                                                                    </span>
                                                                                </h4>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mb-5 monthly-plan">
                                                            <div class="pricing-plan popular h-100 wow animate__zoomIn" data-wow-delay=".6s">
                                                                <div class="row" style="height: 160px">
                                                                    <div class="col-md-3" style="border-right: 1px solid #cedddb">
                                                                        <div class="pricing-plan-header" style="padding: 13px 15px;">
                                                                            <span style="font-size: 10px !important;right: 105px !important;border-top-left-radius: 3px !important;border-bottom-right-radius: 10px !important;border-bottom-left-radius:0px !important;">{{ _lang('Most popular') }}</span>
                                                                        </div>
                                                                        <p class="d-inline-block">
                                                                            <img src="{{ asset('public/website/assets/company/life.png') }}" alt="" style="width: 200px;padding: 0px 12px;">
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-md-6" style="border-right: 1px solid #cedddb">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="pricing-plan-header" style="padding: 0px !important;">
                                                                                    <h3 style="text-align: left !important;margin-bottom: 0px !important;">
                                                                                        <span style="font-size: 15px !important;color: #000000;">Plan name</span>
                                                                                    </h3>
                                                                                    <h4 style="text-align: left !important;">
                                                                                        <span style="font-size: 18px !important;color: #000000;"><b>Guardian Assurance</b> </span>
                                                                                    </h4>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col">
                                                                                <div class="pricing-plan-header" style="padding: 0px !important;">
                                                                                    <h3 style="text-align: left !important;margin-bottom: 0px !important;">
                                                                                        <span style="font-size: 15px !important;color: #000000;">Coverage</span>
                                                                                    </h3>
                                                                                    <h4 style="text-align: left !important;">
                                                                                        <span style="font-size: 18px !important;color: #000000;"><b>TK. 10,000-20,000</b> </span>
                                                                                    </h4>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <br>

                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="pricing-plan-header" style="padding: 0px !important;">
                                                                                    <h3 style="text-align: left !important;margin-bottom: 0px !important;">
                                                                                        <span style="font-size: 15px !important;color: #000000;">Insurance Provider</span>
                                                                                    </h3>
                                                                                    <h4 style="text-align: left !important;">
                                                                                        <span style="font-size: 18px !important;color: #000000;"><b>Guardian Life Insurance</b> </span>
                                                                                    </h4>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="pricing-plan-header" style="padding: 0px !important;">
                                                                                    <h3 style="text-align: center !important;margin-bottom: 0px !important;">
                                                                                        <span style="font-size: 15px !important;color: #000000;">Premium</span>
                                                                                    </h3>
                                                                                    <h4 style="text-align: center !important;">
                                                                                        <span style="font-size: 18px !important;color: #000000;"><b>TK. 500-1100 / Year</b> </span>
                                                                                    </h4>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="pricing-plan-header" style="padding: 0px !important;">
                                                                                    <h4 style="text-align: center !important;">
                                                                                    <span style="font-size: 12px !important;color: #000000;">
                                                                                        <p class="btn btn-danger" style="cursor: pointer" id="getDetailsFeature">Details</p>
                                                                                    </span>
                                                                                    </h4>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mb-5 monthly-plan">
                                                            <div class="pricing-plan popular h-100 wow animate__zoomIn" data-wow-delay=".6s">
                                                                <div class="row" style="height: 160px">
                                                                    <div class="col-md-3" style="border-right: 1px solid #cedddb">
                                                                        <div class="pricing-plan-header" style="padding: 13px 15px;">
                                                                            <span style="font-size: 10px !important;right: 105px !important;border-top-left-radius: 3px !important;border-bottom-right-radius: 10px !important;border-bottom-left-radius:0px !important;">{{ _lang('Most popular') }}</span>
                                                                        </div>
                                                                        <p class="d-inline-block">
                                                                            <img src="{{ asset('public/website/assets/company/pragati.png') }}" alt="" style="width: 200px;padding: 0px 12px;">
                                                                        </p>
                                                                    </div>
                                                                    <div class="col-md-6" style="border-right: 1px solid #cedddb">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="pricing-plan-header" style="padding: 0px !important;">
                                                                                    <h3 style="text-align: left !important;margin-bottom: 0px !important;">
                                                                                        <span style="font-size: 15px !important;color: #000000;">Plan name</span>
                                                                                    </h3>
                                                                                    <h4 style="text-align: left !important;">
                                                                                        <span style="font-size: 18px !important;color: #000000;"><b>Health Insurance </b> </span>
                                                                                    </h4>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col">
                                                                                <div class="pricing-plan-header" style="padding: 0px !important;">
                                                                                    <h3 style="text-align: left !important;margin-bottom: 0px !important;">
                                                                                        <span style="font-size: 15px !important;color: #000000;">Coverage</span>
                                                                                    </h3>
                                                                                    <h4 style="text-align: left !important;">
                                                                                        <span style="font-size: 18px !important;color: #000000;"><b>TK. 10,000-20,000</b> </span>
                                                                                    </h4>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <br>

                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="pricing-plan-header" style="padding: 0px !important;">
                                                                                    <h3 style="text-align: left !important;margin-bottom: 0px !important;">
                                                                                        <span style="font-size: 15px !important;color: #000000;">Insurance Provider</span>
                                                                                    </h3>
                                                                                    <h4 style="text-align: left !important;">
                                                                                        <span style="font-size: 18px !important;color: #000000;"><b>Pragati Life Insurance</b> </span>
                                                                                    </h4>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="pricing-plan-header" style="padding: 0px !important;">
                                                                                    <h3 style="text-align: center !important;margin-bottom: 0px !important;">
                                                                                        <span style="font-size: 15px !important;color: #000000;">Premium</span>
                                                                                    </h3>
                                                                                    <h4 style="text-align: center !important;">
                                                                                        <span style="font-size: 18px !important;color: #000000;"><b>TK. 700-1200 / Year</b> </span>
                                                                                    </h4>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <br>
                                                                        <div class="row">
                                                                            <div class="col">
                                                                                <div class="pricing-plan-header" style="padding: 0px !important;">
                                                                                    <h4 style="text-align: center !important;">
                                                                                    <span style="font-size: 12px !important;color: #000000;">
                                                                                        <p class="btn btn-success" style="cursor: pointer" id="getDetailsFeature">Select</p>
                                                                                    </span>
                                                                                    </h4>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col">
                                                                                <div class="pricing-plan-header" style="padding: 0px !important;">
                                                                                    <h4 style="text-align: left !important;">
                                                                                    <span style="font-size: 12px !important;color: #000000;">
                                                                                        <p class="btn btn-danger" style="cursor: pointer" id="getDetailsFeature">Details</p>
                                                                                    </span>
                                                                                    </h4>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{--<div class="mb-5 monthly-plan">
                                                            <div class="pricing-plan popular h-100 wow animate__zoomIn" data-wow-delay=".6s">
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="pricing-plan-header">
                                                                            <span style="font-size: 10px !important;right: 177px !important;border-top-left-radius: 3px !important;border-bottom-right-radius: 10px !important;border-bottom-left-radius:0px !important;">{{ _lang('Most popular') }}</span>
                                                                            <h5>Standard</h5>
                                                                            <p class="d-inline-block">
                                                                                <small>
                                                                                    <del>{{ decimalPlace(20, currency_symbol()) }}</del>
                                                                                </small>
                                                                                <span class="bg-primary d-inline-block text-white px-3 py-1 rounded-pill ms-1">{{ '20'.'% '._lang('Discount') }}</span>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <a href="{{route('ins_insurance_details',['health-insurance',$sessionUser->code])}}">
                                                                            <div class="pricing-plan-header">
                                                                                <h4>
                                                                                    <span>{{ decimalPlace('999', currency_symbol()) }}</span>
                                                                                    {{ ucwords('Yearly') }}
                                                                                </h4>
                                                                                <p style="cursor: pointer" id="getDetailsFeature">Get Details Feature</p>

                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="pricing-plan-body">
                                                                            <ul>
                                                                                <li>
                                                                                    <i class="bi bi-check2-circle me-2"></i>
                                                                                    {{ str_replace('-1',_lang('Unlimited'), 3).' '._lang('Business Account') }}
                                                                                </li>
                                                                                <li>
                                                                                    <i class="bi bi-check2-circle me-2"></i>
                                                                                    {{ str_replace('-1',_lang('Unlimited'), 3).' '._lang('Business Account') }}
                                                                                </li>
                                                                            </ul>
                                                                            <a href="" style="padding: 6px !important;margin-top: 10px !important;">{{ _lang('Buy') }} <i class="bi bi-arrow-right ms-2"></i></a>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>--}}
                                                    </div>

                                                </section>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="showFeature" style="display: none">
                                        <div class="row">
                                            <div class="col-lg-1" id="reverse" style="cursor: pointer"></div>
                                            <div class="col-lg-10"><h6><b> Compare plans </b></h6></div>
                                            <div class="col-lg-1"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-1"></div>
                                            <div class="col-lg-10 table-responsive">
                                                <table class="table table-bordered table-condensed text-center">
                                                    <thead class="thead-light">
                                                    <tr>
                                                        <th class="text-center" width="35%">Plans for you</th>
                                                        <th class="text-center bg-light">Double Wallet <br> Plan</th>
                                                        <th class="text-center bg-light">Infinity Wallet <br> Plan</th>
                                                        <th class="text-center bg-light">Worldwide <br> Treatment Plan</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>Premium for 1-year plan</td>
                                                        <td>5000</td>
                                                        <td>10000</td>
                                                        <td>15000</td>
                                                    </tr>
                                                    <tr class="bg-light">
                                                        <td colspan="3"><b>Important Features</b></td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr class="align-middle">
                                                        <td>In-Patient Hospitalization <br><small> (Accidents, Illnesses, Critical Illnesses)</small></td>
                                                        <td>1L</td>
                                                        <td>2L</td>
                                                        <td>3L</td>
                                                    </tr>
                                                    <tr class="align-middle">
                                                        <td>Critical Illness Waiting Period <br><small>  No claim is admissible till 30 days from policy start date except for accidents</small></td>
                                                        <td>30 Days</td>
                                                        <td>45 Days</td>
                                                        <td>60 Days</td>
                                                    </tr>
                                                    <tr class="bg-light">
                                                        <td colspan="3"><b>Others Features</b></td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr class="align-middle">
                                                        <td>Worldwide Coverage Initial Waiting Period</td>
                                                        <td>1L</td>
                                                        <td>2L</td>
                                                        <td>3L</td>
                                                    </tr>
                                                    <tr class="align-middle">
                                                        <td>Critical Illness Waiting Period <br><small>  No claim is admissible till 30 days from policy start date except for accidents</small></td>
                                                        <td><i class="bi bi-check2 me-2 d-none d-lg-inline"></i></td>
                                                        <td><i class="bi bi-x-lg me-2 d-none d-lg-inline text-danger"></i></td>
                                                        <td>60 Days</td>
                                                    </tr>
                                                    </tbody>
                                                    <tfoot>
                                                    <tr class="align-middle">
                                                        <td>&nbsp;</td>
                                                        <td>
                                                            <form action="{{route('ins_insurance_submit_2',[$page->slug,$sessionUser->code])}}" method="post" class="tab-wizard wizard-circle wizard clearfix">
                                                                {{ csrf_field() }}
                                                                <input type="hidden" name="package" value="5" id="package1">
                                                            <button class="btn btn-warning" type="submit">Buy Now</button>
                                                            </form>
                                                        </td>
                                                        <td>
                                                            <form action="{{route('ins_insurance_submit_2',[$page->slug,$sessionUser->code])}}" method="post" class="tab-wizard wizard-circle wizard clearfix">
                                                                {{ csrf_field() }}
                                                                <input type="hidden" name="package" value="10" id="package2">
                                                                <button class="btn btn-warning" type="submit">Buy Now</button>
                                                            </form>
                                                        </td>
                                                        <td>
                                                            <form action="{{route('ins_insurance_submit_2',[$page->slug,$sessionUser->code])}}" method="post" class="tab-wizard wizard-circle wizard clearfix">
                                                                {{ csrf_field() }}
                                                                <input type="hidden" name="package" value="15" id="package3">
                                                                <button class="btn btn-warning" type="submit">Buy Now</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <div class="col-lg-1"></div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-1"></div>
                                            <div class="col-lg-10">
                                                <p style="cursor: pointer;width: 100px" class="nav-link btn-register btn py-2 text-nowrap step-2-submit" id="reverse">Back</p>
                                            </div>
                                            <div class="col-lg-1">
                                            </div>
                                        </div>
                                    </div>
                                </section>
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
