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

                            <form action="{{route('ins_insurance_submit_3',[$page->slug,$sessionUser->code])}}" method="post" class="tab-wizard wizard-circle wizard clearfix">
                                {{ csrf_field() }}
                                <section>
                                    <br/>
                                    <div class="row">
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-10">
                                            <h4>
                                                <b>3. Member Details</b></h4>
                                        </div>
                                        <div class="col-lg-1"></div>
                                    </div>

                                    @php
                                        $basicInfo = Session::get('healthBasicInfo');
                                    @endphp
                                    <div class="row">
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-10"><h6><b>Tell us about your family members </b></h6></div>
                                        <div class="col-lg-1"></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-10">
                                            <div class="card">
                                                <div class="card-body">
                                                    @if(sizeof($basicInfo['insurance-holder'])>0)
                                                        @foreach($basicInfo['insurance-holder'] as $value)
                                                            @php
                                                                $label = '';
                                                                $name = '';
                                                                if ($value == 'Self'){
                                                                    $label = 'Your Details';
                                                                    $name = 'self';
                                                                }elseif ($value == 'Spouse'){
                                                                    $label = 'Spouse Details';
                                                                    $name = 'spouse';
                                                                }elseif ($value == 'Son'){
                                                                    $label = 'Son Details';
                                                                    $name = 'son';
                                                                }elseif ($value == 'Daughter'){
                                                                    $label = 'Daughter Details';
                                                                    $name = 'daughter';
                                                                }elseif ($value == 'Father'){
                                                                    $label = 'Father Details';
                                                                    $name = 'father';
                                                                }elseif ($value == 'Mother'){
                                                                    $label = 'Mother Details';
                                                                    $name = 'mother';
                                                                }elseif ($value == 'Father In Law'){
                                                                    $label = 'Father In Law Details';
                                                                    $name = 'father_in_law';
                                                                }elseif ($value == 'Mother In Law'){
                                                                    $label = 'Mother In Law Details';
                                                                    $name = 'mother_in_law';
                                                                }
                                                            @endphp
                        <div class="row">
                            <h6><b><u>{{$label}}</u></b></h6>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="Full Name">Full Name</label>
                                    <input type="text" name="{{$name}}_name" class="form-control" placeholder="Full Name" required>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="Date of birth">Date of birth</label>
                                    <input type="date" name="{{$name}}_dob" class="form-control" placeholder="Date of birth" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="Weight">Weight</label>
                                    <input type="text" name="{{$name}}_weight" class="form-control" placeholder="Weight" required>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="Height">Height</label>
                                    <select name="{{$name}}_height_ft" class="form-select" required>
                                        <option value="4">4 ft </option>
                                        <option value="5">5 ft </option>
                                        <option value="6">6 ft </option>
                                        <option value="7">7 ft </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="Height"></label>
                                    <select name="{{$name}}_height_in" class="form-select" required>
                                        <option value="0">0 In </option>
                                        <option value="1">1 In </option>
                                        <option value="2">2 In </option>
                                        <option value="3">3 In </option>
                                        <option value="4">4 In </option>
                                        <option value="5">5 In </option>
                                        <option value="6">6 In </option>
                                        <option value="7">7 In </option>
                                        <option value="8">8 In </option>
                                        <option value="9">9 In </option>
                                        <option value="10">10 In </option>
                                        <option value="11">11 In </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                                                        @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-1"></div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-1"></div>
                                        <div class="col-lg-10">
                                            <button class="btn btn-success step-2-submit nav-link btn-register py-2 text-nowrap" type="submit">Next</button>
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
{{--                <button type="button" class="btn btn-primary">Understood</button>--}}
            </div>
        </div>
    </div>
</div>
@endsection
