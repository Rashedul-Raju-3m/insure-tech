@extends('website.layouts')

@section('content')
    <section class="contact-us">
        <div class="container px-4">
            <div class="contact-head">
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <section id="pricing-table" style="padding: 0px !important;">
                            <div class="container">
                                <div class="row gx-5 justify-content-center">
                                    <div class=" mb-5 monthly-plan" style="padding-right: 0px !important;">
                                        <div class="pricing-plan popular h-100 wow animate__zoomIn"
                                             data-wow-delay=".6s">
                                            <div class="pricing-plan-header">
                                                <span>{{ _lang('Most popular') }}</span>
                                                <h5>Standard</h5>
                                                <p class="d-inline-block">
                                                    <small>
                                                        <del>{{ decimalPlace(20, currency_symbol()) }}</del>
                                                    </small>
                                                    <span
                                                        class="bg-primary d-inline-block text-white px-3 py-1 rounded-pill ms-1">{{ '20'.'% '._lang('Discount') }}</span>
                                                </p>
                                                <h4>
                                                    <span>{{ decimalPlace('999', currency_symbol()) }}</span>
                                                    / {{ ucwords('Yearly') }}</h4>

                                                <h6 class="mt-2 text-dark">{{ _lang('No Trial Available') }}</h6>
                                            </div>
                                            <div class="pricing-plan-body">
                                                <ul>
                                                    <li>
                                                        <i class="bi bi-check2-circle me-2"></i>{{ str_replace('-1',_lang('Unlimited'), 3).' '._lang('Business Account') }}
                                                    </li>

                                                </ul>
                                                <a href="">{{ _lang('Buy') }} <i
                                                        class="bi bi-arrow-right ms-2"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="col-lg-8 mb-lg-0 mb-5 col-12">
                        <div class="accordion mb-5" id="faqAccordion">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="faq-item">
                                        <h3 class="accordion-header" id="heading2"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1"><i class="bi bi-question-circle me-2"></i>What is your name ? </button></h3>
                                        <div class="accordion-collapse collapse" id="collapse1" aria-labelledby="heading2" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid beatae debitis similique tempora. Accusantium amet atque, beatae consectetur dignissimos distinctio error exercitationem hic illum molestias obcaecati, omnis quasi recusandae reiciendis?
                                            </div>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <h3 class="accordion-header" id="heading1"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2"><i class="bi bi-question-circle me-2"></i>What is your name ? </button></h3>
                                        <div class="accordion-collapse collapse" id="collapse2" aria-labelledby="heading1" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid beatae debitis similique tempora. Accusantium amet atque, beatae consectetur dignissimos distinctio error exercitationem hic illum molestias obcaecati, omnis quasi recusandae reiciendis?
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="faq-item ">
                                        <h3 class="accordion-header" id="heading2"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2"><i class="bi bi-question-circle me-2"></i>What is your Profile ? </button></h3>
                                        <div class="accordion-collapse collapse" id="collapse2" aria-labelledby="heading2" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid beatae debitis similique tempora. Accusantium amet atque, beatae consectetur dignissimos distinctio error exercitationem hic illum molestias obcaecati, omnis quasi recusandae reiciendis?
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="faq-item">
                                        <h3 class="accordion-header" id="heading3"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3"><i class="bi bi-question-circle me-2"></i>What is your Contact ? </button></h3>
                                        <div class="accordion-collapse collapse" id="collapse3" aria-labelledby="heading3" data-bs-parent="#faqAccordion">
                                            <div class="accordion-body">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid beatae debitis similique tempora. Accusantium amet atque, beatae consectetur dignissimos distinctio error exercitationem hic illum molestias obcaecati, omnis quasi recusandae reiciendis?
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
