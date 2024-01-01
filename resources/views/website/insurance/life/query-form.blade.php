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
                            <p>Buy Life Insurance Policy Online in Bangladesh.</p>
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
                                                <label for="MaritalStatus"><b>Date of Birth</b></label>
                                              <input wire:model="motor_price" value="Price" name="motor_price" id="motor_price" class="form-control" type="date" placeholder="Price"><p> As per your NID / Passport </p>
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
     <label for="MaritalStatus"><b>Term (Years) </b></label>
               
            

                <select name="MaritalStatus" id="MaritalStatus" class="wow animate__zoomIn form-select" data-wow-delay=".4s" required>
                <option value="">Select</option>
                <option value="1">10 Year</option>
                <option value="2">15 Year</option>
            </select>
            
            </div>
 
                    </div>
                </div>
                <div class="col-lg-5">

                </div>
            </div>
       <!-- 333333333333333      -->

  <div class="row">
     <div class="col-lg-1"></div>
        <div class="col-lg-5">
            <div class="form-group">
                                        


<div class="row g-3 align-items-center">
     <label for="MaritalStatus"><b>Sum Assured  </b></label>
               
            

                <select name="MaritalStatus" id="MaritalStatus" class="wow animate__zoomIn form-select" data-wow-delay=".4s" required>
                <option value="">Select</option>
                <option value="1">100000/-</option>
                <option value="2">150000/-</option>
                <option value="1">200000/-</option>
                <option value="2">250000/-</option>
                <option value="1">300000/-</option>
                <option value="2">350000/-</option>         
                <option value="2">400000/-</option>
            </select><p>* Amount to be realized at maturity or after death of insured</p>
            
            </div>
 
                    </div>
                </div>
                <div class="col-lg-5">

                </div>
            </div>
       <!-- 444444444444      -->

            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-5">
                    <div class="form-group">
                        <label for="MaritalStatus"><b>Accidental Death Benefit </b></label>
                      <input wire:model="motor_price" value="Price" name="motor_price" id="motor_price" class="form-control" type="number" placeholder="350000">
                    </div><p>* Amount shall be 0 OR multiple of 1000</p>
                </div>
                <div class="col-lg-5">

                </div>
            </div>
       <!-- 5555555555      -->                                           
                   

  <div class="row">
     <div class="col-lg-1"></div>
        <div class="col-lg-5">
            <div class="form-group">
                                        


<div class="row g-3 align-items-center">
     <label for="MaritalStatus"><b>Hospitalization</b></label>
               
            

                <select name="MaritalStatus" id="MaritalStatus" class="wow animate__zoomIn form-select" data-wow-delay=".4s" required>
                <option value="">Select</option>
                <option value="1">100000/-</option>
                <option value="2">150000/-</option>
                <option value="1">200000/-</option>
                <option value="2">250000/-</option>
                <option value="1">300000/-</option>
                <option value="2">350000/-</option>         
                <option value="2">400000/-</option>
            </select><p>* Amount to be realized at maturity or after death of insured</p>
            
            </div>
 
                    </div>
                </div>
                <div class="col-lg-5">

                </div>
            </div>


            <!-- 666666666666666 -->


  <div class="row">
     <div class="col-lg-1"></div>
        <div class="col-lg-5">
            <div class="form-group">
                                        


<div class="row g-3 align-items-center">
     <label for="MaritalStatus"><b>Payment System </b></label>
               
            

                <select name="MaritalStatus" id="MaritalStatus" class="wow animate__zoomIn form-select" data-wow-delay=".4s" required>
                <option value="">Select</option>
                <option value="1">Annual</option>
                <option value="2">Monthly</option>
            </select> 
            
            </div>
 
                    </div>
                </div>
                <div class="col-lg-5">

                </div>
            </div>

<!-- 7777777777777 -->

   <!-- Submit Button -->
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
