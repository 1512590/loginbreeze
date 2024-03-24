<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Hclinic</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
            <link rel="stylesheet" href="/resources/css/maincss.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
        </script>
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
                      <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/gallery">News</a>
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
        <div class="container mt-5">
            <form method="POST" action="/edit/{{$contact->id}}">
                @csrf
                <div class="form-group mb-2">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter email" value="{{$contact->email}}">
                </div>
                <div class="form-group mb-2">
                    <label for="exampleInputPassword1">Phone Number</label>
                    <input type="text" class="form-control" name="phone" placeholder="Phone" value="{{$contact->phone}}">
                </div>
                <div class="form-group mb-2">
                    <label for="exampleInputPassword1">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Name" value="{{$contact->name}}">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>

            </form>
        </div>
    </body>
</html>
