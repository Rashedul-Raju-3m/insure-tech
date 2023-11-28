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
                            <p>Buy Health Insurance Policy Online in Bangladesh.</p>
                        </div>

                        <div class="panel-body wizard-content">
                            <form id="example-form" action="#" class="tab-wizard wizard-circle wizard clearfix">
                                <h6>Basic Details</h6>
                                <section>
                                    <br/>
                                    <div class="row">
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-10">
                                            <h6><b>Who would you like to insure today?</b></h6>
                                        </div>
                                        <div class="col-lg-1"></div>


                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-5">
                                            <div class="form-check">
                                                <input class="form-check-input health-insurance-holder" type="checkbox" value="Self" id="Self">
                                                <label class="form-check-label" for="Self">Self</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input health-insurance-holder" type="checkbox" value="Spouse" id="Spouse">
                                                <label class="form-check-label" for="Spouse">Spouse</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input health-insurance-holder" type="checkbox" value="Son" id="Son">
                                                <label class="form-check-label" for="Son">Son</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input health-insurance-holder" type="checkbox" value="Daughter" id="Daughter">
                                                <label class="form-check-label" for="Daughter">Daughter</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="form-check">
                                                <input class="form-check-input health-insurance-holder" type="checkbox" value="Father" id="Father">
                                                <label class="form-check-label" for="Father">Father</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input health-insurance-holder" type="checkbox" value="Mother" id="Mother">
                                                <label class="form-check-label" for="Mother">Mother</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input health-insurance-holder" type="checkbox" value="Father In Law" id="FatherInLaw">
                                                <label class="form-check-label" for="FatherInLaw">Father In Law</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input health-insurance-holder" type="checkbox" value="Mother In Law" id="MotherInLaw">
                                                <label class="form-check-label" for="MotherInLaw">Mother In Law</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label for="MaritalStatus"><b>Select your Marital Status</b></label>
                                                <select name="MaritalStatus" id="MaritalStatus" class="wow animate__zoomIn form-select" data-wow-delay=".4s">
                                                    <option value="">Select</option>
                                                    <option value="Unmarried">Unmarried</option>
                                                    <option value="Married">Married</option>
                                                    <option value="Divorced">Divorced</option>
                                                    <option value="Widowed">Widowed</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">

                                        </div>
                                    </div>
                                </section>

                                <h6>Your Plan</h6>
                                <section>
                                    <br/>
                                    <div id="showFeature" style="display: none">
                                        <div class="row">
                                            <div class="col-lg-1" id="reverse" style="cursor: pointer">Back</div>
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
                                                        <td>15000</td>
                                                        <td>20000</td>
                                                        <td>25000</td>
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
                                                        <td><button class="btn btn-warning"><b>Select</b></button></td>
                                                        <td><button class="btn btn-warning"><b>Select</b></button></td>
                                                        <td><button class="btn btn-warning"><b>Select</b></button></td>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <div class="col-lg-1"></div>
                                        </div>
                                    </div>
                                    <div id="hideFeature">
                                        <div class="row">
                                            <div class="col-lg-1"></div>
                                            <div class="col-lg-10"><h6><b> Customise your plan </b></h6></div>
                                            <div class="col-lg-1"></div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-1"></div>
                                            <div class="col-lg-10">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-lg-5">
                                                                <div class="form-group">
                                                                    <label for="SumInsured"><b>Sum Insured</b></label>
                                                                    <select name="SumInsured" id="SumInsured" class=" animate__zoomIn form-select" data-wow-delay=".4s">
                                                                        <option value="">Select</option>
                                                                        <option value="5">5 Lakhs </option>
                                                                        <option value="10">10 Lakhs </option>
                                                                        <option value="15">15 Lakhs </option>
                                                                        <option value="20">20 Lakhs </option>
                                                                        <option value="25">25 Lakhs </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-5">
                                                                <br>
                                                                <span data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="cursor: pointer">
                                                                    <u>Know the right sum Insured for you</u>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-1"></div>
                                        </div>

                                        <div class="row" style="padding-top: 20px">
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
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="pricing-plan-header">
                                        <span style="font-size: 10px !important;right: 166px !important;border-top-left-radius: 3px !important;border-bottom-right-radius: 10px !important;border-bottom-left-radius:0px !important;">{{ _lang('Most popular') }}</span>
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
                                    <div class="pricing-plan-header">
                                        <h4>
                                            <span>{{ decimalPlace('999', currency_symbol()) }}</span>
                                             {{ ucwords('Yearly') }}
                                        </h4>
                                        <p style="cursor: pointer" id="getDetailsFeature">Get Details Feature</p>

                                    </div>
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
                    </div>
                    <div class="mb-5 monthly-plan">
                        <div class="pricing-plan popular h-100 wow animate__zoomIn" data-wow-delay=".6s">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="pricing-plan-header">
                                        <span style="font-size: 10px !important;right: 166px !important;border-top-left-radius: 3px !important;border-bottom-right-radius: 10px !important;border-bottom-left-radius:0px !important;">{{ _lang('Most popular') }}</span>
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
                    </div>
                    <div class="mb-5 monthly-plan">
                        <div class="pricing-plan popular h-100 wow animate__zoomIn" data-wow-delay=".6s">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="pricing-plan-header">
                                        <span style="font-size: 10px !important;right: 166px !important;border-top-left-radius: 3px !important;border-bottom-right-radius: 10px !important;border-bottom-left-radius:0px !important;">{{ _lang('Most popular') }}</span>
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
                                    <div class="pricing-plan-header">
                                        <h4>
                                            <span>{{ decimalPlace('999', currency_symbol()) }}</span>
                                            {{ ucwords('Yearly') }}
                                        </h4>

                                    </div>
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
                    </div>
                    <div class="mb-5 monthly-plan">
                        <div class="pricing-plan popular h-100 wow animate__zoomIn" data-wow-delay=".6s">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="pricing-plan-header">
                                        <span style="font-size: 10px !important;right: 166px !important;border-top-left-radius: 3px !important;border-bottom-right-radius: 10px !important;border-bottom-left-radius:0px !important;">{{ _lang('Most popular') }}</span>
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
                                    <div class="pricing-plan-header">
                                        <h4>
                                            <span>{{ decimalPlace('999', currency_symbol()) }}</span>
                                            {{ ucwords('Yearly') }}
                                        </h4>

                                    </div>
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
                    </div>
                    <div class="mb-5 monthly-plan">
                        <div class="pricing-plan popular h-100 wow animate__zoomIn" data-wow-delay=".6s">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="pricing-plan-header">
                                        <span style="font-size: 10px !important;right: 166px !important;border-top-left-radius: 3px !important;border-bottom-right-radius: 10px !important;border-bottom-left-radius:0px !important;">{{ _lang('Most popular') }}</span>
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
                                    <div class="pricing-plan-header">
                                        <h4>
                                            <span>{{ decimalPlace('999', currency_symbol()) }}</span>
                                            {{ ucwords('Yearly') }}
                                        </h4>

                                    </div>
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
                    </div>
                    <div class="mb-5 monthly-plan">
                        <div class="pricing-plan popular h-100 wow animate__zoomIn" data-wow-delay=".6s">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="pricing-plan-header">
                                        <span style="font-size: 10px !important;right: 166px !important;border-top-left-radius: 3px !important;border-bottom-right-radius: 10px !important;border-bottom-left-radius:0px !important;">{{ _lang('Most popular') }}</span>
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
                                    <div class="pricing-plan-header">
                                        <h4>
                                            <span>{{ decimalPlace('999', currency_symbol()) }}</span>
                                            {{ ucwords('Yearly') }}
                                        </h4>

                                    </div>
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
                    </div>
                    <div class="mb-5 monthly-plan">
                        <div class="pricing-plan popular h-100 wow animate__zoomIn" data-wow-delay=".6s">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="pricing-plan-header">
                                        <span style="font-size: 10px !important;right: 166px !important;border-top-left-radius: 3px !important;border-bottom-right-radius: 10px !important;border-bottom-left-radius:0px !important;">{{ _lang('Most popular') }}</span>
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
                                    <div class="pricing-plan-header">
                                        <h4>
                                            <span>{{ decimalPlace('999', currency_symbol()) }}</span>
                                            {{ ucwords('Yearly') }}
                                        </h4>

                                    </div>
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
                    </div>
                    <div class="mb-5 monthly-plan">
                        <div class="pricing-plan popular h-100 wow animate__zoomIn" data-wow-delay=".6s">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="pricing-plan-header">
                                        <span style="font-size: 10px !important;right: 166px !important;border-top-left-radius: 3px !important;border-bottom-right-radius: 10px !important;border-bottom-left-radius:0px !important;">{{ _lang('Most popular') }}</span>
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
                                    <div class="pricing-plan-header">
                                        <h4>
                                            <span>{{ decimalPlace('999', currency_symbol()) }}</span>
                                            {{ ucwords('Yearly') }}
                                        </h4>

                                    </div>
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
                    </div>
                    <div class="mb-5 monthly-plan">
                        <div class="pricing-plan popular h-100 wow animate__zoomIn" data-wow-delay=".6s">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="pricing-plan-header">
                                        <span style="font-size: 10px !important;right: 166px !important;border-top-left-radius: 3px !important;border-bottom-right-radius: 10px !important;border-bottom-left-radius:0px !important;">{{ _lang('Most popular') }}</span>
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
                                    <div class="pricing-plan-header">
                                        <h4>
                                            <span>{{ decimalPlace('999', currency_symbol()) }}</span>
                                            {{ ucwords('Yearly') }}
                                        </h4>

                                    </div>
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
                    </div>
                </div>

            </section>
                                            </div>
                                        </div>
                                    </div>
                                </section>



                                <h6>Warning</h6>
                                <section>
                                    <div class="row">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-8">
                                            <div class="form-group">
                                                <label>This is the question that is being asked to the user?</label>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                                                        Option one is this and that&mdash;be sure to include why it's great
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" >
                                                        Option two can be something else and selecting it will deselect option one
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" >
                                                        Option three. This is just a demo.
                                                    </label>
                                                </div>
                                            </div></div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-4">

                                            <div class="form-group">
                                                <label for="name-2">First name</label>
                                                <input id="name-2" name="name" type="text" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="surname-2">Last name</label>
                                                <input id="surname-2" name="surname" type="text" class="form-control">

                                            </div>


                                        </div>
                                        <div class="col-sm-4">

                                            <div class="form-group">
                                                <label for="age-2">Age</label>
                                                <input id="age-2" name="age" type="text" class="form-control number">

                                            </div>
                                            <div class="form-group">

                                                <label for="email-2">Email</label>
                                                <input id="email-2" name="email" type="text" class="form-control email">
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <h6>Finish</h6>
                                <section>

                                    <input id="acceptTerms-2" name="acceptTerms" type="checkbox" class=""> <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>
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
