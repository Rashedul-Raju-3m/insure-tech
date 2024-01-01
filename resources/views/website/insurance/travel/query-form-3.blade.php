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
                                  <section class="package-details py-50">
    <div class="container">
        <a class="package-details-back" href="#"><i class="icon-arrow-left"></i> Back to packages</a>
        <div class="row justify-content-between">
            <div class="col-7">
                <div class="details-box">
                    <div class="row align-items-center">
                        <div class="col-7">
                            <div class="package-details-intro">
                                <img src="https://carnivalassure.com.bd/insurance_partner/SKICL.png" alt="">
                                <h1>Comprehensive Insurance for Vehicle</h1>
                                <p>
                                                                            1st Party Insurance (1,801 cc to 3,000 cc) – for 1 year
                                                                    </p>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="thumb thumb-health">
                                <div class="mask-img">
                                    <img class="img-fluid" src="https://carnivalassure.com.bd/images/thumb-health.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="details-box eligibility">
                    <h3 class="common-heading">Sena Kalyan Insurance Company Limited </h3>
                    <h4>Type <span>Comprehensive </span></h4>
                                                                        <h6>Premium Computation</h6>
                        
                                                <div class="premium-box">
                            <ul>
                                                                    <li class=""><b>Basic Premium</b> <span><b>BDT 2,925</b></span></li>
                                                                    <li class=""><span><b>+</b> 1.65% of F.I.V for Own Damage</span> <span>Tk. 66,000</span></li>
                                                                    <li class=""><span><b>+</b> 0.25% of F.I.V for Cyclone & Flood</span> <span>Tk. 10,000</span></li>
                                                                    <li class=""><span><b>+</b> 0.25% of F.I.V for Earthquake</span> <span>Tk. 10,000</span></li>
                                                                    <li class=""><span><b>+</b> 0.5% of F.I.V for Riot & Strike</span> <span>Tk. 20,000</span></li>
                                                                    <li class="total-premium"><b>Gross Own Damage Premium</b> <span><b>Tk. 108,925</b></span></li>
                                                            </ul>
                        </div>
                                            
                                                <div class="premium-box">
                            <ul>
                                                                    <li class=""><span><b>+</b> Act Liability</span> <span>BDT 350</span></li>
                                                                    <li class=""><span><b>+</b> Passenger = 45x4</span> <span>BDT 180</span></li>
                                                                    <li class=""><span><b>+</b> Driver = 1</span> <span>BDT 30 </span></li>
                                                                    <li class="total-premium"><span>Net Premium</span> <span>BDT 109,485</span></li>
                                                            </ul>
                        </div>
                                            
                                                <div class="premium-box">
                            <ul>
                                                                    <li class=""><span><b>+</b> Add: VAT @15 %</span> <span>BDT 16,423</span></li>
                                                            </ul>
                        </div>
                                            
                                                <div class="premium-box">
                            <ul>
                                                                    <li class="blue-text">Gross Premium<span>BDT 125,908</span></li>
                                                            </ul>
                        </div>
                                                                        <h6>Additional Charge</h6>
                        
                                                <div class="premium-box">
                            <ul>
                                                                    <li class=""><span><b>+</b> Delivery - Inside Dhaka </span> <span>BDT 100</span></li>
                                                            </ul>
                        </div>
                                            
                                                <div class="premium-box">
                            <ul>
                                                                    <li class="blue-text">Payable Amount<span>BDT 126,008</span></li>
                                                            </ul>
                        </div>
                    
                </div>

                <h3 class="common-heading">Policy Details</h3>
                <div class="details-box details-box-summary">
                    <p>
                                                <p>Complete Coverage of Full Insured Value for 12 months.</p>

<p>Comprehensive Vehicle Insurance Policy generally covers the following Risks:</p>

<ul>
    <li><strong>Own Damage:</strong> Accidental Damage from external sources</li>
    <li><strong>Theft: </strong>burglary, theft or house breaking</li>
    <li><strong>Cyclone &amp; Flood:</strong> Damage by Flood, Typhoon, Hurricane, Storm, Tempest, Inundation, Cyclone, Hailstorm and Frost</li>
    <li><strong>Earthquake:</strong> Damage by earthquake or, fire and shock arising from such incident</li>
    <li><strong>Riot &amp; Strike:</strong> Damage by Riot and Strike including Malicious &amp; Terrorist</li>
</ul>

<p>Option to customize risk coverage based on Preference.</p>

<p><em>Based on your preferred sselection premium calcualtion is shown here.</em></p>

<p>&nbsp;</p>

<p><strong>No Claim Bonus:</strong> For vehicles with an active Comprehensive Insurance Policy, you can get attractive Bonus Based on your Period of Coverage and Claim History.</p>

<p>&nbsp;</p>

<p><strong>Coverage for Third Party Damage:</strong></p>

<ul>
    <li>Death Tk. 20,000</li>
    <li>Grevious Injury Tk. 10,000</li>
    <li>Minor Injury Tk. 5,000</li>
    <li>Property Damage Tk. 50,000</li>
</ul>

<p><strong>Coverage for Occupants in the Vehcicle</strong></p>
                    </p>
                </div>


                                    <div class="details-box exclusions">
                        <h3 class="common-heading">Exclusions</h3>
                                            </div>
                
                            

            </div>
            <div class="col-4 sticky">
                <div class="details-box summary">
                    <div class="summary-content">
                        <h3 class="common-heading">Summary</h3>
                        <ul>
                            <li>
                                <p>Yearly Premium (one time payment)</p>
                                <h2><i class="icon-taka-fill"></i>BDT 125,908</h2>
                            </li>
                            <li>
                                <p>Full Insured Value (F.I.V) up to</p>
                                <h2><i class="icon-verified"></i>BDT 4,000,000</h2>
                            </li>
                        </ul>
                    </div>
                    <div class="summary-btn">
                                                                                                <a href="https://carnivalassure.com.bd/buy/49" class="btn">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-cta">
    <div class="container">
    <div class="row justify-content-between">
        <div class="col-6">
            <div class="partner-content">
                <h2 class="common-heading">You care about your loved ones. Lets secure their life in the best way.​</h2>
                <p>Gift them something that will benefit them financially.​</p>
                <div class="btn-floral"><a class="btn" href="https://carnivalassure.com.bd/gift-packages">Gift Now</a></div>
            </div>
        </div>
        <div class="col-4 text-center">
            <div class="thumb thumb-savings">
                <div class="mask-img">
                    <img style="height: 220px;" class="img-fluid" src="https://carnivalassure.com.bd/images/gift-now.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div></section>



<div class="summary-overlay">
    <div class="summary-mobile">
        <div class="summary-content" style="display:none;">
            <h3 class="common-heading summary-toggle">Summary <i class="icon-arrow-down"></i></h3>
            <ul>
                <li>
                    <p>Yearly Premium (one time payment)</p>
                    <h2><i class="icon-taka-fill"></i>BDT 125,908</h2>
                </li>
                <li>
                    <p>Full Insured Value (F.I.V) up to</p>
                    <h2><i class="icon-verified"></i>BDT 4,000,000</h2>
                </li>
            </ul>
        </div>

        <div class="summary-mobile-btn">
            <h6 class="summary-toggle"><span>Full Insured Value (F.I.V) up to</span> BDT 125,908 <i class="icon-arrow-up"></i> </h6>
           
            
                    <button class="btn btn-success step-2-submit nav-link btn-register py-2 text-nowrap" type="submit">Next</button>
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
