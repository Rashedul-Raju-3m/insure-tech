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
                            <p>Buy Accidental Insurance Policy Online in Bangladesh.</p>
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
                                <label for="MaritalStatus"><b>Please Select Your Age </b></label>
                                <select name="MaritalStatus" id="MaritalStatus" class="wow animate__zoomIn form-select" data-wow-delay=".4s" required>
                                    <option value="16">16 Years</option>
                                  <option value="17">17 Years</option>
                                  <option value="18">18 Years</option>
                                  <option value="19">19 Years</option>
                                  <option value="20">20 Years</option>
                                  <option value="21">21 Years</option>
                                  <option value="22">22 Years</option>
                                  <option value="23">23 Years</option>
                                  <option value="24">24 Years</option>
                                  <option value="25">25 Years</option>
                                  <option value="26">26 Years</option>
                                  <option value="27">27 Years</option>
                                  <option value="28">28 Years</option>
                                  <option value="29">29 Years</option>
                                  <option value="30">30 Years</option>
                                  <option value="31">31 Years</option>
                                  <option value="32">32 Years</option>
                                  <option value="33">33 Years</option>
                                  <option value="34">34 Years</option>
                                  <option value="35">35 Years</option>
                                  <option value="36">36 Years</option>
                                  <option value="37">37 Years</option>
                                  <option value="38">38 Years</option>
                                  <option value="39">39 Years</option>
                                  <option value="40">40 Years</option>
                                  <option value="41">41 Years</option>
                                  <option value="42">42 Years</option>
                                  <option value="43">43 Years</option>
                                  <option value="44">44 Years</option>
                                  <option value="45">45 Years</option>
                                  <option value="46">46 Years</option>
                                  <option value="47">47 Years</option>
                                  <option value="48">48 Years</option>
                                  <option value="49">49 Years</option>
                                  <option value="50">50 Years</option>
                                  <option value="51">51 Years</option>
                                  <option value="52">52 Years</option>
                                  <option value="53">53 Years</option>
                                  <option value="54">54 Years</option>
                                  <option value="55">55 Years</option>
                                  <option value="56">56 Years</option>
                                  <option value="57">57 Years</option>
                                  <option value="58">58 Years</option>
                                  <option value="59">59 Years</option>
                                  <option value="60">60 Years</option>
                                  <option value="61">61 Years</option>
                                  <option value="62">62 Years</option>
                                  <option value="63">63 Years</option>
                                  <option value="64">64 Years</option>
                                  <option value="65">65 Years</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">

                                        </div>
                                            
                                            
                                            
                                    </div>

<!-- //22222222 -->
                              
 
<div class="row">
        <div class="col-lg-1"> </div>
                                        <div class="col-lg-10">


<label class="checkbox">
            <input type="checkbox" name="included" value="own_damage">
            
          I agree with the Terms of Service 
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
