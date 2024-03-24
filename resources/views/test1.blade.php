<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<!--aboutus-->
        <title>Hclinic</title>
        <!-- CSS Files -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>


    </head>
    <body class="antialiased">

          <!--nav-->
          <nav class="navbar navbar-expand-lg bg-tertiary">
            <div class="container-fluid">
               <a class="navbar-brand" href="#">H-Clinic</a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                   <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="/">Home</a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link" href="/gallery">Services</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="/aboutus">About Us</a>
                     </li>
                     <li class="nav-item">
                       <a class="nav-link" href="/view">Schedule</a>
                     </li>
                 </ul>
                 @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                     @auth
                         <a href="{{ url('/dashboard') }}" class="text-sm text- dark:text-gray-500 solid">Dashboard</a>
                     @else
                     <button type="button" class="btn btn-primary"><a href="{{ route('login') }}" class="text-md text-gray-700 dark:text-gray-500 text-success-emphasis ">Log in</a></button>

                         @if (Route::has('register'))
                         <button type="button" class="btn btn-secondary"><a href="{{ route('register') }}" class="ml-4 text-md text-gray-700 dark:text-gray-500 solid">Register</a></button>
                    </div>
                </ul>

            </div>
        </nav>
               <!-- Nav End -->
                 <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid rounded w-75 align-self-end" src="" alt="">
                        <img class="img-fluid rounded w-50 bg-white pt-3 pe-3" src="" alt="" style="margin-top: -25%;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="d-inline-block border rounded-pill py-1 px-4">About Us</p>
                    <h1 class="mb-4">Why You Should Trust Us? Get Know About Us!</h1>
                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <p class="mb-4">Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam rebum amet diam ipsum. Clita clita labore, dolor duo nonumy clita sit at, sed sit sanctus dolor eos.</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Quality health care</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Only Qualified Doctors</p>
                    <p><i class="far fa-check-circle text-primary me-3"></i>Medical Research Professionals</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

                          </div>

                            @endif
                    @endauth
                </div>

            @endif


    </body>
</html>
