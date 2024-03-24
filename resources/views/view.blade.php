<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Hclinic</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
        <!--schedule-->
    </head>
    <body>
        <div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">H-Clinic</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/gallery">Services</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/aboutus">About Us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="/view">Schedule</a>
                    </li>
                  </ul>
                </div>
              </nav>
        </div>
      <!-- Appointment Start -->
      @if (session()->has('message'))
      <div class="alert alert-success">
          {{ session()->get('message')}}
      </div>
      @endif
      <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Appointment</p>
                    <h1 class="mb-4">Make An Appointment To Visit Our Doctor</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <div class="bg-light rounded d-flex align-items-center p-5 mb-4">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                            <i class="fa fa-phone-alt text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Call Us Now</p>
                            <h5 class="mb-0">+012 345 6789</h5>
                        </div>
                    </div>
                    <div class="bg-light rounded d-flex align-items-center p-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                            <i class="fa fa-envelope-open text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Mail Us Now</p>
                            <h5 class="mb-0">info@example.com</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-light rounded h-100 d-flex align-items-center p-5">
                        <form method="POST" action="/addcontact">
                            @csrf
                            <div class="row g-3">
                                <div class="form-group col-12 col-sm-6">
                                    <label for="exampleInputPassword1">Name</label>
                                    <input type="text" class="form-control border-0" name="name" placeholder="Name" style="height: 55px;">
                                </div>
                                <div class="form-group col-12 col-sm-6">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control border-0" name="email" placeholder="Enter email" style="height: 55px;">
                                </div>
                                <div class="form-group col-12 col-sm-6">
                                    <label for="exampleInputPassword1">Phone Number</label>
                                    <input type="text" class="form-control border-0" name="phone" placeholder="Phone" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label for="date">Date</label>
                                    <div class="date" id="date" data-target-input="nearest">
                                        <input type="date"
                                            class="form-control border-0 datetimepicker-input"
                                            placeholder="Choose Date" data-target="date" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label for="time">Time</label>
                                    <div class="time" id="time" data-target-input="nearest">
                                        <input type="time"
                                            class="form-control border-0 datetimepicker-input"
                                            placeholder="Choose Date" data-target="time" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <label for="Complaints">Complaints</label>
                                    <textarea class="form-control border-0" rows="5" name="Complaints" placeholder="Describe your problem"></textarea>
                                </div>
                                <div class="form-group col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Book Appointment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->

            <table class="table mt-5">

                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($contact) > 0)
                        @foreach ($contact as $cont)
                            <tr>
                                <th>{{ $cont->id }}</th>
                                <th>{{ $cont->name }}</th>
                                <th>{{ $cont->phone }}</th>
                                <th>{{ $cont->email }}</th>
                                <th><a href="/edit/{{ $cont->id }}" class="btn btn-primary">Edit</a>
                                    <a href="/delete/{{ $cont->id }}" class="btn btn-danger">Delete</a>
                                </th>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <th>No Data</th>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </body>
</html>
