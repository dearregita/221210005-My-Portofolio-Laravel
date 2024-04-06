@extends('layouts.public.app')
@section('content')

        <!-- Page content-->
        <section class="py-5">
                <div class="container px-5">
                    <!-- Contact form-->
                    <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                        <div class="text-center mb-5">
                            <!-- <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div> -->
                            <h1 class="fw-bolder">Login<Us/h1>
                            <!-- <p class="lead fw-normal text-muted mb-0">Let's work together!</p> -->
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                                <!-- * * * * * * * * * * * * * * *-->
                                <!-- * * SB Forms Contact Form * *-->
                                <!-- * * * * * * * * * * * * * * *-->
                                <!-- This form is pre-integrated with SB Forms.-->
                                <!-- To make this form functional, sign up at-->
                                <!-- https://startbootstrap.com/solution/contact-forms-->
                                <!-- to get an API token!-->

                                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                                    <!-- Username input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="name" type="text" placeholder="Enter your username..." data-sb-validations="required" />
                                        <label for="name">Username</label>
                                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                                    </div>
                                    <!-- Password input-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="name" type="text" placeholder="Enter your username..." data-sb-validations="required" />
                                        <label for="name">Password</label>
                                        <div class="invalid-feedback" data-sb-feedback="name:required" placeholder="Enter your password...">A name is required.</div>
                                    </div>
                                   
                                    <!-- Submit success message-->
                                    <!---->
                                    <!-- This is what your users will see when the form-->
                                    <!-- has successfully submitted-->
                                    <div class="d-none" id="submitSuccessMessage">
                                        <div class="text-center mb-3">
                                            <div class="fw-bolder">Form submission successful!</div>
                                            To activate this form, sign up at
                                            <br />
                                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                        </div>
                                    </div>
                                    <!-- Submit error message-->
                                    <!---->
                                    <!-- This is what your users will see when there is-->
                                    <!-- an error submitting the form-->
                                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                                    <!-- Submit Button-->
                                    <div class="d-grid"><button class="btn btn-primary btn-lg" id="submitButton" type="submit">Sign In</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

@endsection