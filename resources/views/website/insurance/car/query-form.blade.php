@extends('website.layouts')

@section('content')

<!-- Bootstrap JS (optional, for certain components that require JavaScript) -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

 -->

<style>
        /* Custom CSS for additional styling */
        body {
            padding: 20px;
        }

        .progress-bar-container {
            width: 100%;
            text-align: center;
        }

        .progress-bar-steps {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .progress-step {
            width: 24%;
            text-align: center;
            position: relative;
        }

        .progress-bar-item {
            width: 100%;
            height: 8px;
            background-color: #ddd;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }

        .progress-bar-item.active {
            background-color: #007bff;
        }

        .progress-label {
            margin-top: 8px;
        }
    </style>
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

 <!-- Progress Bar Start  -->
<div class="container">
    <div class="progress-bar-container">
        <div class="progress-bar-steps">
            <div class="progress-step">
                <div class="progress-bar-item active"></div>
                <div class="progress-label"><br>Step 1</div>
            </div>
            <div class="progress-step">
                <div class="progress-bar-item"></div>
                <div class="progress-label"><br>Step 2</div>
            </div>
            <div class="progress-step">
                <div class="progress-bar-item"></div>
                <div class="progress-label"><br>Step 3</div>
            </div>
            <div class="progress-step">
                <div class="progress-bar-item"></div>
                <div class="progress-label"><br>Step 4</div>
            </div>
        </div>
    </div>
</div>
     <!-- Progress Bar ends  -->





                    <div class="form-main">
                        <div class="title">
                            <h2 class="text-dark fw-bold mb-3">{{ isset($page->name) ? $page->name.' , Let’s get connected..
 ' : '' }}</h2>
                            <p>Buy Car Insurance Policy Online in Bangladesh.</p>
                        </div>

                        <div class="panel-body wizard-content">

                            <form action="{{route('ins_insurance_submit_1',[$page->slug,$sessionUser->code])}}" method="post" class="tab-wizard wizard-circle wizard clearfix">
                                {{ csrf_field() }}
                                <section>
                                    <br/>
                                    <div class="row">
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-10">
                                            <h4><b>1. Basic Details</b></h4>
                                        </div>
                                        <div class="col-lg-1"></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label for="MaritalStatus"><b>Engine Capacity CC</b></label>
                                                <select name="MaritalStatus" id="MaritalStatus" class="wow animate__zoomIn form-select" data-wow-delay=".4s" required>
                                                    <option value="">Select</option>
                                                    <option value="1">Lower 1300 cc</option>
                                                    <option value="2">1301 cc - 1800 cc</option>
                                                    <option value="3">1801cc - 3000 cc</option>
                                                    <option value="4">Over 3000 cc </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">

                                        </div>
                                    </div>

<!-- //22222222 -->
                              

                                    <div class="row">
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                           


<div class="row g-3 align-items-center">
     <label for="MaritalStatus"><b>Full Insured Value or FIV (as per purchase invoice)</b></label>
              <div class="col-auto">
                1 Driver +
              </div>
              <div class="col-auto">

                <input style="width: 65px" wire:model="no_of_passenger" type="number" class="form-control" min="3" max="45">
              </div>
              <div class="col-auto">
                Passengers = Total <b>5</b> seats
              </div>
            </div>
 
                                            </div>
                                        </div>
                                        <div class="col-lg-5">

                                        </div>
                                    </div>

<!-- //33333333 -->

                                    <div class="row">
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label for="MaritalStatus"><b>Full Insured Value or FIV (as per purchase invoice)</b></label>
                                              <input wire:model="motor_price" value="Price" name="motor_price" id="motor_price" class="form-control" type="number" placeholder="Price">
                                            </div>
                                        </div>
                                        <div class="col-lg-5">

                                        </div>
                                    </div>
<!-- ///////4444444444444 -->

                                    <div class="row">
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label for="MaritalStatus"><b>Comprehensive (first-party) Insurance </b></label>
                                                 <br>
                     <label class="radio">
              <input wire:change="has_ncb_year_change($event.target.value)" wire:model="has_ncb_year" value="yes" type="radio" name="answer">
              yes
            </label>
            
            <label class="radio">
              <input wire:change="has_ncb_year_change($event.target.value)" wire:model="has_ncb_year" value="no" type="radio" name="answer">
              no
            </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">

                                        </div>
                                    </div>


<!-- ////55555555555555 -->

                                   
                                    <div class="row">
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label for="MaritalStatus"><b>Have any Tracking System?</b></label>
                                                 <br>
                     <label class="radio">
              <input wire:change="has_ncb_year_change($event.target.value)" wire:model="has_ncb_year" value="yes" type="radio" name="answer">
              yes
            </label>
            
            <label class="radio">
              <input wire:change="has_ncb_year_change($event.target.value)" wire:model="has_ncb_year" value="no" type="radio" name="answer">
              no
            </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">

                                        </div>
                                    </div>

<div class="row">
        <div class="col-lg-1"></div>
                                        <div class="col-lg-10">
                                         <h5><b>Covered Risks</b></h5>
                                        </div>
                                        <div class="col-lg-1">
                                        </div>
                                    </div>

<div class="row">
        <div class="col-lg-1"> </div>
                                        <div class="col-lg-10">
                                           The Comprehensive Vehicle Insurance policy will cover following selected Risks. You can select or de-select Risk Coverages at your preference. Please note that, by excluding any of the below coverages, you undertake the liability for loss in such incident be borne by you, not the insurance company. 
                                        </div>
                                        <div class="col-lg-1">
                                        </div>
                                    </div>


      <br/>
                                    <div class="row">
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-10">
                           <h4><b>2. Additional Coverages</b></h4>
                                        </div>
                                        <div class="col-lg-1"></div>
                                    </div>


<div class="row">
        <div class="col-lg-1"></div>
                                        <div class="col-lg-10">
                                       
                                        </div>
                                        <div class="col-lg-1">
                                        </div>
                                    </div>

<div class="row">
        <div class="col-lg-1"> </div>
                                        <div class="col-lg-10">


<label class="checkbox">
                                                    <input type="checkbox" checked readonly disabled name="included" value="own_damage">
                                                    <span class="checkmark" style="background-color: #979899;border: 2px solid #979899;"></span>
                                                    Own Damage <p>Accidental Damage from external sources</p>
                                                </label>
                                                <label class="checkbox">
                                                    <input type="checkbox" checked readonly disabled name="included" value="theft">
                                                    <span class="checkmark" style="background-color: #979899;border: 2px solid #979899;"></span>
                                                    Theft <p>Burglary, theft or house breaking</p>
                                                </label>
                                                <label class="checkbox">
                                                    <input type="checkbox" checked name="include[]" value="cyclone_flood">
                                                    <span class="checkmark"></span>
                                                    Cyclone & Flood <p>Damage by Flood, Typhoon, Hurricane, Storm, Tempest, Inundation, Cyclone, Hailstorm and Frost</p>
                                                </label>
                                                <label class="checkbox">
                                                    <input type="checkbox" checked name="include[]" value="earthquake">
                                                    <span class="checkmark"></span>
                                                    Earthquake <p>Damage by earthquake or, fire and shock arising from such incident</p>
                                                </label>
                                                <label class="checkbox">
                                                    <input type="checkbox" checked name="include[]" value="riot_strike">
                                                    <span class="checkmark"></span>
                                                    Riot & Strike <p>Damage by Riot and Strike including Malicious & Terrorist</p>
                                                </label>




                                           
                                        </div>
                                        <div class="col-lg-1">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-1">
                                        </div>
                                        <div class="col-lg-10">
                                            <button class="nav-link btn-register py-2 text-nowrap step-1-submit" type="submit">Next</button>
                                        </div>
                                        <div class="col-lg-1">
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

            </div>
        </div>
    </div>
</div>
@endsection
