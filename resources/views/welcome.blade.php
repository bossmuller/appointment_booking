@extends('layouts.app')

@section('content')
    <div class="container")>
        <div class="row mb-4 justify-content-center">
            <div class="col-md-8" style="color: #00a7e2">
                <h1>Book your appointment today!</h1>

                @guest
                    <div class="mt-5">
                        <a href="{{ url('/register') }}"> <button class="btn btn-primary">Register as Patient</button></a>
                        <a href="{{ url('/login') }}"><button class="btn btn-success">Login</button></a>
                    </div>
                @endguest
            </div>
        </div>

        {{-- Input --}}
        <form action="{{ url('/') }}" method="GET">
            <div class="card" style="color: #00a7e2">
                <div class="card-body">
                    <div class="card-header">Find Doctors</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-8">
                                <input type="date" name='date' id="datepicker" class='form-control'>
                            </div>
                            <div class="col-md-6 col-sm-4">
                                <button class="btn btn-primary" type="submit">Go</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        {{-- Display doctors --}}
        <div class="card" style="color: #00a7e2">
            <div class="card-body">
                <div class="card-header">List of Doctors Available: @isset($formatDate) {{ $formatDate }}
                    @endisset
                </div>
                <div class="card-body table-responsive-sm">
                    <table class="table table-striped" style="color: #00a7e2">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Expertise</th>
                                <th>Book</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($doctors as $key=>$doctor)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td><img src="{{ asset('images') }}/{{ $doctor->doctor->image }}" alt="doctor photo"
                                            width="100px"></td>
                                    <td>{{ $doctor->doctor->name }}</td>
                                    <td>{{ $doctor->doctor->department }}</td>
                                    @if (Auth::check() && auth()->user()->role->name == 'patient')
                                        <td>
                                            <a href="{{ route('create.appointment', [$doctor->user_id, $doctor->date]) }}"><button
                                                    class="btn btn-primary">Appointment</button></a>
                                        </td>
                                    @else
                                        <td>For patients ONLY</td>
                                    @endif
                                </tr>
                            @empty
                                <td>No doctors available</td>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-white text-muted" >
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom" style="background-color: #1d68a7">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block" style="color: #00a7e2">
                <span>Get connected with us through our contact below:</span>
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
    <!-- Footer -->

@endsection

