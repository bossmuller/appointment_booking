@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="text-center">
                            <p>{{ __('You are logged in!') }}</p>
                            <div class="mt-3">
                                <a href="{{ url('/') }}"><button class="btn btn-primary">Make a new appointment</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="text-center text-lg-start bg-white text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom" style="background-color: #1d68a7">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block" style="color: #00a7e2" >
                <span>Get connected with us through our contacts below:</span>
            </div>
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4" style="color: #00a7e2">
                            <i class="fas fa-gem me-3 text-secondary"></i>Amani Hospital
                        </h6>
                        <p>
                            Amani Hospital offers a wide range of medical services to address various health concerns. These services include emergency care, inpatient and outpatient, maternity and childbirth services, rehabilitation programs, and mental health support. The hospital also emphasizes health education and community outreach to promote overall wellness.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4" style="color: #00a7e2">
                            Our Services
                        </h6>
                        <p>
                            <a href="#!" class="text-reset" >Emergency Care</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Mental Health Support</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Maternity and Childbirth Services</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Rehabilitation Programs</a>
                        </p>
                    </div>
                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4" style="color: #00a7e2">Contact</h6>
                        <p><i class="fas fa-home me-3 text-secondary"></i> Karen, Nairobi, Kenya</p>
                        <p>
                            <i class="fas fa-envelope me-3 text-secondary"></i>
                            info@amanihospital.com
                        </p>
                        <p><i class="fas fa-phone me-3 text-secondary"></i> +254 734 567 88</p>
                        <p><i class="fas fa-print me-3 text-secondary"></i> +254 734 567 89</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->
        <!-- Copyright -->
        <div class="text-center p-4" style="color: #00a7e2">
            © 2023 Copyright:
            <a class="text-reset fw-bold" href="">Amanihospital.com</a>
        </div>
        <!-- Copyright -->
    </footer>
@endsection


